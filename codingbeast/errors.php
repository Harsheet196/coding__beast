<?php if(count($errors) > 0) :?>
<div class="col-lg-12 bg-danger">
	<?php foreach ($errors as $error):?>
		<h5><?php echo $error?></h5>
	<?php endforeach;?>
</div>                             
<?php endif ?>