<?php

namespace WebSiteToYou\App\Controller\Operation;

class Droptable extends \WebSiteToYou\System\Library\Controller
{

    public function index()
    {
        $data = [];
        $data['header'] = $this->loading->controller('common/header');
        $data['footer'] = $this->loading->controller('common/footer');

        $this->response->setOutput($this->loading->view('operation/droptable', $data));
    }
    public function dropTable(){
        $json = [];
        $dropTableName = $this->request->get['drop_table'];

        $result = $this->db->query("DROP TABLE IF EXISTS ".$dropTableName."");

       if($result == true){

        $json['success'] = true;
       }else{
        $json['error'] = true;
       }



       $json['table'] = $dropTableName;

       
        
       $this->response->addHeader('Content-Type: application/json');
       $this->response->setOutput(json_encode($json));

    }
    public function getTable()
    {

        $json = [];

        

        $result = $this->db->query("SHOW TABLES");


        $json['tables'] = [];
        foreach ($result->rows as $row) {
            $json['tables'][] = [
                'table' => $row['Tables_in_' . DB_DATABASE],
                'tableHref' => '<a href="javascript:void(0);" class="dropTable" data-drop="http://localhost/example/index.php?route=operation/droptable|dropTable&drop_table=' . $row['Tables_in_' . DB_DATABASE].'"><i class="fa-solid fa-trash-can"></i>Delete<a>'
            ];
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
