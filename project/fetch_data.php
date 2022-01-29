<?php
require_once ('./controllers/connect.php');
if(isset($_POST['action'])){
    $query  = "SELECT personal_details.id,personal_details.full_name,personal_details.sex,personal_details.date_of_birth,personal_details.disability,academic_details.Secondary_Qualification,academic_details.Secondary_year,academic_details.Tertaily,academic_details.Tertaily_institution,academic_details.Tertaily_Qualification,academic_details.Tertaily_year,academic_details.vacancy FROM personal_details INNER JOIN academic_details on personal_details.id = academic_details.id";
  

if(isset($_POST['date_of_birth'])){
  $date_of_birth_filter = implode("','",$_POST['date_of_birth']);
  $query .="
  AND date_of_birth IN('".$date_of_birth_filter."')
  ";
}
if(isset($_POST['sex'])){
    $sex_filter = implode("','",$_POST['sex']);
    $query .="
    AND sex IN('".$sex_filter."')
    ";
  }
if(isset($_POST['disability'])){
  $disability_filter = implode("','",$_POST['disability']);
  $query .="
  AND disability IN('".$disability_filter."')
  ";
}
if(isset($_POST['vacancy'])){
  $vacancy_filter = implode("','",$_POST['vacancy']);
  $query .="
  AND vacancy IN('".$vacancy_filter."')
  ";
}

if(isset($_POST['Tertaily'])){
  $Tertaily_filter = implode("','",$_POST['Tertaily']);
  $query .="
  AND Tertaily  IN('".$Tertaily_filter."')
  ";
}

if(isset($_POST['Tertaily_institution'])){
  $Tertaily_institution_filter = implode("','",$_POST['Tertaily_institution']);
  $query .="
  AND Tertaily_institution  IN('".$Tertaily_institution_filter."')
  ";
}

if(isset($_POST['Tertialy_year'])){
  $Tertialy_year_filter = implode("','",$_POST['Tertialy_year']);
  $query .="
  AND Tertialy_year  IN('".$Tertialy_year_filter."')
  ";
}
if(isset($_POST['Tertaily_Qualification'])){
  $Tertaily_Qualification_filter = implode("','",$_POST['Tertaily_Qualification']);
  $query .="
  AND Tertaily_Qualification  IN('".$Tertaily_Qualification_filter."')
  ";
}
    
    
$result= mysqli_query($conn,$query);
$rowCount= mysqli_num_rows($result);
$output= '';
                




?>
         
            <h3 class="text-center">APPLICANT RECORD</h3>
            <div class="table-responsive">
            <table class="table table-border table-striped">
                                  <th>id</th>
                                  <th>Full Name</th>
                                  <th>Gender</th>
                                  <th>DOB</th>
                                  <th>Disability</th>
                                  <th>Vacancy</th>
                                  <th>Secondary Qualification</th>
                                  <th>Secondary Graduation Year</th>
                                  <th>Tertially</th>
                                  <th>Tertially Institution</th>
                                  <th>Tertially Qualification</th>
                                  <th>Tertially Graduation Year</th>
                                  
                                  


                             </tr>
                             <?php
    if($rowCount > 0){
      while($row= mysqli_fetch_assoc($result)){
           $output .= '
           <tr>
           <td>'.$row['id'].'</td>
           <td>'.$row['full_name'].'</td>
           <td>'.$row['sex'].'</td>
           <td>'.$row['date_of_birth'].'</td>
           <td>'.$row['disability'].'</td>
           <td>'.$row['vacancy'].'</td>
           <td>'.$row['Secondary_Qualification'].'</td>
           <td>'.$row['Secondary_year'].'</td>
           <td>'.$row['Tertaily'].'</td>
           <td>'.$row['Tertaily_institution'].'</td>
           <td>'.$row['Tertaily_Qualification'].'</td>
           <td>'.$row['Tertaily_year'].'</td>
            
          </tr>

           
           
           ';
    }
}
   else
   {
     $output = '<h3>No Date Found</h3>';
   }
   echo $output;
  }
   ?>
</table>
</div>



  
