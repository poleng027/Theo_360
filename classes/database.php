<?php
class database
{
    function opencon(){
        return new PDO('mysql:host=localhost; dbname=reservation','root','');
    }
    function addPackage($service_name, $service_description, $service_price){
        $con = $this->opencon();
        return $con->prepare("Insert into packages (service_name, service_description, service_price) VALUES (?,?,?)")
        ->execute([ $service_name, $service_description, $service_price]);

        return $stmt;
    }
    function viewServices(){
        $con = $this->opencon();
        return $stmt = $con->query("Select * from packages") ->fetchAll();
    }
}