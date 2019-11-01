<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $messagem = $_POST['mensagem'];
        
        $checkbox = $_POST['checkbox'];
        
       
        echo"<p>$nome</p>";
        echo"<p>$email</p>";
        echo"<p>$messagem</p>";
        if(isset($checkbox)){
        foreach($checkbox as $value){
            echo "<p>$value</p>";
        }
      }
        ?>
    </body>
</html>