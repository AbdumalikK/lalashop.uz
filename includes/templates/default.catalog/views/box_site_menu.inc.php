<nav id="site-menu" class="navbar p-3 hidden-print">
    <div class="row mainNavbar">

      <div class="col-md-4 col-xs-2 text-right">
        <a class="logotype ml-5 ml-xs-0" href="<?php echo document::href_ilink(''); ?>">
          <img src="<?php echo document::href_link('images/logotype.png'); ?>" alt="<?php echo settings::get('store_name'); ?>" title="<?php echo settings::get('store_name'); ?>" />
        </a>
      </div> 


      <div class="col-md-4 col-xs-8">
        <?php echo functions::form_draw_form_begin('search_form', 'get', document::ilink('search'), false, 'class="navbar-form"'); ?>
        <?php echo functions::form_draw_search_field('query', true, 'placeholder="'. language::translate('text_search_products', 'Search products') .' &hellip;"'); ?>
        <?php echo functions::form_draw_form_end(); ?>
      </div>  


      <div class="col-md-4 col-xs-2 NavRight">
        <span class="text-right">
          <?php include vmod::check(FS_DIR_APP . 'includes/boxes/box_cart.inc.php'); ?>
        </span>
      </div>  

      
    </div>
</nav>
