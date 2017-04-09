<?php
    // if(isset($_POST['setup-server']))
if(isset($_POST['setup-server']) && !empty($_POST['setup-server']) && isset($_POST['setup-user']) && !empty($_POST['setup-user']) && isset($_POST['setup-dbname']) && !empty($_POST['setup-dbname']) && isset($_POST['setup-pwd']))
{
    $host = trim(htmlspecialchars($_POST['setup-server']));
    $user = trim(htmlspecialchars($_POST['setup-user']));
    $db = trim(htmlspecialchars($_POST['setup-dbname']));
    $psw = trim(htmlspecialchars($_POST['setup-pwd']));
    // $psw = (empty($psw)) ?
    echo $host . $user . $db . $psw;
    try
	{

		//connection to mysql

		$dbh = new PDO("mysql:host=$host", $user, $psw);

		//creating database

		$dbh->exec('CREATE DATABASE IF NOT EXISTS ' . $db . 'CHARACTER SET \'uft8\'') or die(print_r($dbh->errorInfo(), true));
		$dbh->exec('USE ' . $db) or die(print_r($dbh->errorInfo(), true));
		$dbh->exec('GRANT ALL PRIVILEGES ON ' . $db . '.* TO ' . $user . '@' . $host . ' IDENTIFIED BY ' . $psw) or die(print_r($dbh->errorInfo(), true));

        //create user type table
		$dbh->exec('CREATE TABLE IF NOT EXISTS user_type(
        	user_type_id INT(1) PRIMARY KEY AUTO_INCREMENT,
        	user_type_name varchar(26) NOT NULL
        )') or die(print_r($dbh->errorInfo(), true));

        //create user type table
		$dbh->exec('CREATE TABLE IF NOT EXISTS user_pp_text(
        	user_pp_text_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        	user_pp_text_name varchar(3) NOT NULL
        )') or die(print_r($dbh->errorInfo(), true));

        //create user table
		$dbh->exec('CREATE TABLE IF NOT EXISTS users(
            user_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        	user_full_name VARCHAR(70) NOT NULL,
        	user_email VARCHAR(255) NOT NULL,
        	user_password VARCHAR(100) NOT NULL,
        	user_registration_date DATETIME NOT NULL,
        	user_email_code VARCHAR(50) NOT NULL,
        	user_account_status enum("disactived", "actived", "banned") NOT NULL,
        	user_account_pp_bg enum("bg-primary", "bg-danger", "bg-warning", "bg-alt", "bg-success") NOT NULL,
        	user_user_type_id INT(1) NOT NULL,
        	user_pp_text_id INT(11) UNSIGNED,
        	FOREIGN KEY(user_user_type_id) REFERENCES user_type(user_type_id),
        	FOREIGN KEY(user_pp_text_id) REFERENCES user_pp_text(user_pp_text_id)
        )') or die(print_r($dbh->errorInfo(), true));

        //create unique visitors table
		$dbh->exec('CREATE TABLE IF NOT EXISTS unique_visitors(
        	unique_visitor_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        	unique_visitor_ip_address TEXT NOT NULL,
        	unique_visitor_visite_date DATE NOT NULL,
        	unique_visitor_views INT DEFAULT 1 NOT NULL,
        	unique_visitor_user_id_if_exists INT(11) UNSIGNED NULL
        )') or die(print_r($dbh->errorInfo(), true));

        //create connected visitors table
		$dbh->exec('CREATE TABLE IF NOT EXISTS connected_users(
        	connected_user_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        	connected_user_ip_address TEXT NOT NULL,
        	connected_user_time TIMESTAMP NOT NULL,
        	connected_user_user_id INT(11) UNSIGNED NOT NULL,
        	FOREIGN KEY(connected_user_user_id) REFERENCES users(user_id)
        )') or die(print_r($dbh->errorInfo(), true));

        //create billboards table
		$dbh->exec('CREATE TABLE IF NOT EXISTS billboards(
        	billboard_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        	billboard_location VARCHAR(100) NOT NULL,
        	billboard_price DOUBLE NOT NULL,
        	billboard_width DOUBLE NOT NULL,
        	billboard_height DOUBLE NOT NULL,
        	billboard_category INT(2) NULL,
        	billboard_availability ENUM("free", "ordered", "rented") NOT NULL,
        	billboard_map_lat DOUBLE NOT NULL,
        	billboard_map_lon DOUBLE NOT NULL,
        	billboard_map_zoom DOUBLE NOT NULL
        )') or die(print_r($dbh->errorInfo(), true));

        //create billboards table
		$dbh->exec('CREATE TABLE IF NOT EXISTS orders(
        	order_id VARCHAR(15) PRIMARY KEY,
        	order_date TIMESTAMP NOT NULL,
        	order_user_id INT(11) UNSIGNED NOT NULL,
        	order_billboard_id INT(11) UNSIGNED NOT NULL,
        	FOREIGN KEY(order_user_id) REFERENCES users(user_id),
        	FOREIGN KEY(order_billboard_id) REFERENCES billboard(billboard_id)
        )') or die(print_r($dbh->errorInfo(), true));

        //create billboards table
		$dbh->exec('CREATE TABLE IF NOT EXISTS rents(
        	rent_order_id VARCHAR(15) NOT NULL,
        	rent_date TIMESTAMP NOT NULL,
        	rent_duration TIMESTAMP NOT NULL,
        	rent_user_id INT(11) UNSIGNED NOT NULL,
        	PRIMARY KEY(rent_order_id, rent_date),
        	FOREIGN KEY(rent_order_id) REFERENCES orders(order_id),
        	FOREIGN KEY(rent_user_id) REFERENCES users(user_id)
        )') or die(print_r($dbh->errorInfo(), true));

        //create billboards table
		$dbh->exec('CREATE TABLE IF NOT EXISTS users_reports(
        	user_report_id VARCHAR(10) PRIMARY KEY,
        	user_report_text TEXT NOT NULL,
        	user_report_date TIMESTAMP NOT NULL,
        	user_report_rent_order_id VARCHAR(15) NOT NULL,
        	FOREIGN KEY(user_report_rent_order_id) REFERENCES rents(rent_order_id)
        )') or die(print_r($dbh->errorInfo(), true));

        //create billboards table
		$dbh->exec('CREATE TABLE IF NOT EXISTS messages_text(
        	message_text_id INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        	message_text_msg TEXT NOT NULL,
        	message_text_sent_date DATETIME NOT NULL,
        	message_text_received_date DATETIME NOT NULL,
        	message_text_status ENUM("Sent", "Seen"),
        	message_text_sender INT(11) UNSIGNED NOT NULL,
        	message_text_receiver INT(11) UNSIGNED NOT NULL,
        	FOREIGN KEY(message_text_sender) REFERENCES users(user_id),
        	FOREIGN KEY(message_text_receiver) REFERENCES users(user_id)
        )') or die(print_r($dbh->errorInfo(), true));
    }
    catch(PDOException $e)
    {
        die('error : ' . $e->getMessage());
    }
}
