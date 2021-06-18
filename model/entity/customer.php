<?php
// Class representing the users stored in the database
class Customer {
    protected ?int $customerId;
    protected string $lastname;
    protected string $firstname;
    protected string $street_number;
    protected string $street_address;
    protected string $area_code;
    protected string $city;
    protected ?int $personnal_code;

    public function __construct(?array $data=null) {
        if($data){
            foreach($data as $key=>$value){
                $setter= "set". ucfirst($key);
                if(method_exists($this,$setter)){
                    $this->$setter(htmlspecialchars($value));
                }
            }
        }
    }

    public function setId(?int $id){
        $this->id= $id;
    }

    public function getId(){
        return htmlspecialchars($this->id);
    }

    public function setLastname(string $lastname) {
        $this->lastname = $lastname;
    }

    public function getLastname() {
        return htmlspecialchars($this->lastname);
    }

    public function setFirstname(string $firstname) {
        $this->firstname = $firstname;
    }

    public function getFirstname() {
        return htmlspecialchars($this->firstname);
    }

    public function setStreet_number(string $street_number) {
        $this->street_number = $street_number;
    }

    public function getStreet_number() {
        return htmlspecialchars($this->street_number);
    }

    public function setStreet_address(string $street_address) {
        $this->street_address = $street_address;
    }

    public function getStreet_address() {
        return htmlspecialchars($this->street_address);
    }

    public function setArea_code(string $area_code) {
        $this->area_code = $area_code;
    }

    public function getArea_code() {
        return htmlspecialchars($this->area_code);
    }

    public function setCity(string $city) {
        $this->city = $city;
    }

    public function getCity() {
        return htmlspecialchars($this->city);
    }

    public function setPersonnal_code(int $personnal_code) {
        $this->personnal_code = $personnal_code;
    }

    public function getPersonnal_code() {
        return htmlspecialchars($this->personnal_code);
    }
}

