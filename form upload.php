
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>My self</title>
	<link rel="stylesheet" type="text/css" href="jamuscript/dist/sweetalert.css">
	<script type="text/javascript" src="jamuscript/dist/sweetalert.min.js"></script>
	<style>
		body{
			padding:0px;
			margin:0px;
			background-color:#f8f8f8;
			background-image:url('flower.jpg');
			font-family:calibri;
		}
		
		.panel{
			width:960px;
			background-color:white;
			margin:0 auto;
			padding:20px;
			box-shadow:8px 4px 22px black , -8px 4px 22px black;
			
		}
		
		.head{
			background-image:url('bg_profil.jpg');
			padding-left:20px;
			padding-top:10px;
		}
		
		.head h1{
			font-family:"tekton pro",serif;
			color:green;
		}
		
		.head .profil{
			width:75px;
			height:80px;
			border:2px solid black;
		}
		
		.notice ul, .notice li{
			list-style:none;
			padding:0px;
			margin:0px;	
		}
		
		.notice li a{
			text-decoration:none;
			float:right;
			padding:5px 10px;
			background-color:gray;
			border-top-left-radius:6px;
			border-bottom-left-radius:6px;
		}
		
		
		.notice li a{
			color:white;
		}
		
		.notice li a:hover{
			box-shadow:4px 0px 4px black;
		}
		
		h1{
			margin:0px;
		}
		
		.side1{
			float:left;
			width:280px;
		}
		
		.side1 h2{
			font-family:"segoe print";
		}
		
		.side1 ul, .side1 li{
			list-style:none;
			padding:0px;
			margin:0px;
		}
	
		.side1 li {
			padding:5px 20px;
			font-size:15px;
			font-family:"tekton pro", serif;
			color:black;
		}
	
		.side1 li img{
			height:25px;
			padding-right:10px;
		}
		
		.side1 div{
			padding:20px 30px;
			border:2px solid black;
			text-align:center;
			margin-right:80px;
			margin-left:80px;
			border-radius:20px;
			box-shadow:8px 2px 22px red , -8px 2px 22px red;
		}
		
		.side1 div h1{
			font-size:50px;
		}
		
		.main{
			float:right;
			width:680px;
		}
		
		.main p{
			font-size:25px;
			padding:0px;
			margin:0px;
			margin-left:40px;
			font-family:"segoe print";
			font-size:30px;
			margin-top:15px;
		}
		
		.clear{
			clear:both;
		}
		
		.main iframe{
			width:600px;
			height:720px;
			margin-top:10px;
			float:right;
			border:none;
		}
		
		.footer p{
			color:black;
			float:left;
		}
	
		.footer ul, .footer li  {
			list-style:none;
			float:right;
		}

		.footer li a{
			text-decoration:none;
			display:inline-block;
			padding: 0 5px;
			color:black;
		}

		.footer li a:hover{
			text-decoration:underline;
		}
		
		.editt{
			margin-right:15px;
			height:10px;
			float:right;
			opacity:0.3;
		}
		
		.editt:hover{
			opacity:1;
		}
		
		.following{
			position:absolute;
			margin-left:700px;
			padding:7px 15px;
			border:2px solid black;
			text-align:center;
			border-radius:10px;
			margin-top:20px;
			background-color:#f8f8f8;
		}
		
		.following h1{
			font-size:30px;
		}
		
		.following span{
			font-family:pristina,serif;
			font-size:23px;
		}
		
		.follower{
			position:absolute;
			margin-left:817px;
			padding:7px 15px;
			border:2px solid black;
			text-align:center;
			border-radius:10px;
			margin-top:20px;
			background-color:#f8f8f8;
		}
		
		.follower h1{
			font-size:30px;
		}
		
		.follower span{
			font-family:pristina,serif;
			font-size:23px;
		}
	</style>
</head>
<body>
	<div class="panel">
		
		<header class="head">
			<img class="profil" src="arip.jpg">
			
			<h1>Arif Munandar</h1>
			
	
			<form action="form upload.php" method="post" enctype="multipart/form-data">
				<p><input type="file" name="file_upload"></p>
				<input type="submit" name="submit" value="save">
			</form>
			
			<div class="notice">
			<ul>
				<li><a href="logout.php">Log out</a></li>
				<li><a href="aa">Notice</a></li>	
				<li><a href="">Message</a></li>
				<li><a href="profil.php">Back</a></li>
			</ul>
			</div>
			<br class="clear">
		</header>
		<hr class="clear">
		<aside class="side1">
		
			<h2>About me</h2>
			<script>
				function sweet(str){
				swal({
				  title: "An input!",
				  text: "Write something interesting:",
				  type: "input",
				  showCancelButton: true,
				  closeOnConfirm: false,
				  animation: "slide-from-top",
				  inputValue: str
				},
				function(inputValue){
				  if (inputValue === false) return false;
				  
				  if (inputValue === "") {
					swal.showInputError("You need to write something!");
					return false
				  }
				  
				  swal("Nice!", "You wrote: " + inputValue, "success");
				});}
			</script>
			<ul>
				<li><img src="irumah.png">Alamat : lingke<img class="editt" src ="edit.png"></li>
				<li><img src="istudy.jpg">Umur   : 22<img class="editt" src="edit.png"></li>
				<li><img src="ilove.png">Status  : menikah<img class="editt" src="edit.png"></li>
				<li><img src="gender.png">Gender : Pria<img class="editt" src="edit.png"></li>
				<li><img src="email.png">Email  : arif@gmail.com<img class="editt" src="edit.png"></li>
			</ul>
		</aside>
		
		<main class="main">
			<iframe></iframe>
		</main>
		<br class="clear">
		
		
		<br class="clear">
	</div>
	
</body>
</html>