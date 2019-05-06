<?php

namespace Controller;

use Core\View;

class PagesController
{
    public function defaultAction(): void
    {
        $v = new View('homepage', 'back');
        $v->assign('pseudo', 'prof');
    }
}
