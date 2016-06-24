<!-- <img src="../../images/flag/<?php echo $r->upload; ?>"> -->
<!-- value="<?php echo $r->username; ?>" -->
<?php $this->load->view('template/header'); ?>
<section id="create">
	<?php echo validation_errors(); ?>
	<?php echo form_open_multipart("member/edit",'class="form-horizontal"');?>
	<!-- <?php echo $r->id; ?> -->
	<div class="container">
		<h1>Update</h1>
		<div class="row">
			<div class="col-md-12">
				<img src="<?php echo base_url(); ?>images/flag/<?php echo $r->upload; ?>">
				<div class="form-group">
		    		<label for="file_name" class="col-sm-2 control-label">Upload</label>
		    		<div class="col-sm-6">
		      			<input type="file" class="form-control inputform" name="file_name" placeholder="Upload" >
		  			 </div>
		  		</div>
		  		<div class="form-group">
		    		<label for="username" class="col-sm-2 control-label">Username</label>
		    		<div class="col-sm-6">
		    			<input type="hidden" name="username" value="<?php echo $r->username; ?>">
		      			<p class="form-control-static"><?php echo $r->username; ?></p>
		  			 </div>
		  		</div>
		  		<div class="form-group">
		    		<label for="password" class="col-sm-2 control-label">Password</label>
		    		<div class="col-sm-6">
		      			<input type="password" class="form-control inputform" placeholder="Password" name="password" required>
		  			 </div>
		  		</div>
		  		<div class="form-group">
		    		<label for="fname" class="col-sm-2 control-label">Fristname</label>
		    		<div class="col-sm-6">
		      			<input type="text" class="form-control inputform" name="fname" value="<?php echo $r->fname; ?>" required>
		  			 </div>
		  		</div>
				<div class="form-group">
		    		<label for="lname" class="col-sm-2 control-label">Surname</label>
		    		<div class="col-sm-6">
		      			<input type="text" class="form-control inputform" name="lname" value="<?php echo $r->lname; ?>" required>
		  			 </div>
		  		</div>
				<div class="form-group">
		    		<label for="phone" class="col-sm-2 control-label">Telephone</label>
		    		<div class="col-sm-6">
		      			<input type="text" class="form-control inputform" name="phone" value="<?php echo $r->phone; ?>" required>
		  			 </div>
		  		</div>
				<div class="form-group">
		    		<label for="email" class="col-sm-2 control-label">Email</label>
		    		<div class="col-sm-6">
		      			<input type="email" class="form-control inputform" name="email" value="<?php echo $r->email; ?>" required>
		  			 </div>
		  		</div>
				<div class="form-group">
		    		<label for="text" class="col-sm-2 control-label">Text</label>
		    		<div class="col-sm-6">
		      			<textarea class="form-control inputform" rows="3" name="text" required><?php echo $r->text; ?></textarea> 
		  			 </div>
		  		</div>
		  		<div class="form-group">
		    		<label for="text" class="col-sm-2 control-label"></label>
		    		<div class="col-sm-6">
		      			<input type="hidden" name="id" value="<?php echo $r->id; ?>"><button type="submit" class="buttonuser">Submit</button>
		      			<button class="buttonuser" onclick='javascript:window.history.back();'>BACK</button>
		  			</div>
		  		
				</div>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>
	
</section>
<?php $this->load->view('template/footer'); ?>