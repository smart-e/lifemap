<div id="navigation_dashboard">
  <?php
    $globalNavOptions = array(
        'type'      => $is_login ? 'secure_dashboard_global' : 'insecure_dashboard_global',
        'culture'   => sfContext::getInstance()->getUser()->getCulture(),
        'position'      => '@homepage'
    );
    include_component('default', 'dashboardNav', $globalNavOptions);
  ?>
</div>
<?php if (isset($topGadgets)): ?>
<?php slot('op_top') ?>
<?php foreach ($topGadgets as $gadget): ?>
<?php if ($gadget->isEnabled()): ?>
<?php include_component($gadget->getComponentModule(), $gadget->getComponentAction(), array('gadget' => $gadget)); ?>
<?php endif; ?>
<?php endforeach; ?>
<?php end_slot() ?>
<?php endif; ?>

<!-- right menu -->
<?php if (isset($sideRightMenuGadgets)):?>
<?php slot('op_siderightmenu') ?>
<?php foreach ($sideRightMenuGadgets as $gadget): ?>
<?php if ($gadget->isEnabled()): ?>
<?php include_component($gadget->getComponentModule(), $gadget->getComponentAction(), array('gadget' => $gadget)); ?>
<?php endif; ?>
<?php endforeach; ?>
<?php end_slot() ?>
<?php endif; ?>

<!-- content -->
<?php if (isset($contentsGadgets)): ?>
<?php foreach ($contentsGadgets as $gadget): ?>
<?php if ($gadget->isEnabled()): ?>
<?php include_component($gadget->getComponentModule(), $gadget->getComponentAction(), array('gadget' => $gadget)); ?>
<?php endif; ?>
<?php endforeach; ?>
<?php endif; ?>

<!-- bottom -->
<?php if (isset($bottomGadgets)): ?>
<?php slot('op_bottom') ?>
<?php foreach ($bottomGadgets as $gadget): ?>
<?php if ($gadget->isEnabled()): ?>
<?php include_component($gadget->getComponentModule(), $gadget->getComponentAction(), array('gadget' => $gadget)); ?>
<?php endif; ?>
<?php endforeach; ?>
<?php end_slot() ?>
<?php endif; ?>
