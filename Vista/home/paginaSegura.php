
<?php
$titulo = ".: Home :.";
$dir = "";
include($dir . "../estructura/cabeceraSegura.php");
if (isset($_GET["tipo"])) {
  $param["tipo"] = $_GET["tipo"];
} else {
  $param["tipo"] = "null";
}


?>
<link rel="stylesheet" type="text/css" href="../css/estiloproductos.css">

<script type="text/javascript" src="../js/home/paginaSegura.js"></script>
<input type="hidden" id=tipo value="<?php echo $param["tipo"];?>">

	



<div id="productos" class="container pt-2 pb-2">

  
  

</div>

  
</div>

<?php

include($dir . "../estructura/pie.php");
?>