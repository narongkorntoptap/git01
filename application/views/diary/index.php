
	<section id="showone">
	
			<h1>SHOW DATABASE</h1>
			
				

	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>username</th>
				
				<th>Date</th>
				<th>Starttime</th>
				<th>Endtime</th>
				<th>Description</th>
				<th>Income</th>
				<th>Expenses</th>
				<th>remain</th>
				
		</thead><!-- <img src=""> -->
		<tbody>
			
					<tr>
						<td><?php echo $r->id?></td>
						<td><?php echo $r->username; ?></td>
					
						<?php  $sdate = date_create($r->sdate); ?>
						<?php  $edate = date_create($r->edate); ?>
						<?php  $d = date_diff($sdate,$edate); ?>
						<td><?php echo $d->format('%a'); ?></td>
						<td><?php echo $r->lname; ?></td>
						<td><?php echo $r->phone; ?></td>
						<td><?php echo $r->email; ?></td>
						<td><?php echo $r->text; ?></td>
						<td><?php echo $r->sdate; ?></td>
						
						
						
					</tr>
			
		</tbody>
					

	</table>


</section>
