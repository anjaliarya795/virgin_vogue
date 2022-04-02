
<!-- contact section -->
  <div class="modal fade contact"  id="contact" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-black modal-lg ">
        
          <div class="modal-body">
            <button type="button" class="btn-close float-end btn-light bg-warning" data-bs-dismiss="modal" aria-label="Close"></button>
            <h1 class="modal-title text-white my-3" id="staticBackdropLabel">| Get in touch</h1>
            <form action="" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="sender_name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
              </div>
              <div>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="sender_email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Skills" required></textarea>
              </div>
              <div class="text-center"><button type="submit" name="send_msg">Send Message</button></div>
            </form>
          </div>
      </div>
    </div>
  </div>
  

<!--end contact section-->




<!--================== insert message in db ===================-->

<?php
    if(isset($_POST['send_msg'])){
    
        $data = [
            'sender_name' => $_POST['sender_name'],
            'sender_email' => $_POST['sender_email'],
            'message' => $_POST['message'],
        ];

        if(strlen($data['message'])>2000){
          $vogue->giveAlert('message should not be longer than 250 words.');
      }
      else{
        $vogue->insertData("contact",$data,"index");
        $vogue->giveAlert('Message sent');
      }

    


    }
    
?>
 
