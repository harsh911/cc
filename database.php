<?php
$conn = mysqli_connect("localhost","root","");
	// $q1 = "create database sample";
	// $db = mysqli_query($conn,$q1);
	// if(!$db){
	// 	echo "Error";
	// }
	// else{
	// 	echo "Done";
	// }
                            
    $patients = "CREATE TABLE `doctorpatient`.`Patients` 
    ( `patient_id` INT(10) NOT NULL AUTO_INCREMENT ,
     `first_name` VARCHAR(30) NULL ,
      `last_name` VARCHAR(20) NOT NULL ,
       `date_of_birth` DATE NOT NULL ,
       `gender` VARCHAR(10) NOT NULL ,
        `email` VARCHAR(50) NOT NULL ,
        `phone` BIGINT(10) NOT NULL ,
        `address` VARCHAR(100) NOT NULL ,
        `photo` BLOB NOT NULL ,
        PRIMARY KEY (`patient_id`)) ENGINE = InnoDB;";

    $doctors = 'CREATE TABLE `doctorpatient`.`Doctors` 
    ( `doctor_id` INT(10) NOT NULL AUTO_INCREMENT ,
     `first_name` VARCHAR(30) NOT NULL ,
     `last_name` VARCHAR(20) NOT NULL ,
     `date_of_birth` DATE NOT NULL ,
     `gender` VARCHAR(10) NOT NULL ,
     `email` VARCHAR(50) NOT NULL ,
     `phone` BIGINT(10) NOT NULL ,
     `address` VARCHAR(100) NOT NULL ,
     `photo` BLOB NOT NULL ,
     `specialisation_id` INT NOT NULL ,
     `office_id` INT(10) NOT NULL ,
     PRIMARY KEY (`doctor_id`)) ENGINE = InnoDB;';
    
    $medical = 'CREATE TABLE `doctorpatient`.`medical_details` 
    ( `med_det_id` INT(10) NOT NULL AUTO_INCREMENT ,
     `height` DOUBLE(5) NOT NULL ,
     `weight` DOUBLE(5) NOT NULL ,
     `allergies_id` INT(10) NOT NULL ,
     `illness_id` INT(10) NOT NULL ,
     `operations_id` INT(10) NOT NULL ,
     `medications_id` INT(10) NOT NULL ,
     `exercise` VARCHAR(20) NOT NULL ,
     `diet` VARCHAR(20) NOT NULL ,
     `alcohol` INT(20) NOT NULL ,
     `smoke` VARCHAR(10) NOT NULL ,
     `comments` VARCHAR(50) NOT NULL ,
     PRIMARY KEY (`med_det_id`)) ENGINE = InnoDB;';

	$q2c = mysqli_query($conn,$medical);
	if(!$q2c){
		echo "Error";
	}
	else{
		echo "Done";
    }
    
?>
