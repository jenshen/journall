<!DOCTYPE html>

<head>
	<title>Journal page</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<style type="text/css">
		body {
			background: url('images/journal_top.png'), url('images/journal_piece.png');
			background-repeat: no-repeat, repeat-y;
			background-position: center top, center 150px;
			background-clip: content-box;
			font-family: 'Lato', sans-serif;
			color: rgb(18,18,18);
		}
		.topbanner {
			width: 850px;
			margin: 0px auto;
			height: 90px;
		}
		.logo {
			float: left;
		}
		#sidemenu {
			list-style-type:none;
		}
		#sidemenu li{
			background-image: url(images/tab.png);
			background-repeat: no-repeat;
			height:120px;
			width:40px;
			float:top;
			margin-top:-5px;
			position:relative;
		}
		#sidemenu li a {
			height:120px;
			width:40px;
			display:block;
			text-decoration:none;

		}
		#menu {
			list-style-type: none;
			background-color: rgb(9,84,84);
			height: 35px;
			float:left;
			position: relative;
			left: 2%;
			width: 63%;
		}
		#menu li {
			display: inline-block;
		}
		#menu li a {
			text-decoration: none;
			display: block;
			text-align: center;
			line-height: 175%;
			color: white;
			padding: 2px 10px;
		}
		#menu li a:hover {
			font-weight: bold;
			background-color: rgba(154,227,178, 0.5);
			-moz-border-radius:6px;
			-webkit-border-radius:6px;
			border-radius:6px;
		}
		#menu li a:visited {
			color: white;
		}
		#menu li a:active {
			font-weight: bold;
			background-color: rgba(154,227,178, 0.5);
		}
		#menu_wrapper div {
			float:left; 
			height: 35px; 
			width: 12px; 
			background: url(images/nav_bkgd.png) no-repeat left; 
			position:relative; 
			top:16px; 
			left:2%;
		}
		#welcomeuser {
			color: rgb(154,227,178);
			text-align: right;
			width: 35%;
			padding-right: 10px;
		}
		.hello {
			width: 730px;
			height: 600px;
			position: relative;
			margin: 0 auto;
			left: 10px;
		}
		input {
			font-family:'Lato', sans-serif;
		}
		input[type=text] {
			color: rgba(0,0,0,0.5);
		}
		input[type=submit] {
			color: rgba(0,0,0,0.5);
			background-color: rgb(171,232,191);
			-moz-border-radius:6px;
			-webkit-border-radius:6px;
			border-radius:6px;
			display:inline-block;
			border:none;
			padding:6px 24px;
			text-decoration:none;
			color: white;
			font-size: 110%;
		}
		input[type=submit]:hover {
			background-color:#dfdfdf;
			cursor:pointer;
		}

	</style>
	
	<script src="ckeditor/ckeditor.js"></script>
</head>

<body>
		
	<div>
	<div class="topbanner">
		<div class="logo">
			<img src="images/logosmall.png" style="padding:10px"></img>
		</div>
		
		<div id="menu_wrapper">
			<div class="left"></div>
			<ul id="menu">
				<li><a href="test.html">home</a></li>
				<li><a href="">new journal</a></li>
				<li><a href="">browse</a></li>
				<li><a href="">sign out</a></li>
				<li id="welcomeuser">Welcome, User!</li>
			</ul>
		</div>
		
		<div style="position:relative; left:812px;top:120px">
			<ul id="sidemenu">
				<li style="z-index:100"><a style="background-image: url(images/currenttab.png);" href="" >current page</a></li>
				<li style="z-index:99"><a href="">+</a></li>
				<li style="z-index:98"><a href="">+</a></li>
				<li style="z-index:97"><a href="">+</a></li>
				<li style="z-index:96"><a href="">+</a></li>
			</ul>
		</div>
		
	</div>
	
	<form class="hello" action="hello.php" method="post">
		<br>
		<p>
			<div style="width:600px; height:40px">
				<input type="text" value="Journal Title" name="title" style="width:590px; font-size:120%">
			</div>
			<div style="display:inline-block; width:730px; height:40px">
				<input type="text" value="Locations" style="width:590px; font-family:'Lato', sans-serif; font-size:110%; margin-right:8px">
				<input type="text" value="Date" style="width:115px; font-family:'Lato', sans-serif; font-size:110%">
			</div>
		</p>
		<p>
            <textarea name="editor1"></textarea>
            <script>
                CKEDITOR.replace( 'editor1' );
            </script>
		</p>
		<p>
			<input type="submit" value="Save As Draft" style="float:right">
			<input type="submit" value="Submit" style="float:right; background-color: rgb(9,84,84); margin-right:10px; margin-bottom: 50px">
		</p>
	</form>
	

	
</body>