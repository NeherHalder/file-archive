@if(session()->has('success'))
	<div class="alert alert-success flash-msg" style="margin-top: 15px;">
	    {{ session()->get('success') }}
	</div>
@endif

@if(session()->has('warning'))
	<div class="alert bg-red flash-msg">
	    {{ session()->get('warning') }}
	</div>
@endif
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	        	$('.flash-msg').delay(7000).fadeOut(1000);
	});
</script>