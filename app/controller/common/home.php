<?php

namespace WebSiteToYou\App\Controller\Common;

class Home extends \WebSiteToYou\System\Library\Controller
{

    public function index()
    {
        $data = [];
        $data['header'] = $this->loading->controller('common/header');
        $data['footer'] = $this->loading->controller('common/footer');

        

        // echo $data['header'] . $data['html'] . $data['menu'] . $data['footer'];

        $this->response->setOutput($this->loading->view('common/home',$data));
    }



    public function update()
    {
        $delete = "UPDATE Persons SET LASTNAME = 'new TOM b.' WHERE PersonID = '13'";
        return $this->db->update($delete);
    }
    public function delete()
    {
        $delete = "DELETE FROM Persons WHERE PersonID = '1'";
        return $this->db->delete($delete);
    }

    public function createTable()
    {
        $create_table = "CREATE TABLE Persons (PersonID int NOT NULL,LastName varchar(255),FirstName varchar(255), Address varchar(255),City varchar(255))";
        $this->db->createTable($create_table);
    }
    public function insert()
    {

        $lastid = $this->db->getLastId('Persons') + 1;
        $insert = "INSERT INTO Persons (PersonID, LastName, FirstName , Address, City)
        VALUES ($lastid, 'Tom B.', 'Erichsen', 'Stavanger 4006', 'Praha')";
        $this->db->insert($insert);
        return  $this->db->getLastId('Persons');
    }
    public function SelectTable()
    {
        $selcted = "select * from Persons";
        return $this->db->query($selcted);
    }

    public function dropTable()
    {
        $droped = "DROP TABLE Persons";
        $this->db->dropTable($droped);
    }
}
