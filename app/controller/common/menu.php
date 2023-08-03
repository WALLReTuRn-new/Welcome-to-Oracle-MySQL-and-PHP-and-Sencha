<?php

namespace WebSiteToYou\App\Controller\Common;

class Menu extends \WebSiteToYou\System\Library\Controller
{

    public function index()
    {
        $data = [];

        

        return $this->loading->view('common/menu', $data);
    }
}
