<html>  
<body>  
<form method = "post">   
    <head>
    Area of a Triangle calculator
    </head>
    <br></br>
base: <input type="number" name="Base">   
<br><br>  
    height: <input type="number" name="Height"><br></br>  
    length: <input type="number" name="Length"><br></br>  
<input type = "submit" name = "Submit" value="Calculate Area">   
</form>   
</body>   
</html> 

<?php
if(isset($_POST['submit']))  {   
$base = $_POST['base'];   
$height = $_POST['height'];   
$length = $_POST['length']; 
$area = ($base+$height+$length) / 2;
    
    echo "The area of a triangle is $area";  

   if ($base == $height && $height == $length) 
        echo "Equilateral Triangle";
    // Check for isoceles triangle
    if ($base == $height || $height == $length || $length == $base) 
        echo "Isoceles Triangle";  
    // Otherwise scalene triangle 
        echo "Scalene Triangle"; } 
}
?>   
