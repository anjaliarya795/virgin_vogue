<?php include '../include/config.php';
if(isset($_SESSION['admin'])){
  $vogue->redirect("messages");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AdminLogin | VirginVogue</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!--  bootstrap CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">  
  
  <!--bootstrap icons link-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  
  <!-- box icon -->
  <!-- <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> -->
  
  <!-- Template Main CSS File -->
  <link href="../css/style.css" rel="stylesheet">
  
</head>

<body style="background-color: black;">

    <!---------------------Header---------------------->

    <?php //include 'admin_header.php' ?>



    <div class="container mt-lg-5 mt-lg-0">

    <div class="row mt-5 pt-5 ">
     <div class="col-lg-6 mt-5 mx-auto pt-5">
       <div class="card text-start|center|end contact bg-dark mt-5 px-5 pb-5 alert-warning">
        <form action="" method="post" role="form" class="php-email-form mt-5">
                <div class=" my-3 form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mt-3 form-group my-3 mt-md-0">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
            <div class="text-center"><button type="submit" name="login">Login</button></div>
        </form>

         </div>
       </div>
     </div>

    </div>
      
    </div>


     <!-- Template Main JS File -->
  <script src="../js/main.js"></script>



</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>



<?php
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password =($_POST['password']);
        $check = $vogue->countData("select * from admin where email='$email' AND password = '$password'");

        if($check > 0){
            $_SESSION['admin'] = $email;
            $vogue->redirect("messages");
        }
        else{
            $vogue->giveAlert("Incorrect email or password, please try again");
        }
    }
?>