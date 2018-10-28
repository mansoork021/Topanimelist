<?php

$server="localhost";
$username="root";
$password="";
$dbname="anime_search";
$conn=mysqli_connect($server, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html>

<head>
<style>
body
{
    background-image:url(abcd.jpg);
	background-color:black;
	font-weight:lighter;
	font-family:Verdana,Arial,Geneva,Arial Black;
}
h1
{
	
	color:white;
	text-align:center;
	font-size:60px;
	text-decoration:underline;
}
h3{
	color:yellow;
}
.article-container{
	text-align:center;
	font-size:40px;
	color:white;
	
}
</style>



</head>
<body>
<h1> Search page</h1>

<div class="article-container">
<?php
if(isset($_POST['submit-search']))
{
	$search=mysqli_real_escape_string($conn, $_POST['search']);
	$sql="SELECT * from anime_list where a_name like '%$search%'";
	$result=mysqli_query($conn,$sql);
	$queryresult=mysqli_num_rows($result);
	if($queryresult>0)
	{
		echo "There are $queryresult results!";
		
		while($row=mysqli_fetch_assoc($result))
		{
			$sd=$row['a_name'];
			echo "<a href ='$sd.php'>
			       <div class='article-box'> 
		           <h3> ".$row['a_name']." </h3> 	 
		 </div></a>";
	
		}
	}
	
	else
		echo"There is no result matching your search...";

}
?>
</div>
</body>
</html>