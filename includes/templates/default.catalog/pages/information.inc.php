<div id="sidebar" class="bg-white p-2">
  <?php include vmod::check(FS_DIR_APP . 'includes/boxes/box_information_links.inc.php'); ?>
</div>

<div id="content">
  {snippet:breadcrumbs}
  {snippet:notices}

  <section id="box-information" class="box bg-white p-4">
    <?php echo $content; ?>
  </section>

</div>