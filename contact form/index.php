<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h3 class="text-center text-danger"> Get In Touch </h3>
                <h5 class="text-center">Fill in the fields</h5>
                <form class="form-group" action="contact.php" method="post">
                    <input type="text" name="name" class="form-control my-2" placeholder="Full Name"/>
                    <input type="email" name="email" class="form-control  my-2" placeholder="E-MAIL"/>
                    <input type="text" name="subject" class="form-control  my-2" placeholder="SUBJECT"/>
                    <textarea name="message" placeholder="Enter Message" class="form-control  my-2"></textarea>
                    <button type="submit" class="btn btn-dark btn-small  my-2" name="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>