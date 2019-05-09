<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: ruich
 * Date: 30/04/2019
 * Time: 10:06.
 */
use Controller\PagesController;
use Controller\UsersController as UsersControllerAlias;
use Models\Users;

// c'est un require: il retourner le tableau directmeent
return[
    Users::class => function ($container) {
        $host = $container['config']['database']['host'];
        $driver = $container['config']['database']['driver'];
        $name = $container['config']['database']['name'];
        $user = $container['config']['database']['user'];
        $password = $container['config']['database']['password'];

        return new Users($driver, $host, $name, $user, $password);
    },

    UsersControllerAlias::class => function ($container) {
        $userModel = $container[Users::class]($container);

        return new UsersControllerAlias($userModel);
    },
    PagesController::class => function ($container) {
        return new PagesController();
    },
];
