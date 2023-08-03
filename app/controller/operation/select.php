<?php

namespace WebSiteToYou\App\Controller\Operation;

class Select extends \WebSiteToYou\System\Library\Controller
{

  public function index()
  {
    $json = [];

    if(isset($this->request->get['get_table'])){
      $table = $this->request->get['get_table'];
    }else{
      $table = 'users';
    }

    $result = $this->db->query("SELECT * FROM ".$table);
    $total = $this->db->query("SELECT COUNT(user_id) as total FROM ".$table);

    //print_r($total);
    $json['total'] = $total->row['total'];


    $json['users'] = [];
    foreach ($result->rows as $user) {
      $json['users'][] = [
        'id' => $user['user_id'],
        'name' => $user['user_name'],
        'email' => $user['user_email'],
        'phone' => $user['user_phone']
      ];
    }


    $this->response->addHeader('Content-Type: application/json');
    $this->response->setOutput(json_encode($json));
  }

  public function selectTable()
  {
    $json = [];

    $result = $this->db->query("SHOW TABLES");


    $json['table'] = [];
    foreach ($result->rows as $row) {
      $json['table'][] = [
        'table' => $row['Tables_in_' . DB_DATABASE],
        'tableHref' => 'http://localhost/example/index.php?route=operation/select&get_table='.$row['Tables_in_' . DB_DATABASE]
      ];
    }

    $this->response->addHeader('Content-Type: application/json');
    $this->response->setOutput(json_encode($json));
  }
}
