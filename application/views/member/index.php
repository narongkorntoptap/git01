<section id="index">
<?php $this->load->view('template/header'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
		    $("#flip").click(function(){
		        $("#login").slideToggle("slow");
		    });
		});
	</script>
	<script>
		$(document).ready(function(){
		    $("#flip2").click(function(){
		        $("#register").slideToggle("slow");
		    });
		});
	</script>
 

		<table align="center" width="60%" height="100%">
			<tr>
				<td>
					<div id="flip">click</div>
					<!-- <button id="flip" class="buttonuser btn-block">click login</button> -->
					<button id="login" class="buttonuser btn-block"><a href="<?php echo site_url('member/login'); ?>">Login</a></button>
					<div id="flip2">click</div>
					<!-- <button id="flip2" class="buttonuser btn-block">click register</button> -->
					<button id="register" class="buttonuser btn-block"><a href="<?php echo site_url('member/create'); ?>">Register</a></button>
				</td>	
			</tr>
		</table>
		

</section>
<?php $this->load->view('template/footer'); ?>