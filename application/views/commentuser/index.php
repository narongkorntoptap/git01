<?php $this->load->view('template/header'); ?>
<section id="commentuser">
	<center><?php echo validation_errors('<div class="error">', '</div>'); ?></center>
	<?php echo form_open_multipart("member/commentuser",'class="form-horizontal"');?>
	<div class="container">
		<h1>ประเมิน</h1>
		<div class="row">
		  	<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-bordered fonttable color ">
						<thead>
							<tr class="tablecolor">
								<th>ประเมิน</th>
								<th><center>5</center></th>
								<th><center>4</center></th>
								<th><center>3</center></th>
								<th><center>2</center></th>
								<th><center>1</center></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">- ความสวยงาม</th>
								<td>
									<div class="radio" align="center">
								  		<label>
								    		<input type="radio" name="beautiful" id="5" value="5" <?php echo  set_radio('beautiful', '5'); ?> >
								  		</label>
									</div>
								</td>
								<td>
									<div class="radio" align="center">
								  		<label>
								    		<input type="radio" name="beautiful" id="4" value="4" <?php echo  set_radio('beautiful', '4'); ?> >
								  		</label>
									</div>
								</td>
								<td>
									<div class="radio" align="center">
									  	<label>
									    	<input type="radio" name="beautiful" id="3" value="3" <?php echo  set_radio('beautiful', '3'); ?> >
									  	</label>
									</div>
								</td>
								<td>
									<div class="radio" align="center">
									  	<label>
									    	<input type="radio" name="beautiful" id="2" value="2" <?php echo  set_radio('beautiful', '2'); ?> >
									  	</label>
									</div>
								</td>
								<td>
									<div class="radio" align="center">
									  <label>
									    	<input type="radio" name="beautiful" id="1" value="1" <?php echo  set_radio('beautiful', '1'); ?> >
									  </label>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">- การใช้งาน</th>
								<td>
									<div class="radio" align="center">
								  		<label>
								    		<input type="radio" name="work" id="5" value="5" <?php echo  set_radio('work', '5'); ?> >
								  		</label>
									</div>
								</td>
								<td>
									<div class="radio" align="center">
								  		<label>
								    		<input type="radio" name="work" id="4" value="4" <?php echo  set_radio('work', '4'); ?> >
								  		</label>
									</div>
								</td>
								<td>
									<div class="radio" align="center">
									  	<label>
									    	<input type="radio" name="work" id="3" value="3" <?php echo  set_radio('work', '3'); ?> >
									  	</label>
									</div>
								</td>
								<td>
									<div class="radio" align="center">
									  	<label>
									    	<input type="radio" name="work" id="2" value="2" <?php echo  set_radio('work', '2'); ?> >
									  	</label>
									</div>
								</td>
								<td>
									<div class="radio" align="center">
									  <label>
									    	<input type="radio" name="work" id="1" value="1" <?php echo  set_radio('work', '1'); ?> >
									  </label>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">- อธิบายโค้ด</th>
								<td>
									<div class="radio" align="center">
								  		<label>
								    		<input type="radio" name="code" id="5" value="5" <?php echo  set_radio('code', '5'); ?> >
								  		</label>
									</div>
								</td>
								<td>
									<div class="radio" align="center">
								  		<label>
								    		<input type="radio" name="code" id="4" value="4" <?php echo  set_radio('code', '4'); ?>>
								  		</label>
									</div>
								</td>
								<td>
									<div class="radio" align="center">
									  	<label>
									    	<input type="radio" name="code" id="3" value="3" <?php echo  set_radio('code', '3'); ?>>
									  	</label>
									</div>
								</td>
								<td>
									<div class="radio" align="center">
									  	<label>
									    	<input type="radio" name="code" id="2" value="2" <?php echo  set_radio('code', '2'); ?>>
									  	</label>
									</div>
								</td>
								<td>
									<div class="radio" align="center">
									  <label>
									    	<input type="radio" name="code" id="1" value="1" <?php echo  set_radio('code', '1'); ?>>
									  </label>
									</div>
								</td>
							</tr>
							<tr>
								<th scope="row">- ระยะเวลา</th>
								<td>
									<div class="radio" align="center">
								  		<label>
								    		<input type="radio" name="time" id="5" value="5" <?php echo  set_radio('time', '5'); ?>>
								  		</label>
									</div>
								</td>
								<td>
									<div class="radio" align="center">
								  		<label>
								    		<input type="radio" name="time" id="4" value="4" <?php echo  set_radio('time', '4'); ?>>
								  		</label>
									</div>
								</td>
								<td>
									<div class="radio" align="center">
									  	<label>
									    	<input type="radio" name="time" id="3" value="3" <?php echo  set_radio('time', '3'); ?>>
									  	</label>
									</div>
								</td>
								<td>
									<div class="radio" align="center">
									  	<label>
									    	<input type="radio" name="time" id="2" value="2" <?php echo  set_radio('time', '2'); ?>>
									  	</label>
									</div>
								</td>
								<td>
									<div class="radio" align="center">
									  <label>
									    	<input type="radio" name="time" id="1" value="1" <?php echo  set_radio('time', '1'); ?>>
									  </label>
									</div>
								</td>
							</tr>
						</tbody>
					</table>		
				</div>
			</div>
		  	<div class="form-group">
		    		<label for="text" class="col-sm-2 control-label"></label>
		    		<div class="col-sm-6">
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
			</div>
		</div>
	<?php echo form_close(); ?>

<?php $this->load->view('template/footer'); ?>
</section>