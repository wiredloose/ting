<?php
/**
 * @file
 * Display a ting objects as part of a list.
 */
?>
<!-- ting-list-item.tpl -->
<div id="ting-item-<?php print $ting_local_id; ?>" class="ting-item clearfix">

  <div class="content clearfix">
    <div class="picture">
      <?php if ($image) { ?>
        <?php print $image; ?>
      <?php } ?>
    </div>

    <div class="info">
      <span class='date'><?php print $ting_publication_date; ?></span>
      <h3><?php print $ting_title; ?></h3>

      <?php if (!empty($ting_creators_links)) { ?>
        <em><?php echo t('by'); ?></em>
        <?php print array_shift($ting_creators_links) ?>
      <?php } ?>

      <div class='language'><?php echo t('Language') . ': ' . $ting_language; ?></div>
      <?php
      if (!empty($ting_creators_links)) {
        foreach ($ting_creators_links as $creator_link) {
          print "<p>" . $creator_link . "</p>";
        }
      }
      ?>

      <div class="more">
        <?php print l(t('More information'), $ting_url, array('attributes' => array('class' => 'more-link'))); ?>
      </div>
      <?php if (isset($additional_content)) { print drupal_render($additional_content); } ?>
    </div>

  </div>

  <?php if ($buttons) :?>
    <div class="ting-object-buttons">
      <?php print theme('item_list', $buttons, NULL, 'ul', array('class' => 'buttons')) ?>
    </div>
  <?php endif; ?>
</div>
