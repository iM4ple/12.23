<?php

use App\App;

function validate_user_unique(string $field_input, array &$field): bool
{
    if (App::$db->getRowWhere('users', ['email' => $field_input])) {
        $field['error'] = 'Toks e-mail jau yra.';

        return false;
    }

    return true;
}

function validate_login(array $filtered_input, array &$form): bool
{
    if (App::$db->getRowWhere('users', [
        'email' => $filtered_input['email'],
        'password' => $filtered_input['password']
    ])) {
        return true;
    }

    $form['error'] = 'Klaida!';

    return false;
}

function validate_user_exists(string $field_input, array &$field): bool
{
    if (!App::$db->getRowWhere('users', ['email' => $field_input])) {
        $field['error'] = 'User with this email does not exist';

        return false;
    }

    return true;
}
