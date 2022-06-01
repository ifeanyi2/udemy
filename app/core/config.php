<?php 
// $d = explode(' ', $_SERVER['SERVER_SOFTWARE']);
// dd($d[1]);

// define app name
define('APP_NAME', 'Udemy Youtube');
define('APP_DESC', 'Free and paid tutorials');



// check if we are on local host or live server
if($_SERVER['SERVER_NAME'] == 'localhost'){
    // database config for local server
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBNAME', 'udemy');
    define('DBPASSWORD', '');
    define('DBDRIVER', 'mysql');

    // root path for file
    define('ROOT', 'http://localhost/udemy/public');


}else{
    // database config for live server
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBNAME', 'udemy');
    define('DBPASSWORD', '');
    define('DBDRIVER', 'mysql');

    // note remember to change to your live server path on hosting
    define('ROOT', 'http://localhost/udemy/public');
}