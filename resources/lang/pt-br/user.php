<?php

return [
    'label' => [
        'add' => 'Criar usuário',
        'add_user' => 'Adicionar usuário',
        'change_password' => 'Trocar a Senha',
        'confirm_password' => 'Confirmar Senha',
        'edit' => 'Editar user',
        'my_profile' => 'Meu Perfil',
        'personal_information' => 'Informações Pessoais',
        'user' => 'Usuário',
        'users' => 'Usuários',
        'admin' => 'Administrador',
        'client' => 'Cliente',
    ],
    'attribute' => [
        'avatar' => 'Avatar',
        'active' => 'Ativo',
        'name' => 'Nome',
        'email' => 'Email',
        'current_password' => 'Senha atual',
        'password' => 'Senha',
        'password_confirmation' => 'Confirmação da senha'
    ],
    'placeholder' => [
        'name' => 'Nome completo',
        'email' => 'Email',
        'current_password' => 'Senha atual',
        'password' => 'Senha',
        'password_confirmation' => 'Confirmação da senha'
    ],
    'help' => [
        'avatar' => 'Trocar avatar',
        'name' => 'Por favor insira o nome completo',
        'email' => 'Por favor insira o email.',
        'please_confirm_password_before_continuing' => 'Confirme sua senha antes de continuar',
        'active' => 'Usuário desativados não poderão acessar o painel administrativo',
    ],
    'validation' => [
        'name' => [
            'required' => 'O campo nome é obrigatório',
            'min' => 'O campo nome deve ter no mínimo :min caracteres.',
            'max' => 'O campo nome deve ter no máximo :max caracteres.',
        ],
        'email' => [
            'required' => 'O campo email é  obritatório.',
            'email' => 'O campo email deve ser um endereço de e-mail válido.',
            'unique' => 'O campo email já está em uso.',
        ],
        'current_password' => [
            'required' => 'A senha atual é obrigatória.',
            'confirmed' => 'Senha atual não confere.',
        ],
        'password' => [
            'required' => 'A senha é obritatória.',
            'min' => 'A senha deve ter no mínimo :min caracteres.',
            'confirmed' => 'A confirmação da senha não confere.',
        ],
    ],
    'messages' => [
        'account_settins_morre' => 'Configurações da conta e mais',
        'reset_account_password' => 'redefinir a senha da sua conta',
        'update_personal_informaiton' => 'atualize suas informações pessoais',
        'not_retrive_user_list' => 'Não foi possivel recuperar a lista de usuarios.',
        'cannot_be_edited' => 'O usuário não pode ser editado',
        'cannot_be_removed' => 'O usuário não pode ser removido',
        'not_possible_update_password' => 'Não foi possivel atualizar a sua senha.',
        'updated_successfully' => 'Usuário atualizado com sucesso.',
        'could_not_update' =>  'Não foi possivel atualizar o usuário.',
        'search_for_user' => 'Pesquisar por usuário',
        'search_user_check_info_salve' => 'Pesquise o usuário, verifique as informações e salve',
        'will_receive_email_notifying_added_system' => 'O usuario receberá um email avisando que foi adicionado ao sistema',
    ],
];
