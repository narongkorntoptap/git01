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
							<?php if($r->comment == 0){ ?>
								<?php echo form_open("member/commentusershow");?>
								<input type="hidden" name="id" value="<?php echo $r->id; ?>">
								<input type="hidden" name="username" value="<?php echo $r->username; ?>">
								<button type="submit" class="buttonuser">ประเมิน</button> 
								<?php echo form_close(); ?>
							<?php } ?>
							<?php echo form_open("member/edit");?>
							<input type="hidden" name="id" value="<?php echo $r->id; ?>">
							<button type="submit" class="buttonuser">Edit</button> 
							<?php echo form_close(); ?>
						</td>
					</tr>
			
		</tbody>
					

	</table>


<?php $this->load->view('template/footer'); ?>
</section>