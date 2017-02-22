<?php 
    /****************************
	Simple php Program for Review form Submisiion
	Ashwini Kulkarni
    
     ****************************/

    // array of source
    $SOURCE = array(
    		"Google",
    		"Friend",
    		"Advert",
    		"Other"
    	);

    // if form was actually submitted, check for error    
    if (isset($_POST["Submit"]))
    {
        if (empty($_POST["name"]) ||
        	empty($_POST["email"]) || 
	        empty($_POST["visitInterest"]) ||
	        empty($_POST["source"]) ||
	        empty($_POST["comment"]) || 
	        empty($_POST["agree"]))	
        {
	        $error = true;
	    }
	    else
	    {
	    	header("Location:Comfirmation.html");
	    }
    }
    
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Sign Up</title>
	</head>
	<body>
        <?php if (isset($error)): ?>
        		<div style="color: red">You must fill out the form!</div>
      		<?php endif ?>
        
    <form action="hw6.php" method="post">    
        <fieldset>
              <legend>Your Details:</legend>
              Name: <input type="text"  name="name" size="60" value= "<?php if (isset($_POST["name"])) 
						echo htmlspecialchars($_POST["name"]); ?>"><br>
              Email: <input type="text" name="email" size="60" value = "<?php if (isset($_POST["email"]))
						echo htmlspecialchars($_POST["email"]); ?>"><br>
         </fieldset>
        
        <fieldset>
	    <legend>Your Review:</legend>
	    <br> <!--Adding space between line-->
 
	    <div>How did you hear about us? 
            <select name="source">
            <?php 
						foreach ($SOURCE as $source)
						{
							if (isset($_POST["source"]) && $_POST["source"] == $source)
								echo "<option selected='selected' value='$source'>$source</option>";
							else
								echo "<option value='$source'>$source</option>";
					 	}
		    ?>    
        
	        </select></div> 

	    <br>

	    <div>Would you visit again? <br>
            <input type="radio" name="visitInterest" value="yes" checked <?php if ((isset($_POST["visitInterest"]) && $_POST["visitInterest"] == "yes")) 
								echo "checked"; ?>> Yes
            <input type="radio" name="visitInterest" value="no" <?php if ((isset($_POST["visitInterest"]) && $_POST["visitInterest"] == "no")) 
								echo "checked"; ?>> No
	        <input type="radio" name="visitInterest" value="maybe" <?php if ((isset($_POST["visitInterest"]) && $_POST["visitInterest"] == "maybe")) 
								echo "checked"; ?>> Maybe<br></div>
	
    	<br>
	
	    <div>Comments:<br><textarea name="comment" id="comment" rows="8" cols="60"><?php if (isset($_POST["comment"]))
						echo htmlspecialchars($_POST["comment"]); ?></textarea><br /></div>
  
	    <br>
	
	    <div><input type="checkbox" name="agree" value="yes">Sign me up for email updates</div>
	
    	<br>
	
	    <div><input type="Submit" value="Submit Review" name="Submit"></div>
	    

     </fieldset>
      </form>  

	</body>
</html>
