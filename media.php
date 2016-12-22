<?php
  error_reporting(0);
  session_start();	
  include "config/koneksi.php";
  include "config/library.php";
  include "config/fungsi_thumb.php";
  include "config/class_paging.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Online Registration System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <style>
            body {
                padding-top: 0px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>
        <!--    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">-->
        <link href="assets/css/style-content.css" rel="stylesheet">


        <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="assets/ico/stan.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    </head>

    <body>

        <div class="container">
			
            <div class="row">
                <div class="span12">
                    <div class="wrapper-content">
                        <div class="header"><h1></h1>
	
							<div class="search">
								<div class="control-group">
								<form action="#/" method="post">
									<div class="input-append"><input type="text" name="searchbox" size="16" id="appendedInputButtons" class="span3" placeholder="Search..."><span class="add-on"> &nbsp&nbsp&nbsp <i class="icon-search icon-white"></i></span></div>
								</form>
								</div>	
							</div>
                        </div>
             				<div class="menu">
							<div class="navbar">
								<div class="navbar-inner">
									<div class="container">
										<ul class="nav">
											<li >
												<a href='index.php'><i class="icon-home icon-white"></i>Home</a><li class="divider-vertical"></li>
											</li>	
											<li >
												<a href='registrasi.html'>Signup</a><li class="divider-vertical"></li>
											</li>													
											<li >
												<a href='kontak.html'>Contact</a><li class="divider-vertical"></li>
											</li>												
										</ul>
									</div>
								</div>
							</div>
						</div>
                    </div>



                    <div class="span12 box-content">

                        <div class="span9">
							
							<!-- Page content -->
							<div id="content">
							<?php include"tengah.php";?>
									<!--<div class="line_bottom"> </div>
									<div class="berita_terkait">
									<ul><h1>Berita Terkait</h1>
										<li><a href="http://www.stan.ac.id/kategori/index/1/page/stapala">STAPALA</a></li>
										<li><a href="http://www.stan.ac.id/kategori/index/1/page/kegiatan-ektrakurikuler-di-stan">Kegiatan Ektrakurikuler di STAN</a></li>
										<li><a href="http://www.stan.ac.id/kategori/index/1/page/speak-stan-spesialisasi-anti-korupsi-stan">SPEAK STAN (Spesialisasi Anti Korupsi STAN)</a></li>
									</ul>
									</div>-->
							</div> 


							<!-- END Page content -->

                                
                        </div>  
                    <div class="clearfix"></div>  
				</div>

            </div>
			<div class="row">
				<div class='span12'>
					<div id="footer">Copyright &copy; 2017 - 2018 cornellekacy online registration System | FAQ</div>
				</div>
			</div>

        </div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap-transition.js"></script>
		<script src="assets/js/bootstrap-alert.js"></script>
		<script src="assets/js/bootstrap-modal.js"></script>
		<script src="assets/js/bootstrap-dropdown.js"></script>
		<script src="assets/js/bootstrap-scrollspy.js"></script>
		<script src="assets/js/bootstrap-tab.js"></script>
		<script src="assets/js/bootstrap-tooltip.js"></script>
		<script src="assets/js/bootstrap-popover.js"></script>
		<script src="assets/js/bootstrap-button.js"></script>
		<script src="assets/js/bootstrap-collapse.js"></script>
		<script src="assets/js/bootstrap-carousel.js"></script>
		<script src="assets/js/bootstrap-typeahead.js"></script>


  
    <script type="text/javascript" src="assets/js/jquery.jshowoff.min.js"></script>
	<script type="text/javascript" src="assets/js/scriptbreaker-multiple-accordion-1.js"></script>
		<script language="JavaScript">

		$(document).ready(function() {
			$(".topnav").accordion({
				accordion:false,
				speed: 500,
				closedSign: '<img src="assets/img/minus.png">',
				openedSign: '<img src="assets/img/plus.png">'
			});
		});

		</script>

    <script type="text/javascript">		
        $(document).ready(function(){ $('#features').jshowoff(); });
    </script>


    <script type="text/javascript" language="javascript" src="assets/js/jquery.carouFredSel-5.6.1.js"></script>
    <script type="text/javascript" language="javascript">
        $('#foo2').carouFredSel({
            prev: '#prev2',
            next: '#next2',
            pagination: "#pager2",
            auto: false
        });
    </script>
<link type="text/css" href="assets/js/themes/base/ui.all.css" rel="stylesheet" />  

<link type="text/css" href="assets/js/themes/base/ui.all.css" rel="stylesheet" />   
<script type="text/javascript" src="assets/js/ui/ui.core.js"></script>
<script type="text/javascript" src="assets/js/ui/ui.datepicker.js"></script>
<script type="text/javascript" src="assets/js/ui/i18n/ui.datepicker-id.js"></script>
    <script type="text/javascript"> 
      $(document).ready(function(){
        $("#tanggal").datepicker({
					dateFormat  : "dd MM yy",        
          changeMonth : true,
          changeYear  : true					
        });
      });
    </script>		
</body>
</html>
