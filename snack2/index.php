<?php

    /* Passare come parametri GET name, mail e age e verificare 
    (cercando i metodi che non conosciamo nella documentazione)
    che name sia più lungo di 3 caratteri, che mail contenga
    un punto e una chiocciola e che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */


    // imposto che i parametri del get vadano inseriti altrimenti si richiede di farlo
    if (!empty($_GET['name']) && !empty($_GET['email']) && !empty($_GET['age'])) {
        
        // 3 parametri GET
        $name = $_GET['name'];

        $email = $_GET['email'];
    
        $age = $_GET['age'];
        
        // se soddisfano i requisiti allora stampo accesso riuscito, altrimeti no
        if(strlen($name) > 3 && strpos($email, '@') !== false && strpos($email, '.') !== false && is_numeric($age) === true){
            echo "Accesso riuscito! <br>";
        } else {
            echo "Accesso negato! <br>";
        }
    } else {
    
        echo "Inserisci i tuoi dati! <br>";
    
    }


?>