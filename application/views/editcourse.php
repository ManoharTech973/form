

<form method="POST" action="<?php echo base_url()."index.php/course/editcourse/".$coursedetails[0]['course_id']; ?>">
<div class="row">
<div class="col-md-4">
	<div class="card-mt-5">
	<div class="card-header">
	<h3>Edit Course</h3>
	</div>
	<div class="card-body">
    <div class="form-group">

	    <label>Course Name</label>
      <input type="hidden" name="course_id" value="<?php echo $coursedetails[0]['course_id']; ?>">
	 	 <input type="text" onchange="validationForm()" value="<?php if(!empty(set_value('course_name'))){ echo set_value('course_name'); } else{ echo $coursedetails[0]['course_name']; }?>" class="form-control" name="course_name" id="course_name" />
	 	 <div id="validationcourse" class="invalid-feedback">

	       </div>
	 	  <span> <?php echo form_error('course_name');?></span>


</div>

</div>

<div class="card-footer">
	<button type="submit" onclick="return validationForm()" class="btn btn-primary">Update</button>
	<?php echo $this->session->flashdata('registersucess');?>
</div>
</div>
</div>
</form>
