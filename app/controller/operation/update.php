<?php

namespace WebSiteToYou\App\Controller\Operation;

class Update extends \WebSiteToYou\System\Library\Controller
{

    public function index()
    {
        $data = [];
        $data['header'] = $this->loading->controller('common/header');
        $data['footer'] = $this->loading->controller('common/footer');

        $this->response->setOutput($this->loading->view('operation/update', $data));
    }
    public function updateUser()
    {
        $json = [];




       // $json['upadeData'] = $userId = $this->request->post;

        $id = $this->request->post['id'];
        $name = $this->request->post['name'];
        $email = $this->request->post['email'];
        $phone = $this->request->post['phone'];

        
       $checkEmailExist =   $this->db->query("SELECT * FROM `users` WHERE `user_email` = '".$this->db->escape((string)$email)."'");
       if($checkEmailExist->num_rows == 1){

       
        if($checkEmailExist->row['user_id'] !== $id){
            $json['error'] = 'Exist Email Pls Add new';
        }
        
       } 
        
      
       if(!$json){
        $this->db->query("UPDATE `users` SET `user_name` = '".$this->db->escape((string)$name)."',`user_email` = '".$this->db->escape((string)$email)."',`user_phone` = '".$this->db->escape((string)$phone)."',`user_lastedit` = NOW() WHERE `user_id` = '".$this->db->escape((int)$id)."'");
       
        $json['success'] = true;
       }



        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
    public function getUsers()
    {

        $json = [];


        $result = $this->db->query("SELECT * FROM Users");
        $total = $this->db->query("SELECT COUNT(user_id) as total FROM Users");

        //print_r($total);
        $json['total'] = $total->row['total'];


        $json['users'] = [];
        foreach ($result->rows as $user) {
            $json['users'][] = [
                'id' => $user['user_id'],
                'name' => $user['user_name'],
                'email' => $user['user_email'],
                'phone' => $user['user_phone'],
                //'update'=> '<a href="javascript:void(0);" class="updateUser" data-update="http://localhost/example/index.php?route=operation/update|updateUser&user_id='.$user['user_id'].'">Update</a>'
            ];
        }




        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
