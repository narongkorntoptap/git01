<?php $this->load->view('template/header'); ?>

<div class="container">
	<h1> Create Diary</h1>
		<div row="row">
		 	<table class="table">

		 		<div class="form-group">
			    	<label for="inputPassword3" class="col-sm-2 control-label">username</label>
			    	<div class="col-sm-10">
			      		<input type='text' name='username' class="form-control inputform" value="">
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