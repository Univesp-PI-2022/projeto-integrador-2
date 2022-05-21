<?php



namespace src\model;

use src\database\DatabaseCon;


class User extends Contact
{
    private $ID;
    private $name;
    private $lastName;
    private $cpf;


    public function __construct(string $name, string $lastName, string $cpf, array $emails, array $phones)
    {
        $this->setName($name);
        $this->setLastName($lastName);
        $this->setCpf($cpf);
        parent::__construct($emails, $phones);
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


    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = strtolower($lastName);

        return $this;
    }


    public function getCpf()
    {
        $cpf = $this->cpf;
        return  $cpf;
    }


    public function setCpf($cpf)
    {

        if ($this->validateCPF($cpf)) {
            $this->cpf = $cpf;
            return $this;
        } else {
            $this->cpf = false;
        }
        
    }



    private function validateCPF($cpf)
    {

        // Extrai somente os números
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }


    public function registerUser()
    {
        $user = new DatabaseCon("usuarios");
        $user->insert([
            "nome" => $this->getName(),
            "sobrenome" => $this->getLastName(),
            "cpf" => $this->getCpf(),
            "emails" => json_encode($this->getEmails()),
            "telefones" => json_encode($this->getPhones())
        ]);
        return true;
    }


    public function updateUser()
    {
        return (new DatabaseCon("usuarios"))->update("ID = " . $this->ID, [
            "nome" => $this->getName(),
            "sobrenome" => $this->getLastName(),
            "cpf" => $this->getCpf(),
            "emails" => json_encode($this->getEmails()),
            "telefones" => json_encode($this->getPhones())
        ]);
    }


    public function deleteUser()
    {
        return (new DatabaseCon("usuarios"))->delete("ID = " . $this->ID);
    }

    /**
     * Get the value of ID
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Set the value of ID
     *
     * @return  self
     */
    public function setID($ID)
    {
        $this->ID = $ID;

        return $this;
    }
}
