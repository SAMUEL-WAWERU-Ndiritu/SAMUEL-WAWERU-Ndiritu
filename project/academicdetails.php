<?php  include('./app/includes/header.php')?>
<?php include('./app/includes/servernavbar.php')?>
<?php include('./admin.php')?>
<?php include("./controllers/connect.php")?>





<div class="col-md-10 ">


                <div class="view_body bg-secondary">
                    <div class="view_body_header my-2">
                        <h4 class="text-left text-dark my-2">Applicants Academic Details</h4>
                    </div>

                    <div class="view_body_body bg-light my-2">
                     
                      <div class="bg-light">
                      <?php



                                  $sql = "SELECT academic_details.id, academic_details.primary_institution,academic_details.primary_year, academic_details.primary_Qualification,academic_details.Secondary_institution,academic_details.Secondary_year, academic_details.Secondary_Qualification,academic_details.Tertaily,academic_details.Tertaily_institution, academic_details.Tertaily_year, academic_details.Tertaily_Qualification,academic_details.vacancy,academic_details.name_file,academic_details.declaration_status, academic_details.time_stamp,personal_details.full_name FROM academic_details  INNER JOIN personal_details on academic_details.id=personal_details.id";
                                  $stmt = $conn->prepare($sql);
                                  $stmt->execute(); 
                            ?>
                     <div class="d-flex">
                            <p> <button onclick="window.printpart()">Print this page</button></p>
                          
                           <p > <form action="./csv/academic_csv.php" method="post">
                              <button type="submit" name="submit"class="btn btn-sm btn-primary text-white">EXPORT TO CSV</button>
                            </form></p>
                            </div>
                            

                            <div id="top_print">
                          <table class="table table-striped  table-responsive table-condensed table-hover table-bordered" id="table" style="width:25%">
                         
                              <tr>
                                  <th>id</th>
                                  <th>Full Name</th>
                                  <th>Primary Qualification</th>
                                  <th>Secondary Institution</th>
                                  <th>Secondary Year</th>
                                  <th>Secondary Qualification</th>
                                  <th>Tertially Highest Level</th>
                                  <th>Tertaily Institution</th>
                                  <th>Tetialy Year</th>
                                  <th>Tetialy Qualification</th>
                                  <th>Vacancy</th>
                                  <th>File Name</th>
                                  <th>Declaration status</th>
                                  

                             </tr>
                                <?php
                                 $result= mysqli_stmt_get_result($stmt);
                                 $num= mysqli_num_rows($result);
                                 if($num > 0){
                                      while($rows=mysqli_fetch_assoc($result)){?>
                                        <tr>
                                        <td><?php echo $rows['id']?></td>
                                        <td><?php echo $rows['full_name']?></td>
                                        <td><?php echo $rows['primary_Qualification']?></td>
                                        <td><?php echo $rows['Secondary_institution']?></td>
                                        <td><?php echo $rows['Secondary_year']?></td>
                                        <td><?php echo $rows['Secondary_Qualification']?></td>
                                        <td><?php echo $rows['Tertaily']?></td>
                                        <td><?php echo $rows['Tertaily_institution']?></td>
                                        <td><?php echo $rows['Tertaily_year']?></td>
                                        <td><?php echo $rows['Tertaily_Qualification']?></td>
                                        <td><?php echo $rows['vacancy']?></td>
                                        <td><?php echo $rows['name_file']?></td>
                                        <td><?php echo $rows['declaration_status']?></td>
                                        

                                       
                                      
                                    </tr>
                                    <?php
                                    }
 
                                 }else{
                                     header('location:manageUsers.php?error=norecord');
                                     exit();
                                 }
                                 
                                ?>
                               
                            </table>
                                </div>
                      </div>

                    
                    </div>
  </div>       
 </div>

 <script>
    function printpart () {
      var printwin = window.open("");
      printwin.document.write(document.getElementById("top_print").innerHTML);
      printwin.stop();
      printwin.print();
      printwin.close();
    }
       </script>

 <?php include('./adminfooter.php')?>

   
