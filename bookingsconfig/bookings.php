<?php

class Bookings
{
    protected $name;
    protected $email;
    protected $phone;
    protected $address;
    protected $destination;
    protected $guestNumber;
    protected $check_in_date;
    protected $check_out_date;
    public function __construct($name, $email, $phone,$address,$destination,$guestNumber,$check_in_date,$check_out_date)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
        $this->destination = $destination;
        $this->guestNumber = $guestNumber;
        $this->check_in_date = $check_in_date;
        $this->check_out_date = $check_out_date;
    }
    public function setSession(){
        $_SESSION['booking'] = "booking";
    }   
    public function setCookie(){
        setcookie("name", $this->getBookingClientName(), time() + 2 * 24 * 60 * 60);
    }

    public function getBookingClientName(){
        return $this->name;
    }
    public function getBookingClientEmail(){
        return $this->email;
    }
    public function getClientAddress(){
        return $this->address;
    }
    public function getBookingDestination(){
        return $this->destination;
    }
    public function getBookingGuestNumber(){
        return $this->guestNumber;
    }
    public function getBookingCheck_in_date(){
        return $this->check_in_date;
    }
    public function getBookingCheck_out_date(){
        return $this->check_out_date;
    }


}

?>