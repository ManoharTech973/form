<script>
	function validationForm()
	{
        var returnvalue=true;
		
		var stspecialization=$('#sname').val();

       

		if(stspecialization==""){
          $('##sname').addClass("is-invalid");
		  $('#validationspecialization').html("Enter specialization");
		  returnvalue=false;
		}
		else{
			$('#stspecialization').removeClass("is-invalid");

		}

		
		

		return returnvalue;
    }

    </script>