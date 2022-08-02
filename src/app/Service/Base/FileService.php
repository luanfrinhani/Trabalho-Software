<?php

namespace App\Service\Base;

use App\DataManager\Base\FileDataManager;
use App\Model\Core\File;
use App\Model\Core\Message;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class FileService extends Service
{
    public function __construct(File $file, FileDataManager $fileDataManager)
    {
        parent::__construct($file, $fileDataManager);
    }

    /**
     * @param array $data
     * @return Message
     */
    public function create(array $data): Message
    {
        $validator = Validator::make($data, $this->rules(null), $this->messages());
        if ($validator->fails()) {
            return $this->message->error(trans('system.messages.some_field_is_not_valid'), null, $validator->errors());
        }

        /** @var UploadedFile $file */
        $file = $data['file'];
        $extension = $file->getClientOriginalExtension();
        $name = time() . '_' . Str::random() . '.' . $extension;

        $path = array_key_exists('path', $data) ? $data['path'] : File::path();
        $result = $file->storeAs($path, $name);

        if ($result == false) {
            return $this->message->error(trans('image.messages.error_save_disc'), null, null);
        }

        $dataFile = [];
        $dataFile['file'] = $file;
        $dataFile['name'] = $name;
        $dataFile['originalName'] = $file->getClientOriginalName();
        $dataFile['mimeType'] = $file->getMimeType();
        $dataFile['url'] = Storage::url($result);
        $dataFile['path'] = $result;
        $dataFile['size'] = $file->getSize();

        return parent::create($dataFile);
    }

    /**
     * @param array $data
     * @param $id
     * @return Message
     */
    public function update(array $data, $id): Message
    {
        if (array_key_exists('file', $data) == false) {
            return $this->message->success(trans('system.messages.updated_successfully'), null);
        }

        $message = $this->validate($data, $id);
        if ($message->isError()) {
            return $message;
        }

        //Remove a imagem antiga
        $message = $this->deletePhysicalFile($id);
        if ($message->isError()) {
            return $message;
        }

        //atualizar com a imagem nova
        /** @var UploadedFile $fileInput */
        $fileInput = $data['file'];
        $extension = $fileInput->getClientOriginalExtension();
        $name = time() . '_' . Str::random() . '.' . $extension;

        $path = array_key_exists('path', $data) ? $data['path'] : File::path();
        $result = $fileInput->storeAs($path, $name);

        if ($result == false) {
            return $this->message->error(trans('file.messages.error_save_disc'), null, null);
        }

        $dataFile = [];
        $dataFile['file'] = $fileInput;
        $dataFile['name'] = $name;
        $dataFile['originalName'] = $fileInput->getClientOriginalName();
        $dataFile['mimeType'] = $fileInput->getMimeType();
        $dataFile['url'] = Storage::url($result);
        $dataFile['path'] = $result;
        $dataFile['size'] = $fileInput->getSize();

        return parent::update($dataFile, $id);
    }

    /**
     * @param mixed $id
     * @return Message
     */
    public function delete($id): Message
    {
        $message = $this->deletePhysicalFile($id);
        if ($message->isError()) {
            return $message;
        }

        return parent::delete($id);
    }

    /**
     * @param $id
     * @return Message
     */
    public function deletePhysicalFile($id): Message
    {
        $message = $this->find($id);

        if ($message->isError()) {
            return $message;
        }

        /** @var File $file */
        $file = $message->getData();

        $exist = Storage::exists($file->path);
        if (!$exist) {
            return $this->message->error(trans('file.messages.error_file_not_found'), $file, []);
        }

        $result = Storage::move($file->path, config('filesystems.trash_folder') . '/' . $file->path);
        if (!$result) {
            return $this->message->error(trans('file.messages.error_delete_disc'), $file, []);
        }

        return $this->message->success(trans('file.messages.delete_successfully'), $file);
    }

    /**
     * @inheritDoc
     */
    public function guard()
    {
        return Auth::guard();
    }

    /**
     * @param mixed $id
     * @return array
     */
    public function rules($id): array
    {
        return [
            'file' => 'required',
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'file.required' => trans('image.validation.file.required'),
            'file.file' => trans('image.validation.file.image'),
        ];
    }
}
