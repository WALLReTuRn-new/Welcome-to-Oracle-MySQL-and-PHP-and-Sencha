<?php

namespace WebSiteToYou\App\Controller\Operation;

class Create extends \WebSiteToYou\System\Library\Controller
{

    public function index()
    {
        $data = [];
        $data['header'] = $this->loading->controller('common/header');
        $data['footer'] = $this->loading->controller('common/footer');



        $this->response->setOutput($this->loading->view('operation/create', $data));
    }

    public function createTable()
    {

        $json = [];

        $json['data'] = $this->request->post['rows'];

        $string = '';
        foreach ($this->request->post['rows'] as $row) {
            $string .= ',' . $row['nameColumn'] . ' ' . $row['typeColumn'] . '(' . $row['sizeColumn'] . ')';
        }
        $string = ltrim($string, ',');
        $json['Fields'] = $string;

        if (DB_DRIVER == 'mysqli') {
            $create_table = "CREATE TABLE `" . $this->request->post['tableName'] . "` (ID int NOT NULL AUTO_INCREMENT PRIMARY KEY," . $string . ")";
            $this->db->query($create_table);
        } else {
            $create_table = "CREATE TABLE `" . $this->request->post['tableName'] . "` (ID int NOT NULL," . $string . ")";
            $this->db->createTable($create_table);
        }

        $json['success'] = true;


        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

}
