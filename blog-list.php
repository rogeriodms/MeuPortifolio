<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Bootstrap 4 Blog Template For Developers</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>
    
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">

</head> 

<body>
   
    <div class="main-wrapper">
			<section class="cta-section theme-bg-light py-5">
					<div class="container text-center">
						<h2 class="heading"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seja Bem-vindo ao meu blog. </font></font></h2>
						<div class="intro"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Este foi criado para ajudar os desenvolvedores iniciantes em sua jornada, como já vivenciados por muitos desafios, acho que é necessário repassar todos os conhecimentos que adiquiri.</font><font style="vertical-align: inherit;">Inscreva-se e receba meus últimos post na sua caixa de entrada.</font></font></div>
						<form class="signup-form form-inline justify-content-center pt-3" method="GET" action="capemail.php">
							<div class="form-group">
								<label class="sr-only" for="semail"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Seu email</font></font></label>
								<input type="email" id="semail" name="semail1" class="form-control mr-md-1 semail" placeholder="Enter email">
							</div>
							<button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Se inscrever</font></font></button>
						</form>
					</div><!--//container-->
				</section>
	    
	    <section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="assets/images/blog/blog-post-thumb-7.jpg" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="?post=teste&#interests">Heading Lorem Ipsum Dolor Sit Amet</a></h3>
						    <div class="meta mb-1"><span class="date">Published 3 months ago</span><span class="time">5 min read</span><span class="comment"><a href="#"> 0 comments</a></span></div>
						    <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
						    <a class="more-link" href="?post=teste&#interests">Read more &rarr;</a>
					    </div> <!--//media-body-->
				    </div> <!--//media-->
			    </div>  <!--//item -->
			    
			    <!--<nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link rounded-left" href="index.html">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded-right" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
                </nav>--> 
                
               <!-- <h3 class="title mb-1"><a href="?#interests">ainda nao há nenhum Post</a></h3>-->


				
		    </div>
	    </section>
	    
	    <footer class="footer text-center py-2 theme-bg-dark">
		   
	        <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can buy the commercial license via our website: themes.3rdwavemedia.com */-->
           <!--<small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>--> 
		   
	    </footer>
    
    </div><!--//main-wrapper-->
    
    
    
    
    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** 
    <div id="config-panel" class="config-panel d-none d-lg-block">
        <div class="panel-inner">
            <a id="config-trigger" class="config-trigger config-panel-hide text-center" href="#"><i class="fas fa-cog fa-spin mx-auto" data-fa-transform="down-6" ></i></a>
            <h5 class="panel-title">Choose Colour</h5>
            <ul id="color-options" class="list-inline mb-0">
                <li class="theme-1 active list-inline-item"><a data-style="assets/css/theme-1.css" href="#"></a></li>
                <li class="theme-2  list-inline-item"><a data-style="assets/css/theme-2.css" href="#"></a></li>
                <li class="theme-3  list-inline-item"><a data-style="assets/css/theme-3.css" href="#"></a></li>
                <li class="theme-4  list-inline-item"><a data-style="assets/css/theme-4.css" href="#"></a></li>
                <li class="theme-5  list-inline-item"><a data-style="assets/css/theme-5.css" href="#"></a></li>
                <li class="theme-6  list-inline-item"><a data-style="assets/css/theme-6.css" href="#"></a></li>
                <li class="theme-7  list-inline-item"><a data-style="assets/css/theme-7.css" href="#"></a></li>
                <li class="theme-8  list-inline-item"><a data-style="assets/css/theme-8.css" href="#"></a></li>
            </ul>
            <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
        </div><!--//panel-inner
    </div><--//configure-panel--> 

    
       
    <!-- Javascript -->          
    <script src="assets/plugins/jquery-3.3.1.min.js"></script>
    <script src="assets/plugins/popper.min.js"></script> 
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="assets/js/demo/style-switcher.js"></script>     
    

</body>
</html> 

