<section id="comment">
<?php $this->load->view('template/header'); ?>
	<div class="container">
		<div class="row">
		<button class="buttonuser"><?php echo anchor("member/login","LOGOUT");?></button>
		<button class="buttonuser" onclick='javascript:window.history.back();'>BACK</button>
			<div class="col-md-12">
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
						</tr>	
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-hover">
					<thead>
						<tr>
						
							<th>ความสวยงาม</th>
							<th>การใช้งาน</th>
							<th>อธิบายโค้ด</th>
							<th>ระยะเวลา</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							
							<td><?php echo $rs->beautiful; ?></td>
							<td><?php echo $rs->work; ?></td>
							<td><?php echo $rs->code; ?></td>
							<td><?php echo $rs->time; ?></td>
						</tr>	
					</tbody>
				</table>
			</div>
		</div>
	</div>

<?php $this->load->view('template/footer'); ?>
</section>