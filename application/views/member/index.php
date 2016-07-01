
<section id="index">
<?php $this->load->view('template/header'); ?>


		<table align="center" >
			<tr>
				<td>


					<!-- 
					<button id="register" class="buttonuser btn-block" ><a href="<?php echo site_url('member/login'); ?>">Login</a></button>
					
					<button id="register" class="buttonuser btn-block"><a href="<?php echo site_url('member/create'); ?>">Register</a></button> -->

					<button class="buttonuser btn-block"><a href="<?php echo site_url('member/login'); ?>">Login</a></button>
					<button class="buttonuser btn-block"><a href="<?php echo site_url('member/create'); ?>">Register</a></button>

				</td>	
			</tr>
		</table>
		

</section>
<?php $this->load->view('template/footer'); ?>