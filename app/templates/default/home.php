<?php $this->layout('layout', ['title' => 'home']) ?>



<?php $this->start('main_content') ?>

<!-- <p>Et maintenant, RTFM dans <strong><a href="../docs/tuto/" title="Documentation de W">docs/tuto</a></strong>.</p> -->
<!-- include -->
<?php $this->stop('main_content') ?>




<?php $this->start('side_content') ?>

<form class="form-horizontal" method="POST" action="">
  <div class="form-group">
    
    <label for="pseudoId"   class="col-sm-2 control-label" >Pseudo : </label>
    <div class="col-sm-4">
         <input name="pseudo" type="text" id="pseudoId" class="form-control" placeholder ="votre pseudo"> 
    </div>
  </div>
  <div class="form-group">
    
    <label for="urlId"  class="col-sm-2 control-label">Url : </label>
    <div class="col-sm-4">
   		 <input  name="url" type="text" id="urlId" class="form-control" placeholder ="Saisissez une Url">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
     <button type="submit" class="btn btn-primary" name="submit">Valider</button>
    </div>
  </div>
</form>

<?php $this->stop('side_content') ?>