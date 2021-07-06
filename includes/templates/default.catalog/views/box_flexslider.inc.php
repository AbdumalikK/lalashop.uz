<div id="slider-wrapper">
  <div id="slider" class="flexslider">
    <ul class="slides">
<?php
  foreach($slides as $slide) {
    if (!empty($slide['link'])) {
      echo '      <li><a href="'. htmlspecialchars($slide['link']) .'"><img src="'. $slide['image'] .'" alt="" />'. (!empty($slide['caption']) ? '<p class="flex-caption">'. $slide['caption'] .'</p>' : '') .'</a></li>' . PHP_EOL;
    } else {
      echo '      <li><img src="'. $slide['image'] .'" alt="" />'. (!empty($slide['caption']) ? '<p class="flex-caption">'. $slide['caption'] .'</p>' : '') .'</li>' . PHP_EOL;
    }
  }
?>
    </ul>
  </div>
</div>
<script>
  $('.flexslider').flexslider({
    controlNav: false
  });
</script>