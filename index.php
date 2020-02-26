<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Navbar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
 
 <body>

        <div class="main_wrapper">
                  <!---header starts---->
             	<div class="header_wrapper"> 

    	         	<img id ="logo"src="images/logo.jpg"/>
    		        <img id ="banner"src="images/logo.jpg"/>
 

    	         </div>
    	         	<!---header ends>

    	        <--navigation bar r----> 		

    	        <div class="menubar">


    	        	<ul id="menu">

 						<li><a href="#">Home</a></li>
 						<li><a href="#">Products</a></li>
 						<li><a href="#">My Account</a></li>
 						<li><a href="#">Sign Up</a></li>
 						<li><a href="#">Shopping Cart</a></li>
 						<li><a href="#">Contact Us</a></li>

					</ul>


				    <div id="form">

				    	<form method ="get" action="results.php" enctype="multipart/form-data">

				    		 <input type="text" name="user_query" placeholder="search Item" />
				    		 <input type="submit" name="search" value="search"/>

				    	</form>	 
				    		 

				    </div>	


    	         </div>
        
    	           <!--navigation bar ends ----> 

    	     <!----content wrapper starts-->      	
    	   <div class="content_wrapper">


    	       <div id= "sidebar"> This is a sidebar</div>
    	       <div id="content_area"> This is a content area</div>


             </div>

             <!------content wrapper ends------>
    	    <div id="footer"> This is a footer</div>

     



         </div>





      </body>



</html>
