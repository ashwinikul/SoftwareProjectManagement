function validate()
			{
				with(document.forms.signup)
				{
					if (name.value == "")
					{
						alert("You must provide a user name!");
						return false;
					}
				
					
					else if ((!document.forms.signup.email.value.match(/.+@.+\.edu$/)) || (email.value == "") )
					{
						alert("You must provide a .edu email adddress!");
						return false;
					}
					else if (source.value == "")
					{
						alert("You must provide a source!");
						return false;					
					}
          
		  			else if (comment.value == "")
					{
						alert("You must provide a comment!");
						return false;					
					}
					
					else if (!agree.checked)
					{
						alert("You must agree to our terms and conditions!");
						return false;
					}
				}
				alert("Your Account has been created successfully...!");
				return true;
			}


function submitVisibility(element)
 {
	var sbmt = document.getElementById("Submit");

    if (element.checked == true)
    {
        sbmt.disabled = false;
    }
    else
    {
        sbmt.disabled = true;
    }
 }