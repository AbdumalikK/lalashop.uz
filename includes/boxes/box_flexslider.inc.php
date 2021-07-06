<?php
  $system->document->snippets['head_tags']['flexslider'] = '<script src="'. WS_DIR_EXT .'flexslider/jquery.flexslider-min.js"></script>' . PHP_EOL
                                                         . '<link rel="stylesheet" href="'. WS_DIR_EXT .'flexslider/flexslider.css" media="screen" />';
  
  
  $box_flexslider_cache_id = cache::cache_id('box_flexslider', array('language'));
  if (cache::capture($box_flexslider_cache_id, 'file')) {
  
    $slides_query = database::query(
      "select * from ". DB_TABLE_SLIDES ."
      where status
      and (language_code = '' or language_code = '". database::input(language::$selected['code']) ."')
      and (date_valid_from < '1971' or date_valid_from >= '". date('Y-m-d H:i:s') ."')
      and (date_valid_to < '1971' or date_valid_to <= '". date('Y-m-d H:i:s') ."')
      order by priority asc;"
    );
    
    if (database::num_rows($slides_query)) {
    
      $box_flexslider = new view();
      
      $box_flexslider->snippets['slides'] = array();
      
      while ($slide = database::fetch($slides_query)) {
        $box_flexslider->snippets['slides'][] = array(
          'link' => $slide['link'],
          'image' => WS_DIR_IMAGES . $slide['image'],
          'caption' => $slide['caption'],
        );
      }
      
      echo $box_flexslider->stitch('views/box_flexslider');
      
    }
    
    cache::end_capture($box_flexslider_cache_id);
  }
?>