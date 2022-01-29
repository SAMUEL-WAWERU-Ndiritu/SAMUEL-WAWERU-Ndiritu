<?php 
require_once 'rootpath.php';
include (ROOT_PATH."/app/includes/header.php") ;
include (ROOT_PATH."/app/includes/navbar.php") ;
include (ROOT_PATH."/app/connect.php") ;
?>
<div>


</div>
<section class="pos">
   
   
    <div class="header my-4">
            <h3 class="text-center">Trending Post</h3>
        </div>
        
   <div class="corousel">   
   
   <?php 
               $query= 'SELECT * FROM posts ORDER BY id ASC';
               $result=mysqli_query($conn,$query);
               $rowCount= mysqli_num_rows($result);
               if($rowCount > 0){
                   while($row=mysqli_fetch_assoc($result)){
                   ?>


           <div class="post">
               <div class="card">
               <img src="assets/images/<?php echo $row['image']?>" alt="" class="height ">
          <div class="post-info">
            <h4><a  href="about.php?id=<?php echo $row['id']?>"><?php echo $row['title']?></a></h4>
            <p><small><i class="far fa-calendar"></i><?php echo $row['date of creation']?> </small></p>
          </div>
        </div>
        </div>
                 
           <?php
                   }
               }else{
                   echo "No record";
               }
               
               ?>
        

   </div>
</section>
<section>
    <div class="container">
        <div class="header my-4">
            <h3 class="text-center">Recent Post</h3>
        </div>
        <div class="row">
            <div class="col-md-8 ">
                <?php
            $query= 'SELECT * FROM posts ORDER BY id ASC limit 8';
               $result=mysqli_query($conn,$query);
               $rowCount= mysqli_num_rows($result);
               if($rowCount > 0){
                   while($row=mysqli_fetch_assoc($result)){
                   ?>
             
       <div class="d-flex my-3 bg-white">
                <div>
                    <img src="assets/images/<?php echo $row['image']?>" class="card-img-left">
                </div>
                <div class="mx-3" >
                    <h5 class="text-left"><?php echo $row['title']?></h5>
                    <p><small><?php echo $row['date of creation']?></small></p>
                    <p class="text-left"><?php echo $row['body']?></p>
                   
                    </p>
                   <p class="text-center"> <button type="button" class="btn btn-sm btn-success"><a href="about.php?id=<?php echo $row['id'] ?>">Read More</a></button></p>
                </div>
              </div>

             <?php
                   }
               }else{
                   echo "No record";
               }
               
               ?>
        

        
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3 mb-5  p-3">
              <div class="search-bar bg-white">
                  <h3 class="text-dark p-3">Search</h3>
                  <div class="p-3">
                      <input type="text" name="search" placeholder="Search...">
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
<?php include (ROOT_PATH."/app/includes/footer.php") ?>
