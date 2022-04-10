<?php
include('../db.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .top {
            font-size: 28px;
            background-color: #e6e6e6;
            text-align: center;
            padding: 8px 0;
            margin-bottom: 20px;
            box-shadow: 0 -20px 15px -10px rgba(155, 155, 155, 0.3) inset,
                0 20px 15px -10px rgba(155, 155, 155, 0.3) inset,
                0 0 10px rgba(0, 0, 0, 0.1);
        }
		

		nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}

		nav ul li {
			--c: goldenrod;
			color: var(--c);
			font-size: 16px;
			border: 0.3em solid #bfbfbf;
			border-radius: 0.5em;
			width: 12em;
			height: 3em;
			text-transform: uppercase;
			font-weight: bold;
			font-family: sans-serif;
			letter-spacing: 0.1em;
			text-align: center;
			line-height: 3em;
			position: relative;
			overflow: hidden;
			z-index: 1;
			transition: 0.5s;
			margin: 1em;
		}

		nav ul li span {
			position: absolute;
			width: 25%;
			height: 100%;
			background-color: #e6e6e6;
			transform: translateY(150%);
			border-radius: 50%;
			left: calc((var(--n) - 2) * 25%);
			transition: 0.5s;
			transition-delay: calc((var(--n) - 1) * 0.1s);
			z-index: -1;
		}

		nav ul li:hover {
			color: black;
		}

		nav ul li:hover span {
			transform: translateY(0) scale(2);
		}

		nav ul li span:nth-child(1) {
			--n: 1;
		}

		nav ul li span:nth-child(2) {
			--n: 2;
		}

		nav ul li span:nth-child(3) {
			--n: 3;
		}

		nav ul li span:nth-child(4) {
			--n: 4;
		}

    </style>


</head>

<body>

    <div class="row">
        <div class="col-lg-12">
            <div class="top">
                <i class="fa fa-dashboard fa-fw">
                </i> <a href="index.php">Fashion Store Dashboard </a>
            </div>
        </div>
    </div>




	<br><br>
	<center>
	<nav>
	  <ul>
		<li>
		<a href="insert-product.php">
		Insert product</a>
		  <span></span><span></span><span></span><span></span>
		</li>
		<li>
		  <a href="insert-category.php">
		Insert category</a>
		  <span></span><span></span><span></span><span></span>
		</li>
		<li>
		  <a href="list-orders.php">
		List orders</a>
		  <span></span><span></span><span></span><span></span>
		</li>
		<li>
		  <a href="list-customers.php">
		List customers</a>
		  <span></span><span></span><span></span><span></span>
		</li>
	  </ul>
	</nav>
	</center>
		




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="tinymce/tinymce.min.js"></script>
    

</body>

</html>


