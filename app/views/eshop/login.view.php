<?php $this->view('template/header',$data);?>
	
	<section id="form" style="margin-top: 5px;"><!--form-->
		<div class="container">
			<div class="row" style="text-align: center;">
				<div class="col-sm-4" style="float:none;display:inline-block;">
				<span style="color:red"><?php check_message()?></span>
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form  method="post">
							<input name="email" value="<?=isset($_POST['email'])?$_POST['email']:" "?>" type="email" placeholder="Email Adress" />
							<input name="password"  type="password" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							
							</span>
							<button type="submit" class="btn btn-default">Login</button>
							<a href="<?=PATH?>signup" style="color:grey">Go to SignUp</a>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

	<script>


	</script>
	
	<?php $this->view('template/footer');?>