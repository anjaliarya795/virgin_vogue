
  <section class="products px-5" id="products">
    <div class="container ">
      <h1 >| Our Handwriting</h1>
      <hr class="my-5" style="height: 3px; color: yellow;">
    </div>

      <div class="mt-5 pt-5 row" data-aos="fade-left">
          <div class="col-lg-7 mt-5 text-center" data-aos="zoom-in" data-aos-delay="100" style="margin: 0 auto 0;">
            <hr class="mb-5" style="height: 3px; color: yellow;">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
              <?php $product = $vogue->getData("select * from products") ; ?>
              <?php foreach($product as $pro): 
              ?>
                <div class="carousel-item active">
                  <img src="assets/product_images/<?=$pro['image'] ?>" class="d-block w-100" alt="<?=$pro['img_name']?>" >
                </div>

              <?php endforeach;?>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <div class="visually-hidden mt-5">Previous</div>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>

      </div>
      
    <hr class="mt-5" style="height: 3px; color: yellow;">

  </section>
