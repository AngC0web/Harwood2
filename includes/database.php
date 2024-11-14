<?php
//set PHP datetime zone to America/Toronto
date_default_timezone_set('America/Toronto');

class DBQuery{
    private $db;

	public function __construct() {
        //database connection string
        $dsn = "mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
        $pdo_options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $this->db = new PDO($dsn, DB_USER, DB_PASS, $pdo_options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }


/***************************************************************
*              Users                                           *
***************************************************************/

    public function findUser($options_array = array()){

        $results_array = array();

        $email = isset($options_array['email']) ? $options_array['email'] : "N/A";

        $stmt = $this->db->prepare('SELECT * FROM `users` WHERE `email` = :email');
        $stmt->execute([$email]);

        $results_array = $this->retrieve_full_array($stmt);

        return $results_array;
    }

    public function getUsers(){
        $results_array = array();

        $stmt = $this->db->prepare('SELECT * from users');
        $stmt->execute();

        $results_array = $this->retrieve_full_array($stmt);

        return $results_array;
    }


    public function addUser($options_array = array()){

        //named parameters
        $placeholders = "(:email, :password, :first_name, :last_name, :created, :modified)";

        $query = "INSERT INTO `users`(`email`, `password`, `first_name`, `last_name`, `created`, `modified`) VALUES  $placeholders";

        $stmt = $this->db->prepare($query);

        if(!$stmt->execute($options_array)) return false;
        //use $stmt->affected_rows to get # of rows changed

        $stmt = null;
        return true;
    }

    public function updateUser($options_array = array()){
        $query = "UPDATE users SET password = :password, first_name = :first_name, last_name = :last_name, modified = :modified WHERE email = :email";

        $stmt = $this->db->prepare($query);

        if(!$stmt->execute($options_array)) return false;
        //use $stmt->affected_rows to get # of rows changed

        $stmt = null;
        return true;
    }

    /***************************************************************
    *                                                              *
    *                                                              *
    *              Helper Function                                 *
    *                                                              *
    *                                                              *
    ***************************************************************/
    protected function implodeStringBetween($field_name, $field_arr){
        return $field_name . " IN (" . implode(",", array_map(function($a){ return "'" . $a . "'"; }, $field_arr)) . ")";
    }

    protected function retrieve_full_array($stmt, $options_array = array()){
        $prepared_array = array();
        while ($row = $stmt->fetch())
        {
            $prepared_array[] = $row;
        }

        return $prepared_array;
    }

}

//create new db query
$dbquery = new DBQuery();