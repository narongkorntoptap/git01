<?php $this->load->view('template/header'); ?>
<section id="showone">
	
			<h1>SHOW DATABASE</h1>
			
				<button class="buttonuser"><?php echo anchor("member/login","LOGOUT");?></button>

			
			

	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>username</th>
				
				<th>fname</th>
				<th>lname</th>
				<th>phone</th>
				<th>email</th>
				<th>text</th>
				<th>sdate</th>
				<th>edate</th>
				<th>date</th>
				<th>img</th>
			</tr>
		</thead><!-- <img src=""> -->
		<tbody>
			
					<tr>
						<td><?php echo $r->id?></td>
						<td><?php echo $r->username; ?></td>
					
						<td><?php echo $r->fname; ?></td>
						<td><?php echo $r->lname; ?></td>
						<td><?php echo $r->phone; ?></td>
						<td><?php echo $r->email; ?></td>
						<td><?php echo $r->text; ?></td>
						<td><?php echo $r->sdate; ?></td>
						<td><?php echo $r->edate; ?></td>
						<?php  $sdate = date_create($r->sdate); ?>
						<?php  $edate = date_create($r->edate); ?>
						<?php  $d = date_diff($sdate,$edate); ?>
						<td><?php echo $d->format('%a'); ?></td>
						<td><img src="<?php echo base_url(); ?>images/flag/<?php echo $r->upload; ?>"></td>
						<!-- $id = <?php echo $r->id?>; -->
						<td>

								<?php echo form_open("member/work");?>
								<input type="hidden" name="username" value="<?php echo $r->username; ?>">
								<button type="submit" class="buttonuser">diary</button> 
								<?php echo form_close(); ?>
							

							<?php if($r->comment == 0){ ?>
								<?php echo form_open("member/commentusershow");?>
								<input type="hidden" name="id" value="<?php echo $r->id; ?>">
								<input type="hidden" name="username" value="<?php echo $r->username; ?>" >
								<button type="submit" class="buttonuser">ประเมิน</button> 
								<?php echo form_close(); ?>
							<?php } ?>

							<?php echo form_open("member/resultall");?>
								<input type="hidden" name="username" value="<?php echo $r->username; ?>">
								<button type="submit" class="buttonuser">ผลรายเดือน</button> 
								<?php echo form_close(); ?>

							<?php echo form_open("member/edit");?>
							<input type="hidden" name="id" value="<?php echo $r->id; ?>">
							<input type="hidden" name="username" value="<?php echo $r->username; ?>">
							<button type="submit" class="buttonuser">Edit</button> 
							<?php echo form_close(); ?>
						</td>
					</tr>
			
		</tbody>
					

	</table>

	<?php echo form_open("member/resultall");?>
		
		<div class="col-md-6">
			<button type="submit" class="buttonuser">ผลรายเดือน----></button> 
		</div>
		
		<div class="col-md-6">
			<div class="form-group">
	      		<p align="center">
	      			<label for="role">month</label>
	      	
						<select name="month">
							<option value = "Please Choose Month">Please Choose Month</option>	
								<?php  
									
									$mountt = array(
										 "1"=>"January",
										 "2"=>"Fabuary",
										 "3"=>"March",
										 "4"=>"Apil",
										 "5"=>"May",
										 "6"=>"June",
										 "7"=>"July",
										 "8"=>"August",
										 "9"=>"September",
										 "10"=>"Octorber",
										 "11"=>"Novamber",
										 "12"=>"December");
										
										foreach($mountt as $x => $x_value) {
													echo "<option value = ".$x.">";
													echo $x_value . "<br>";
													echo "</option>";
												}
								?>
						</select>	
					</p>
				</div>	
			
			
			<div class="form-group">
	      		<p align="center">	
		      		<label for="role">Year</label>
							<select name="year">
								<option value = "Please Choose Year">Please Choose Year</option>
									<?php  
										for ($y = 1900; $y <= 2016 ; $y++) {
											  	echo "<option>";
												echo $y . "<br>";
												echo "</option>";
										}
										
									?>
							</select>
				</p>
			</div>	
		
		</div>
			
		
	<?php echo form_close(); ?>


	<table class="table table-hover">
		<thead>
			<tr>
				
				<th>Date</th>
				<th>Starttime</th>
				<th>Endtime</th>
				<th>Description</th>
				<th>Income</th>
				<th>Expenses</th>
				<th>remain</th>
				
		</thead><!-- <img src=""> -->
		<tbody>
			
					<?php if(count($rs)>0){ ?>
						<?php foreach($rs as $a){  ?>
							<tr>
								
							<?php $income=$a->inmoney; ?>
							<?php $expenses = $a->outmoney; 
								$result = $income - $expenses;
							?>
								<td><?php echo $a->date; ?></td>
								<td><?php echo $a->stime; ?></td>
								<td><?php echo $a->etime; ?></td>
								<td><?php echo $a->Des; ?></td>
								<td><?php echo $a->inmoney; ?></td>
								<td><?php echo $a->outmoney; ?></td>
								<td><?php echo $result;  ?></td>
							</tr>
						<?php }
					} 
					?>
		</tbody>
	</table>




<?php $this->load->view('template/footer'); ?>
</section>