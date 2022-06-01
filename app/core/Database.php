<?php 

class Database {

    // connect to database
    private function connect(){
        $connection_strings = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
        return new PDO($connection_strings, DBUSER, DBPASSWORD);
        

    }

    public function query($query, $data = [], $type = 'object'){
        $con = $this->connect();

        // prepare sql query
        $stm = $con->prepare($query);
        if($stm){
            // execute sql query
            $check = $stm->execute($data);
            if ($check) {
                # fetch values

                // set fetched value type OBJ OR ASSOC
                if($type != 'object'){

                   $type = PDO::FETCH_ASSOC;
                   
                }else {

                    $type = PDO::FETCH_OBJ;
                }
                $result = $stm->fetchAll($type);

                if(is_array($result) && count($result) > 0){
                    return $result;
                }
            }
        }

        return false;

    }

    public function create_tables(){
        // users tables
        $users = "
           CREATE TABLE IF NOT EXISTS `users` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `firstname` varchar(255) NOT NULL,
                `lastname` varchar(255) NOT NULL,
                `othernames` varchar(255),
                `username` varchar(255) NOT NULL,
                `email` varchar(100) NOT NULL,
                `password` varchar(255) NOT NULL,
                `role` varchar(50) NOT NULL,
                `created_at` datetime NOT NULL DEFAULT current_timestamp(),
                 PRIMARY KEY (`id`),
                 UNIQUE KEY `email` (`email`),
                 KEY `firstname` (`firstname`),
                 KEY `firstname_2` (`firstname`)
            ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4
        ";
        $this->query($users);
    }
    
}
