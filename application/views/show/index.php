<?php $this->load->view('template/header'); ?>
<section id="show">
	<h1>SHOW DATABASE</h1>
	<button class="buttonuser"><?php echo anchor("member/login","LOGOUT");?></button>
	<div class="table-responsive">
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
			</thead>
			<tbody>
				<?php if(count($rs)>0){ ?>
					<?php foreach($rs as $r){  ?>
						<tr>
							<td><?php echo $r->id;?></td>
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
							<td>
								<?php if($r->comment == 1){ ?>
									<?php echo form_open("member/comment");?>
									<input type="hidden" name="id" value="<?php echo $r->id; ?>">
									<input type="hidden" name="username" value="<?php echo $r->username; ?>">
									<button type="submit" class="buttonuser">ประเมิน</button> 
									<?php echo form_close(); ?>
								<?php } ?>
							</td>
							<td>
								<?php echo form_open("member/update");?>
								<input type="hidden" name="id" value="<?php echo $r->id; ?>">
								<button type="submit" class="buttonuser">Edit</button> 
								<?php echo form_close(); ?>
							</td>
							<td>
								<?php echo form_open("member/delete");?>
								<input type="hidden" name="id" value="<?php echo $r->id; ?>">
								<button class="buttonuser" onclick="javascript:return confirm('ต้องการลบหรือไม่');">DELETE</a></button>
								<?php echo form_close(); ?>
							</td>
						</tr>
					<?php } ?>
				<?php } ?>
			</tbody>
		</table>
	</div>
</section>
<?php $this->load->view('template/footer'); ?>