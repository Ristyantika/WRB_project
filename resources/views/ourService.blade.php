<!DOCTYPE html>
<html lang="en">
@include('layout.head')

<body>
<!-- header -->
@include('layout.header')
<!-- //header -->

<!-- services -->
<div class="col-12 mt-lg-0 mt-5 team_grid1" style="text-align: center;">
        <h3 class="heading text-uppercase">Our Services</h3>
</div>
<section class="services" style="margin-bottom: 50px; margin-top: 20px; margin-right: 30px; margin-left: 30px; ">
  <div class="service-overlay py-5">
  <div class="container-fluid py-lg-5 py-3">
    <div class="row service_grids">
      <div class="col-lg-3 col-md-3 mb-lg-0 mb-5 ser_grid1 icon1">
        <span class="fab fa-forumbee"></span>
        <h3>Service One </h3>
        <p>Phasellus congue erat sem, ut tempor mauris tincidunt non. Nulla in erat
        nec orci semper ultrices et sed libero. empor mauris tincidunt</p>
        <a href="#">Read More <span class="fa fa-angle-right"></span></a>
      </div>
      <div class="col-lg-3 col-md-3 mb-lg-0 mb-5 ser_grid1 icon2">
        <span class="fab fa-foursquare"></span>
        <h3>Service Two</h3>
        <p>Phasellus congue erat sem, ut tempor mauris tincidunt non. Nulla in erat
        nec orci semper ultrices et sed libero. empor mauris tincidunt</p>
        <a href="#">Read More <span class="fa fa-angle-right"></span></a>
      </div>
      <div class="col-lg-3 col-md-3 mb-lg-0 mb-5 ser_grid1 icon3">
        <span class="fab fa-first-order"></span>
        <h3>Service Three</h3>
        <p>Phasellus congue erat sem, ut tempor mauris tincidunt non. Nulla in erat
        nec orci semper ultrices et sed libero. empor mauris tincidunt</p>
        <a href="#">Read More <span class="fa fa-angle-right"></span></a>
      </div>
      <div class="col-lg-3 col-md-3 ser_grid1 icon4">
        <span class="fab fa-freebsd"></span>
        <h3>Service Four</h3>
        <p>Phasellus congue erat sem, ut tempor mauris tincidunt non. Nulla in erat
        nec orci semper ultrices et sed libero. empor mauris tincidunt</p>
        <a href="#">Read More <span class="fa fa-angle-right"></span></a>
      </div>
      
    </div>
  </div>
  </div>
</section>
<!-- //services -->


@include('layout.footer')
<!-- js-scripts -->   
@include('layout.main-javascript')


</body>
</html>