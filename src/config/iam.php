<?php

return [
    'base_url' => env('IAM_BASE_URL', ''),
    'realm' => env('IAM_REALM', ''),
    'realm_public_key' => env('IAM_REALM_PUBLIC_KEY', null),
    'client_id' => env('IAM_CLIENT_ID', ''),
    'client_secret' => env('IAM_CLIENT_SECRET', ''),
    'cache_openid' => env('IAM_CACHE_OPENID', false),
    'cache_openid_ttl' => env('IAM_CACHE_OPENID_TTL', 600),
    'group_name' => env('IAM_GROUP_NAME', ''),
    'group_id' => env('IAM_GROUP_ID', ''),
    'request_options' => [],
];
