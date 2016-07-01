
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

		<table align="center" >
			<tr>
				<td>


					<!-- 
					<button id="register" class="buttonuser btn-block" ><a href="<?php echo site_url('member/login'); ?>">Login</a></button>
					
					<button id="register" class="buttonuser btn-block"><a href="<?php echo site_url('member/create'); ?>">Register</a></button> -->
					<div id="flip">click</div>
					<button id="panel" class="buttonuser btn-block"><a href="<?php echo site_url('member/login'); ?>">Login</a></button>
					<div id="flip2">click</div>
					<button id="panel2" class="buttonuser btn-block"><a href="<?php echo site_url('member/create'); ?>">Register</a></button>

				</td>	
			</tr>
		</table>
		

</section>
<?php $this->load->view('template/footer'); ?>