<?php

namespace WebSiteToYou\App\Controller\Operation;

class Insert extends \WebSiteToYou\System\Library\Controller
{

    public function index()
    {
        $data = [];
        $data['header'] = $this->loading->controller('common/header');
        $data['footer'] = $this->loading->controller('common/footer');




        $this->response->setOutput($this->loading->view('operation/insert', $data));
    }

    public function addUser(){

        $json = [];
    
        $json['data'] = $this->request->post;
    
        
        
        $result = $this->db->query("INSERT INTO `" . DB_PREFIX . "users` SET `user_name` = '" . $this->db->escape((string)$this->request->post['firstName']) . "',`user_email` = '" . $this->db->escape((string)$this->request->post['email']) . "',`user_phone` = '" . $this->db->escape((string)$this->request->post['phone']) . "', `user_added` = NOW()");
    
        $json['success'] =  $result;
       






        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
