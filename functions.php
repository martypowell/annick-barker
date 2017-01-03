<?php
	function ShowNav($includeHero = false) {
		ob_start();
  		include 'navigation.php';
  		$nav = ob_get_clean();

		$html = "<div class='header'>" . $nav;
		if ($includeHero) {
			ob_start();
	  		include 'hero.php';
	  		$hero = ob_get_clean();

	  		$html .= $hero;
		}
	    
	    echo $html . "</div>";
	 };

	 function ShowHeader($title = null, $relativePath = null) {
		echo '<!DOCTYPE html>';
		echo '<html lang="">';
			echo '<head>';
				echo '<meta charset="utf-8">';
				echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
				echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
				echo '<title>' . $title . ($title != null ? ' | ' : '')  . 'Annick Barker, LCSW-C Therapy and Counseling</title>';
				echo '<!-- Bootstrap CSS -->';
				echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">';
				echo '<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->';
				echo '<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->';
				echo '<!--[if lt IE 9]>';
				echo '<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>';
				echo '<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>';
				echo '<![endif]-->';
				echo '<link rel="stylesheet" href="base.css" crossorigin="anonymous">';
				echo '<link href="http://www.annickbarker.com/' . $relativePath . '" rel="canonical" />';
				echo '<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">';
			echo '</head>';
			echo '<body>';
	 };
 ?>