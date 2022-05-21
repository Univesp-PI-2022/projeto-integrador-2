<?php

namespace src\model;

class Contact
{

    private  $emails;
    private  $phones;


    public function __construct(array $emails, array $phones)
    {
        $this->setEmails($emails);
        $this->setPhones($phones);
    }

    private function validatePhone(string $phones)
    {
        if (strlen($phones) > 14) {
            return preg_match("/^\([1-9]{2}\) [0-9]{4}-[0-9]{5}$/", $phones, $matchs);
        } else {
            return  preg_match("/^\([1-9]{2}\) [0-9]{4}-[0-9]{4}$/", $phones, $matchs);
        }
    }



    private function validateEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }



    /**
     * Get the value of email
     */
    public function getEmails()
    {
        $emails = [];
        foreach ($this->emails as $email) {
            array_push($emails, $email);
        }

        return  $emails;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmails($emails)
    {
        $setEmails = [];
        foreach ($emails as $email) {
            if ($this->validateEmail($email) !== false) {
                array_push($setEmails, strtolower($email));
            } else {
                $this->emails = false;
            }
        }

        $this->emails = $setEmails;
        return json_encode($this);
    }


    /**
     * Get the value of phones
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * Set the value of phones
     *
     * @return  self
     */
    public function
    setPhones($phones)
    {
        $setPhones = [];
        foreach ($phones as $phone) {
            if ($this->validatePhone($phone)) {
                array_push($setPhones, $phone);
            } else {
                array_push($setPhones, false);
            }
        }

        if (in_array(false, $setPhones)) {
            $this->phones =  false;
        } else {
            $this->phones = $setPhones;

            return json_encode($this);
        }
    }
}
