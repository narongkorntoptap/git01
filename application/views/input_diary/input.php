<?php $this->load->view('template/header'); ?>
<center><?php echo validation_errors('<div class="error">', '</div>'); ?></center>
<?php echo form_open_multipart("member/creatework",'class="form-horizontal"');?>
<section id="input_diary">
	<div class="container">
		<h1> Create Diary</h1>
			<div row="row">
			 	<table class="table">

			 		<div class="form-group">
		    			<label for="username" class="col-sm-2 control-label">Username</label>
		    			<div class="col-sm-10">
		    				<input type="hidden" name="username" value="<?php echo $rs->username; ?>">
		      				<p class="form-control-static"><?php echo $rs->username; ?></p>
		  			 	</div>
		  			</div>

				  	<div class="form-group">
				    	<label for="inputPassword3" class="col-sm-2 control-label">เวลาเริ่มงาน</label>
				    	<div class="col-sm-10">
				      		<input type='text' name='stime' class="form-control inputform" value="<?php echo set_value("inmoney"); ?>">
				   		</div>
				  	</div>

				  	<div class="form-group">
				    	<label for="inputPassword3" class="col-sm-2 control-label">เวลาเลิกงา</label>
				    	<div class="col-sm-10">
				      		<input type='text' name='etime' class="form-control inputform" value="<?php echo set_value("inmoney"); ?>">
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

				  	<div class="form-group">
				    	<label for="inputPassword3" class="col-sm-2 control-label">รายละเอียด</label>
				    	<div class="col-sm-10">
				      		<textarea type='text' name='des' class="form-control inputform" value="<?php echo set_value("des"); ?>"></textarea> 
				   		</div>
				  	</div>


				  	<div class="form-group">
		    			<label for="text" class="col-sm-2 control-label"></label>
	    				<div class="col-sm-10">
			    			<input type="hidden" name="username" value="<?php echo $rs->username; ?>">
			    			<input type="hidden" name="id" value="<?php echo $rs->id; ?>">
			    			<input type="hidden" name="password" value="<?php echo $rs->password; ?>">
			    			<input type="hidden" name="fname" value="<?php echo $rs->fname; ?>">
			    			<input type="hidden" name="lname" value="<?php echo $rs->lname; ?>">
			    			<input type="hidden" name="phone" value="<?php echo $rs->phone; ?>">
			    			<input type="hidden" name="email" value="<?php echo $rs->email; ?>">
			    			<input type="hidden" name="text" value="<?php echo $rs->text; ?>">
			    			<input type="hidden" name="sdate" value="<?php echo $rs->sdate; ?>">
			    			<input type="hidden" name="edate" value="<?php echo $rs->edate; ?>">
			    			<input type="hidden" name="upload" value="<?php echo $rs->upload; ?>">
			      			<button type="submit" class="buttonuser">Submit</button>
		  				</div>
					</div>
				

				</table>
			</div>
	</div>
	<?php echo form_close(); ?>
</section>
<?php $this->load->view('template/footer'); ?>