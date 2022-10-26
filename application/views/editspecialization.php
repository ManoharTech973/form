

<form action="<?php echo base_url()?>index.php/specialization/editspecialization/<?php echo $specializations[0]['specialization_id'];?>" method="POST">
<div class="row">
<div class="col-md-4">
<div class="card">
   <div class="card-header">
    <h1>Edit Specilization</h1>
    </div>
    <div class="card-body">
       <div class="form-group">
            <label>Specilization</label>
            <input type="hidden" name="sid" value="<?php echo $specializations[0]['specialization_id']; ?>" />
            <input value="<?php echo $specializations[0]['speciallization_name'];?>" type="text" class="form-control" id="sname" name="sname" />
            <div id="validationspecialization" class="invalid-feedback">
        </div>
        <span class="text-danger"> <?php echo form_error('sname');?></span>

            <label>Course</label>
      <select name="course_name" id="course_name" class="form-control">
        <option value="">Please Select</option>
        <?php if($courses){
          foreach($courses as $course){
            ?>
            <option <?php if($specializations[0]['course_id']==$course['course_id']){ echo "selected"; }?> value="<?php echo $course['course_id']; ?>"><?php echo $course['course_name']; ?></option>
            <?php
          }
        } ?>
         </select>
        <div id="validationcourse" class="invalid-feedback">
        </div>
        <span class="text-danger"> <?php echo form_error('course_name');?></span>


        </div>

    </div>


   <div class="card-footer">
	<button type="submit" onclick="return validationForm()" class="btn btn-primary">Update</button>
	<?php echo $this->session->flashdata('registersucess');?>
   </div>

  </div>
</div>
</form>
