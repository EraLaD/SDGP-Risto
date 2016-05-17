$(document).ready(function(){
	var is_validEmail = true; //this variable is for email validation only
	$('#signup').click(function(){	
		/*if the email valid then and not yet taken then validate
		  the other required information*/
		if (is_validEmail == true){
			if(Validate() == false){
				return false;
			}		
		}else{
			return false;
		}
	});
	
	$('#uemail').blur(function(){
			/*This code will check the email is still available.
			  We can check the email through ajax request*/
			$.get('registration_bll.php', 'chktype=1&regemail=' + $('#uemail').val(), processData).error('ouch');
			function processData(data) {
				if (data=='true') {
					//email is existing
					is_validEmail = false;
					$('#validation_msg').html('<ul><li>Email is already taken.</li></ul>');
				}else{
					is_validEmail = true;
					$('#validation_msg').html('');				
				}
			}// end processData			
		return false;
	});
	
	

	//Validate function
	function Validate()
	{
		is_valid = true;
		
		/*I used this variable to construct a list (ul)
		  of error meage that will be insert to error div*/
		var val_msg ='<ul>';  
		/* */
		//Check first name if empty
		if($('#name').val() == ''){
			is_valid = false;
			val_msg = val_msg + '<li> Name is required.</li>';
		}
		
		//Check email if empty
		if($('#resemail').val() == ''){
			is_valid = false;
			val_msg = val_msg + '<li>Email is required.</li>';
		}else{
			//validate the format of email
			if(isValidEmailAddress($('#resemail').val()) == false){
				is_valid = false;
				val_msg = val_msg + '<li>Invalid email address.</li>';
			}
		}
		
		//Check the password if empty
		if($('#respassword').val() == ''){
			is_valid = false;
			val_msg = val_msg + '<li>Password is required.</li>';
		}else{
			//Check the number of characters required for a password
			if($('#respassword').val().length < 8 || $('#respassword').val().length > 16){
				is_valid = false;
				val_msg = val_msg + '<li>Password must be 8 to 16 characters.</li>';
			}		
		}
		
		//Check confirm password if it's empty
		if($('#resconf_pass').val() == ''){
			is_valid = false;
			val_msg = val_msg + '<li>Confirm password is required.</li>';
		}else{
			//Check confirm password if it's equal to password
			if($('#resconf_pass').val() != $('#respassword').val()){
				is_valid = false;
				val_msg = val_msg + '<li>Password does not match.</li>';
			}			
		}
		
		