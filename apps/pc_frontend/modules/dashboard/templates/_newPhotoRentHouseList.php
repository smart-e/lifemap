<?php if($posList):?>
  <div class="dashboard-part">
    <div class="dashboard-part-top">
      <div class="dashboard-title-holder">
        <?php if($is_show_more): ?>
                <div class="dashboard-part-top-title "><?php echo link_to('Hình ảnh mới của nhà cho thuê','@showMorePhotoPos?type=rent_house') ?></div>
                <div class="dashboard-part-top-link">
                    <?php echo link_to('Xem thêm ', '@showMorePhotoPos?type=rent_house'); ?>
                </div>
        <?php else: ?>
                <div class="dashboard-part-top-title">Hình ảnh mới của nhà cho thuê</div>
        <?php endif;?>
      </div>
        <div class="clear"></div>
    </div>
    <div class="dashboard-part-content" id="pager_show_more_photo_rent_house_box">
      <div class="dashboard-pager">
         <?php if ($is_show_more): ?>
        <span class="current-page">Trang 1</span>
        <a class="dashboard-next" href="<?php echo url_for('@jqueryShowMorePhotoPos?page=2&type=rent_house') ?>" id="pager_show_more_photo_rent_house">&nbsp;</a>
          <?php endif ?>
      </div>
             <ul class="clearfix">
                <?php foreach($posList as $posPhoto):?>
                  <li>
                    <div class="photo_db_list">
                      <?php echo link_to(image_tag_sf_image($posPhoto->getImageFileName(),array('size'=>'60x60','class'=>'bor_img')),'@pos_profile?id='.$posPhoto->getPosId(),array('title'=>$posPhoto->getPos()->getTitle(),'target'=>'_blank'))?>
                    </div>
                  </li>
                <?php endforeach;?>
            </ul>
    </div>
  </div>
<?php endif;?>

