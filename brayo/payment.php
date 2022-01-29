<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href='assets/css/bootstrap.min.css'>
    <link rel="stylesheet" href='assets/css/style.css'>
    <title>MOTOR COMPANY</title>
</head>
<header>
    <nav class="navbar  navbar-expand-lg navbar-light bg-info">
        <a class="navbar-brand text-danger px-3" href="#">MOTOR COMPANY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
     
        <div class="collapse navbar-collapse " id="navbarNav">
          <ul class="nav m-auto">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            </li>
          </ul>
        </div>
       
    </header>

<section>
  <div class="container my-3">
    <div class="header">
      <h2 class="text-center text-secondary">BOOK NOW</h2>
    </div>
    <form method="POST" action="pay.php" class="form-groups">
      <div class="d-flex">
        <h4>Full name</h4>
         <div class="mx-3">
          
          <input class="firstname" type="text" name="first_name" placeholder="first_name" >
         </div>  
         <div>

          
          <input class="lastname" type="text" name="last_name" placeholder="last_name">
         </div> 
        </div>  
          <div>
          <h4 class="name">Email</h4>
          <input class="email" type="email" name="email">
        </div>
        <div>
          <h4>Phone Number</h4>
          <input class="number" type="text" name="phone">
        </div>

        <div>
        <div>
            <h4>CARD NUMBER</h4>
            <input class="number" type="text" name="card_number">
        </div>
        <div>
            <h4>AMOUNT</h4>
            <input class="text" type="text" name="amount">
        </div>
        <div class="text-center">
          <button type="submit"class="btn btn-lg btn-success text-white" name="submit">Make payment</button>
        </div>
     
    </div>

    </form>
  </div>
</section>



 <section class="footer bg-info">
  <div class="container text-white">
      <div class="row py-5">
          <div class="col-md-4 ">
              <h3  class="pb-3">Motor Company</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quibusdam dolor veniam voluptates. Possimus alias porro assumenda sint. Repellat provident sit magni obcaecati possimus sed tempora saepe tenetur aspernatur dolorum?</p>
              <p>123-456-789</p>
              <p>info@gmail.com</p>
              <div>
                  <i class="fab fa-facebook text-white"></i>
                  <i class="fab fa-twitter"></i>
                  <i class="fab fa-google-plus"></i>
                  <i class="fab fa-whatsapp"></i>
              </div>
          </div>
          <div class="col-md-4">
              <h3  class="pb-3">Quick Links</h3>
              <ul>
                  <li><a href="Honda.php">Honda</a></li>
                  <li><a href="mistubishi.php">Mistubishi</a></li>
                  <li><a href="toyota.php">Toyota</a></li>
                  <li><a href="#">Gallery</a></li>
                  <li><a href="#">Terms and Conditions</a></li>
                  </ul>
          </div>
          <div class="col-md-4">
              <h3 class="pb-3">Contact Us</h3>
              <form>
              <div class="my-3">
              <input class="w-100" type="email" name="email" placeholder="Your email address...">
              </div>
              <div class="my-5">
                  <textarea class="w-100" placeholder="Your message" cols="3" row="col"></textarea>
              </div>
              <div class="text-end">
                  <button type="button" name="submit" class="btn btn-lg bg-info">Send</button>
              </div>
          </form>
          </div>
          <div class="bg-info">
              <p class="text-center">&copy; MOTOR COMPANY | Designed by Brayo </p>
          </div>
      </div>
  </div>
</section>
  


</body>
</html>