<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
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

header .header-brand{
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
color:white;
text-decoration:none;
}

header .header-cases{
display:inline-block;
float:right;
padding-right:20px;
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

.homered:hover{
color:#EEEEEE;
background-color:#C0CA33;
}

#na:hover{
background-color:blue;
color:white;
}

#theForm{float:right;}
.homeblack:hover{color:white;}

#sdf{height:5px; 
background-color:#006064;
margin-top:5px;
}

.homeblack{
text-decoration:none;	
background-color:#006064;
padding:5px 10px 6px 10px;
color:white;
}

.homered{	
color:#84FFFF;
text-decoration:none;	
padding:5px 10px 5px 10px;
}

th{
font-size:17px;
color:gray;
}

.e{
font-size:2px;
color:yellow;
text-align:center;
}

img{
width:200px;
height:200px;
}

h2{color:gray;
font-size:20px;
text-align:center;
text-decoration:underline overline;
}

.ri{
display:block;	
margin-left:auto;
margin-right:auto;
border-color:maroon;
border-width:3px;
border-style:solid;
}

.lkj{
font-size:16px;
text-align:center;
color:yellow;
}

a{color:#3949AB;}
a:hover{color:#1A237E;}


/*desktop*/  @media only screen and (min-width: 700px)
				   {

header{ height:99px;}
.homered{
padding:5px 10px 4.5px 10px;
font-size:15px;
}

.homeblack{
padding:5px 10px 5.5px 10px;
font-size:15px;
}

#tex{font-size:10px;
width:150px;
}
#na{font-size:10px;}
img{
	width:500px;
	height:400px;
}

                  }
	
/*desktop*/  @media only screen and (min-width: 1000px)
				  {
	
header{ height:137px;}	
	
header .header-brand{
font-size:55px;
margin:0px 570px 0px 570px;
}

header nav ul li a{font-size:25px;}
.homeblack{
padding:8px 10px 7px 10px;
font-size:22px;
}

.homered{
padding:8px 10px 6px 10px;
font-size:22px;
}

#sdf{
height:6px;
margin-top:19px;
}
#tex{font-size:15px;
width:220px;
}
#na{font-size:15px;}
.pi{margin-left:65px;}

th{	
font-size:35px;
color:gray;
}

img{
width:750px;
height:450px;
}

h2{color:gray;
font-size:35px;
text-align:center;
text-decoration:underline overline;
}

.lkj{
font-size:25px;
text-align:center;
color:yellow;
}

               }


</style>






</head>
<script src="test.js"></script>
<body>

<header>
<a href="index.php" class="header-brand">topanimelist</a>
<nav>
<ul>
<li><a href="index.php" class="homered">HOME</a></li>
<li><a href="#" class="homeblack">THRILLER</a></li>
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
</br></br></br></br></br></br>

<h2>1. Death Note</h2>
<img class="ri" src="ab.jpg" width=850 height=600>
<p class="lkj">Rating:- 9.0/10 
</br>
<a href="Death Note.php">Description</a>
</br>
<a href="dn.html">Trailer</a>
</p>

</br>

<h2>2. Code Geass</h2>
<img class="ri" src="abc.jpg" width=850 height=600>
<p class="lkj"> Season 1 Rating:- 8.7/10
</br> Season 2 Rating:- 9.3/10
</br>
<a href="Code Geass.php">Description</a>
</br>
<a href="cg.html">Season 1 trailer</a>
</br>
<a href="cg1.html">Season 2 trailer</a>
</p>

</br>

<h2>3. Fate Zero</h2>
<img class="ri" src="fz.png" width=850 height=600>
<p class="lkj">Rating:- 8.3/10

</br>
<a href="Fate Zero.php">Description</a>
</br>
<a href="fateh.html">Trailer</a>
</p>

</br>

<h2>4. Attack On Titan</h2>
<img class="ri" src="at.jpg" width=850 height=600>
<p class="lkj">Rating:- 8.8/10
</br>
<a href="Attack On Titan.php">Description</a>
</br>
<a href="attackh.html">Trailer</a>
</p>

</br>

<h2>5. Death Parade</h2>
<img class="ri" src="dp.jpg" width=850 height=600>
<p class="lkj">Rating:- 8.0/10
</br>
<a href="Death Parade.php">Description</a>
</br>
<a href="dparadeh.html">Trailer</a>
</p

</br>

<h2>6. Terror In Resonance</h2>
<img class="ri" src="tir.jpg" width=850 height=600>
<p class="lkj">Rating:- 8.0/10
</br>
<a href="Terror In Resonance.php">Description</a>
</br>
<a href="terrorh.html">Trailer</a>
</p>

</br>

<h2>7. Psycho Pass</h2>
<img class="ri" src="pp.jpg" width=850 height=600>
<p class="lkj">Rating:- 8.3/10
</br>
<a href="Psycho Pass.php">Description</a>
</br>
<a href="psychoh.html">Trailer</a>
</p>

</br>

<h2>8. Steins Gate</h2>
<img class="ri" src="sg.jpg" width=850 height=600>
<p class="lkj">Rating:- 8.8/10
</br>
<a href="Steins Gate.php">Description</a>
</br>
<a href="steinh.html">Trailer</a>
</p>



</body>
</html>