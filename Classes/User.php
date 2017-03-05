<?php

namespace Classes;

class User extends DB
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $message;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        return $this->id = $id;
    }

    public function getMessage(){
        return $this->message;
    }

    public function setMessage($message){
        $this->message = $message;
    }

    public function insert()
    {
        $query = "insert into users(email,first_name, last_name, message) 
            values(
            '".$this->getEmail()."',
            '".$this->getFirstName()."',
            '".$this->getLastName()."',
            '".$this->getMessage()."'
            )";

        return mysqli_query($this->db, $query);
    }

    public function getAll()
    {
        $query = 'select * from users';
        $result = mysqli_query($this->db, $query);
        $users = [];
        if (mysqli_num_rows($result) > 0) {
            while ($user = mysqli_fetch_assoc($result)) {
                $thisUser = new self();
                $thisUser->setFirstName($user['first_name']);
                $thisUser->setLastName($user['last_name']);
                $thisUser->setEmail($user['email']);
                $thisUser->setId($user['id']);
                $thisUser->setMessage($user['message']);
                $users[] = $thisUser;
            }
        }

        return $users;
    }

    public function getById($id){

        $query = "select * from users where id = '".$id."'";
        $result =  mysqli_query($this->db, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($user = mysqli_fetch_assoc($result)) {
                $thisUser = new self();
                $thisUser->setId($user['id']);
                $thisUser->setFirstName($user['first_name']);
                $thisUser->setLastName($user['last_name']);
                $thisUser->setEmail($user['email']);
                $thisUser->setMessage($user['message']);
                $users = $thisUser;
            }
        }

        return $users;
    }

    public function update($id){

        $query = "update users set 
            email = '".$this->getEmail()."',
            first_name = '".$this->getFirstName()."',
            last_name = '".$this->getLastName()."',
            message = '".$this->getMessage()."'
            where id = '".$id."' ";
        return mysqli_query($this->db, $query);
    }

    public function delete($id){

        $query = "delete from users where id = '".$id."'";
        return mysqli_query($this->db, $query);
    }
}
