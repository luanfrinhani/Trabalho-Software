<?php

return [
    'label' => [
        'add' => 'Add user',
        'add_user' => 'Add user',
        'edit' => 'Edit user',
        'change_password' => 'Change Password',
        'confirm_password' => 'Confirm Password',
        'my_profile' => 'My Profile',
        'personal_information' => 'Personal Information',
        'user' => 'User',
        'users' => 'Users',
    ],
    'attribute' => [
        'avatar' => 'Avatar',
        'active' => 'Active',
        'name' => 'Name',
        'email' => 'Email',
        'current_password' => 'Current password',
        'password' => 'Password',
        'password_confirmation' => 'Password confirmation'
    ],
    'placeholder' => [
        'name' => 'Full name',
        'email' => 'Email',
        'current_password' => 'Current password',
        'password' => 'Password',
        'password_confirmation' => 'Password confirmation'
    ],
    'help' => [
        'avatar' => 'Change avatar',
        'name' => 'Please enter the full name',
        'email' => 'Please enter the email',
        'please_confirm_password_before_continuing' => 'Please confirm your password before continuing',
        'active' => 'Disabled users will not be able to access the administrative panel',
    ],
    'validation' => [
        'name' => [
            'required' => 'The name field is required.',
            'min' => 'The name must be at least :min characters.',
            'max' => 'The name may not be greater than :max characters.',
        ],
        'email' => [
            'required' => 'The email field is required.',
            'email' => 'The email must be a valid email address.',
            'unique' => 'The email has already been taken.',
        ],
        'current_password' => [
            'required' => 'The current password is required.',
            'confirmed' => 'The current password confirmation does not match.',
        ],
        'password' => [
            'required' => 'The password is required.',
            'min' => 'The password must be at least :min characters.',
            'confirmed' => 'The password confirmation does not match.',
        ],
    ],
    'messages' => [
        'account_settins_morre' => 'Account settings and more',
        'reset_account_password' => 'reset your account password',
        'update_personal_informaiton' => 'update your personal informaiton',
        'not_retrive_user_list' => 'It was not possible to retrieve the user list.',
        'cannot_be_edited' => 'User cannot be edited',
        'cannot_be_removed' => 'User cannot be removed',
        'not_possible_update_password' => 'It was not possible to update your password.',
        'updated_successfully' => 'User updated successfully.',
        'could_not_update' =>  'Could not update user',
        'search_for_user' => 'Search for user',
        'search_user_check_info_salve' => 'Search the user, check info and salve',
        'will_receive_email_notifying_added_system' => 'The user will receive an email notifying them that they have been added to the system',
    ],
];
