<?php

namespace App\Service\System;

use App\DataManager\System\UserDataManager;
use App\Model\Core\Message;
use App\Service\Base\Service;
use App\User;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class UserService extends Service
{
    private AvatarImageService $avatarImageService;

    public function __construct(User $user, UserDataManager $userDataManager, AvatarImageService $avatarImageService)
    {
        parent::__construct($user, $userDataManager);
        $this->avatarImageService = $avatarImageService;
    }

    /**
     * @param array|string[] $columns
     * @return Message
     */
    public function all(array $columns = ['*']): Message
    {
        return $this->findBy(
            [],
            ['name' => 'asc'],
            null,
            null,
            $columns
        );
    }

    /**
     * @param array $criteria
     * @param array|null $orderBy
     * @param null $limit
     * @param null $offset
     * @param array|string[] $columns
     * @return Message
     */
    public function findBy(
        array $criteria = [],
        array $orderBy = null,
        $limit = null,
        $offset = null,
        array $columns = ['*']
    ): Message {
        $criteria['id'] = ['!=' => 1];
        if (array_key_exists('id', $criteria)) {
            if ($criteria['id'] == 1) {
                return $this->message->error(trans('user.messages.cannot_be_edited'), null, '');
            }
        }

        return parent::findBy($criteria, $orderBy, $limit, $offset, $columns);
    }

    /**
     * @param array $data
     * @return Message
     */
    public function create(array $data): Message
    {
        $message = parent::create($data);

        if ($message->isSuccess()) {
            /** @var User $user */
            $user = $message->getData();

            $token = $this->broker()->createToken($user);

            event(new Registered($user));
        }
        return $message;
    }

    /**
     * @param array $data
     * @param $id
     * @return Message
     */
    public function update(array $data, $id): Message
    {
        $message = $this->find($id);
        if ($message->isError()) {
            return $message;
        }

        /** @var User $user */
        $user = $message->getData();
        $data['email'] = $user->email;
        return parent::update($data, $id);
    }

    /**
     * @param array $data
     * @return Message
     */
    public function profileUpdateInformation(array $data): Message
    {
        /** @var User $user */
        $user = $this->guard()->user();

        $data['email'] = $user->email;
        $message = parent::update($data, $user->id);

        if ($message->isError()) {
            return $message;
        }

        if (array_key_exists('file', $data)) {
            $user = $this->guard()->user();
            $data['user_id'] = $user->id;

            if ($user->avatar->count() > 0) {
                try {
                    $this->avatarImageService->delete($user->avatar());
                } catch (Exception $e) {
                    return $this->message->error($e->getMessage(), null, '');
                }
            }

            $messageAvatar = $this->avatarImageService->create($data);

            if ($messageAvatar->isError()) {
                //senão conseguir fazer o upload só informa que não conseguiu pois o usuário já foi salvo
                return $messageAvatar;
            }
        }

        return $message;
    }

    /**
     * @param array $data
     * @return Message
     */
    public function profileUpdatePassword(array $data): Message
    {
        $validator = Validator::make($data, $this->rulesProfileChangePassword(), $this->messages());
        if ($validator->fails()) {
            return $this->message->error(
                trans('user.messages.not_possible_update_password'),
                null,
                $validator->errors()
            );
        }

        /** @var User $user */
        $user = $this->guard()->user();

        if (Hash::check($data['current_password'], $user->password) == false) {
            $error = new MessageBag();
            $error->add('current_password', trans('user.validation.current_password.confirmed'));
            return $this->message->error(trans('user.messages.not_possible_update_password'), $user, $error);
        }

        $data['password'] = Hash::make($data['password']);

        $model = $this->dataManager->update($user, Arr::only($data, ['password']));

        if ($model) {
            return $this->message->success(trans('user.messages.updated_successfully'), $model);
        }

        return $this->message->error(trans('user.messages.could_not_update'), null, '');
    }

    /**
     * @param mixed $id
     * @return Message
     */
    public function delete($id): Message
    {
        if ($id == 1) {
            return $this->message->error(trans('user.messages.cannot_be_removed'), null, '');
        }

        return parent::delete($id);
    }

    /**
     * @return mixed
     */
    public function broker()
    {
        return Password::broker();
    }

    /**
     * @param mixed $id
     * @return array
     */
    public function rules($id): array
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ];
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => trans('user.validation.name.required'),
            'name.min' => trans('user.validation.name.min'),
            'name.max' => trans('user.validation.name.max'),

            'email.required' => trans('user.validation.email.required'),
            'email.email' => trans('user.validation.email.email'),
            'email.unique' => trans('user.validation.email.unique'),

            'current_password.required' => trans('user.validation.current_password.required'),

            'password.required' => trans('user.validation.password.required'),
            'password.min' => trans('user.validation.password.min'),
            'password.confirmed' => trans('user.validation.password.confirmed'),
        ];
    }

    /**
     * @return array|string
     */
    public function rulePassword()
    {
        return 'required|min:8|confirmed';
    }

    /**
     * @return array
     */
    private function rulesProfileChangePassword(): array
    {
        $rules = [
            'current_password' => 'required',
        ];

        $rules['password'] = $this->rulePassword();

        return $rules;
    }
}
