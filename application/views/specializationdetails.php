

<div class="row">

    <div class="col-md-4">
      <h2> <center>  Specialization Details </center></h2>
        <table class="table table-success table-striped" id="student">
            <thead>

                <th>Specialization Name</th>
                <th>Course Name</th>
                <th>Edit</th>

            </thead>

            <tbody>
              <?php
              if($coursedetails){
                foreach($specializationdetails as $details){
                  ?>
                  <tr>

                    <td> <?php echo $details['speciallization_name']; ?></td>
                    <td> <?php echo $details['course_name']; ?></td>
                    <td> <a href="<?php echo base_url()."index.php/specialization/editspecialization/".$details['specialization_id']; ?>" class="btn btn-primary">Edit</a> </td>

                  </tr>
                  <?php
                }
              }
              ?>

            </tbody>

        </table>
    </div>

  </div>
