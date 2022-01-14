<?php

require_once './controller/ControllerAjout.php';
require_once "./views/header.php";

$control = new ControllerAjout();



$commit = isset($_GET['confirmed']);

if (isset($_GET["page"])) {
    switch ($_GET["page"]) {
        case 'add':

            $control->add($commit);

            break;

        case 'details':


            $control->details();



            break;
        case 'search':


            $control->searchChamp();



            break;



        default:
            $control->list();
            break;
    }
} else {
    $control->list();
}
require_once "./views/footer.php";
