<!DOCTYPE html>

<html>
<head>
	<title>Dashboard</title>
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
		.content {
			width: 760px;
			height: 100%;
			margin: 0px auto;
			position: relative;
			left: 10px;
			height: 900px;
			padding: 1.5em;
		}
		.journals {
			float: left;
			border: 2px solid rgb(154,227,178);
			margin-right: 10px;
			width: 68%;
			positon: relative;
			padding: .5em;
			background-color: rgba(255,255,255,0.5);
		}
		.profile {
			float: left;
			border: 2px solid rgb(154,227,178);
			width: 25%;
			height: 200px;
			padding: .5em;
			background-color: rgba(255,255,255,0.75);
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
		</div>
		
		<div class="content">
			<div class="journals">
				<b>My Journals</b>
			</div>
			
			<div class="profile">
				<p>
				Name <br>
				Email
				</p>
				
				<p>
				My Vacation Bucket List:
				</p>
			</div>
		</div>
	</div>
	
</body>
</html>