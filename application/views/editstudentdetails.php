

<form method="POST" action="<?php echo base_url()."index.php/welcome/index"?>" enctype="multipart/form-data">
<div class="row">
<div class="col-md-4 offset-md-4 mt-3">
	<div class="card-mt-5">
	<div class="card-header">
	<h3>Form</h3>
	</div>
	<div class="card-body">
    <div class="form-group">
			<?php
			print_r($studentdetails);


			?>

	<label>Student Name</label>
	 	 <input type="text" onchange="validationForm()" value="<?php echo $studentdetails[0]['name']?>" class="form-control" name="student_name" id="student_name" />
	 	 <div id="validationname" class="invalid-feedback">

	       </div>
	 	  <span class="text-danger"> <?php echo form_error('student_name');?></span>
</div>

<div class="form-group">

   <label>Student Email</label>
      <input type="text" onchange="validationForm()" value="<?php echo $studentdetails[0]['email']?>" class="form-control" name="student_email" id="student_email" />
      <div id="validationemail" class="invalid-feedback">
</div>
<span class="text-danger"> <?php echo form_error('student_email');?></span>


<label>Student Mobile</label>
      <input type="text" onchange="validationForm()" value="<?php echo $studentdetails[0]['mobile']?>" class="form-control" name="student_mobile" id="student_mobile" />
      <div id="validationmobile" class="invalid-feedback">
</div>
<span class="text-danger"> <?php echo form_error('student_mobile');?></span>


<label>Gender</label>
	  <div class="form-check">
  <input class="form-check-input" onchange="validationForm()" type="radio" <?php if($studentdetails[0]['gender']=="male"){ echo "checked"; } ?> value="male"  name="gender" id="gender" <?php echo set_radio('gender','male'); ?> />
  <label class="form-check-label" for="flexRadioDefault1">
    male
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" onchange="validationForm()" type="radio" <?php if($studentdetails[0]['gender']=="female"){ echo "checked"; } ?> value="female" name="gender" id="gender1" <?php echo set_radio('gender','female'); ?>/>
  <label class="form-check-label" for="flexRadioDefault2">
    female
  </label>
  <div id="validationgender" class="invalid-feedback"></div>
    <span class="text-danger"> <?php echo form_error('gender');?></span>
</div>
</div>

<label>Course</label>
      <select name="course_name" onchange="validationForm()" id="course_name" class="form-control select2class">
        <option value="">Please Select</option>
        <?php if($courses){
          foreach($courses as $course){
            ?>
            <option <?php if($studentdetails[0]['course']==$course['course_id']){ echo "selected" ; } ?> <?php echo set_select('course_name',$course['course_id']); ?> value="<?php echo $course['course_id']; ?>"><?php echo $course['course_name']; ?></option>
            <?php
          }
        } ?>


      </select>
      <div id="validationcourse" class="invalid-feedback">
      </div>
<span class="text-danger"> <?php echo form_error('course_name');?></span>

<label>Specialization</label>
      <select name="sname" onchange="validationForm()" id="sname" class="form-control">
        <option value="">Please Select</option>


      </select>
      <div id="validationspecialization" class="invalid-feedback">
</div>
<span class="text-danger"> <?php echo form_error('sname');?></span>

</div>

<div class="form-group">

<label>Sports</label>
<select multiple name="sportsname[]" id="sportsname" class="form-control select2class">
  <option value="">Please Select</option>
  <?php if($sports){
    foreach($sports as $sport){
    ?>
    <option <?php echo set_select('sportsname',$sport['sports_id']); ?> value="<?php echo $sport['sports_id']; ?>"> <?php echo $sport['sports_name']; ?> </option>
    <?php
    }
  }
    ?>

</select>
</div>


<div class="form-group">
<label> Upload Photo</lable>
<input type="file" class="form-control" onchange="validationForm()" name="student_photo" id="student_photo">
<div id="validationphoto" class="invalid-feedback"></div>

</div>

</div>

<div class="card-footer">
	<button type="submit" onclick="return validationForm()" class="btn btn-primary">Submit</button>
	<?php echo $this->session->flashdata('registersucess');?>
</div>

</div>
</div>
</div>
</form>
