
<section id="index">
<?php $this->load->view('template/header'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
	$(document).ready(function(){
   		$("#flip").click(function(){
        	$("#panel").slideToggle("slow");
    	});
	});
</script>

<script>
	$(document).ready(function(){
   		$("#flip2").click(function(){
        	$("#panel2").slideToggle("slow");
    	});
	});
</script>

		<table align="center" width="60%" style="padding-top: 100px;">
			<tr>
				<td>


					<!-- 
					<button id="register" class="buttonuser btn-block" ><a href="<?php echo site_url('member/login'); ?>">Login</a></button>
					
					<button id="register" class="buttonuser btn-block"><a href="<?php echo site_url('member/create'); ?>">Register</a></button> -->
					<div id="flip" >Click To Login</div>
					<button id="panel" class="buttonuser btn-block"><a href="<?php echo site_url('member/login'); ?>">Login</a></button>
					<div id="flip2">Click To Register</div>
					<button id="panel2" class="buttonuser btn-block"><a href="<?php echo site_url('member/create'); ?>">Register</a></button>

				</td>	
			</tr>
		</table>

		<div class="garden-images">
				<img style="position: relative; width: 100%; padding-top: 100px;" class="img-responsive" src="<?php echo base_url(); ?>images/login/allflowers2.jpg">
		</div>
		

</section>
<?php $this->load->view('template/footer'); ?>