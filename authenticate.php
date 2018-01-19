
<?php

if(isset($_POST['auth']))
{
$user =$_POST['user'];
$password= $_POST['pass'];
if($user=='goodyearsecurity'&&$password='12345')
{

header('location:'."viewSearch.php");
}
}
?>
