<div class="row">
  <h2> <center> Student Details </center></h2>
    <div class="col-md-12">
        <table class="table table-stripped" id="student">
            <thead>
                <th>Student Name</th>
                <th>Student Email</th>
                <th>Student Mobile</th>
                <th>Gender</th>
                <th>Course</th>
                <th>Specialization</th>
                <th>Sports</th>
                <th>Photo</th>
                <th>Edit</th>
            </thead>

            <tbody>
              <?php
              if($studentdetails){
                foreach($studentdetails as $details){
                  ?>
                  <tr>
                    <td> <?php echo $details['name']; ?></td>
                    <td><?php echo $details['email']; ?></td>
                    <td><?php echo $details['mobile']; ?></td>
                    <td><?php echo $details['gender']; ?></td>
                    <td><?php echo $details['course_name'];?></td>
                    <td><?php echo $details['speciallization_name'];?></td>
                    <td><?php echo $details['sports'];?></td>
                    <td> <img onerror="this.onerror=null;this.src='https://demofree.sirv.com/nope-not-here.jpg'" src="<?php echo base_url()."uploads/".$details['photo']; ?>" height=50 width=50> </td>
                    <td> <a class="btn btn-primary" href="<?php echo base_url()."index.php/studentdetailsctrl/editstudentdetails/".$details['student_id'];?>">Edit</a> </td>
                  </tr>
                  <?php
                }
              }
              ?>

            </tbody>

        </table>
    </div>
</div>
