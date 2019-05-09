<?php
declare(strict_types=1);

namespace Controller;



use Core\Validator;
use Models\Users;

class UsersController
{
    public function defaultAction(): void
    {
        echo 'users default';
    }

    public function loginAction(): void
    {
        $user = new Users();
        $form = $user->getLoginForm();

        $method = strtoupper($form['config']['method']);
        $data = $GLOBALS['_'.$method];
        if ($_SERVER['REQUEST_METHOD'] == $method && !empty($data)) {
            $validator = new Validator($form, $data);
            $form['errors'] = $validator->errors;

            if (empty($errors)) {
                $token = md5(substr(uniqid().time(), 4, 10).'mxu(4il');
                // TODO: connexion
            }
        }

        $v = new View('loginUser', 'front');
        $v->assign('form', $form);
    }



}
