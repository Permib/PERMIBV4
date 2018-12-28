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

		<!-- CSSnya Header -->
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/header.css')?>">

		<!-- Pure CSS -->
		<?php foreach ($css as $row_css) {
			echo '<link rel="stylesheet" type="text/css" href="'.base_url().'/assets/css/'.$row_css.'">';
		} ?>
	


		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js" crossorigin="anonymous"></script>


		<!-- font -->
		<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

	</head>

  	<body>

  	<!-- navbar -->
		<!-- Penutup Wraper ada di footer -->
  		<div class="wrapper">
              <header>

                <nav>

          <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
          </div>

          <div class="logo">
            <img src="<?=base_url('assets/image/PermibTU.png')?>">
          </div>

          <div class="menu">

            <ul class="kiri" style="float: left;"> 
               <li> <a href="#" style="margin-left: -5px;"> AKADEMIK </a></li>
                <li> <a href="#" style="margin-left: 3px;"> STORE </a></li>
            </ul>

             <ul>
                <!-- Home with dropdown -->
                <li> <a href="<?=base_url('')?>"> HOME  </a> </li>
                <li><a href="<?=base_url('event')?>"> EVENT </a></li>
                <li><a href="<?=base_url('documentation')?>"> DOCUMENTATION </a></li>
                <li><a href="<?=base_url('about')?>"> ABOUT </a></li>
             	</ul>
          </div>
       </nav>

              </header>
