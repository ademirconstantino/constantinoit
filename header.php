<?php

 $citen = 'cit.en.json';
 $cites = 'cit.es.json';
 $citpt = 'cit.pt.json';
 $citit = 'cit.it.json';
 
 if(isset($_GET["lang"])) {
	$lang = $_GET["lang"];
 } else {
	 $lang = "en";
 }
 
 if($lang == "en") {
     $file = $citen;
 } else if($lang == "es") {
     $file = $cites;
 } else if($lang == "pt") {
     $file = $citpt;
 } else if($lang == "it") {
     $file = $citit;
 }
 
 $cit_json = file_get_contents($file);
 $site = json_decode($cit_json, true);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php echo $site["header"]["website_title"] ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $site["header"]["website_description"] ?>">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bootstrap-switch/build/css/bootstrap3/bootstrap-switch.min.css" media="screen" rel="stylesheet" />
    <link href="css/theme-style.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="#" id="colour-scheme" rel="stylesheet">
    <link href="css/custom-style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/icons/favicon.png">
    <meta name="google-site-verification" content="<?php echo $site["header"]["google_site_verification"] ?>" />
  </head>
  <body class="page">
  <br/>
    <div id="navigation" >
      <div class="navbar-static-top">
        <div class="container">
          <table width="100%">
		  <tr><td align="left" width="70%"><img class="img-responsive" src="img/logocit2.png" style="padding-top -15px;"/>
		  <td align="right" width="30%">
                    <a href="index.php?lang=en"><img src="img/en.png"/></a>
                  	<a href="index.php?lang=es"><img src="img/es.png"/></a>
					<a href="index.php?lang=it"><img src="img/it.png"/></a>
                  	<a href="index.php?lang=pt"><img src="img/br.png"/></a>
		  </td>
		</tr>
          </table>
	  <br/>
            </div>
          </div>
		</div>
        <div style="width: 100%;background-color: #000000;">
			<center>
					<ul class="nav navbar-nav dark" style="padding-left: 5%">
						 <li class="home-link">
							<a href="index.php?lang=<?php echo $lang?>"><i class="fa fa-home"></i><span class="hidden">Página Inicial</span></a>
						  </li>
						
						  <li>
							<a href="about.php?lang=<?php echo $lang?>"><?php echo $site["menu"]["about_us"] ?></a> 
						  </li>

						  <li>
							<a href="services.php?lang=<?php echo $lang?>"><?php echo $site["menu"]["services"] ?></a> 
						  </li>
						  <li>
							<a href="contact.php?lang=<?php echo $lang?>"><?php echo $site["menu"]["contact"] ?></a> 
						  </li>
					</ul>
						
			</center>
       </div>