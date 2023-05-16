<?php

namespace Source\Models;

use Source\Core\Connect;
use Source\Models\Financial\Savings;

class User {

    private $name;
    private $email;
    private $password;
    private $cpf;
    private $dateOfBirth;
    private $address;
    private $savings;

    public function __construct($name = null, $email = null, $password = null, $cpf = null, $dateOfBirth = null, Address $address = null){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->cpf = $cpf;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
    }
    
    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getName($name) {
       return $this->name = $name;
    }

    public function getEmail($email) {
        return $this->email = $email;
    }

    public function getPassword($password) {
        return $this->password = $password;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getCpf($cpf) {
        return $this->cpf = $cpf;
    }

    public function setDateOfBirth($dateOfBirth) {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getDateOfBirth($dateOfBirth) {
        return $this->dateOfBirth = $dateOfBirth;
    }

    public function addSavings (Savings $savings){
        $this->savings[] = $savings;
       // var_dump($this->savings);
    }

    public function selectAll(){
        $query = "SELECT * FROM users";
        $stmt = Connect::getInstance()->query($query);
        $stmt->execute();
        var_dump($stmt->fetchAll());
    }


}