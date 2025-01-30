<?=$this->view('template/adminheader',$data)?>
 <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                  	<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
					  			<span class="li_heart"></span>
					  			<h3>933</h3>
                  			</div>
					  			<p>933 People liked your page the last 24hs. Whoohoo!</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_cloud"></span>
					  			<h3>+48</h3>
                  			</div>
					  			<p>48 New files were added in your cloud storage.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_stack"></span>
					  			<h3>23</h3>
                  			</div>
					  			<p>You have 23 unread messages in your inbox.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_news"></span>
					  			<h3>+10</h3>
                  			</div>
					  			<p>More than 10 news were added in your reader.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_data"></span>
					  			<h3>OK!</h3>
                  			</div>
					  			<p>Your server is working perfectly. Relax & enjoy.</p>
                  		</div>
                  	
                  	</div><!-- /row mt -->
                    <div class="mb-5 border-3">	
                    <form action="" method="post">
                        <label for="search_profile">Search User</label>
                        <input placeholder="type name" id="search_profile" name="search_profile" type="text">
                        <button type="submit">Search</button>
                    </form>
                    </div>
                    <div class="row"> 
                        <?php if(isset($profiles)):?>    
                      	<?php foreach($profiles as $profile):?>
						<div class="col-md-4 mb">
							<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header">
									<h5>PROFILE</h5>
								</div>
								<p><img src="<?=ADMIN?>/img/ui-zac.jpg" class="img-circle" width="80"></p>
								<p><b><?=$profile->name?></b></p>
								<div class="row">
									<div class="col-md-4">
										<p class="small mt">MEMBER SINCE</p>
										<p><?=date("M Y",strtotime($profile->date))?></p>
									</div>
									<div class="col-md-4">
										<p class="small mt">TOTAL SPEND</p>
										<p>$ 47,60</p>
									</div>
									<div class="col-md-4">
										<p class="small mt">Profile ID</p>
										<p><?=$profile->id?></p>
									</div>
								</div>
							</div>
						</div><!-- /col-md-4 -->
                        <?php endforeach;?>
                        <?php endif;?> 
                    </div><!-- /row -->
                    
                    				
				
					
					<div class="row mt">
                      <!--CUSTOM CHART START -->
                      <div class="border-head">
                          <h3>VISITS</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>10.000</span></li>
                              <li><span>8.000</span></li>
                              <li><span>6.000</span></li>
                              <li><span>4.000</span></li>
                              <li><span>2.000</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">JAN</div>
                              <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">FEB</div>
                              <div class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">MAR</div>
                              <div class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top">60%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">APR</div>
                              <div class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top">45%</div>
                          </div>
                          <div class="bar">
                              <div class="title">MAY</div>
                              <div class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top">32%</div>
                          </div>
                          <div class="bar ">
                              <div class="title">JUN</div>
                              <div class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top">62%</div>
                          </div>
                          <div class="bar">
                              <div class="title">JUL</div>
                              <div class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top">75%</div>
                          </div>
                      </div>
                      <!--custom chart end-->
					</div><!-- /row -->	
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    

                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->
              </div><!--/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="<?=PATH?>admin" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=ADMIN?>/js/jquery.js"></script>
    <script src="<?=ADMIN?>/js/jquery-1.8.3.min.js"></script>
    <script src="<?=ADMIN?>/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?=ADMIN?>/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?=ADMIN?>/js/jquery.scrollTo.min.js"></script>
    <script src="<?=ADMIN?>/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?=ADMIN?>/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="<?=ADMIN?>/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?=ADMIN?>/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?=ADMIN?>/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?=ADMIN?>/js/sparkline-chart.js"></script>    
	<script src="<?=ADMIN?>/js/zabuto_calendar.js"></script>	
	
	<script type="text/javascript">
        // $(document).ready(function () {
        // var unique_id = $.gritter.add({
        //     // (string | mandatory) the heading of the notification
        //     title: 'Welcome to Dashgum!',
        //     // (string | mandatory) the text inside the notification
        //     text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
        //     // (string | optional) the image to display on the left
        //     image: '<?=ADMIN?>/img/ui-sam.jpg',
        //     // (bool | optional) if you want it to fade out on its own or just sit there
        //     sticky: true,
        //     // (int | optional) the time you want it to be alive for before fading out
        //     time: '',
        //     // (string | optional) the class name you want to apply to that specific message
        //     class_name: 'my-sticky-class'
        // });

        // return false;
        // });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>