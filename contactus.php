<!DOCTYPE html>
<html lang="en">
        <head>
	       
	        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	        <!--jQuery library--> 
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	        <!--Latest compiled and minified JavaScript--> 
	        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	        <meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
        <style>
         .index{
                padding: 10px ;
                background-color: #101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%;
                
            }
            .content{
                padding:50px 0px 0px 0px;
                width:100%;
            }
            .content1{
                padding:20px 0px 100px px;
            }
            .bg-img{
                background-image: url(images/contactusimage.jpg);
                background-size: cover;
            }
            </style>
<body>
           <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                   
                    </button>
                    <a class="navbar-brand" href="homepage.php">Home</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    
                    <ul class="nav navbar-nav navbar-right">
                         
                           <li><a href="contactus.php"><span class="glyphicon glyphicon-phone"></span>Contact us</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
                      
                    </ul>
                </div>
            </div>
                </div>
    <div class="bg-img">
        
          <div class="container">
         <div class="col-xs-6 col-sm-offset-3">
              
                    <h1><b>LIVE SUPPORT</b></h1>
                       
                     
                         
              
             <div style="padding-bottom: 150px; padding-top: 150px;">
                       <h1><b>LIVE SUPPORT</b></h1>
              <form role="form" action="contactus_script.php " method="POST">
                                     <h4><b>Contact us</b></h4>
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="subject" name="subject" required>
                                    </div>
                                     <div class="form-group">
                                        <input type="text-area" class="form-control" placeholder="message" name="message" required>
                                    </div>
                                    <button type="submit" name="Send" class="btn btn-primary">Send</button><br><br>
                       
                                </form><br/>
             </div>
                                </div>
                    
          </div>
               
    </div>
       <footer class="index">
        <center>
        <div class="container">
            <p>Copyright © Ace the Case 2020</p>
            
        </div>
        </center>
    </footer>
	</body>
	</html>
