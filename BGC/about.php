<?php 

require_once 'rootpath.php';
include (ROOT_PATH."/app/includes/header.php") ;
include (ROOT_PATH."/app/includes/navbar.php") ;
include (ROOT_PATH."/app/connect.php") ;

          
$id= $_GET['id'];
    $sql = "SELECT * FROM posts WHERE id=$id";
    $sql = $sql . " LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_assoc();
?>

<section>
    <div class="container">
    <div class="header my-4">
            <h3 class="text-left"><?php echo $records['title']?></h3>
             </div>
        <div class="row">   
          <div class="col-md-7 bg-white p-5 ">
            


                
               <p class="text-left"><?php echo $records['body'];?></p>
               
             
   
              
               </div>
      
            <div class="col-md-1"></div>
            <div class="col-md-4  ">
              <div class="search-bar bg-white">
                  <div>
                      <h4 class="text-left py-3">Popular</h4>
                  </div>
                <div>

               
                <?php 
               $query= 'SELECT * FROM posts ORDER BY id ASC';
               $result=mysqli_query($conn,$query);
               $rowCount= mysqli_num_rows($result);
               if($rowCount > 0){
                   while($row=mysqli_fetch_assoc($result)){
                   ?>
                 
                 <div class="d-flex my-2 margin p-2">
                        <div>
                        <img src="assets/images/<?php echo $row['image']?>" class="card-img-top img-fluid sam">
                        </div>
                        <div class="mx-3">
                            <p class="text-muted text-left mt-3"><?php echo $row['title']?></p>
                        </div>
                    </div>
                
                   
                   <?php
                   }
               }else{
                   echo "No record";
               }
               
               ?>
            </div>
                   </div>

            
            

              <div class="Topics my-3 p-3 bg-white" >
                <h3 class="text-dark p-3">Topics</h3>
    
                <ul>
                       
                <?php
                        $sql= "SELECT * FROM topics";
                        $stmt= $conn->prepare($sql);
                         $stmt->execute();
                                          
                         $result= mysqli_stmt_get_result($stmt);
                         $num= mysqli_num_rows($result);
                        if($num > 0){
                         while($rows=mysqli_fetch_assoc($result)){?>
                                        
                 
                     <li><a href="about.php?id=<?php echo $rows['id'];?>"><?php echo $rows['name']?></a></li>
                
                
                                    <?php
                                    }
 
                                 }else{
                                     header('location:managetopic.php?error=norecord');
                                     exit();
                                 }
                                 
                                ?>

                
                
                </ul>
            
              </div>
            </div>

            


        </div>
    </div>
</section>
<?php 

include (ROOT_PATH."/app/includes/footer.php") ;

?>