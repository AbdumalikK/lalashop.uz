<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.6.7/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyCPk7KAbdlMc_9JCULUVxcqy2OGiVyH_vw",
    authDomain: "lalashop-18e58.firebaseapp.com",
    projectId: "lalashop-18e58",
    storageBucket: "lalashop-18e58.appspot.com",
    messagingSenderId: "366225053289",
    appId: "1:366225053289:web:ba2b6e8adee2b4070674f8",
    measurementId: "G-57E0S3NB1J"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

<footer id="footer" class="hidden-print bg-white">

 <hr />
<?php $currenturl = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].'/'; ?>
  <div class="columns text-center">
    <section class="categories hidden-xs">
      <h3 class="title"><?php echo language::translate('title_categories', 'Categories'); ?></h3>
      <ul class="list-unstyled">
        <?php foreach ($categories as $category) echo '<li><a href="'. htmlspecialchars($category['link']) .'">'. $category['name'] .'</a></li>' . PHP_EOL; ?>
      </ul>
    </section>

    <?php if ($manufacturers) { ?>
    <section class="manufacturers hidden-xs hidden-sm">
      <h3 class="title"><?php echo language::translate('title_manufacturers', 'Manufacturers'); ?></h3>
      <ul class="list-unstyled">
      <?php foreach ($manufacturers as $manufacturer) echo '<li><a href="'. htmlspecialchars($manufacturer['link']) .'">'. $manufacturer['name'] .'</a></li>' . PHP_EOL; ?>
      </ul>
    </section>
    <?php } ?>

    <?php //if (settings::get('accounts_enabled')) { ?>
    <!-- <section class="account">
      <h3 class="title"><?php //echo language::translate('title_account', 'Account'); ?></h3>
      <ul class="list-unstyled">
        <li><a href="<?php //echo document::ilink('customer_service'); ?>"><?php //echo language::translate('title_customer_service', 'Customer Service'); ?></a></li>
        <li><a href="<?php //echo document::href_ilink('regional_settings'); ?>"><?php //echo language::translate('title_regional_settings', 'Regional Settings'); ?></a></li>
        <?php //if (empty(customer::$data['id'])) { ?>
        <li><a href="<?php //echo document::href_ilink('create_account'); ?>"><?php //echo language::translate('title_create_account', 'Create Account'); ?></a></li>
        <li><a href="<?php //echo document::href_ilink('login'); ?>"><?php// echo language::translate('title_login', 'Login'); ?></a></li>
        <?php //} else { ?>
        <li><a href="<?php //echo document::href_ilink('order_history'); ?>"><?php //echo language::translate('title_order_history', 'Order History'); ?></a></li>
        <li><a href="<?php //echo document::href_ilink('edit_account'); ?>"><?php //echo language::translate('title_edit_account', 'Edit Account'); ?></a></li>
        <li><a href="<?php //echo document::href_ilink('logout'); ?>"><?php //echo language::translate('title_logout', 'Logout'); ?></a></li>
        <?php //} ?>
      </ul>
    </section> -->
    <?php //} ?>

    <?php 
        if(isset($_SERVER['REQUEST_URI'])) {
          $a = '../../';
        } else {
          $a = '../';
        }
    ?>

    <section class="information">
      <h3 class="title"><?php echo language::translate('title_information', 'Information'); ?></h3>
      <ul class="list-unstyled">
        <?php foreach ($pages as $page) echo '<li><a href="'. htmlspecialchars($page['link']) .'">'. $page['title'] .'</a></li>' . PHP_EOL; ?>
      </ul>
    </section>

    <section class="contact hidden-xs">
      <h3 class="title"><?php echo language::translate('title_contact', 'Contact'); ?></h3>

      <p><?php echo nl2br(settings::get('store_postal_address')); ?></p>

      <?php if (settings::get('store_phone')) { ?>
      <p><?php echo functions::draw_fonticon('fa-phone'); ?> <a href="tel:<?php echo settings::get('store_phone'); ?>"><?php echo settings::get('store_phone'); ?></a><p>
      <?php } ?>

      <p><?php echo functions::draw_fonticon('fa-envelope'); ?> <a href="mailto:<?php echo settings::get('store_email'); ?>"><?php echo settings::get('store_email'); ?></a></p>
    </section>

    <section class="app">
        <h3 class="title">Mobil ilovamiz</h3>
        <!--<img class="mb-4 app-bg" src="<?php echo $a;?>includes/templates/default.catalog/images/app-store.svg">-->
        <a href="https://play.google.com/store/apps/details?id=uz.yusufbek_ibragimov.lalashopuz">
        <img class="d-inline app-bg" src="<?php echo $a;?>includes/templates/default.catalog/images/app-android.svg">
        </a>
    </section>
  </div>

  <section class="social-media mt-4">
    <div class="row">
    <div class="col-md-6  text-center hidden-xs">
    <strong class="d-inline">Tulov turlari: </strong>
        <a class="payment" href="">
        <img src="<?php echo $a;?>includes/templates/default.catalog/images/payme.svg" width="32" height="32">
        </a>
        <a class="payment bg-black" href="">
        <img src="<?php echo $a;?>includes/templates/default.catalog/images/click.svg" width="32" height="32">
        </a>
        <a class="payment" href="">
        <img src="<?php echo $a;?>includes/templates/default.catalog/images/cash.png" width="32" height="32">
        </a>
    </div>
    <div class="col-md-6 text-xs-center">
        <span class="networks">
        <a href="https://www.instagram.com/lalashop_uz/" target="_blank">
        <img src="<?php echo $a;?>includes/templates/default.catalog/images/instagram.svg" width="28" height="28">
        </a>
        </span>
        <span class="networks">
        <a href="https://www.facebook.com/lalashop.uz/" target="_blank">
        <img src="<?php echo $a;?>includes/templates/default.catalog/images/facebook.svg" width="28" height="28">
        </a>
        </span>
        <span class="networks">
        <a href="https://www.youtube.com/channel/UCrdnC00OFn98x8T8yxcv6Fw/playlists" target="_blank">
        <img src="<?php echo $a;?>includes/templates/default.catalog/images/youtube.svg" width="28" height="28">
        </a>
        </span>
        <span class="networks mr-0">
        <a href="https://t.me/LaLaShopuz" target="_blank">
        <img src="<?php echo $a;?>includes/templates/default.catalog/images/telegram.svg" width="28" height="28">
        </a>
        </span>
    </div>
    </div>
  </section>
  <section id="copyright">
    <div class="notice twelve-eighty mt-4">
      
      <!-- LiteCart is provided free under license CC BY-ND 4.0 - https://creativecommons.org/licenses/by-nd/4.0/. Removing the link back to litecart.net without permission is a violation - https://www.litecart.net/addons/172/removal-of-attribution-link -->
      <!-- Copyright &copy; <?php //echo date('Y'); ?> <?php //echo settings::get('store_name'); ?>. All rights reserved &middot; Powered by <a href="https://www.litecart.net" target="_blank" title="Free e-commerce platform">LiteCart®</a> -->
    </div>
  </section>
</footer>
