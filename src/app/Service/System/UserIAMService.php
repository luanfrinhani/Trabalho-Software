<?php

namespace App\Service\System;

use App\Model\Core\IAMToken;
use App\Model\Core\Message;
use App\Service\Base\IAMService;
use App\Service\Base\ServiceInterface;
use App\UserIAM;
use GuzzleHttp\Exception\GuzzleException;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;

/**
 * @SuppressWarnings("unused")
 */
class UserIAMService extends IAMService implements ServiceInterface
{
    protected function baseUrl(): string
    {
        return config('iam.base_url');
    }

    protected function realm(): string
    {
        return config('iam.realm');
    }

    protected function clientId(): string
    {
        return config('iam.client_id');
    }

    protected function clientSecret(): string
    {
        return config('iam.client_secret');
    }

    protected function cacheOpenId(): bool
    {
        return config('iam.cache_openid');
    }

    protected function cacheOpenIdTtl(): int
    {
        return config('iam.cache_openid_ttl');
    }

    protected function callbackUrl(): string
    {
        return route('callback', ['locale' => app()->getLocale()]);
    }

    protected function redirectLogout(): string
    {
        return route('login', ['locale' => app()->getLocale()]);
    }

    protected function requestOptions(): array
    {
        return [];
    }

    protected function iamSession(): string
    {
        return '_user';
    }

    private function groupId(): string
    {
        return config('iam.group_id');
    }

    private function groupName(): string
    {
        return config('iam.group_name');
    }

    public function all(array $columns = ['*']): Message
    {
        $message = $this->clientAccessToken();

        if ($message->isError()) {
            return $message;
        }
        $token = $message->getData();

        try {
            $token = new IAMToken($token);

            $url = $this->baseUrl . '/admin/realms/' . $this->realm . '/groups/' . $this->groupId() . '/members?';

            $headers = [
                'Authorization' => 'Bearer ' . $token->getAccessToken(),
                'Accept' => 'application/json',
            ];

            $response = $this->httpClient->get($url, ['headers' => $headers]);

            if ($response->getStatusCode() !== 200) {
                return $this->message->error(trans('user.messages.cannot_be_edited'), null, null);
            }

            $users = $response->getBody()->getContents();
            $users = json_decode($users, true);

            $collection = new Collection($users);

            $users = $this->mapUserToObject($collection);

            return $this->message->success(trans('system.messages.success'), $users);
        } catch (GuzzleException $e) {
            return $this->message->error($e->getMessage(), null, null);
        } catch (Exception $e) {
            return $this->message->error($e->getMessage(), null, null);
        }
    }

    public function find($id, array $columns = ['*'])
    {
        $message = $this->clientAccessToken();

        if ($message->isError()) {
            return $message;
        }
        $token = $message->getData();

        try {
            $token = new IAMToken($token);

            $url = $this->baseUrl . '/admin/realms/' . $this->realm . '/groups/' . $this->groupId() . '/members?';

            $headers = [
                'Authorization' => 'Bearer ' . $token->getAccessToken(),
                'Accept' => 'application/json',
            ];

            $response = $this->httpClient->get($url, ['headers' => $headers]);

            if ($response->getStatusCode() !== 200) {
                return $this->message->error(trans('system.messages.item_could_not_be_retrieved'), null, null);
            }

            $users = $response->getBody()->getContents();
            $users = json_decode($users, true);

            $collection = collect($users);
            $collection = $collection->where('id', $id);

            if ($collection->count() <= 0) {
                return $this->message->error(trans('system.messages.item_could_not_be_retrieved'), null, null);
            }

            $users = $this->mapUserToObject($collection);

            return $this->message->success(trans('system.messages.success'), $users->first());
        } catch (GuzzleException $e) {
            return $this->message->error($e->getMessage(), null, null);
        } catch (Exception $e) {
            return $this->message->error($e->getMessage(), null, null);
        }
    }

    public function findBy(
        array $criteria = [],
        array $orderBy = null,
        $limit = null,
        $offset = null,
        array $columns = ['*']
    ): Message {
        $message = $this->clientAccessToken();

        if ($message->isError()) {
            return $message;
        }
        $token = $message->getData();

        try {
            $token = new IAMToken($token);

            $url = $this->baseUrl . '/admin/realms/' . $this->realm . '/users?';

            foreach ($criteria as $key => $value) {
                $url .= $key . '=' . $value . '&';
            }

            if ($offset) {
                $url .= 'first=' . $offset . '&';
            }

            if ($limit) {
                $url .= 'max=' . $limit . '&';
            }

            $headers = [
                'Authorization' => 'Bearer ' . $token->getAccessToken(),
                'Accept' => 'application/json',
            ];

            $response = $this->httpClient->get($url, ['headers' => $headers]);

            if ($response->getStatusCode() !== 200) {
                return $this->message->error(trans('system.messages.list_could_not_be_retrieved'), null, null);
            }

            $users = $response->getBody()->getContents();
            $users = json_decode($users, true);

            $collection = collect($users);

            $users = $this->mapUserToObject($collection);

            return $this->message->success(trans('system.messages.success'), $users);
        } catch (GuzzleException $e) {
            return $this->message->error($e->getMessage(), null, null);
        } catch (Exception $e) {
            return $this->message->error($e->getMessage(), null, null);
        }
    }

    public function findOneBy(
        array $criteria = [],
        array $orderBy = null,
        $limit = null,
        $offset = null,
        array $columns = ['*']
    ): Message {
        $message = $this->findBy($criteria, $orderBy, 1, 0, $columns);

        if ($message->isError()) {
            return $this->message->error(trans('system.messages.item_could_not_be_retrieved'), null, '');
        }

        /** @var \Illuminate\Support\Collection $collection */
        $collection = $message->getData();
        $model = $collection->first();

        if ($model == null) {
            return $this->message->error(trans('system.messages.item_could_not_be_retrieved'), null, null);
        }

        return $this->message->success($message->getMessage(), $model);
    }

    public function searchBy(
        array $searchCriteria = [],
        array $criteria = [],
        array $orderBy = null,
        $limit = null,
        $offset = null,
        array $columns = ['*']
    ): Message {
        return $this->message->error(trans('system.messages.list_could_not_be_retrieved'), null, null);
    }

    public function create(array $data)
    {
        $message = $this->validate($data);
        if ($message->isError()) {
            return $message;
        }

        $message = $this->clientAccessToken();
        if ($message->isError()) {
            return $message;
        }
        $token = $message->getData();

        try {
            $token = new IAMToken($token);

            $url = $this->baseUrl . '/admin/realms/' . $this->realm . '/users/' . $data['id'];
            $url .= '/groups/' . $this->groupId();

            $headers = [
                'Authorization' => 'Bearer ' . $token->getAccessToken(),
                'Accept' => 'application/json',
            ];

            $response = $this->httpClient->put(
                $url,
                ['headers' => $headers,]
            );

            if ($response->getStatusCode() !== 204) {
                return $this->message->error(trans('system.messages.it_was_not_possible_register'), null, null);
            }

            $user = new UserIAM(['id' => $data['id'], 'email' => $data['email']]);
            $user->sendWelcomeUserIAMNotificaiton();

            return $this->message->success(trans('system.messages.success'), null);
        } catch (GuzzleException $e) {
            if ($e->getCode() === 409) {
                return $this->message->error(
                    trans('system.messages.some_field_is_not_valid'),
                    null,
                    ['email' => 'email já cadastrado']
                );
            }
            return $this->message->error($e->getMessage(), null, null);
        } catch (Exception $e) {
            return $this->message->error($e->getMessage(), null, null);
        }
    }

    public function update(array $data, $id)
    {
        return $this->message->success(trans('system.messages.success'), $id);
    }

    public function delete($id)
    {
        $message = $this->clientAccessToken();
        if ($message->isError()) {
            return $message;
        }
        $token = $message->getData();

        try {
            $token = new IAMToken($token);

            $url = $this->baseUrl . '/admin/realms/' . $this->realm . '/users/' . $id . '/groups/' . $this->groupId();

            $headers = [
                'Authorization' => 'Bearer ' . $token->getAccessToken(),
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ];

            $response = $this->httpClient->delete(
                $url,
                ['headers' => $headers,]
            );

            if ($response->getStatusCode() !== 204) {
                return $this->message->error(trans('system.messages.it_was_not_possible_delete'), null, null);
            }

            return $this->message->success(trans('system.messages.success'), null);
        } catch (GuzzleException $e) {
            return $this->message->error($e->getMessage(), null, null);
        } catch (Exception $e) {
            return $this->message->error($e->getMessage(), null, null);
        }
    }

    public function guard()
    {
    }

    public function validate(array $data, $id = null)
    {
        $validator = Validator::make($data, $this->rules($id), $this->messages());
        if ($validator->fails()) {
            return $this->message->error(trans('system.messages.some_field_is_not_valid'), null, $validator->errors());
        }
        return $this->message->success(trans('system.messages.success'), null);
    }

    public function with(array $relations)
    {
    }

    public function clearWith()
    {
    }

    public function rules($id): array
    {
        return [
            'id' => 'required',
        ];
    }

    public function messages(): array
    {
        return [];
    }

    protected function mapUserToObject(Collection $collection): Collection
    {
        return $collection->map(function ($item, $key) {
            return new UserIAM([
                'id' => Arr::get($item, 'id'),
                'name' => trim(Arr::get($item, 'firstName') . ' ' . Arr::get($item, 'lastName')),
                'email' => Arr::get($item, 'email'),
                'active' => Arr::get($item, 'enabled'),
                'avatar' => Arr::get($item, 'attributes.avatar.0'),
            ]);
        });
    }
}
