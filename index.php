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


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120624092-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120624092-1');
</script>

<meta charset="utf-8">
<title>Topanimelist</title>


<meta name="description" content="Topanimelist contains the description, trailer, ratings, number of seasons, episodes and much more of the thrilling, supernatural, action, romantic anime series of all time"/>

<meta name="keywords" content="top anime lists, topanimelist, anime, anime series, anime lists"/>


<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
@import 'https://fonts.googleapis.com/css?family=Oswald:400,700';

body{
background-color:#212121;
margin:0px;
font-family:Verdana,Arial,Geneva,Arial Black;
}

header{
background-image:url(hsdxd.png);
background-size:cover;
background-position:center;
background-color:#3E2723;
width:100%;
height:99px;
position:fixed;	
}

 .header-brand
 {
font-family:'Oswald', sans-serif;
font-size:38px;
font-weight:900;
color:white;
text-decoration:none;
display:block;
text-align:center;
margin:0px 80px 0px 80px;
}

.header-brand:hover{
text-decoration:none;
color:white;
}

header .header-cases{
display:inline-block;
 float:right;
margin-right:20px;
}

header nav ul li{ 
display:inline-block;
float:left;
list-style:none;	
}

header nav ul li a{
font-size:15px;
color:#84FFFF;
font-family:"Arial Black", Gadget, sans-serif;	
}

#tex{font-size:6px;
width:70px;
}
#na{font-size:6px;}

.homeblack:hover{
color:#EEEEEE;
background-color:#C0CA33;
}

#na:hover{
background-color:blue;
color:white;
}

#theForm{float:right;}
a:hover{color:maroon;}
.homered:hover{color:white;}

#sdf{height:5px; 
background-color:#006064;
margin-top:5px;
}
.homered{
text-decoration:none;
background-color:#006064;
padding:5px 10px 6px 10px;
color:white;	
}

.homeblack{
color:#84FFFF;
text-decoration:none;
padding:5px 10px 5px 10px;
}

.pi{
border-width:2px;
border-style:solid;
color:#3949AB;
}

.pi:hover{color:#1A237E;}

th{
font-size:17px;
color:gray;
}

.e{
font-size:14px;
color:yellow;
text-align:center;
}

img{
width:165px;
height:200px;
}

td{   
width:20%;
text-align: center;  
vertical-align: baseline;
}

.po{font-size:50px;
color:#1976D2;
margin-right:10px;
}

.qo{font-size:50px;
color:#E91E63;
margin-right:35px;
}

#sd{
display:flex;
align-items:center;
justify-content:center;    
}

div ul li{
float:left;
list-style:none;
}

footer{background-color:#424242;
height:100%;
}

.po:hover{color:#1976D2;}
.qo:hover{color:#E91E63;}



.bc{font-family:"Trebuchet MS", Helvetica, sans-serif;
font-size:13px;
padding-left:7px;
color:#F5F5F5;
text-decoration:none;
}	

.bc:hover{color:#BDBDBD;}



#_na:hover{background-color:blue;
color:white;
}

#na1:hover{background-color:blue;
color:white;
}

#fd{color:yellow;}
div.article-box{background-color:#a65959;}


/*desktop*/      @media only screen and (min-width: 700px)
                         {
                           
header{ height:99px;}

.homeblack{
padding:5px 10px 4.5px 10px;
font-size:15px;
}

.homered{
padding:5px 10px 5.5px 10px;
font-size:15px;
}

#tex{font-size:10px;
width:150px;
}
#na{font-size:10px;}			
.header-brand{ margin:0px 350px 0px 350px; }
	
th{font-size:25px;}
.e{font-size:25px;}

img{
width:400px;
height:300px;
}

.po{font-size:60px;}
.qo{font-size:60px;}

.bc{
font-size:15px;
}	
                        }
	
 /*desktop*/    @media only screen and (min-width: 1000px)
                        {
	
header{
height:137px;
}	
	
.header-brand{
font-size:55px;
margin:0px 570px 0px 570px;
}

header nav ul li a{font-size:25px;}
.homered{
padding:8px 10px 7px 10px;
font-size:22px;
}

.homeblack{	
padding:8px 10px 6px 10px;
font-size:22px;
}

#tex{font-size:15px;
width:220px;
}
#na{font-size:15px;}
#sdf{
height:6px;
margin-top:19px;
}
th{font-size:35px;}
.e{font-size:25px;}

img{
width:570px;
height:400px;
}

.pi{border-width:4px;}

.po{font-size:65px;}
.qo{font-size:65px;}

.bc{
font-size:20px;
}	

                       }
</style>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="test.js"></script>
</head>

<body>

<header>
<a href="index.php" class="header-brand">topanimelist</a>
<nav>
<ul>
<li><a href="#" class="homered">HOME</a></li>
<li><a href="thriller.php" class="homeblack">THRILLER</a></li>
</ul>
</nav>
<div class="header-cases">
<form id="theForm" action="search.php" method="POST" onSubmit="return validate();">
<input type="text" id="tex" name="search" placeholder="Search...">
<button type="submit" id="na" name="submit-search">Go</button>
</form>
</div>
<br>
<div id="sdf"></div>
</header>

</br>
</br></br></br></br></br></br></br>

<main>
<table width=100%>
<tr>
<th> Death note</th>
<th> Code geass</th>
</tr>
<tr>
<td><a href="Death Note.php"><img class="pi" src="ab.jpg" height=550 width=650  ></a></td>
<td><a href="Code Geass.php"><img class="pi" src="abc.jpg"  height=550 width=650></a></td>
</tr>
<tr>
<td class="e"> Rating:- 9.0/10</td>
<td class="e"> Season 1 rating:- 8.7/10</br> Season 2 rating:- 9.3/10</td>
</tr>
</table>
</br></br>
<table width=100%>
<tr>
<th> Dragon ball z</th>
<th> Dragon ball super</th>
</tr>
<tr>
<td><a href="Dragon Ball Z.php"><img class="pi" src="db.jpg"  height=550 width=650></a></td>
<td><a href="Dragon Ball Super.php"><img class="pi" src="dbs.jpg" height=550 width=650></a></td>
</tr>
<tr>
<td class="e"> Rating:- 8.7/10</td>
<td class="e"> Rating:- 8.1/10</td>
</tr>
</table>
</br></br>
<table width=100%>
<tr>
<th>Fate zero</th>
<th> Psycho pass</th>
</tr>
<tr>
<td><a href="Fate Zero.php"><img class="pi" src="fz.png"  height=550 width=650></a></td>
<td><a href="Psycho Pass.php"><img class="pi" src="pp.jpg" height=550 width=650></a></td>
</tr>
<tr>
<td class="e"> Rating:- 8.3/10</td>
<td class="e"> Rating:- 8.3/10</td>
</tr>
</table>
</br></br>
<table width=100%>
<tr>
<th> Seven Deadly Sins</th>
<th> Steins Gate</th>
</tr>
<tr>
<td><a href="The Seven Deadly Sins.php"><img class="pi" src="sds.jpg"  height=550 width=650></a></td>
<td><a href="Steins Gate.php"><img class="pi" src="sg.jpg" height=550 width=650></a></td>
</tr>
<tr>
<td class="e">  Rating:- 8.2/10</td>
<td class="e"> Rating:- 8.8/10</td>
</tr>
</table>
</br></br>
 <table width=100%>
<tr>
<th> Attack on titan</th>
<th> Rosario to vampire</th>
</tr>
<tr>
<td><a href="Attack On Titan.php"><img class="pi" src="at.jpg"  height=550 width=650></a></td>
<td><a href="Rosario To Vampire.php"><img class="pi" src="rv.jpg" height=550 width=650></a></td>
</tr>
<tr>
<td class="e"> Rating:- 8.8/10</td>
<td class="e"> Rating:- 7.3/10</td>
</tr>
</table>
</br></br>
 <table width=100%>
<tr>
<th> Nagi No Asukara</th>
<th> Noragami</th>
</tr>
<tr>
<td><a href="Nagi No Asukara.php"><img class="pi" src="na.jpg"  height=550 width=650></a></td>
<td><a href="Noragami.php"><img class="pi" src="n.jpg" height=550 width=650></a></td>
</tr>
<tr>
<td class="e"> Rating:- 7.4/10</td>
<td class="e"> Rating:- 8.0/10</td>
</tr>
</table>
</br></br>
<table width=100%>
<tr>
<th> Death Parade</th>
<th> Sword Art Online</th>
</tr>
<tr>
<td><a href="Death Parade.php"><img class="pi" src="dp.jpg"  height=550 width=650></a></td>
<td><a href="Sword Art Online.php"><img class="pi" src="so.jpg" height=550 width=650></a></td>
</tr>
<tr>
<td class="e"> Rating:- 8.0/10</td>
<td class="e"> Rating:- 7.8/10</td>
</tr>
</table>
</br></br>
<table width=100%>
<tr>
<th> Seiken Tsukai </br> No World Break</th>
<th> Demon King Daimao</th>
</tr>
<tr>
<td><a href="Seiken Tsukai No World Break.php"><img class="pi" src="stnwb.jpg"  height=550 width=650></a></td>
<td><a href="Demon King Daimao.php"><img class="pi" src="dkd.jpg" height=550 width=650></a></td>
</tr>
<tr>
<td class="e"> Rating:- 7.3/10</td>
<td class="e"> Rating:- 7.1/10</td>
</tr>
</table>
</br></br>
<table width=100%>
<tr>
<th> Bakugan </br> Battle Brawlers</th>
<th> One Punch Man</th>
</tr>
<tr>
<td><a href="Bakugan Battle Brawlers.php"><img class="pi" src="bbb1.jpg"  height=550 width=650></a></td>
<td><a href="One Punch Man.php"><img class="pi" src="opm.jpg" height=550 width=650></a></td>
</tr>
<tr>
<td class="e"> Rating:- 4.7/10</td>
<td class="e"> Rating:- 9.0/10</td>
</tr>
</table>
</br></br>
<table width=100%>
<tr>
<th> Bleach</th>
<th> Pokemon</th>
</tr>
<tr>
<td><a href="Bleach.php"><img class="pi" src="bl.jpg"  height=550 width=650></a></td>
<td><a href="Pokemon.php"><img class="pi" src="po.jpg" height=550 width=650></a></td>
</tr>
<tr>
<td class="e"> Rating:- 8.2/10</td>
<td class="e"> Rating:- 7.5/10</td>
</tr>
</table>
</br></br>
<table width=100%>
<tr>
<th> Naruto</th>
<th> Fairy Tail</th>
</tr>
<tr>
<td><a href="Naruto.php"><img class="pi" src="na_.jpg"  height=550 width=650></a></td>
<td><a href="Fairy Tail.php"><img class="pi" src="ft.jpg" height=550 width=650></a></td>
</tr>
<tr>
<td class="e"> Rating:- 8.5/10</td>
<td class="e"> Rating:- 8.1/10</td>
</tr>
</table>
</br></br>
<table width=100%>
<tr>
<th>Elfen Lied</th>
<th>Terror In Resonance</th>
</tr>
<tr>
<td><a href="Elfen Lied.php"><img class="pi" src="el.jpg"  height=550 width=650></a></td>
<td><a href="Terror In Resonance.php"><img class="pi" src="tir.jpg" height=550 width=650></a></td>
</tr>
<tr>
<td class="e"> Rating:- 8.1/10</td>
<td class="e"> Rating:- 8.0/10</td>
</tr>
</table>
</main>

<footer>
<div id="sd">
<ul>
<li><a href="https://www.facebook.com/Topanimelist-155333511974996/?modal=admin_todo_tour" class="po"><i class="fa fa-facebook-square"></i></a></li>
<li><a href="https://www.instagram.com/topanimelist_076/" class="qo"><i class="fa fa-instagram"></i></a></li>
</ul>
</div>

</br>
</br>


<form id="_theForm" method="POST">
<textarea name="_search" id ="_tex" placeholder="Comment....." rows="5px" cols="40px" ></textarea>
</br>
<button type="submit" id="_na" name="_submit-search">Go</button>
</br>
</br>
<button type="submit" id="na1" name="show">Show all the comments</button>
</form>


<?php
{
if(isset($_POST['_submit-search']))
{
	$search=mysqli_real_escape_string($conn, $_POST['_search']);
	$sql="insert into anime_com(com)values('$search')";
	$sql1="select* from anime_com";
	mysqli_query($conn,$sql);
	$result1=mysqli_query($conn,$sql1);
	echo "<div id='fd'>"."</br>"."Comments!"."</div>";
	while($row=mysqli_fetch_assoc($result1))
		{
			$sd=$row['com'];
			echo "<div class='article-box'> 
		           <p> ".$row['com']." </p> 	 
		           </div>";
	
		}
	
	}

if(isset($_POST['show']))
{

    $sql2="select* from anime_com";
    $result=mysqli_query($conn,$sql2);
	echo "<div id='fd'>"."</br>"."Comments!"."</div>";
		
	while($row=mysqli_fetch_assoc($result))
		{
			//echo "<div class='article-box'>"."Anonymous"."</div>";
			$sd=$row['com'];

			echo "<div class='article-box'> 
		           <p> ".$row['com']." </p> 	 
		           </div>";
	
		}
	
}
}
?>

</br></br></br>



<div><a href="about.php" class="bc">About</a></div>
</br>
<div><a href="viewer's_notice.php" class="bc">Viewers notice</a></div>
</br>
</footer>
</br></br>

</body>
</html>