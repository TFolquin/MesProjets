<?php

require_once './Controller/ContactController.php';

$control = new Controller();
$commit = isset($_GET['commit']);



switch ($_GET['page']) {
    case 'contact':
        $style = "styleContact.css";
        
        break;

    case 'aboutus':
        $style = "styleAboutus.css";

        break;

    default:
        $style = "styleHome.css";


        break;
}

require_once './views/header.php';


switch ($_GET['page']) {
    case 'contact':

        $control->add($commit);

        break;

    case 'aboutus':
        require_once './views/aboutus.php';
        break;


    default:
        require_once './views/home.php';


        break;
}


require_once './views/footer.php';
