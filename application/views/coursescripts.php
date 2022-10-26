<script>
	function validationForm()
	{
        var returnvalue=true;
		
		var stcourse=$('#course_name').val();

       

		if(stcourse==""){
          $('#course_name').addClass("is-invalid");
		  $('#validationcourse').html("Enter Course Name");
		  returnvalue=false;
		}
		else{
			$('#course_name').removeClass("is-invalid");

		}

		
		

		return returnvalue;
    }

    </script>
