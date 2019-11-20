<?php

namespace oldspice;

class Database{
    private $host;
    private $user;
    private $password;
    private $database;
    protected $connection;

    protected function _construct(){
        $this -> host = getenv('host');
        $this -> user = getenv('user');
        $this -> database = getenv('database');
        $this -> password = getenv('password');
        $this -> connection = mysqli_connect(
            $this -> host,
            $this -> user,
            $this -> password,
            $this -> database
        );
    }
}

?>