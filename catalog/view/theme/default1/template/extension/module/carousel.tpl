<div id="carousel<?php echo $module; ?>" class="owl-carousel ">
  <?php foreach ($banners as $banner) { ?>
  <div class="item text-center bg-light">
    <?php if ($banner['link']) { ?>
    <a href="<?php echo $banner['link']; ?>"><img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" /></a>
    <?php } else { ?>
    <img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['title']; ?>" class="img-responsive" />
    <?php } ?>
  </div>
  <?php } ?>
</div>
<script type="text/javascript"><!--
$('#carousel<?php echo $module; ?>').owlCarousel({
	items: 6,
	autoPlay: 3000,
	navigation: true,
	navigationText: ['<i class="bg-black"><img class="img-responsive" src="catalog/view/theme/default1/image/img_left.png" width="30px" height="20px"/></i>', '<i class="bg-black"><img class="img-responsive" src="catalog/view/theme/default1/image/img_right.png" width="30px" height="20px"/></i>'],
	pagination: true
});
--></script>