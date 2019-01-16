<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            text-align: center;
            font-family: cursive;
        }
        .background{
            
            background-image: url(img/Silhouette%20car.jpg);
            background-repeat: no-repeat;
            background-size: auto;
        }
                   
        .carousel-inner img{
            margin: auto;
            width: 50%}
    
    </style>
    <title>Request Access to Forum</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--Custom styles here-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class=background>
    <!--Your HTML here-->
    <nav class="navbar navbar-default affix-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
            </button>
            <img src="img/dsxmas_logo.jpg">
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="#">Reviews</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Forums</a></li>


            </ul>
        </div>
    </nav>

    
    <h2>First Name</h2>
        <form method="post" action="process.php" enctype="multipart/form-data">
	<input type="text" name="firstName" placeholder="First Name">
	<br>
    <h2>Last Name</h2>
	<input type="text" name="lastName" placeholder="last name">
    
    <h2>Email</h2>
	<input type="text" name="email" placeholder="Email">
    
    <h2>First Model Collected</h2>
	<input type="text" name="firstModel" placeholder="firstModel">
	
<!--
	<button id="clickEvent">Review Info</button>
	<br>
	<p>Review Info Here:<br> <b id="clickValue"></b></p>
	<hr>
-->
    <input type="submit">
            </form>
<!--
	<script>
		//just a function that takes values from both iputs and concatinates them into var full
		function process() {
			fn = document.getElementById('fn').value;
			ln = document.getElementById('ln').value;
            em = document.getElementById('em').value;
            fmc = document.getElementById('fmc').value;
			full = fn + " " + ln + "'<br>'" + em + "'<p>Age Collected </p>'" + fmc;
		}
		document.getElementById('clickEvent').onclick = function(){
			process();
			document.getElementById('clickValue').innerHTML = full;
		}
		
	</script>
-->
</body>
</html>