
<div class="row">
    <div class="col-md-3">
      <h2> <center> Course Details </center></h2>
        <table class="table table-success table-striped" id="student">
            <thead>
                <th>Course Name</th>
                <th>Edit</th>

            </thead>

            <tbody>
              <?php
              if($coursedetails){
                foreach($coursedetails as $details){
                  ?>
                  <tr>
                    <td> <?php echo $details['course_name']; ?></td>
                    <td> <a href="<?php echo base_url()."index.php/course/editcourse/".$details['course_id']; ?>" class="btn btn-primary"> Edit </a>   </td>

                  </tr>

                  <?php
                }
              }
              ?>

            </tbody>

        </table>
    </div>

  </div>
