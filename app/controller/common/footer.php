<?php

namespace WebSiteToYou\App\Controller\Common;

class Footer extends \WebSiteToYou\System\Library\Controller
{

    public function index()
    {

        $data = [];
        //Common Script
        $data['commonScript'] = "http://localhost/example/app/assets/js/main.js";


        

        return $this->loading->view('common/footer',$data);
    }
}
