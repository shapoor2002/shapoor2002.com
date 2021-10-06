<?php echo $header;?>
<div>
<?php if(isset($titel)){ ?>
<?php foreach($titel as $value){ ?>
<h1><?php echo $value['titel'];?></h1>
<?php  } } else{?>
<h1><?php echo $text_error;?></h1>
<?php }?>
</div>
<?php echo $footer;?>

