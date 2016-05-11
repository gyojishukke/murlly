<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
<h2>Liste de mes Url...</h2>
<ul>

<?php
  
?>
<?php foreach ($urlAll as $key =>$url)
{ 
?>  
        <li>
          <a href="<?=  $url['urlshort'] ?>" >Url short:</a><?= $url['urlshort'] ;?> 
        </li> 
   
        <li>
          <a href="<?=  $url['urllong'] ?>" >Url long:</a><?= $url['urllong'] ;?> 
        </li> 
<?php } ?>

</ul>
<?php $this->stop('main_content') ?>
<!-- // if(filter_var($url, FILTER_VALIDATE_ULR) ===FALSE) -->

