<?php

namespace App\UsersController;

use Models\Users;
use Users;
use Validator;
use View;

class UsersController
{

    public function defaultAction()
    {
        echo "users default";
    }

    public function addAction()
    {
        $user = new Users();
        $form = $user->getRegisterForm();


        $v = new View("addUser", "front");
        $v->assign("form", $form);
    }

    public function saveAction()
    {

        $user = new Users();
        $form = $user->getRegisterForm();
        $method = strtoupper($form["config"]["method"]);
        $data = $GLOBALS["_" . $method];


        if ($_SERVER['REQUEST_METHOD'] == $method && !empty($data)) {

            $validator = new Validator($form, $data);
            $form["errors"] = $validator->errors;

            if (empty($errors)) {
                $user->setFirstname($data["firstname"]);
                $user->setLastname($data["lastname"]);
                $user->setEmail($data["email"]);
                $user->setPwd($data["pwd"]);
                $user->save();
            }
        }

        $v = new View("addUser", "front");
        $v->assign("form", $form);


    }

}