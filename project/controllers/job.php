<?php
include('connect.php');

if(isset($_POST['submit'])){

 function test_input($data){
     $data = trim($data);
     $data=  stripslashes($data);
     $data= htmlspecialchars($data);
     return($data);
 }
#personal details
 $name = test_input($_POST['full_name']);
 $date_of_birth= test_input($_POST['date_of_birth']);
 $id_number = test_input($_POST['id_number']);
 $sex = test_input($_POST['sex']);
 $ethnicity = test_input($_POST['ethnicity']);
 $county = test_input($_POST['county']);
 $division = test_input($_POST['division']);
 $ward= test_input($_POST['ward']);
 $email = test_input($_POST['email']);
 $tel = test_input($_POST['tel']);
 $disability = test_input($_POST['disability']);
  # academic details

  $primary_institution = test_input($_POST['primary_institution']);
  $primary_year = test_input($_POST['primary_year']);
  $primary_Qualification = test_input($_POST['primary_Qualification']);
  $Secondary_institution = test_input($_POST['Secondary_institution']);
  $Secondary_year = test_input($_POST['Secondary_year']);
  $Secondary_Qualification = test_input($_POST['Secondary_Qualification']);
  $Tertaily = test_input($_POST['Tertaily']);
  $Tertaily_institution = test_input($_POST['Tertaily_institution']);
  $Tertaily_year = test_input($_POST['Tertaily_year']);
  $Tertaily_Qualification = test_input($_POST['Tertaily_Qualification']);
  $vacancy = test_input($_POST['vacancy']);
  $name_file = test_input($_POST['name_file']);
  $declaration_status = test_input($_POST['declaration_status']);
  
  
 


 if(empty($name) || empty($date_of_birth) || empty($id_number) || empty($sex) || empty($ethnicity) || empty($county) || empty($division) || empty($ward) || empty($email) || empty($tel)||empty($disability) || empty($primary_institution) || empty($primary_year) || empty($Secondary_institution) || empty($Secondary_year) || empty($Secondary_Qualification) || empty($Tertaily) || empty($Tertaily_institution) || empty($Tertaily_year) || empty($Tertaily_Qualification) || empty($vacancy) || empty($declaration_status)){

     $error= "Kindly input all the fields";
     header("location:job_application.php?error=emptyfields");   

 }else{  

    $sql =  "INSERT INTO personal_details( full_name, date_of_birth, id_number, sex, ethnicity, county, division, ward, email, tel, disability) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $sql_1 = " INSERT INTO academic_details(primary_institution, primary_year, primary_Qualification, Secondary_institution, Secondary_year, Secondary_Qualification, Tertaily, Tertaily_institution, Tertaily_year, Tertaily_Qualification, vacancy, name_file, declaration_status) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";

    $stmt_1= $conn->prepare($sql);
    $stmt_2 = $conn->prepare($sql_1 );
    
       $stmt_1->bind_param('sssssssssss',$name,$date_of_birth,$id_number,$sex,$ethnicity,$county,$division,$ward,$email,$tel,$disability);
       $stmt_2->bind_param('sssssssssssss',$primary_institution,$primary_year,$primary_Qualification,$Secondary_institution,$Secondary_year,$Secondary_Qualification,$Tertaily,$Tertaily_institution,$Tertaily_year,$Tertaily_Qualification,$vacancy,$name_file,$declaration_status);
       $stmt_1->execute();
       $stmt_2->execute();
       
    
  
   
    }
 }





?>