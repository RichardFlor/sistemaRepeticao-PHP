<?php
    $valor1 = (int) 0;
    
    $cont = (int) 0; //Equivalente ao i

    if(isset($_POST['btnCalcular']))
    {
        $valor1 = $_POST['txtNumero'];
        //Exemplo de utilização do WHILE
        
      //  while($cont <= $valor1)
    //      {
     //       echo($cont . "<br>");
            
            //$cont = $cont +1;
            //$cont++;
    //        $cont +=1;
     //     }
        
        //Exemplo de ultilizção usando for
        
        for($cont = 0;$cont <=$valor1;$cont++)
        {
            echo($cont . "<br>"); 
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>
           Repeticao
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet"
              type="text/css"
              href="CSS/style.css">
    </head>
    <body>
        <form name="frmRepeticao" method="post" action="">
            <label>Escolha um numero</label>
            <input type="text" name="txtNumero" value="">
            <input type="submit" name="btnCalcular" value="Calcular">
        </form>
    </body>
</html>

