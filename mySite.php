<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Stuart Parker</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>



<body>



<div class="jumbotron text-center">
			<p>Hi There!<br> My name is Stuart Parker, and this is my page.<br>It probably looks awful, but for now that's the point :) </p>

</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
            <p>I'm a USAF veteran and undergraduate studying Computer Science at Fordham University. I am by no means a wizard, and have never associated with any wizards.</p>
		    <p>Currently, this is set up to fulfill a project for my discrete structures class. I have to do a few things for my first web page. </p>
            <ul>
                <li>First, Make a bulleted list</li>
                <li>Second, Make a link to an <a href = "https://www.google.com">external</a> site <a href="https://xkcd.com">like so</a>.  </li>
                <li>As well, I must insert an image. I will do so now.  </li> </ul>
                <img src="https://www.bethelcupertino.org/llama/llama_300.jpg">
    
    
            <ul type = "circle">
                <li>There we are. What's next?</li>
                <li>Ah, <b>Bold Text, to highlight <a href = "https://quillette.com">important</a> aspects</b></li>
                
    
    
            </ul>
            <p>Yup, this is surely a decent start.</p>
    
			 
			<p>The Current date is <?php echo date("l F jS  Y"); ?>. </p>


			</div>
			</div>
			</div> 
			
			<p><br><b>Prime Number Checker</b></p>
				
			<form method="post">  
			Enter a Number: <input type="text" name="input"><br><br>  
			<input type="submit" name="submit" value="Submit">  
			</form>  
			<?php  
			if($_POST)  
{  
				$input=$_POST['input'];  
				for ($i = 2; $i <= $input-1; $i++) {  
				if ($input % $i == 0) {  
					$value= True;  
				}  
			}  
			if (isset($value) && $value) {  
				echo 'The number '. $input . ' is not prime';  
			}  else {  
				echo 'The number '. $input . ' is prime';  
			}   
}  
?>  
				
				

				
							

    
            
            
            
    
</div>

</div>
</div>
</body>
</html>