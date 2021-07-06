<div id="sidebar" class="bg-white p-2">
  <div id="column-left">
    <?php include vmod::check(FS_DIR_APP . 'includes/boxes/box_customer_service_links.inc.php'); ?>
    <?php include vmod::check(FS_DIR_APP . 'includes/boxes/box_account_links.inc.php'); ?>
  </div>
</div>

<div id="content">
  {snippet:breadcrumbs}
  {snippet:notices}

  <section id="box-customer-service" class="box bg-white p-4">
    <?php echo $content; ?>
  </section>

</div>