<div>
  <?php
//echo $args['before_title']
?>
  <h1>Widget Output</h1>
  <?php
//echo $args['after_title']
?>
  <h3 class="balazs-kirk-update-test-widget-title"><?php echo $plugin->Name; ?>
  </h3>

  <?php BalazsKirkUpdate::$plugin->log()->info('Widget args frontend', $args); ?>

  </pre>
  <?php echo BalazsKirkUpdate\Html::button('Click Me!'); ?>
</div>
