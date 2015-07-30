<?php
$con=mysqli_connect("localhost","root","ajay",'entries') or die(mysql_error());
//if($con)
	//echo " connection successful <br><br>";
$message = $_POST['spelling'];

$word = explode(" ", $message);
foreach($word as $key => $value) {
   $query="select word from entries where word='$value'";
   $res = mysqli_query($con,$query);
   $count=mysqli_num_rows($res);
   if($count==0)
   {   
	   echo "<b>$value </b> is an invalid spelling.<br>";
	   
   }
   else
	  {
		   
	   echo "<b>$value </b> is a correct spelling. <br>";
	   }	

/*$sql=" select word from entries where word like '%$value%'";
$result= mysqli_query($con,$sql);
$suggest= mysqli_fetch_row($result);

echo "$suggest";*/


	   
}

?>