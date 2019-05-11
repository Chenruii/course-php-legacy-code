<?php

use Core\Validator;
use Core\View;
use Models\Users;

/**
 * Created by PhpStorm.
 * User: ruich
 * Date: 10/05/2019
 * Time: 00:33
 */

class SecurityController
{

    public function loginAction()
    {

        $user = new Users();
        $form = $user->getLoginForm();

        $method = strtoupper($form["config"]["method"]);
        $data = $GLOBALS["_" . $method];
        if ($_SERVER['REQUEST_METHOD'] == $method && !empty($data)) {

            $validator = new Validator($form, $data);
            $form["errors"] = $validator->errors;

            if (empty($errors)) {
                $token = md5(substr(uniqid() . time(), 4, 10) . "mxu(4il");
                // TODO: connexion
            }

        }

        $v = new View("loginUser", "front");
        $v->assign("form", $form);

    }
    public function forgetPasswordAction(){

        $v = new View("forgetPasswordUser", "front");

    }




}