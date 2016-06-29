<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#flip1").click(function(){
        $("#panel").slideToggle("slow");
        
    });
});

$(document).ready(function(){
    $("#flip2").click(function(){
        $("#panel2").slideToggle("slow");
        
    });
});
</script>
 
<section id="index">
<?php $this->load->view('template/header'); ?>
		

		<table align="center" width="60%" height="60%">
			<tr>
				<td>
					<div id="flip1">Click to LOGIN</div>
					<button class="buttonuser btn-block" id="panel"><a href="<?php echo site_url('member/login'); ?>">Login</a></button>
					<div id="flip2">Click to REGISTER</div>
					<button class="buttonuser btn-block" id="panel2"><a href="<?php echo site_url('member/create'); ?>">Register</a></button>
				</td>	
			</tr>
		</table>
		
<?php $this->load->view('template/footer'); ?>
</section>