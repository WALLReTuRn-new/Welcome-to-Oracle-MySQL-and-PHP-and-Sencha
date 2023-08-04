<?php

namespace WebSiteToYou\App\Controller\Operation;

class Delete extends \WebSiteToYou\System\Library\Controller
{

    public function index()
    {
        $data = [];
        $data['header'] = $this->loading->controller('common/header');
        $data['footer'] = $this->loading->controller('common/footer');

        $this->response->setOutput($this->loading->view('operation/delete', $data));
    }
    public function deleteUser()
    {
        $json = [];




        $userId = $this->request->get['user_id'];

        $result = $this->db->query("DELETE FROM `users` WHERE `users`.`user_id` = '".$userId."'");

       if($result == true){

        $json['success'] = true;
       }else{
        $json['error'] = true;
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
                'delete'=> '<a href="javascript:void(0);"   class="deleteUser" data-delete="http://localhost/example/index.php?route=operation/delete|deleteUser&user_id='.$user['user_id'].'">Delete</a>'
            ];
        }




        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
