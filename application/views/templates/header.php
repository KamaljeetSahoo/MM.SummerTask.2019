<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>NEWS WEBSITE</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">

     <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    #text {display:none;color:red}
    </style>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Website</a>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="<?php echo base_url(); ?>home">HOME</a></li>
            <li><a href="<?php echo base_url(); ?>about">ARTICLES</a></li>
            <li><a href="<?php echo base_url(); ?>articles">BULLETIN</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">CATEGORIES
              <b class="caret"></b>
              <ul class="dropdown-menu">
                <li class="dropdown-header">Sub-Categories</li>
                <li><a href="#">SOCIAL</a></li>
                <li><a href="#">POLITICAL</a></li>
                <li><a href="#">TECHNICAL</a></li>
                <li class="dropdown-header">Sub-Categories</li>
                <li><a href="#">SOCIAL</a></li>
                <li><a href="#">POLITICAL</a></li>
                <li><a href="#">TECHNICAL</a></li>
              </ul>
            </li>
          </ul>
          <div class="col-sm-3 col-md-3 pull-right">
            <form class="navbar-form" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
            </form>
          </div>
        </div>  
      </div>  
    </nav>