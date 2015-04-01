<br>
<div class="container">
        <div class="row">

          <div class="col-md-2" >
        <center><img src="../img/fivepointsomething_logo.png" class="img-responsive" > </center>
          </div>
          <div class="col-md-3" style="padding-top:30px;" >
        <center><h2 style="font-family: 'Lobster', cursive;">Fivepointsomething.com</h2></center>
          </div>
          <div class="col-md-4">
          </div>
          <div class="col-md-3">
            <?php 
              if (isset($_SESSION['id'])) { ?>
                  <form action="" method="post">
                    <center><button type="submit" class="btn btn-default" name="logout">Logout</button></center>
                  </form>
              
              <?php }else{ ?>
             <center> <h4><a href="login/index.php">Login</a> | <a href="register/index.php">Register</a></h4></center>
                  
              <?php }
            ?>
          </div>

        </div>
      </div>

        <br><br>

      <!-- Navigation Bar Starts here -->
         <div class="container">
        <div class="navbar navbar-inverse navbar-static-top" role="navigation" style="background-color:  ; border-bottom-color: transparent;">
          <div class="container">
              <a href="index.htm" class="navbar-brand"></a>
              <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>
                <span class = "icon-bar"></span>

              </button> 
              <div class="collapse navbar-collapse navHeaderCollapse">

                <ul class="nav navbar-nav navbar-left" style="font-family: 'Roboto Condensed', sans-serif;font-size: 1.3em;font-color: #FFFFFF">
                  <li> <a href="../index.php" style="color:#FFFFFF">HOME</a></li>
                  <li> <a href="../printme/index.php" style="color:#FFFFFF">PRINT-ME</a>
                  </li>
                  <li> <a href="../knowme/index.php" style="color:#FFFFFF">KNOW-ME</a></li>       
                  
               

                   <li class="dropdown">

                    <a href="#" class="dropdown=toggle" data-toggle="dropdown" style="color:yellow">EVENTS<b class = "caret"></b></a>

                    <ul class="dropdown-menu">

                      <li><a href="http://mun.fivepointsomething.com">MUN</a></li>
                     
                      
                    </ul>
                   </ul>
          
          <ul class="nav navbar-nav navbar-right" style="font-size: 1.3em;font-color: #FFFFFF;margin-right:2em;">
        <li style="font-family:Bevan; "><a href="forms.php" style="color:white;font-family: 'Roboto Condensed', sans-serif;">SUPPORT</a></li>
      
</ul>

             </div>

        </div>
        </div>
        </div> 

<?php 
    if (isset($_POST['logout'])) {
      session_unset($_SESSION['id']);
      session_unset($_SESSION['name']);
      header("location:../index.php");
    }
 ?>
