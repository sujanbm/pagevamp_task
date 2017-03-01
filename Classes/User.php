<?php

class User extends DB {
    
    private $firstName;
    private $lastName;
    private $email;

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

    function insert(){

        $query = "insert into users(email,first_name, last_name) 
            values(
            '". $this->getEmail()."',
            '". $this->getFirstName()."',
            '". $this->getLastName()."'
            )";

        return mysqli_query($this->db, $query);
    }

    function getAll() {

        $query = "select * from users";
        $result = mysqli_query($this->db, $query);
        $users = [];
        if(mysqli_num_rows($result) > 0){
            while ($user = mysqli_fetch_assoc($result)){
                $thisUser = new self();
                $thisUser->setFirstName($user['first_name']);
                $thisUser->setLastName($user['last_name']);
                $thisUser->setEmail($user['email']);
                $users[] = $thisUser;
            }
        }
        return $users;



    }

}
