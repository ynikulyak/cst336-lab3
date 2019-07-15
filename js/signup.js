		var usernameAvailable = false;
		$("#zip").on("change", function(){
			//alert( $("#zip").val() ); 
			$.ajax({
				method: "GET",
				url: "https://cst336.herokuapp.com/projects/api/cityInfoAPI.php",
				dataType: "json",
				data: {"zip": $("#zip").val()},
				success: function(result, status){
					//alert(result.city);
					if($("#zip").val().length == 5){
						$("#city").html(result.city);
						$("#latitude").html(result.latitude);
						$("#longt").html(result.longitude);
					}else{
						$("#zipError").html("Zip code not found");
					}
				}
			});
		});
		
		
			$.ajax({
				method: "GET",
				url: "https://cst336.herokuapp.com/projects/api/state_abbrAPI.php",
				dataType: "json",
				data: {"state": $("#state").val()},
				success: function(result, status){
					$("#state").html("<option>Select One</option>");
					for(let i = 0; i < result.length; i++){
						$("#state").append('<option value="' + result[i].usps.toLowerCase() + '">' + result[i].state + '</option>');
					}
				}
			});
	
		
		$("#state").on("change", function(){
			//alert($("#state").val());
			$.ajax({
				method: "GET",
				url: "https://cst336.herokuapp.com/projects/api/countyListAPI.php",
				dataType: "json",
				data: {"state": $("#state").val()},
				success: function(result, status){
					//alert(result[0].county);
					$("#county").html("<option> Select One </option>");
					for(let i = 0; i < result.length; i++){
						$("#county").append("<option>" + result[i].county + "</option>");
					}
				}
			});
		});
		
		
		
		$("#username").change(function(){
			//alert($("#username").val());
		$.ajax({
			method: "GET",
			url: "https://cst336.herokuapp.com/projects/api/usernamesAPI.php",
			dataType: "json",
			data: {"username": $("#username").val()},
			success: function(result, status){
				if(result.available){
					$("#usernameError").html("Username is available");
					$("#usernameError").css("color", "green");
					usernameAvailable = true;
				}
				else{
					$("#usernameError").html("Username is unavailable");
					$("#usernameError").css("color", "red");
					usernameAvailable = false;
				}
			}
		});
	});
		
		$("#signupForm").on("submit", function(event){
			if(!isFormValid()){
				event.preventDefault();
			}
		});
		
		function isFormValid(){
			var isValid = true;
			if(!usernameAvailable){
				isValid = false;
			}
			if($("#username").val().length == 0){
				$("#usernameError").html("Username is required!");
				isValid = false;
			}
			if($("#password").val().length < 6){
				$("#passwordError").html("Required 6 chars minimum");
				isValid = false;
			}
			if($("#password").val() != $("passwordAgain").val()){
				$("#passwordAgainError").html("Password mismatch!");
				isValid = false;
			}
			return isValid;
		}