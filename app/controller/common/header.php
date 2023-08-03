<?php

namespace WebSiteToYou\App\Controller\Common;

class Header extends \WebSiteToYou\System\Library\Controller
{

    public function index()
    {
        $data = [];
        //jquery

        $data['jquery'] = "http://localhost/example/app/assets/js/jquery-3.6.1.min.js";

        //Style
        $data['bootstrap'] = "http://localhost/example/app/assets/css/bootstrap.min.css";
        $data['style'] = "http://localhost/example/app/assets/css/style.css";


        $data['extj'] = 'http://localhost/example/app/assets/ext7/ext-all.js';
        $data['exts'] = 'http://localhost/example/app/assets/ext7/ext-all.css';

        $data['menu'] = $this->loading->controller('common/menu');




        return $this->loading->view('common/header', $data);
    }
}
