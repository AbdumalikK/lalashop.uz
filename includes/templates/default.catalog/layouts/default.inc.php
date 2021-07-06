<!DOCTYPE html>
<html lang="{snippet:language}" dir="{snippet:text_direction}">
<head>
<title>{snippet:title}</title>
<meta charset="{snippet:charset}" />
<meta name="description" content="{snippet:description}" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{snippet:template_path}css/framework.css" />
<link rel="stylesheet" href="{snippet:template_path}css/app.css" />
{snippet:head_tags}
{snippet:style}

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0YFBJZGMJH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0YFBJZGMJH');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(76129711, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/76129711" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body>

  <header id="header" class="hidden-print bg-white p-0 hidden-xs">
    <div class="row p-2">

      <div class="col-md-8 text-right hidden-xs">
          <!--<div class="d-inline border-gold">-->
          <!--    <a href="#">Mobil ilova</a>-->
          <!--</div>-->
          <div class="hidden-xs d-inline ml-5 border-gold">
            <?php include vmod::check(FS_DIR_APP . 'includes/boxes/box_region.inc.php'); ?>
          </div>
      </div>

      <div class="col-md-2">
      <?php if (settings::get('accounts_enabled')) { ?>
      <span class="account dropdown toggle-user ml-5">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?php echo functions::draw_fonticon('fa-user'); ?> <?php //echo !empty(customer::$data['id']) ? customer::$data['firstname'] : language::translate('title_sign_in', 'Sign In'); ?> <!--<b class="caret"></b> --></a>
        <ul class="dropdown-menu">
          <?php if (!empty(customer::$data['id'])) { ?>
            <li><a href="<?php echo document::href_ilink('order_history'); ?>"><?php echo language::translate('title_order_history', 'Order History'); ?></a></li>
            <li><a href="<?php echo document::href_ilink('edit_account'); ?>"><?php echo language::translate('title_edit_account', 'Edit Account'); ?></a></li>
            <li><a href="<?php echo document::href_ilink('logout'); ?>"><?php echo language::translate('title_logout', 'Logout'); ?></a></li>
          <?php } else { ?>
            <li>
              <?php echo functions::form_draw_form_begin('login_form', 'post', document::ilink('login'), false, 'class="navbar-form"'); ?>
                <?php echo functions::form_draw_hidden_field('redirect_url', !empty($_GET['redirect_url']) ? $_GET['redirect_url'] : document::link()); ?>

                <div class="form-group">
                  <?php echo functions::form_draw_email_field('email', true, 'required="required" placeholder="'. language::translate('title_email_address', 'Email Address') .'"'); ?>
                </div>

                <div class="form-group">
                  <?php echo functions::form_draw_password_field('password', '', 'placeholder="'. language::translate('title_password', 'Password') .'"'); ?>
                </div>

                <div class="form-group">
                  <div class="checkbox">
                    <label><?php echo functions::form_draw_checkbox('remember_me', '1'); ?> <?php echo language::translate('title_remember_me', 'Remember Me'); ?></label>
                  </div>
                </div>

                <div class="btn-group btn-block">
                  <?php echo functions::form_draw_button('login', language::translate('title_sign_in', 'Sign In')); ?>
                </div>
              <?php echo functions::form_draw_form_end(); ?>
            </li>
            <li class="text-center">
              <a href="<?php echo document::href_ilink('create_account'); ?>"><?php echo language::translate('text_new_customers_click_here', 'New customers click here'); ?></a>
            </li>

            <li class="text-center">
              <a href="<?php echo document::href_ilink('reset_password'); ?>"><?php echo language::translate('text_lost_your_password', 'Lost your password?'); ?></a>
            </li>
          <?php } ?>
        </ul>
      </span>
      <?php } ?>

    </div>

      <div class="col-md-2">
          <?php if (settings::get('store_phone')) { ?>
          <div class="phone lh-2"><a href="tel:<?php echo settings::get('store_phone'); ?>"><?php echo functions::draw_fonticon('fa-phone'); ?> <?php echo settings::get('store_phone'); ?></a></div>
          <?php } ?>
      </div>


<!-- 
    <div class="text-right">
      <?php// include vmod::check(FS_DIR_APP . 'includes/boxes/box_cart.inc.php'); ?>
    </div> -->
  </header>
  <?php include vmod::check(FS_DIR_TEMPLATE . 'views/box_cookie_notice.inc.php'); ?>


  <?php include vmod::check(FS_DIR_APP . 'includes/boxes/box_site_menu.inc.php'); ?>

<div id="page" class="twelve-eighty">

<!--<div class="col-md-2 user hidden-lg">-->
<!--      <?php if (settings::get('accounts_enabled')) { ?>-->
<!--      <span class="account dropdown toggle-user ml-1">-->
        <!-- <a href="#" data-toggle="dropdown" class="dropdown-toggle"><?php echo functions::draw_fonticon('fa-user'); ?> <?php //echo !empty(customer::$data['id']) ? customer::$data['firstname'] : language::translate('title_sign_in', 'Sign In'); ?> <!--<b class="caret"></b> --></a>
<!--        <ul class="dropdown-menu ml-5 p-3">-->
<!--          <?php if (!empty(customer::$data['id'])) { ?>-->
<!--            <li><a href="<?php echo document::href_ilink('order_history'); ?>"><?php echo language::translate('title_order_history', 'Order History'); ?></a></li>-->
<!--            <li><a href="<?php echo document::href_ilink('edit_account'); ?>"><?php echo language::translate('title_edit_account', 'Edit Account'); ?></a></li>-->
<!--            <li><a href="<?php echo document::href_ilink('logout'); ?>"><?php echo language::translate('title_logout', 'Logout'); ?></a></li>-->
<!--          <?php } else { ?>-->
<!--            <li>-->
<!--              <?php echo functions::form_draw_form_begin('login_form', 'post', document::ilink('login'), false, 'class="navbar-form"'); ?>-->
<!--                <?php echo functions::form_draw_hidden_field('redirect_url', !empty($_GET['redirect_url']) ? $_GET['redirect_url'] : document::link()); ?>-->

<!--                <div class="form-group">-->
<!--                  <?php echo functions::form_draw_email_field('email', true, 'required="required" placeholder="'. language::translate('title_email_address', 'Email Address') .'"'); ?>-->
<!--                </div>-->

<!--                <div class="form-group">-->
<!--                  <?php echo functions::form_draw_password_field('password', '', 'placeholder="'. language::translate('title_password', 'Password') .'"'); ?>-->
<!--                </div>-->

<!--                <div class="form-group">-->
<!--                  <div class="checkbox">-->
<!--                    <label><?php echo functions::form_draw_checkbox('remember_me', '1'); ?> <?php echo language::translate('title_remember_me', 'Remember Me'); ?></label>-->
<!--                  </div>-->
<!--                </div>-->

<!--                <div class="btn-group btn-block">-->
<!--                  <?php echo functions::form_draw_button('login', language::translate('title_sign_in', 'Sign In')); ?>-->
<!--                </div>-->
<!--              <?php echo functions::form_draw_form_end(); ?>-->
<!--            </li>-->
<!--            <li class="text-center">-->
<!--              <a href="<?php echo document::href_ilink('create_account'); ?>"><?php echo language::translate('text_new_customers_click_here', 'New customers click here'); ?></a>-->
<!--            </li>-->

<!--            <li class="text-center">-->
<!--              <a href="<?php echo document::href_ilink('reset_password'); ?>"><?php echo language::translate('text_lost_your_password', 'Lost your password?'); ?></a>-->
<!--            </li>-->
<!--          <?php } ?>-->
<!--        </ul>-->
<!--      </span>-->
<!--      <?php } ?>-->
<!--    </div>-->
    
  <main id="main">
    {snippet:content}
  </main>

</div>
  <?php include vmod::check(FS_DIR_APP . 'includes/boxes/box_site_footer.inc.php'); ?>

<a id="scroll-up" class="hidden-print" href="#">
  <?php echo functions::draw_fonticon('fa-chevron-circle-up fa-3x', 'style="color: #000;"'); ?>
</a>

{snippet:foot_tags}
<script src="{snippet:template_path}js/app.js"></script>
{snippet:javascript}
</body>
</html>