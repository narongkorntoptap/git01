<section id="index">
<?php $this->load->view('template/header'); ?>
		

		<table align="center" width="60%" height="100%">
			<tr>
				<td>
					<button class="buttonuser btn-block"><a href="<?php echo site_url('member/login'); ?>">Login</a></button>
					<button class="buttonuser btn-block"><a href="<?php echo site_url('member/create'); ?>">Register</a></button>
				</td>	
			</tr>
		</table>
		
<?php $this->load->view('template/footer'); ?>
</section>