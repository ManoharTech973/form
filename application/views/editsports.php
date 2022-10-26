<form method="POST" action="<?php echo base_url()."index.php/sportsctrl/editsports/".$sportsdetails[0]['sports_id']; ?>">
<div class="row">
<div class="col-md-4">
	<div class="card-mt-5">
	<div class="card-header">
	<h3>Edit Sports</h3>
	</div>
	<div class="card-body">
    <div class="form-group">

	    <label>Sports Name</label>
      <input type="hidden" name="sports_id" value="<?php echo $sportsdetails[0]['sports_id']; ?>">
	 	 <input type="text" onchange="validationForm()" value="<?php if(!empty(set_value('sports_name'))){ echo set_value('sports_name'); } else{ echo $sportsdetails[0]['sports_name']; }?>" class="form-control" name="sports_name" id="sports_name" />
	 	 <div id="validationsports" class="invalid-feedback">

	       </div>
	 	  <span> <?php echo form_error('sports_name');?></span>


</div>

</div>

<div class="card-footer">
	<button type="submit" onclick="return validationForm()" class="btn btn-primary">Update</button>
	<?php echo $this->session->flashdata('registersucess');?>
</div>
</div>
</div>
</form>
