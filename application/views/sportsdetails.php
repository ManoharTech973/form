<div class="row">
      
    <div class="col-md-3">
        <h2> <center>  Sports Details </center></h2>
      <table class="table table-striped table-success" id="student">
        <thead>
          <tr>
            <th>Sports Name</th>
            <th>Edit</th>
          </tr>

        </thead>
        <tbody>
          <?php
          if($sportsdetails){
            foreach($sportsdetails as $details){
          ?>
          <tr>
            <td> <?php echo $details['sports_name']; ?> </td>
            <td> <a href="<?php echo base_url()."index.php/sportsctrl/editsports/".$details['sports_id']; ?>" class="btn btn-primary"> Edit </a>   </td>
          </tr>
        <?php
         }
        }
        ?>
        </tbody>

      </table>

    </div>

  </div>
