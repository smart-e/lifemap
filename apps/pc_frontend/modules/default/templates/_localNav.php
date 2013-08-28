<?php if ($navs):?>
<div class="space10"></div>
<ul class=" home_navi clearfix <?php //echo $type; ?>">
        <?php foreach ($navs as $nav): ?>

            <?php if (isset($navId)): ?>
                <?php $uri = $nav->uri.'?id='.$navId; ?>
            <?php else: ?>
                <?php $uri = $nav->uri; ?>
            <?php endif; ?>

            <?php if (op_is_accessable_url($uri)): ?>
    <li id="<?php echo $nav->type ?>_<?php echo op_url_to_id($nav->uri) ?>"><?php echo link_to($nav->caption, $uri, array("class"=>op_url_to_id($nav->uri))); ?></li>
            <?php endif; ?>

        <?php endforeach; ?>
</ul>
<?php endif; ?>
<div class="space10"></div>
