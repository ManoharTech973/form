<form method="POST" action=" <?php echo base_url()."index.php/sportsctrl/index"; ?> ">

<div class="row">
 <div class="col-md-5">
    <div class="card-mt-5">
        <div class="card-header">
        <h3>Add Sports</h3>
        </div>

        <div class="card-body">
            <label> Sports Name</label>
            <input type="text"  name="sports-name" id="sports-name" class="form-control" />
        </div>
        <span class="text-danger"><?php echo form_error('sports-name'); ?></span>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <?php echo $this->session->flashdata('Added Sucessfully'); ?>

        </div>

    </div>
 </div>

</div>


</form>