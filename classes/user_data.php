<?php
    include_once __DIR__ . '/classes/user.php';
    /** Users class
     * @author Angela Caterina Gallo angela@gmail.com
     * @copyright 2021 Angela
    */
    class UserData extends User{
        public $userName;
        public $email;
        public $password;

        public function __construct( string $name,  string $lastname,  int $age, string $userName, string $email, string $password){
            parent::__construct($name, $lastname, $age);
            $this->userName = $userName;
            $this->email = $email;
            $this->password = $password;
        }
    }
    // $user1 = new UserData('Speranza', 'De Caneva' ,53, 'spidy', 'speranza@gmail.com', 'password');
    // // var_dump($user1);
    // $users = [
    //     new UserData('Antonio', 'De Caneva' , 35, 'anto', 'anto@gmail.com', 'password'), 
    //     new UserData('Gianni', 'De Caneva' , 40, 'gianni', 'gian@gmail.com', 'password'),
    //     new UserData('Giovanni', 'De Caneva' , 20, 'giovanni', 'giovanni@gmail.com', 'password'), 
    //     new UserData('Costanza', 'De Caneva' , 92, 'costanza', 'costanza@gmail.com', 'password'), 
    // ];
    // var_dump($users);
?>
