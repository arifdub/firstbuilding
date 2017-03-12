<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
	<link rel="stylesheet" media="screen" href="css/style.css">
    
	<title>First Building International LLC</title>

	
    
	<style>

	</style>

</head>

<body>
    

    <!-- Navigation -->
        <nav class="navbar navbar-inverse transparent navbar-fixed-top navbar-left" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo3.png" width="100" height="100"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-center">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="services.html">Services</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                        <li>
                            <a href="gallery.html">Gallery</a>
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        
        <section id="search-box">
	        <div class="container">
            <h3>Search Results</h2>
                <?php
					$search = $_GET["search"];
					$lines = file("search.txt");
					$found = false;
					
					foreach($lines as $line){
						if(strpos($line, $search) !== false)
						{
							$found = true;
							echo $line;
						}
					}	   
					
					if (!$found){
						echo "No Search result Found";
					}
				?>
			</div>
            </section>
        
       <footer>
        <div class="footer">
            <p class="text-center muted">Copyright &copy; 2017 First Building International</p>
        </div>
    </footer>

   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>    

</html>
