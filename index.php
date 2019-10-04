<?php
  require_once("functions/function.php");
  get_header();
  get_naverbar();
?>

<section class="dashboard-counts section-padding">
<!-- Contant in here-->
<div class="jumbotron jumbotron-fluid bg-1 text-center">
  <div class="container-fluid">
  	<h3>Do you look some one tes tse tset any?</h3>
  	</br>
  	<img src="img/p.jpg"  width="300" height="200 alt="p" >
  		</br>
  		</br>
    <h1>PROFILE</h1>
  </div>
</div>
</section>

 <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            <!-- To Do List-->

            <div class="col-lg-3 col-md-6">
              <div class="card to-do">
                <h2 class="display h4">PERSONAL</h>
                 <p></p>
                  <li class="d-flex align-items-center"> 
                    <label for="list-1"> NAME : Thanapon Prunktan </label>
                  </li>

                  <li class="d-flex align-items-center">              
                    <label for="list-2">Birth : 25th November 1996</label>
                  </li>
                   <li class="d-flex align-items-center">              
                    <label for="list-2">Relationship : Single</label>
                  </li>
                   <li class="d-flex align-items-center">           
                    <label for="list-2">Nationality : Thailand
                  </li>
                  <li class="d-flex align-items-center">           
                    <label for="list-2">


                  </li>
              </div>
            </div>

            <!-- Pie Chart-->
            <div class="col-lg-3 col-md-6">
              <div class="card project-progress">
                <h2 class="display h4">INTERESTS</h2>
              
                <div class="pie-chart">
                  <canvas id="pieChart" width="300" height="300"> </canvas>
                </div>
              </div>
            </div>
            <!-- Line Chart -->
            <div class="col-lg-6 col-md-12 flex-lg-last flex-md-first align-self-baseline">

              <div class="card sales-report">
                <h2 class="display h4">Profile</h2>
                <p>Soft skills are the personal attributes, personality traits, inherent social cues, and communication abilities  </p>
                <img src="img/Resume.jpg" alt="person" class="img-fluid">
              </div>

            </div>
          </div>
        </div>
      </section>
      
<?php
 get_footer();
?>
