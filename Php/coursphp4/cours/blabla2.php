<?php
session_start();

$tab = ["Olga","Mona", "Mohamed-Ali", "Carina" ,"Erica","Say","Clovis", "Timothy", "Aicha", "Zakaria", "Jeremy", "Mike","Maxime","Saif","Josué"];
// if (!isset($_SESSION['tab'])) :
//     $_SESSION['tab'] = $tab;
//     $_SESSION['tab2'] = [];
// endif;
$nb = rand(0, 14);
echo $tab[$nb];
    // $_SESSION['tab2'] = $tab[$nb];
    // $_SESSION['tab'] = array_slice($_SESSION['tab'],$nb,1);

   


    // if(!isset($_SESSION['tab'])):
    //     $_SESSION['tab'] = $tab;
    //     $i = 15;
    // endif;
    // if(!isset($_SESSION['tab'])):
    //     $_SESSION['tab'] = $tab;
    //     $_SESSION['i'] = 16;
    // endif;
    // // if($_SESSION['i'] > 0){

    // // }
    
    // if ($_SESSION['i'] > 0):
    //     $_SESSION['i'] = $_SESSION['i']-1;
    //     $nb = rand(0,$_SESSION['i']);
    //     $nb2 = array_search($tab[$nb], $_SESSION['tab']);
    //     $a=0;
    //     var_dump($nb2);
    //     while(!is_numeric($nb2)){
    //         $nb = rand(0,$_SESSION['i']);
    //         $nb2 = array_search($tab[$nb], $_SESSION['tab']);
    //         if (sizeof($_SESSION['tab']) <= 4){
                
    //             $nb2 = "ok";
    //         }
    //     }
    //     if($nb2 == "ok"){
    //         echo "Recommence";
    //     }else{
    //         echo $_SESSION['tab'][$nb2];
    //     }
        
    //     // if ($tab[$nb] == $_SESSION['tab'][$nb2]):
            
    //         $_SESSION['tab'] = array_slice($_SESSION['tab'],$nb2,1);
    //         // unset($_SESSION['tab'][$nb2]);
            
    //     // endif;
    //     // $_SESSION['i']--;
    //     var_dump($_SESSION);
    // else:
    //     echo "Votre session est fini";
    //     session_unset();
    // endif;
