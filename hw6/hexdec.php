<?php
 


function HexToDecimal($hex)
{
    $dec = 0; //initializing
    $len = strlen($hex); //how many digits in hex no
    for ($i = 1; $i <= $len; $i++) 
    {
        $a = bcpow('16', strval($len - $i));
        $b = strval(hexdec($hex[$i - 1]));
       
        $dec = bcadd($dec, bcmul($a,$b));
    }
    return $dec;
}


 if (isset($_POST["Reset"]))
 {
     $_POST["hex"]="";
     $_POST["dec"]="";
 }
?>


<!DOCTYPE html>

<html>
	<head>
		<title>Hexadecimal to decimal Number</title>
	</head>
	<body>
	     <form action="hexdec.php" method="post">  
	     <fieldset>
              <legend>Hexadecimal to Decimal Conversion:</legend>
	    
	     Enter Hexadecimal Number <input type="text" pattern="[a-fA-F0-9]+" name="hex" size="60" value= "<?php if (isset($_POST["hex"])) 
						echo htmlspecialchars($_POST["hex"]); ?>"><br><br>
	     <div><input type="Submit" value="Convert" name="Convert">&nbsp;&nbsp;<input type="Submit" value="Reset" name="Reset"> </div> <br><br>
         Decimal Number is: <input type="text" size="60" name="dec" value="<?php if (isset($_POST["Convert"])) {
     echo HexToDecimal($_POST["hex"]) ;
 }?>"  readonly><br>
     </fieldset>
         </form>
	 </body>
</html> 	 
	 