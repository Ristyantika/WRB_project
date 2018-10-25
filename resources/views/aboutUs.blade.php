<!DOCTYPE html>
<html lang="en">
@include('layout.head')

<body>
<!-- header -->
@include('layout.header')
<!-- //header -->

<!-- Team -->
<div class="col-12 mt-lg-0 mt-5 team_grid1" style="text-align: center;">
        <h3 class="heading text-uppercase">Company Profile</h3>
        <h4>Canggihnya Indonesia Anugerah</h4>
</div>
<section class="team py-5 my-lg-5 my-3">
  <div class="container-fluid ">
    <div class="row aboutUs_grid" style="margin-right: 20px">
      <div class="col-lg-4 col-md-6 mt-md-0 mt-5 team_grid1">
        <img src="{{asset('bootstrap/images/Logo CIA.png')}}" style="max-width: 300px; margin-left: auto; margin-right: auto; display: block;">
      </div>
      <div class=" col-lg-8 col-md-6" style=" margin-bottom: 30px;">
        <h3 class="heading text-uppercase">Makna Logo</h3>
        <br>
        <h4>Logo  CIA  berbentuk  bulat  yang  mewakili  tekad  kami untuk menjadi perusahaan pemimpin dalam bidang ICT</h4>
        <br>
        <h4>Warna  orange  melambangkan  optimisme  kami  untuk menjadi pemimpin dalam mencanggihkan bangsa ini.</h4>
      </div>
    </div>
    <br>
    <h3 class="heading text-uppercase" style="text-align: center;">Bidang Usaha</h3>
    <br>
    <h4 style="text-align: center;">System Integration, Project Financing, Total Solution</h4>
  </div>
</section>
<!-- //Team -->


@include('layout.footer')
<!-- js-scripts -->   
@include('layout.main-javascript')


</body>
</html>