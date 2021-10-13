<?php
   $paragraph = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur commodi soluta, maxime nulla magnam repellendus amet hic corrupti ipsam labore, id officiis laborum dignissimos ratione. Quaerat voluptatum unde dicta suscipit?'; 

   $badword = $_GET["badword"];
   
   $censoredParagraph = str_ireplace($badword, '***', $paragraph);
?>

<h3><?php echo $paragraph ?></h3>

<h3>Lunghezza paragrafo: <?php echo strlen($paragraph)?></h3>

<h3>Badword: <?php echo $badword ?></h3>

<h2>Paragrafo censurato &darr;</h2>

<h3><?php echo $censoredParagraph ?></h3>

<h3>Lunghezza paragrafo censurato: <?php echo strlen($censoredParagraph)?></h3>