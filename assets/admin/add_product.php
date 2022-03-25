
<!-- addimg section -->
<div class="modal fade contact"  id="add_product" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-black modal-lg ">
        
          <div class="modal-body">
            <button type="button" class="btn-close float-end btn-light bg-warning" data-bs-dismiss="modal" aria-label="Close"></button>
            <h1 class="modal-title text-warning my-3" id="staticBackdropLabel">| Add product</h1>
            <form action="" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-12 form-group mt-3">
                  <input type="text" name="img_name" class="form-control alert-dark"  placeholder="Name of product" required>
                </div>
              </div>
              <div>
                <div class="col-md-12 form-group mt-3 alert-dark">
                  <input type="file" class="form-control" name="image" placeholder="Your Email" required accept=".jpeg,.png,.gif,.svg,.webp">
                </div>
              </div>
              <div class="form-group mt-5 d-flex justify-content-center">
                <input type="submit" name="add" class="btn btn-outline-warning">
                </div>
          </div>
      </div>
    </div>
  </div>
  

<!--end addimg section-->


<?php 

//Adding product
if(isset($_POST['add'])){
    $temp1 = explode(".",$_FILES['image']['name']);

    $ext = $temp1[1];
    print_r( $temp1);
    
    
    echo $new_name_img = round(microtime(true)) . '.' . $ext; 
    
   

   
    move_uploaded_file($_FILES['image']['tmp_name'],"../product_images/$new_name_img");

    $data = [
      "image"=>$new_name_img,
      "img_name"=>$_POST['img_name'],

    ];
    
    $vogue->insertData("products",$data,"messages");

}

?>