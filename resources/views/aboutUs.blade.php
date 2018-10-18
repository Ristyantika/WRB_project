<!DOCTYPE html>
<html lang="en">
@include('layout.head')

<body>
<!-- header -->
@include('layout.header')
<!-- //header -->

<!-- Team -->
<div class="col-12 mt-lg-0 mt-5 team_grid1" style="text-align: center;">
        <h3 class="heading text-uppercase">About US</h3>
</div>
<section class="team py-5 my-lg-5 my-3">
  <div class="container-fluid ">

  <div class="row team_grids" style="margin-left: 150px; margin-right: 200px; border-style: solid; margin-bottom: 50px">
    <div class="col-lg-2 col-md-3 col-6 mb-5 w3l_team_grid" style="margin-top: 50px; margin-bottom: 50px">
      <div class="view view-second">
        <img src="{{asset('bootstrap/images/t1.jpg')}}" alt=" " class="img-fluid" />
      </div>
      <h4 class="my-2">Alexander</h4>
      <p>CEO & Founder</p>
    </div>

    <div class="col-lg-10 col-12 mb-lg-0 mb-4 team_grid1" style="margin-top: 50px; margin-bottom: 50px">
      <h4 class="heading text-uppercase">Teknik Informatika ITS</h4>
      <p>vel tincidunt justo leo eget ex Nam vel feugiat aliquam, vel tincidunt justo facilisis. Nunc Nam vel feugiat</p>
      <p class="second_para"> Vestibulum venenatis leo eget ex aliquam, vel tincidunt justo facilisis. Nunc
      egestas lacus in velit aliquam, sed rutrum ex tempor. Nam vel feugiat odio. Pellentesque efficitur dapibus augue.</p>
    </div>
      
  </div>
  <div class="row team_grids" style="margin-left: 150px; margin-right: 200px; border-style: solid; margin-bottom: 50px">

    <div class="col-lg-2 col-md-3 col-6 mb-5 w3l_team_grid" style="margin-top: 50px; margin-bottom: 50px">
        <div class="view view-second">
          <img src="{{asset('bootstrap/images/t2.jpg')}}" alt=" " class="img-fluid" />
        </div>
        <h4 class="my-2">David Richard</h4>
        <p>Co-founder</p>
      </div>

    <div class="col-lg-10 col-12 mb-lg-0 mb-4 team_grid1" style="margin-top: 50px; margin-bottom: 50px">
      <h4 class="heading text-uppercase">Teknik Informatika ITS</h4>
      <p>vel tincidunt justo leo eget ex Nam vel feugiat aliquam, vel tincidunt justo facilisis. Nunc Nam vel feugiat</p>
      <p class="second_para"> Vestibulum venenatis leo eget ex aliquam, vel tincidunt justo facilisis. Nunc
      egestas lacus in velit aliquam, sed rutrum ex tempor. Nam vel feugiat odio. Pellentesque efficitur dapibus augue.</p>
    </div>
  </div>

  <div class="row team_grids" style="margin-left: 150px; margin-right: 200px; border-style: solid; margin-bottom: 50px">

    <div class="col-lg-2 col-md-3 col-6 w3l_team_grid" style="margin-top: 50px; margin-bottom: 50px">
        <div class="view view-second">
          <img src="{{asset('bootstrap/images/t3.jpg')}}" alt=" " class="img-fluid" />
        </div>
        <h4 class="my-2">Michael Doe</h4>
        <p>General Manager</p>
      </div>

    <div class="col-lg-10 col-12 mb-lg-0 mb-4 team_grid1" style="margin-top: 50px; margin-bottom: 50px">
      <h4 class="heading text-uppercase">Teknik Informatika ITS</h4>
      <p>vel tincidunt justo leo eget ex Nam vel feugiat aliquam, vel tincidunt justo facilisis. Nunc Nam vel feugiat</p>
      <p class="second_para"> Vestibulum venenatis leo eget ex aliquam, vel tincidunt justo facilisis. Nunc
      egestas lacus in velit aliquam, sed rutrum ex tempor. Nam vel feugiat odio. Pellentesque efficitur dapibus augue.</p>
    </div>
  </div>

  <div class="row team_grids" style="margin-left: 150px; margin-right: 200px; border-style: solid; margin-bottom: 50px">

     <div class="col-lg-2 col-md-3 col-6 w3l_team_grid" style="margin-top: 50px; margin-bottom: 50px">
        <div class="view view-second">
          <img src="{{asset('bootstrap/images/t4.jpg')}}" alt=" " class="img-fluid" />
        </div>
        <h4 class="my-2">Thomas Ridge</h4>
        <p>Assistant Manager</p>
      </div>

    <div class="col-lg-10 col-12 mb-lg-0 mb-4 team_grid1" style="margin-top: 50px; margin-bottom: 50px">
      <h4 class="heading text-uppercase">Teknik Informatika ITS</h4>
      <p>vel tincidunt justo leo eget ex Nam vel feugiat aliquam, vel tincidunt justo facilisis. Nunc Nam vel feugiat</p>
      <p class="second_para"> Vestibulum venenatis leo eget ex aliquam, vel tincidunt justo facilisis. Nunc
      egestas lacus in velit aliquam, sed rutrum ex tempor. Nam vel feugiat odio. Pellentesque efficitur dapibus augue.</p>
    </div>
  </div>

  </div>
</section>
<!-- //Team -->


@include('layout.footer')
<!-- js-scripts -->   
@include('layout.main-javascript')


</body>
</html>