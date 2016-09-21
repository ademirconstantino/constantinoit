<?
   $http_lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
      switch ($http_lang) {
        case 'en':
         header("location:http://www.constantinoit.com/en/index.php");
          break;
        case 'es':
           header("location:http://www.constantinoit.com/es/index.php");
          break;
	case 'pt':
          header("location:http://www.constantinoit.com/ptbr/index.php");
          break;
        default:
           header("location:http://www.constantinoit.com/en/index.php");
      }
?>