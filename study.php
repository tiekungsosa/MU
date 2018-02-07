<?php
  require_once("functions/function.php");
  get_header();
  get_naverbar();
?>
<section class="dashboard-counts section-padding">
<!-- Contant in here-->
<div class="jumbotron jumbotron-fluid bg-1 text-center">
  <div class="container-fluid">
  	<h3>skill, practical knowledge, practice.</h3>
  	</br>
    <h1>EDUCATION</h1>
  </div>
</div>
</section>

<section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
          		 <div class="col-lg-12 col-md-12">
              <!-- Recent Activities Widget      -->
              <div id="recent-activities-wrapper" class="card updates activities">
                <div id="activites-header" class="card-header d-flex justify-content-between align-items-center">
                  <h2 class="h5 display"><a data-toggle="collapse" data-parent="#recent-activities-wrapper" href="#activities-box" aria-expanded="true" aria-controls="activities-box"></a></h2><a data-toggle="collapse" data-parent="#recent-activities-wrapper" href="#activities-box" aria-expanded="true" aria-controls="activities-box"><i class="fa fa-angle-down"></i></a>
                </div>
                <div id="activities-box" role="tabpanel" class="collapse show">
                  <ul class="activities list-unstyled">
                    <!-- Item-->
                    <li>
                      <div class="row">
                        <div class="col-4 date-holder text-right">
                          <div class="icon"><i class="icon-clock"></i></div>
                          <div class="date"> <h2><span>2016</span></h2></div>
                        </div>
                        <div class="col-8 content"><strong>UNIVERSITY</strong>
                          <p>College of Arts, Media and Technology CHIANGMAI UNIVERSITY   </p>
                          <p> Modern Management and Information Technology Programs</p>
                        </div>
                      </div>
                    </li>
                    <!-- Item-->
                    <li>
                      <div class="row">
                        <div class="col-4 date-holder text-right">
                          <div class="icon"><i class="icon-clock"></i></div>
                          <div class="date"> <h2><span>2015</span></h2></div>
                        </div>
                        <div class="col-8 content"><strong>HIGHT SCHOOL</strong>
                          <p>YUPPARAJ WITTAYALAI SCHOOL</p>
                          <p>English - Japan Programs </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          	</div>
          </div>
      </section>
      
<?php
 get_footer();
?>