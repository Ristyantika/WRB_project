<!DOCTYPE html>
<html lang="en">
@include('layout.head')

<body>
<!-- header -->
@include('layout.header')
<!-- //header -->

<!-- Partners -->
<div class="col-12 mt-lg-0 mt-5 team_grid1" style="text-align: center;">
        <h3 class="heading text-uppercase">Partners</h3>
</div>
<section class="partners py-5">
  <div class="container">
    <div class="row partner-grids text-center">
      <div class="col-sm-2 col-4">
        <a href="#"><i class="fab fa-angrycreative"></i></a>
      </div>
      <div class="col-sm-2 col-4">
        <a href="#"><i class="fab fa-apper"></i></a>
      </div>
      <div class="col-sm-2 col-4">
        <a href="#"><i class="fab fa-apple-pay"></i></a>
      </div>
      <div class="col-sm-2 col-4">
        <a href="#"><i class="fab fa-aviato"></i></a>
      </div>
      <div class="col-sm-2 col-4">
        <a href="#"><i class="fab fa-aws"></i></a>
      </div>
      <div class="col-sm-2 col-4">
        <a href="#"><i class="fab fa-amazon-pay"></i></a>
      </div>
    </div>
  </div>
</section>
<!-- //Partners -->


@include('layout.footer')
<!-- js-scripts -->   
@include('layout.main-javascript')


</body>
</html>