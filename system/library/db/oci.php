<?php

namespace WebSiteToYou\System\Library\DB;

error_reporting(E_ALL);
ini_set('display_errors', 'On');
class OCI
{

    private  $connection;
    private $ocierror;
    private $resource;
    private object $report_mode;

    public function __construct(string $hostname, string $username, string $password, string $database, string $port = '')
    {


        $connectionInfo = [
            "Database" => $database,
            "UID" => $username,
            "PWD" => $password,
        ];

        if (!$this->connection = oci_connect($username, $password, $database)) {

            $this->ocierror = oci_error();
            trigger_error('Could not connect to database: ' . $this->ocierror['message'], E_USER_ERROR);
        }
    }

    public function query(string $sql): bool|object
    {


        $this->resource = oci_parse($this->connection, $sql);

        if (!$this->resource) {
            $this->ocierror = oci_error($this->connection);
            trigger_error('Could not parse statement: ' . $this->ocierror['message'], E_USER_ERROR);
        }
        $r = oci_execute($this->resource);
        if (!$r) {
            $this->ocierror = oci_error($this->resource);
            trigger_error('Could not execute statement: ' . $this->ocierror['message'], E_USER_ERROR);
        }


        if (!$this->resource) {

            return true;
        } else {

            $data = [];
            while (($row = oci_fetch_array($this->resource, OCI_ASSOC + OCI_RETURN_NULLS)) != false) {
                $data[] = $row;
            }
            $result = new \stdClass();
            $result->num_rows = oci_num_rows($this->resource);
            $result->row = isset($data[0]) ? $data[0] : [];
            $result->rows = $data;
            oci_close($this->connection);
            unset($data);
            return $result;
        }
    }


    public function insert($sql)
    {

        $this->resource = oci_parse($this->connection, $sql);

        if (!$this->resource) {
            $this->ocierror = oci_error($this->connection);
            trigger_error('Could not parse statement: ' . $this->ocierror['message'], E_USER_ERROR);
        }
        $r = oci_execute($this->resource);
        if (!$r) {
            $this->ocierror = oci_error($this->resource);
            trigger_error('Could not execute statement: ' . $this->ocierror['message'], E_USER_ERROR);
        }
        if ($this->countAffected($this->resource) == 1) {
            return 'succesfull';
        }else{
            return 'Note not exist';
        }
    }
    public function update($sql)
    {
        $this->resource = oci_parse($this->connection, $sql);

        if (!$this->resource) {
            $this->ocierror = oci_error($this->connection);
            trigger_error('Could not parse statement: ' . $this->ocierror['message'], E_USER_ERROR);
        }
        $r = oci_execute($this->resource);
        if (!$r) {
            $this->ocierror = oci_error($this->resource);
            trigger_error('Could not execute statement: ' . $this->ocierror['message'], E_USER_ERROR);
        }
        if ($this->countAffected($this->resource) == 1) {
            return 'succesfull';
        }else{
            return 'Note not exist';
        }
    }
    public function delete($sql)
    {
        $this->resource = oci_parse($this->connection, $sql);

        if (!$this->resource) {
            $this->ocierror = oci_error($this->connection);
            trigger_error('Could not parse statement: ' . $this->ocierror['message'], E_USER_ERROR);
        }
        $r = oci_execute($this->resource);
        if (!$r) {
            $this->ocierror = oci_error($this->resource);
            trigger_error('Could not execute statement: ' . $this->ocierror['message'], E_USER_ERROR);
        }

        if ($this->countAffected($this->resource) == 1) {
            return 'succesfull';
        }else{
            return 'Note not exist';
        }
    }
    public function dropTable($sql)
    {
        $statment = oci_parse($this->connection, $sql);
        $r = oci_execute($statment, OCI_DEFAULT);
        if (!$r) {
            $this->ocierror = oci_error($this->resource);
            trigger_error('Could not execute statement: ' . $this->ocierror['message'], E_USER_ERROR);
        }
    }
    public function createTable($sql)
    {
        $statment = oci_parse($this->connection, $sql);
        $r = oci_execute($statment, OCI_DEFAULT);
        if (!$r) {
            $this->ocierror = oci_error($this->resource);
            trigger_error('Could not execute statement: ' . $this->ocierror['message'], E_USER_ERROR);
        }
    }

    public function error($sql)
    {

        if (!$this->connection) {
            $e = oci_error();   // For oci_connect errors do not pass a handle
            return  trigger_error(htmlentities($e['message']), E_USER_ERROR);
        }
    }

    public function escape(string $value): string
    {
        return true;
    }

    public function countAffected($stm): int
    {
        
        return oci_num_rows($stm);
        oci_free_statement($stm);
    }

    public function getLastId($table): int
    {
        // $first = strstr($sql, "(", true);
        // $split = explode(" ", $first);

        $max = $this->query("select max(PERSONID) from " . $table);
        if (null !== $max->row['MAX(PERSONID)']) {
            return $max->row['MAX(PERSONID)'];
        } else {
            return 0;
        }
    }

    public function isConnected(): bool
    {
        if ($this->connection) {
            return $this->connection;
        } else {
            return false;
        }
    }

    /**
     * __destruct
     *
     * Closes the DB connection when this object is destroyed.
     *
     */
    public function __destruct()
    {
        if ($this->connection) {
            oci_close($this->connection);

            unset($this->connection);
        }
    }
}
