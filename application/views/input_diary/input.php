<?php $this->load->view('template/header'); ?>
<section id="input_diary">
	<div class="container">
		<h1> Create Diary</h1>
			<div row="row">
			 	<table class="table">

			 		<div class="form-group">
		    			<label for="username" class="col-sm-2 control-label">Username</label>
		    			<div class="col-sm-10">
		    				<input type="hidden" name="username" value="<?php echo $r->username; ?>">
		      				<p class="form-control-static"><?php echo $r->username; ?></p>
		  			 	</div>
		  			</div>

				  	<div class="form-group">
				    	<label for="inputPassword3" class="col-sm-2 control-label">รายรับ</label>
				    	<div class="col-sm-10">
				      		<input type='text' name='inmoney' class="form-control inputform" value="<?php echo set_value("inmoney"); ?>">
				   		</div>
				  	</div>

				  	<div class="form-group">
				    	<label for="inputPassword3" class="col-sm-2 control-label">รายจ่าย</label>
				    	<div class="col-sm-10">
				      		<input type='text' name='outmoney' class="form-control inputform" value="<?php echo set_value("outmoney"); ?>">
				   		</div>
				  	</div>

				</table>
			</div>
	</div>
</section>
<?php $this->load->view('template/footer'); ?>