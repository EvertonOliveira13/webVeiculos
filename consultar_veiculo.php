<!DOCTYPE html>
<html>
<head>
<title>Indice Site Veiculos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>

</head>

<body>

    <?php 
    include "config.php";
    include "classVeiculo.php";
    $veiculo = new Carro ( DB_STRING, DB_USER, DB_PASS);
    
    $quant = $veiculo->Contar();

    
    $exc = @$_GET['excluir'];
if(!$exc=="");
$veiculo->Excluir($exc);

    
    $pag = @$_GET['pag'];
    if( $pag == "")		
        $pag = 1;
            
    $limitePaginas = 5;
    $inicio = (($pag-1) * $limitePaginas) ;	
    $paginas = ceil($quant / $limitePaginas);	
      
echo "<h1>".$quant." - Veiculos Cadastrados</h1>";
echo "<table border='1' style='text-align: center;'>
		<tr>
			<td>Código</td>
            <td>Modelo</td>
            <td>Descrição</td>
            <td>Foto Principal</td>
			<td>Ações</td>
        </tr>";

//====================================== Menu cadastrar

$result = $veiculo->ListarPag($inicio, $limitePaginas);

if (isset($result))
  {
    while ($Linha = $result->fetchObject())
    {
      echo "<tr><td>".$Linha->codigovei."</td> <td>".$Linha->modelo."</td> <td>".$Linha->descricao."</td> <td><img src='".$Linha->fotonome1."' style='max-width:180px;'></td>";
      echo "<td>";
      echo "<a href='./novo_veiculo.php'>Novo</a> ";
      echo "<a href='./alterar_veiculo.php?id=".$Linha->codigovei."'>Editar</a> ";
      echo "<a href='./consultar_veiculo.php?excluir=".$Linha->codigovei."'>Excluir</a>";
      echo "</td></tr>";
    }
  }
  else
  {
      echo "<tr><td colspan='4'>Não há dados para listar!</td></tr>";
  }
  echo "</table>";
  echo "<a href='index.php'> <== Voltar</a>";

?>
<div id="paginacao"><?php for($i = 1; $i <= $paginas; $i++) echo "<span class='paginacao'><a href='./consultar_veiculo.php?pag=$i'>$i</a>  - </span>"; ?> </div>
</body>
</html>