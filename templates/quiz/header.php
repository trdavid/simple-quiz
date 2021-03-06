<?php
$title = isset($quiz) ? 'Simple Quiz :: ' . $quiz->getName() : 'Simple Quiz';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="<?php echo $root; ?>/res/bootstrap/dist/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $root; ?>/res/css/quiz.css" />
    <title><?php echo $title; ?></title>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo $root; ?>/res/bootstrap/dist/assets/js/html5shiv.js"></script>
      <script src="<?php echo $root; ?>/res/bootstrap/dist/assets/js/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>
    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $root; ?>/">Simple Quiz</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo $root; ?>/">Quizzes</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo $root; ?>/admin/">Admin</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>