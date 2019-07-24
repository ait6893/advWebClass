<?php
namespace aitsydney; //first can be capital
class Database
{
    protected $connection;
    public function __construct()
    {
        //create connection
        $this -> connection = mysqli_connect('localhost','user','password','data');
    }
}
?>