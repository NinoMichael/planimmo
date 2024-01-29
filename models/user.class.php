<?php
class User {
    private $idUser;
    private $login;
    private $email;
    private $name;
    private $fname;
    private $age;
    private $addressUser;
    private $password;

    public function __construct($idUser, $login, $email, $name, $fname, $age, $addressUser, $password) {
        $this->id = $id;
        $this->login = $login;
        $this->email = $email;
        $this->name = $name;
        $this->fname = $fname;
        $this->age = $age;
        $this->addressUser = $addressUser;
        $this->password = $password;
    }

    public function getId() {return $this->id}
    public function setId($id) {$this->id = $id}

    public function getLogin() {return $this->login}
    public function setLogin($login) {$this->login = $login}

    public function getEmail() {return $this->email}
    public function setEmail($email) {$this->email = $email}

    public function getName() {return $this->name}
    public function setName($name) {$this->name = $name}

    public function getFname() {return $this->fname}
    public function setFname($fname) {$this->fname = $fname}

    public function getAge() {return $this->age}
    public function setAge($age) {$this->age = $age}

    public function getAddressUser() {return $this->addressUser}
    public function setAddressUser($addressUser) {$this->addressUser = $addressUser}

    public function getPassword() {return $this->passwordUser}
    public function setPassword($passwordUser) {$this->passwordUser = $passwordUser}
}

?>
