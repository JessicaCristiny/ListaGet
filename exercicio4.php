<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>exercicio4</title>
    </head>
    <body>
        <a href="form.php?prontuario=id">
                        
        </a>
        <?php
             $prontuario = $_GET ["id"];
        
        if ($prontuario == 1) {
            
            echo "Nome = Ana Lara Meneses Prontuario= 18659";
            
        } elseif ($prontuario == 2) {
                
            echo "Nome = Maria Joaquina Porto Garcia Prontuario = 18235";
            
            } elseif ($prontuario== 3) {
                
                echo "Nome = Joana Silva Moreira Prontuario = 18458";
                 
            } elseif ($prontuario == 4) { 
                
               echo "Nome = Marcelo Antonio Fogaça Prontuario = 18754";
            }
           

        ?>
    </body>
</html>
