<?php include '../include/config.php';?>
<?php 
if(!isset($_SESSION['admin'])){
    $vogue->redirect("login");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Messages | VirginVogue</title>
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
  <!-- <link href="../css/style.css" rel="stylesheet"> -->
  
</head>

<body class="alert-info">

    <!---------------------Header---------------------->

    <?php include 'admin_header.php' ?>

    <!------------------------------------------------->



    <!-----------------------Messages-------------------------->

    <div class="container mt-lg-5 mt-lg-0">
    <h1> |Messages</h1>

    <hr class="" style="height: 3px; color: black;">

    <div class="row ">
    <?php $message = $vogue->getData("select * from contact") ; ?>
    <?php foreach($message as $msg): 
    ?>
     <div class="col-lg-6  mx-auto pt-5">
        <div class="card">
            <div class="card-body">
            <a href="?del=<?= $msg['id'];?>" class="text-dark fs-3 float-end" ><i class="bi bi-trash"></i></a>
                <h4 class="card-title">Name:<?= $msg['sender_name']; ?></h4>
                <h6 class="card-title ">Email:<?= $msg['sender_email']; ?></h6>
                <p class="card-title text-small"><?= $msg['date']; ?></p>
                <p class="card-text mt-5"><?= $msg['message']; ?></p>
            </div>
        </div>
     </div>

     <?php endforeach ?>

    </div>
      
    </div>


     <!-- Template Main JS File -->
  <script src="../js/main.js"></script>



</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>



<?php 
if(isset($_GET['del'])){
    $del = $_GET['del'];
    $vogue->deleteData("delete from contact where id= $del");
}
?>
