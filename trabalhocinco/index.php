<!DOCTYPE html>
<?php 
   include_once "conf/default.inc.php";
   require_once "conf/Conexao.php";
   $title = "Lista de Carros";
   $procurar = isset($_POST["procurar"]) ? $_POST["procurar"] : ""; 
?>
<html>
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<?php include "menu.php"; ?>
    <form method="post">
    <fieldset>
        <legend>Procurar Carros</legend>
        <input type="text"   name="procurar" id="procurar" size="37" value="<?php echo $procurar;?>">
        <input type="submit" name="acao"     id="acao">
        <br><br>
        <table>
	    <tr>
            <td><b>Código</b></td>
            <td><b>Nome</b></td> 
            <td><b>Valor</b></td>
            <td><b>KM</b></td>
        </tr>
        <?php
            $pdo = Conexao::getInstance(); 
            $consulta = $pdo->query("SELECT * FROM carro 
                                     WHERE nome LIKE '$procurar%' 
                                     ORDER BY nome");
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) { 
                $media = ($linha['n1'] + $linha['n2'] + $linha['n3'] + $linha['n4'])/4;
                
                $hoje = date("Y");
                $nasc = date("Y",strtotime($linha['km']));

                $resultado = "+10000km";
                $class = "red";
                if ($media >= 100000){
                    $resultado = "Aprovado";
                    $class = "blue";
                }


        ?>
	    <tr>
            <td><?php echo $linha['id'];?></td>
            <td><?php echo $linha['nome'];?></td>
            <td><?php echo number_format($linha['n1'], 1, ',', '.');?></td>
            <td><?php echo number_format($linha['n3'], 1, ',', '.');?></td>
            <td><?php echo number_format($linha['n4'], 1, ',', '.');?></td>
            <td><?php echo number_format($media, 2, ',', '.');?></td>
            <td class="<?php echo $class;?>"><?php echo $resultado;?></td>
            <td><?php echo date("d/m/Y",strtotime($linha['valor']));?></td>
            <td><?php echo $hoje - $preç;?></td>
	    </tr>
            <?php } ?>       
        </table>
    </fieldset>
    </form>
</body>
</html>