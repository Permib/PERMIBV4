<!DOCTYPE html>
<html>
	<head>
		<title><?=$title?></title>
		<meta charset="utf-8">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"crossorigin="anonymous">

		<!-- Bootstrap Collapse -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

    <!-- Pure CSS -->
    <?php foreach ($css as $row_css) {
      echo '<link rel="stylesheet" type="text/css" href="'.base_url().'/assets/css/'.$row_css.'">';
    } ?>

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Style sementara nav admin -->
    <style media="screen">
    /* Add a black background color to the top navigation */
      .topnav {
        background-color: #333;
        overflow: hidden;
      }

      /* Style the links inside the navigation bar */
      .topnav a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
      }

      /* Change the color of links on hover */
      .topnav a:hover {
        background-color: #ddd;
        color: black;
      }

      /* Add a color to the active/current link */
      .topnav a.active {
        background-color: #4CAF50;
        color: white;
      }
    </style>

	</head>
  <body>
    <div class="topnav">
     <a class="active" href="#home">Home</a>
     <a href="#news">Manage Post</a>
     <a href="#contact">Contact</a>
     <a href="#about">About</a>
    </div>
