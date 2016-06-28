<?php $this->load->view('template/header'); ?>
<section id="create">
	<center><?php echo validation_errors('<div class="error">', '</div>'); ?></center>
	<?php echo form_open_multipart("member/create",'class="form-horizontal"');?>
	<div class="container">
		<h1>REGISTER</h1>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
		    		<label for="file_name" class="col-sm-2 control-label">Upload</label>
		    		<div class="col-sm-10">
		      			<input type="file" class="form-control inputform" name="file_name" placeholder="Upload" required>
		  			</div>
		  		</div>
		  		<div class="form-group">
		    		<label for="username" class="col-sm-2 control-label">Username</label>
		    		<div class="col-sm-10">
		      			<input type="text" class="form-control inputform" name="username" placeholder="username" value="<?php echo set_value("username"); ?>" >
		      			
		  			</div>
		  		</div>
		  		<div class="form-group">
		    		<label for="password" class="col-sm-2 control-label">Password</label>
		    		<div class="col-sm-10">
		      			<input type="password" class="form-control inputform" name="password" placeholder="Password"  >
		  			</div>
		  		</div>
		  		<div class="form-group">
		    		<label for="fname" class="col-sm-2 control-label">Fristname</label>
		    		<div class="col-sm-10">
		      			<input type="text" class="form-control inputform" name="fname" placeholder="Fristname" value="<?php echo set_value("fname"); ?>" >
		  			</div>
		  		</div>
				<div class="form-group">
		    		<label for="lname" class="col-sm-2 control-label">Surname</label>
		    		<div class="col-sm-10">
		      			<input type="text" class="form-control inputform" name="lname" placeholder="Surname" value="<?php echo set_value("lname"); ?>" >
		  			</div>
		  		</div>
				<div class="form-group">
		    		<label for="phone" class="col-sm-2 control-label">Telephone</label>
		    		<div class="col-sm-10">
		      			<input type="text" class="form-control inputform" name="phone" placeholder="Telephone" value="<?php echo set_value("phone"); ?>" >
		  			</div>
		  		</div>
				<div class="form-group">
		    		<label for="email" class="col-sm-2 control-label">Email</label>
		    		<div class="col-sm-10">
		      			<input type="email" class="form-control inputform" name="email" placeholder="Email" value="<?php echo set_value("email"); ?>" >
		  			</div>
		  		</div>
				<div class="form-group">
		    		<label for="text" class="col-sm-2 control-label">Text</label>
		    		<div class="col-sm-10">
		      			<textarea class="form-control inputform" rows="3" name="text" ><?php echo set_value("text");?></textarea> 
		  			</div>
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
	<?php echo form_close(); ?>

<?php $this->load->view('template/footer'); ?>
</section>