<section id="login">
<?php $this->load->view('template/header'); ?>
		<?php echo form_open("member/login",'class="form-horizontal"'); ?>
			<div class="container">
			<h1>LOGIN</h1>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
		    				<label for="username" class="col-sm-2 control-label">Username</label>
		    				<div class="col-sm-6">
		      					<input type="text" class="form-control inputform" name="username" placeholder="Username" required>
		  			 		</div>
		  				</div>
		  				<div class="form-group">
		    				<label for="password" class="col-sm-2 control-label">Password</label>
		    				<div class="col-sm-6">
		      					<input type="password" class="form-control inputform" name="password" placeholder="Password" required>
		  					 </div>
		  				</div>
		  				<div class="form-group">
		    				<label for="text" class="col-sm-2 control-label"></label>
		    				<div class="col-sm-6">
		      					<button type="submit" class="buttonuser">Submit</button>
		  					</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div>
		<?php echo form_close(); ?>
<?php $this->load->view('template/footer'); ?>
</section>