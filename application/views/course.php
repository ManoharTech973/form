

<form method="POST" action="<?php echo base_url()."index.php/course/index"?>">
<div class="row">
<div class="col-md-4">
	<div class="card-mt-5">
	<div class="card-header">
	<h3>Course Data</h3>
	</div>
	<div class="card-body">
    <div class="form-group">

	    <label>Course Name</label>				
	 	 <input type="text" onchange="validationForm()" value="<?php echo set_value('course_name');?>" class="form-control" name="course_name" id="course_name" />
	 	 <div id="validationcourse" class="invalid-feedback">
            
	       </div>
	 	  <span> <?php echo form_error('course_name');?></span>


</div>

</div>

<div class="card-footer">
	<button type="submit" onclick="return validationForm()" class="btn btn-primary">Submit</button>
	<?php echo $this->session->flashdata('registersucess');?>
</div>
</div>
</div>
</form>


