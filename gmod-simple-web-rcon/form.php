<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CMD!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<form class="form-horizontal" role="form" method="post" action="success.php">
<fieldset>

<!-- Form Name -->
<legend>Run a Command</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="user">Username</label>
  <div class="controls">
    <input id="user" name="user" type="text" placeholder="Username" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label" for="pass">Password</label>
  <div class="controls">
    <input id="pass" name="pass" type="password" placeholder="Password" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="type">type</label>
  <div class="controls">
    <input id="type" name="type" type="text" placeholder="addid/removeid/cmd" class="input-xlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="cmd">Command</label>
  <div class="controls">
    <input id="cmd" name="cmd" type="text" placeholder="Command" class="input-xlarge">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="id">SteamID</label>
  <div class="controls">
    <input id="id" name="id" type="text" placeholder="SteamID" class="input-xlarge">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="rank">Rank</label>
  <div class="controls">
    <input id="rank" name="rank" type="text" placeholder="Rank" class="input-xlarge">
    
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="post"></label>
  <div class="controls">
    <button id="post" name="post" class="btn btn-primary">Run</button>
  </div>
</div>

</fieldset>
</form>
</body>