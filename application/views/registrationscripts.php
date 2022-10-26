<script>
	function validationForm()
	{
		
        var returnvalue=true;
		var stname=$('#student_name').val();
		var stemail=$('#student_email').val();
		var stmobile=$('#student_mobile').val();
		var stmobilelength=$('#student_mobile').val().length;
		var stgender=$('input[name="gender"]:checked').val();
		var stcourse=$('#course_name').val();
		var stspecialization=$('#sname').val();
		

        if(stname==""){
          $('#student_name').addClass("is-invalid");
		  $('#validationname').html("Enter Student Name");
		  returnvalue=false;
		}
		else{
			$('#student_name').removeClass("is-invalid");
		}


		if(stemail==""){
			$('#student_email').addClass("is-invalid");
			$('#validationemail').html("Enter Email ID");
			returnvalue=false;
		}
		else{
			$('#student_email').removeClass("is-invalid");
		}


		if(stmobile==""){
			$('#student_mobile').addClass("is-invalid");
			$('#validationmobile').html("Enter Mobile No.");
			returnvalue=false;
		}
		else if(stmobilelength!=10){
			$('#student_mobile').addClass("is-invalid");
			$('#validationmobile').html("Enter 10 digit mobile number");
			returnvalue=false;
		}
		else{
			$('#student_mobile').removeClass("is-invalid");
		}



		if(typeof stgender=="undefined"){
			$('#gender').addClass("is-invalid");
			$('#gender1').addClass("is-invalid");
			$('#validationgender').html("Please select Gender");
			
			returnvalue=false;

		}
		else{
			$('#gender').removeClass("is-invalid");
			$('#gender1').removeClass("is-invalid");
		}

		if(stcourse==""){
			$('#course_name').addClass("is-invalid");
			$('#validationcourse').html("Please select Course");
			returnvalue=false;
		}
		else{
			$('#course_name').removeClass("is-invalid");
		}

		if(stspecialization==""){
			$('#sname').addClass("is-invalid");
			$('#validationspecialization').html("Please select Specialization");
			returnvalue=false;
		}
		else{
			$('#sname').removeClass("is-invalid");
		}
		
		if($('#student_photo').get(0).files.length==0){
			$('#student_photo').addClass("is-invalid");
			$('#validationphoto').html("Please upload photo");
			

		}
		else{
			$('#student_photo').removeClass("is-invalid");
		}
		

		return returnvalue;
    }

    </script>


 <script>
  $('#course_name').on("change",function(){

	var courseId=$('#course_name').val();
	$.ajax({
		type:"POST",
		dataType:"JSON",
		url:"<?php echo base_url()."index.php/specialization/getSpecializationByCourseId"; ?>",
        data:{
			'course_id':courseId
		},
		success:function(data){
			var option = "<option value=''>Please Select</option>";
			for(var i=0;i<data.length;i++){
				option += "<option value="+data[i]['specialization_id']+">"+data[i]['speciallization_name']+"</option>";
			}
			$('#sname').html(option);
		}

	})
  })

 </script>

