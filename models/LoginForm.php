<?php

namespace app\models;

use app\app\Application;
use app\app\Model;

class LoginForm extends Model
{
    public string $email = '';
    public string $password = '';
    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED]
        ];
    }

    public function login()
    {
        $user = (new User)->findOne(['email' => $this->email]);
        if (!$user) {
            $this->addError('email', 'This User does not exist');
            return false;
        }
        if (!password_verify($this->password, $user->password)) {
            $this->addError('password', 'Wrong password ');
            return false;
        }
        var_dump($user);

        return Application::$app->login($user);
    }
}