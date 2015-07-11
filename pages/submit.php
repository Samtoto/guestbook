<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>My guest book</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>

    <div class="container"> 
        <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $cfg['url'];?>">Project name</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?php echo $cfg['url'];?>">Home</a></li>
              <li><a href="<?php echo $cfg['url'];?>index.php">View Message</a></li>
              <li><a href="<?php echo $cfg['url'];?>submit.php">Leave a Message</a></li>
             
            </ul>
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    
      <form class="form-inline" action="submit.php" method="post">
        <div class="form-group">
          <label for="exampleInputName">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Sam Lee" />
        </div>
        <div class="form-group">
          <label for="exampleInputEmail">Email</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="sam@example.com" value="sam@example.com" />
        </div>
        <button type="submit" class="btn btn-default" >Send</button>
        <div class="form-group" style="margin-top: 20px">
          <label for="exampleInputText">Content</label>
          <textarea class="form-control" name="message" rows="3" cols="100" placeholder="Leave a message here"></textarea>
        </div>
      </form>


    </div> <!-- /container -->
   


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>