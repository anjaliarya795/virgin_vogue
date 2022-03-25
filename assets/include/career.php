
<!-- contact section -->
<div class="modal fade contact"  id="career_apply" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-black modal-lg ">
            
            <div class="modal-body">
                <button type="button" class="btn-close float-end btn-light  bg-warning" data-bs-dismiss="modal" aria-label="Close"></button>
                <h1 class="modal-title text-white my-3" id="staticBackdropLabel">| Work with us</h1>
                <form action="" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="role" id="subject" placeholder="Applying for role" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="skills" rows="8" placeholder="Skills" required></textarea>
                    </div>
                    <div class="text-center"><button type="submit" name="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
  

<!--end contact section-->




<!--================== insert message in db ===================-->

<?php
    
    if(isset($_POST['submit'])){
    
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'role' => $_POST['role'],
            'skills' => $_POST['skills'],
            
        ];

    
       $vogue->insertData("applications",$data,"index");
       
    }
    
    

    
?>
 
