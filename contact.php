<html>

<head>
  
  <?php include("includes/header.php") ?>

</head>

    
<body>

    <!-- Bootstrap Wrapper -->
    <div class="container">
      
      <?php include("includes/jumbotron.php") ?>
      
      <!-- Page Header -->
      <div class="container">
      
      </div>
      <!-- End of Page Header -->
      
      <?php include("includes/navbar.php") ?>
      
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
    
    
    <?php include("includes/footer.php") ?>
   

</body>
</html>