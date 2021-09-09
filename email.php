<?php 

    if (isset ($_POST['email']) && !empty ($_POST['email'])) { 

        $nome = addcslashes ($_POST['name']);
        $email = addcslashes ($_POST['email']);
        $message = addcslashes ($_POST['message']);


        
        $to = "selton.alex.1999@gmail.com";
        $subject = "contato - Selton Souza";
        $body = "Nome: ". $nome. "\n".
                "Email: ". $email."\n".    
                "Mensagem: ". $message;
        // NESSA PARTE DO "FROM" OPTEI POR COLOCAR UM OUTRO G-MAIL QUE EU TENHO MAS, QUANDO FOR OSPEDAR EM UM SERVIDO O '@' TEM QUE SER PERTENCENTE AO DOMINIO DO SERVIDOR/SITE.\\ 
        
        $header  = "From:asgard.selton@gmail.com". "\r\n".
                    "Replay-To:". $email. "\r\n".       
                    "X=Mailer:PHP/".phpversion ();
        
        //NESSA PARTE PODERIAMOS FAZER UMA CONDIÇÃO PARA O TRATAMENTO DO ERRO MAS, FICA AO CRITÉRIO DE VOCÊS :)\\            
        if (mail ($to, $subject, $body, $header)) {

            echo ("Email Enviado Com sucesso!");

        } else {
           
            echo ("Erro ao Enviar o E-mail, certifique-se que está preenchendo tudo corretamente.");
        }



    }    
?>