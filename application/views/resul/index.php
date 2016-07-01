<?php $this->load->view('template/header'); ?>




<table class="table table-hover">
		<thead>
			<tr>
				
				<th>Date</th>
				<th>Starttime</th>
				<th>Endtime</th>
				<th>Description</th>
				<th>Income</th>
				<th>Expenses</th>
				<th>remain of Day</th>

				<!-- <th>Income of Month</th>
				<th>Expenses of Month</th>

				<th>remain of month</th> -->

				
		</thead><!-- <img src=""> -->
		<tbody>
					
					<?php $income=0; $outcome=0; if(count($rs)>0){ ?>
						<?php foreach($rs as $a){  ?>

								
							<?php
								
								$income2=$a->inmoney;
								$expenses2 = $a->outmoney;
								$result2 = $income2 -$expenses2; 
								

							?>
							
								<td><?php echo $a->day; ?>-<?php echo $a->month; ?>-<?php echo $a->year; ?></td>
								<td><?php echo $a->stime; ?></td>
								<td><?php echo $a->etime; ?></td>
								<td><?php echo $a->Des; ?></td>
								<td><?php echo $a->inmoney; ?></td>
								<td><?php echo $a->outmoney; ?></td>
								<td><?php echo $result2;  ?></td>
								
							</tr>
						<?php }
					} 
					?>
		</tbody>

	</table>




<?php $this->load->view('template/footer'); ?>