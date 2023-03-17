<?php 
$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];
$paragraphEdit = str_replace($badword, '***', $paragraph);
?>

<h1>Paragrafo originale</h1>
<p> <?php echo $paragraph ?> <span> ---lunghezza <?php echo strlen($paragraph) ?> </span> </p> 

<h1>Paragrafo censurato</h1>
<p> <?php echo $paragraphEdit ?> <span> ---lunghezza <?php echo strlen($paragraphEdit) ?> </span></p>


