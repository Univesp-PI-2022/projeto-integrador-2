<?php



namespace src\model;

use src\database\DatabaseCon;


class User extends DatabaseCon
{
    private $id;
    private $name;
    private $role;
    private $email;
    private $password;


    public function __construct(string $name,  string $email, string $password, string $role = "0")
    {
        $this->setName($name);
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setRole($role);
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }



    /**
     * Get the value of role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword(string $password)
    {

        $hashPassword = password_hash($password, PASSWORD_DEFAULT);

        $this->password = $hashPassword;

        return $this;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = strtolower($name);

        return $this;
    }



    public function registerUser()
    {
        $databaseCon = new DatabaseCon("users");

        $registered =  $databaseCon->insert([
            "name" => $this->getName(),
            "email" => $this->getEmail(),
            "password" => $this->getPassword()
        ]);

        return $registered;
    }


    public function updateUser()
    {
        return (new DatabaseCon("usuarios"))->update("id = " . $this->id, [
            "name" => $this->getName(),
            "email" => $this->getEmail(),
            "password" => $this->getPassword()
        ]);
    }


    public function deleteUser()
    {
        return (new DatabaseCon("usuarios"))->delete("id = " . $this->id);
    }
}
