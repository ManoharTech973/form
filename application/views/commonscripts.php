<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$(document).ready(function(){
	<?php $message=$this->session->flashdata('alerts'); ?>
	<?php if($message!=null || $message!=''){ ?>
	var status='<?php echo $message['status']; ?>';
	var message='<?php echo $message['message']; ?>';
	if(status==1){
		Swal.fire({			
			icon: 'success',  			
  			html:message 
		})
	} else if(status==2) {
		Swal.fire({
			icon: 'error',  			
  			html:message
		})
	}
	<?php } ?>
})
</script>

<script>
	$(document).ready(function(){
		$('.select2class').select2();
	})
</script>