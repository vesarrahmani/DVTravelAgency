<?php
session_start();
include_once '../userMapper.php';
include_once '../userconfig/adminUser.php';
include_once '../userconfig/simpleUser.php';

if (isset($_POST['login'])) {
    $login = new LoginLogic($_POST);
    $login->verify();
} else if (isset($_POST['register'])) {
    $register = new RegisterLogic($_POST);
    $register->registerUser();
}
else{
    header("Location: ../register.php");
}

class LoginLogic
{

    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

    public function verify()
    {
        if ($this->verifyEmptyData($this->username, $this->password)) {
            header("Location:../register.php");
        } else if ($this->verifyCorrectData($this->username, $this->password)) {
            header("Location: ../index.php");
        } else {
            header("Location: ../register.php");
        }
    }

    private function verifyEmptyData($username, $password)
    {

        if (empty($username) || empty($password)) {
            return true;
        }

        return false;
    }

    private function verifyCorrectData($username, $password)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        if ($user == null || count($user) == 0)
            return false;
        else if (password_verify($password, $user['password'])) {
            if ($user['role'] == 1) {
                $adminUser = new AdminUser($user['firstname'],$user['lastname'], $user['city'],
            $user['country'],$user['phone'],$user['username'],$user['email'],$user['password'],1);
                $adminUser->setSession();
            } else {
                $simpleUser = new SimpleUser($user['firstname'],$user['lastname'], $user['city'],
                $user['country'],$user['phone'],$user['username'],$user['email'],$user['password'],0);
                $simpleUser->setSession();
            }
            return true;
        } else
            return false;

    }

}


class RegisterLogic
{

    private $firstname = "";
    private $lastname = "";
    private $city = "";
    private $country = "";
    private $phone = "";
    private $username = "";
    private $email = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->firstname = $formData['firstname'];
        $this->lastname = $formData['lastname'];
        $this->city = $formData['city'];
        $this->country = $formData['country'];
        $this->phone = $formData['phone'];
        $this->username = $formData['username'];
        $this->email = $formData['email'];
        $this->password = $formData['password'];

    }

    public function registerUser()
    {
        if ($this->username === "vesa" || $this->username === "dijane") {
            $user = new AdminUser($this->firstname,$this->lastname,$this->city,
            $this->country,$this->phone,$this->username,$this->email,$this->password,1);
            $mapper = new UserMapper();
            $mapper->insertUser($user);
            header("Location: ../login.php");
        }
        else{
            $user = new SimpleUser($this->firstname,$this->lastname,$this->city,
            $this->country,$this->phone,$this->username,$this->email,$this->password,0);
            $mapper = new UserMapper();
            $mapper->insertUser($user);
            header("Location: ../login.php");
        }
    }




}



?>