<?php $this->load->view('template/header'); ?>
<section id="result">
	
			<h1>SHOW DATABASE</h1>
			
				<button class="buttonuser"><?php echo anchor("member/login","LOGOUT");?></button>

	<table class="table table-hover">
		<thead>
			<tr>
				
				<th>Mount</th>
				<th>Income_ALL</th>
				<th>Expenses_All</th>
				<th>Remain_All</th>
				
				
		</thead><!-- <img src=""> -->
		<tbody>
			
					<!-- <?php 
						// echo "<pre>";
						// print_r($this->rs);
						// exit();
					?>
 -->
				
					<?php if(count($rs)>0){ ?>
						<?php foreach($rs as $a){  ?>
							<tr>
								
							<?php $income=$a->inmoney; ?>
							<?php $expenses = $a->outmoney; 
								$result = $income - $expenses;
							?>
						

								<td><?php echo $a->date; ?></td>
								
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