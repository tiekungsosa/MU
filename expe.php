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
    <h1>EXPERIENCE</h1>
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
                  <h2 class="h5 display"><a data-toggle="collapse" data-parent="#recent-activities-wrapper" href="#activities-box" aria-expanded="true" aria-controls="activities-box">Activities</a></h2><a data-toggle="collapse" data-parent="#recent-activities-wrapper" href="#activities-box" aria-expanded="true" aria-controls="activities-box"><i class="fa fa-angle-down"></i></a>
                </div>
                <div id="activities-box" role="tabpanel" class="collapse show">
                  <ul class="activities list-unstyled">
                    <!-- Item-->
                    <li>
                      <div class="row">
                        <div class="col-4 date-holder text-right">
                          <div class="icon"><i class="icon-clock"></i></div>
                          <div class="date"> <h2><span>2018</span></h2></div>
                        </div>
                        <div class="col-8 content"><strong>FREELANCER</strong>
                          <p>พัฒนาเว็บไซต์ทั้ง Fontend และ Back End & ออกแบบกราฟิกดีไซน์ในรูปแบบต่างๆ รับงานออกแบบเว็บไซต์และทำระบบต่างๆ เช่น เว็บไซต์รีสอร์ท  ระบบสำหรับจัดการสินค้าคงคลัง
และ ออกแบบกราฟิก ในส่วนของโปสเตอร์ Gift voucher                </p>
                        </div>
                      </div>
                    </li>
                    <!-- Item-->
                    <li>
                      <div class="row">
                        <div class="col-4 date-holder text-right">
                          <div class="icon"><i class="icon-clock"></i></div>
                          <div class="date"> <h2><span>2017</span></h2></div>
                        </div>
                        <div class="col-8 content"><strong>ร่วมฝึกงานกับบริษัท Icon Framework </strong>
                          <p>ตำแหน่ง Font End Devoloper ได้ทำในส่วนของหน้าเว็บของ สมอ. ปรับปรุงให้มีความทันสมัยมากขึ้นโดยใช้ Bootstap  และ Jquery 
ในการพัฒนา สามารถเข้าไปชมได้ท่ี่่เว็บไซต์ www.tisi.go.th เวลาในการทำงาน 3 เดือน                </p>
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