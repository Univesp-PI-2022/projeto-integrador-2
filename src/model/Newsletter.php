<?php



namespace src\model;

use src\database\DatabaseCon;


class Newsletter extends DatabaseCon
{
    private $email;



    public function __construct(string $email)
    {
        $this->setEmail($email);
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

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
            return $this;
        } else {
            $this->email = false;
            return $this;
        }
    }


    public function subscribeNewsletter()
    {
        $databaseCon = new DatabaseCon("newsletter");

        $subscribe =  $databaseCon->insert([
            "email" => $this->getEmail(),
        ]);

        return $subscribe;
    }
}
