<?php include("header.php"); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
html,body
{ 
    background-image:url('g1.gif'); 
    background-repeat:repeat; 
}
</style>  <body class="bg-info" >
  <center>
    <div class="container">    
        <div id="loginbox" style="margin-top:200px; margin-left:375px;margin-right:800px; width:450px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-success"  style="background-size:cover;">
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                      
                    </div>     

                    <div style="padding-top:30px;" class="panel-body" >

                        <div style="display:none;" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form action="process.php" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" style=" background-color:transparent; color:#000;; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bolder;" name="username" value="" placeholder="username"> 
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password" style=" background-color:transparent; color:#000;; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bolder;">
                            </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-check"></span> Login</button>

                                    </div>
                                </div>
                        <a href="signInClient.php" > User Login? </a>    
							</form>

                         </div>
					</div>
                    
				</div> 
			</div> <!-- /container -->
  </center>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


<?php
$file = "Ding-dong-intercom.mp3";
 if(isset($_GET['err'])){
  echo "        ERROR";
  echo nl2br("\n");
	echo "<embed src=\"Ding-dong-intercom.mp3\" autostart=\"false\" loop=\"false\" />";
	} ?>
</div>


</body>
</html> 