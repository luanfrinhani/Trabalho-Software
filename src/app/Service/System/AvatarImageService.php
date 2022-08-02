<?php

namespace App\Service\System;

use App\DataManager\System\AvatarImageDataManager;
use App\Model\Core\File;
use App\Model\Core\Message;
use App\Model\System\AvatarImage;
use App\Service\Base\FileService;
use App\Service\Base\Service;
use Illuminate\Database\Eloquent\Model;

class AvatarImageService extends Service
{
    private $fileService;

    /**
     * AvatarImageService constructor.
     * @param Model $model
     */
    public function __construct(
        AvatarImage $avatarImage,
        AvatarImageDataManager $avatarImageDataManager,
        FileService $fileService
    ) {
        parent::__construct($avatarImage, $avatarImageDataManager);
        $this->fileService = $fileService;
    }

    /**
     * @param array $data
     * @return Message
     */
    public function create(array $data): Message
    {
        $data['path'] = AvatarImage::path();

        $message = $this->fileService->create($data);
        if ($message->isError()) {
            return $this->message->warning($message->getMessage(), $message->getData(), $message->getErrors());
        }

        /** @var File $file */
        $file = $message->getData();

        $data['file_id'] = $file->id;

        return parent::create($data);
    }

    /**
     * @param mixed $id
     * @return Message
     */
    public function delete($id): Message
    {
        $avatar = $id;
        $avatar_id = $avatar->first()->id;
        $avatar->detach();

        return $this->fileService->delete($avatar_id);
    }

    /**
     * @param mixed $id
     * @return array
     */
    public function rules($id): array
    {
        return [
            'file' => 'required|image',
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'file.required' => trans('image.validation.file.required'),
            'file.image' => trans('image.validation.file.image'),
        ];
    }
}
