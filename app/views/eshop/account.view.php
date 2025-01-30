<?=$this->view('template/header');?>

<div class="container" style="border:2px solid red;margin-bottom:50px;">
<div class="row"> 
                      
<div class="col-md-4 mb" style="background-color: #eee;text-align:center;box-shadow:0px 0px 20px #aaa;">
							<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header">
									<h5>PROFILE</h5>
								</div>
								<p><img src="<?=ADMIN?>/img/ui-zac.jpg" class="img-circle" width="80"></p>
								<p><b><?=$account[0]->name?></b></p>
								<div class="row">
									<div class="col-md-4">
										<p class="small mt">MEMBER SINCE</p>
										<p><?=date("M Y",strtotime($account[0]->date))?></p>
									</div>
									<div class="col-md-4">
										<p class="small mt">TOTAL SPEND</p>
										<p>$ 47,60</p>
									</div>
									<div class="col-md-4">
										<p class="small mt">Profile ID</p>
										<p><?=$account[0]->id?></p>
									</div>
								</div>
								<br>
								<div class="row" style="margin-top:20px;">
									<div class="col-md-6">
										<p style="color: blue; cursor:pointer;" class="small mt"> <i class="fa fa-edit"></i> EDIT</p>
										
									</div>
									<div class="col-md-6">
										<p style="color: red; cursor:pointer;" class="small mt"> <i class="fa fa-trash"></i> DELETE</p>
										
									</div>
								
								</div>
							</div>
						</div><!-- /col-md-4 -->

						
      
</div><!-- /row -->
</div>

<?=$this->view('template/footer');?>