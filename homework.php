<?php


$age=readline("Veillez saisir votre âge: ");

if(($age>=3)and ($age<= 12) ){
    echo("enfant");
}
 else if (($age>=13)and ($age<= 17) ){
Echo("Mineur");
    }

    else if (($age>=18)and ($age<= 54) ){
        Echo("Majeur");
            }
         
            else if ($age>=55){
                Echo("âgée");
                    }
?>