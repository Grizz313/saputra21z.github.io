<?php
include "autoloader.php";


switch ($_GET['type']) {
    case 'create':
    

        $user =new User();
       

        if ($user->create($_POST)) {
            header ('location: index.php');
        } else {
            echo "ERROR SAVE DATA";
        }

        break;

    case 'edit':


        $user =new User();
        
        if ($user->edit($_POST, $_GET['id'])) {
            header ('location: index.php');
        } else {
            echo "ERROR SAVE DATA";
        }

        break;

    case 'delete':


        $user =new User();
        
        if ($user->delete( $_GET['id'])) {
            header ('location: index.php');
        } else {
            echo "ERROR SAVE DATA";
        }

        break;



    
    default:
        header ('location: index.php');
        break;


}



