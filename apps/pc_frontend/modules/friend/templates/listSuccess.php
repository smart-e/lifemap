<?php
    $friendList = $pager->getResults();
    $loginUser = $sf_user->getMember();
?>

<div id="friend_col">
        <div class="heading_top">
                Bạn bè của <?php echo link_to($currentViewingUser->getName(), 'obj_member_profile', $currentViewingUser); ?>
        </div>
        <h4><span><?php echo __('There are all %1% friends', array('%1%'=>$pager->count())); ?></span></h4>
        <ul class="mf_list_friend clearfix">

        <!-- listing friend -->
        <?php foreach($friendList as $friend): ?>
        
                <!-- Begin Friend Item -->
                <li>
                        <div class="block02">
                                <div class="friend-item clearfix">
                                        <div class="mf_item_img"><?php echo op_link_to_member($friend, array('link_target' => op_image_tag_sf_image($friend->getImageFileName(), array('class' => 'bor_img', 'size' => '40x40')))) ?></div>
                                        <div class="mf_item_name"><?php echo op_link_to_member($friend, array('link_target' => $friend->getNameAndCount())) ?></div>
                                        <div class="mf_item_remove_02">
                                        <!-- if your page -->
                                        <?php if($currentViewingUser->getId() == $loginUser->getId()): ?>

                                            <!-- if friend -->
                                            <?php if($loginUser->isFriendMe($friend)): ?>
                                                <?php echo link_to(__('Edit Friend'), 'obj_member_introfriend', $friend); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
                                                <?php echo link_to(__('Delete From List'), 'obj_friend_unlink', $friend); ?>

                                            <!-- if waiting to be accepted -->
                                            <?php elseif($loginUser->isFriendPreMe($friend)): ?>
                                                <?php echo link_to(__('Waiting'), 'obj_member_profile', $friend); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
                                                <?php echo link_to(__('Delete From List'), 'obj_member_unlink', $friend); ?>

                                            <?php endif; ?>

                                        <!-- if not your page -->
                                        <?php else: ?>

                                        <!-- if yourself -->
                                        <?php if($loginUser->getId() == $friend->getId()): ?>
                                            <?php echo link_to(__('Yourself'),'obj_member_profile', $loginUser); ?>

                                        <!-- if friend -->
                                            <?php elseif($loginUser->isFriendMe($friend)): ?>
                                                <?php echo link_to(__('Friend Of Both'), 'obj_member_profile', $friend); ?>
                                                
                                            <!-- if waiting to be accepted -->
                                            <?php elseif($loginUser->isFriendPreMe($friend)): ?>
                                                <?php echo link_to(__('Waiting'), 'obj_member_profile', $friend); ?>
                                            
                                            <!-- if not friend -->
                                            <?php else: ?>
                                                <?php echo link_to(__('Add Friend'), 'obj_friend_link', $friend); ?>

                                            <?php endif; ?>

                                        <?php endif; ?>
                                        </div>
                                </div>
                        </div>
                </li>
            <?php endforeach; ?>
            <!-- End Friend Item -->
        </ul>
</div>  

<?php if($pager->getLastPage() > 1): ?>
<div class="wrapper-pagination clearfix">
    <div class="fr">
        <?php echo op_include_pager_navigation($pager, 'friend/list?page=%d&id='.$currentViewingUser->getId()); ?>
    </div>
</div>
<?php endif; ?>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     