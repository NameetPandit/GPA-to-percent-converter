<?php
include("database.php");
include("index.php");
$name=filter_input(INPUT_POST,"fname",FILTER_SANITIZE_SPECIAL_CHARS);
$gpa=filter_input(INPUT_POST,"fgpa",FILTER_SANITIZE_SPECIAL_CHARS);
if(empty($name))
{
    echo "Please enter valid username";
}
elseif(empty($gpa))
{
    echo "Please enter valid GPA score";
}
else
{
    $sql="INSERT INTO records (name,gpa) VALUES ('$name','$gpa')";
    if(mysqli_query($conn,$sql))
    {
        echo "You are now registered:";
    }
    else
    {
        echo "Could not register";
    }
   
    
}
mysqli_close($conn);
?>