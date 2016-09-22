<html>

<head>
    <meta charset = "utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">

    <!-- Bootstrap minified CSS Link -->
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        
    <!-- local style sheet placed second so overrides bootstrap css  -->
    <link rel = "stylesheet" href = "client/css/style.css">
        
    <!-- HTML5 shim for IE8 backwards compatibility -->
        
    <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
        
    <!-- local JavaScript file -->
    <script src = "script.js"></script>
        
    <!-- Bootstrap minified JavaScript -->
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

    
<body>
    <?php
        echo 'Hello world from Cloud9!';
    ?>
    
    <!-- Bootstrap Wrapper -->
    <div class="container">
      
      <!-- Page Header -->
      <div class="container">
        <div class="page-header">
          <h1>Barrett's Bikes</h1>  
        </div>
      </div>
      <!-- End of Page Header -->
      
      <!-- Navbar -->
      <div class="container">
        <div>
          <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
              <li class="active">Home</li>
              <li class="active">Bikes</li>
              <li class="active">About</li>
              <li class="active">Location</li>
            </ul> 
          </nav>
        </div>
      </div>
      <!-- End of Navbar -->
      
      <!-- Comments Form -->
      <div class="container">
        <div>
          <form role="form" method="post" id="form" ation="comment.xml">
            <h2>Contact Us</h2>
            
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="Name">
            </div>
            
            <div class="form-group">
              <label for="name">Email</label>
              <input type="text" class="form-control" id="email" name="Email">
            </div>
            
            <div class="form-group">
              <label for="name">Comment</label>
              <input type="text" class="form-control" id="comment" name="Comment">
            </div>
          </form>
        </div>
      </div>
      <!-- End of Comments Form -->
      
      
    </div>
    
    

    <!-- Bootstrap minified CSS Link -->
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        
    <!-- local style sheet placed second so overrides bootstrap css  -->
    <link rel = "stylesheet" href = "client/css/style.css">
        
    <!-- HTML5 shim for IE8 backwards compatibility -->
        
    <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
        
    <!-- local JavaScript file -->
    <script src = "script.js"></script>
        
    <!-- Bootstrap minified JavaScript -->
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>