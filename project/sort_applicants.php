<?php
require_once("./controllers/connect.php");
require_once('./app/includes/header.php');
require_once('./fetch_data.php');



$count = 0;
?>
<?php include('./app/includes/servernavbar.php')?>

            <?php include("./admin.php") ?>

            <div class="col-md-8">

<div>

                       <div class="d-flex">
                            <p> <button onclick="window.printpart()">Print this page</button></p>
                          
                           <p > <form action="./csv/sort_csv.php" method="post">
                              <button type="submit" name="submit"class="btn btn-sm btn-primary text-white">EXPORT TO CSV</button>
                            </form></p>
                            </div>


    <div class="row " id="toprint">
        <div class="filter_data">

        </div>

   

    </div>
</div>

</div>



            <div class="col-md-2 bg-dark mx-0">

                <div class="list-group">
                    <h6 class="text-light">Date of Birth</h6>
                    <?php
                    $query="SELECT DISTINCT(date_of_birth) FROM personal_details  ORDER BY id DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                        ?>
                        <div class="list-group-item checkbox bg-warning">
                            <label>
                                <input type="checkbox" class="common_selector date_of_birth " value="<?php echo $row['date_of_birth'];?>"><?php echo $row['date_of_birth'];?>  
                            </label> 
                        </div>
                        <?php
                    }
                }
                    ?>
                    </div>
            
                    <div class="list-group">
                    <h6 class="text-light">Gender</h6>
                    <?php
                    $query="SELECT DISTINCT(sex) FROM personal_details ORDER BY id DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                        ?>
                        <div class="list-group-item checkbox bg-warning">
                            <label>
                                <input type="checkbox" class="common_selector sex" value="<?php echo $row['sex'];?>"><?php echo $row['sex'];?>  
                            </label> 
                        </div>
                        <?php
                    }
                }
                
                    ?>
                    </div>
            
            
                    <div class="list-group">
                    <h6 class="text-light">Disability Status</h6>
                    <?php
                    $query="SELECT DISTINCT(disability) FROM personal_details ORDER BY id DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                        ?>
                        <div class="list-group-item checkbox bg-warning">
                            <label>
                                <input type="checkbox" class="common_selector disability " value="<?php echo $row['disability'];?>"><?php echo $row['disability'];?>  
                            </label> 
                        </div>
                        <?php
                    }
                }
                    ?>
                    </div>
            
            
            
                    <div class="list-group">
                    <h6 class="text-light">Vacancy</h6>
                    <?php
                    $query="SELECT DISTINCT(vacancy) FROM 	academic_details ORDER BY id DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                        ?>
                        <div class="list-group-item checkbox bg-warning">
                            <label>
                                <input type="checkbox" class="common_selector 	vacancy" value="<?php echo $row['vacancy'];?>"><?php echo $row['vacancy'];?>  
                            </label> 
                        </div>
                        <?php
                    }
                }
                    ?>
                    </div>
            
            
            
                    <div class="list-group">
                    <h6 class="text-light">Highest Tertially Level</h6>
                    <?php
                    $query="SELECT DISTINCT(Tertaily) FROM academic_details ORDER BY id DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                        ?>
                        <div class="list-group-item checkbox bg-warning">
                            <label>
                                <input type="checkbox" class="common_selector Tertaily" value="<?php echo $row['Tertaily'];?>"><?php echo $row['Tertaily'];?>  
                            </label> 
                        </div>
                        <?php
                    }
                }
                    ?>
                    </div> 

                    
                    <div class="list-group">
                    <h6 class="text-light">Tertaily Institution</h6>
                    <?php
                    $query="SELECT DISTINCT(Tertaily_institution) FROM academic_details ORDER BY id DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                        ?>
                        <div class="list-group-item checkbox bg-warning">
                            <label>
                                <input type="checkbox" class="common_selector Tertaily_institution" value="<?php echo $row['Tertaily_institution'];?>"><?php echo $row['Tertaily_institution'];?>  
                            </label> 
                        </div>
                        <?php
                    }
                }
                    ?>
                    </div> 
            
            
            
            
            
            
                    <div class="list-group">
                    <h6 class="text-light">Tertially Year</h6>
                    <?php
                    $query="SELECT DISTINCT(Tertaily_year) FROM academic_details ORDER BY id DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                        ?>
                        <div class="list-group-item checkbox bg-warning">
                            <label>
                                <input type="checkbox" class="common_selector Tertaily_year" value="<?php echo $row['Tertaily_year'];?>"><?php echo $row['Tertaily_year'];?>  
                            </label> 
                        </div>
                        <?php
                    }
                }
                    ?>
                    </div> 
            
            
            
            
            
                    <div class="list-group">
                    <h6 class="text-light">Tertailly Qualifications</h6>
                    <?php
                    $query="SELECT DISTINCT(Tertaily_Qualification) FROM academic_details ORDER BY id DESC";
                    $result= mysqli_query($conn,$query);
                    $rowCount= mysqli_num_rows($result);
                    if($rowCount > 0){
                        while($row= mysqli_fetch_assoc($result)){
                        ?>
                        <div class="list-group-item checkbox bg-warning">
                            <label>
                                <input type="checkbox" class="common_selector Tertaily_Qualification" value="<?php echo $row['Tertaily_Qualification'];?>"><?php echo $row['Tertaily_Qualification'];?>  
                            </label> 
                        </div>
                        <?php
                    }
                }
                    ?>
                    </div> 
            


            </div>
            









        </div>
    </div>

    
<script>
    function printpart () {
      var printwin = window.open("");
      printwin.document.write(document.getElementById("toprint").innerHTML);
      printwin.stop();
      printwin.print();
      printwin.close();
    }
       </script>


<?php include('./app/includes/footer.php')?>