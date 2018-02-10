<?php defined('intexh_shop') or exit('Access Invalid!');?>

<div class="home-standard-layout wrapper style-<?php echo $output['style_name'];?>">
  <div class="left-sidebar">
    <div class="title">
      <?php if ($output['code_tit']['code_info']['type'] == 'txt') { ?>
      <div class="txt-type">
        <?php if(!empty($output['code_tit']['code_info']['floor'])) { ?>
        <span><?php echo $output['code_tit']['code_info']['floor'];?></span>
        <?php } ?>
        <h2 title="<?php echo $output['code_tit']['code_info']['title'];?>"><?php echo $output['code_tit']['code_info']['title'];?></h2>
      </div>
      <?php }else { ?>
      <div class="pic-type"><img src="<?php echo UPLOAD_SITE_URL.'/'.$output['code_tit']['code_info']['pic'];?>"/></div>
      <?php } ?>
    </div>
    <div class="left-ads">
      <?php if(!empty($output['code_act']['code_info']['pic'])) { ?>
      <a href="<?php echo $output['code_act']['code_info']['url'];?>" title="<?php echo $output['code_act']['code_info']['title'];?>" target="_blank"> <img src="<?php  echo UPLOAD_SITE_URL.'/'.$output['code_act']['code_info']['pic'];?>" alt="<?php echo $output['code_act']['code_info']['title']; ?>"> </a>
      <?php } ?>
    </div>
    <div class="recommend-classes">
    <h3>大家还喜欢了</h3>
      <ul>
        <?php if (is_array($output['code_category_list']['code_info']['goods_class']) && !empty($output['code_category_list']['code_info']['goods_class'])) { ?>
        <?php foreach ($output['code_category_list']['code_info']['goods_class'] as $k => $v) { ?>
        <li><a href="<?php echo urlShop('search','index',array('cate_id'=> $v['gc_id']));?>" title="<?php echo $v['gc_name'];?>" target="_blank"><?php echo $v['gc_name'];?></a></li>
        <?php } ?>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="middle-layout">
 
  <ul class="right-brand">

                <?php if (!empty($output['code_brand_list']['code_info']) && is_array($output['code_brand_list']['code_info'])) { ?>
                  <?php foreach ($output['code_brand_list']['code_info'] as $key => $val) { ?>
        <li>
          <a href="<?php echo urlShop('brand', 'list', array('brand'=> $val['brand_id'])); ?>" title="<?php echo $val['brand_name']; ?>" target="_blank"><?php echo $val['brand_name']; ?></a>
        </li>
                  <?php } ?>
                  <?php } ?>
                   <li>
          <a href="<?php echo BASE_SITE_URL;?>/index.php?act=brand&op=index" title="" target="_blank">更多</a>
        </li>
            </ul>
    
    <ul class="tabs-nav">
      <?php if (!empty($output['code_recommend_list']['code_info']) && is_array($output['code_recommend_list']['code_info'])) {
                    $i = 0;
                    ?>
      <?php foreach ($output['code_recommend_list']['code_info'] as $key => $val) {
                    $i++;
                    ?>
      <li class="<?php echo $i==1 ? 'tabs-selected':'';?>"><i class="arrow"></i>
        <h3><?php echo $val['recommend']['name'];?></h3>
      </li>
      <?php } ?>
      <?php } ?>
    </ul>
    <?php if (!empty($output['code_recommend_list']['code_info']) && is_array($output['code_recommend_list']['code_info'])) {
                    $i = 0;
                    ?>
    <?php foreach ($output['code_recommend_list']['code_info'] as $key => $val) {
                    $i++;
                    ?>
    <?php if(!empty($val['goods_list']) && is_array($val['goods_list'])) { ?>
    <div class="tabs-panel middle-goods-list <?php echo $i==1 ? '':'tabs-hide';?>">
      <ul>
        <?php foreach($val['goods_list'] as $k => $v){ ?>
        <li>
          <dl>
            <dt class="goods-name"><a target="_blank" href="<?php echo urlShop('goods','index',array('goods_id'=> $v['goods_id'])); ?>" title="<?php echo $v['goods_name']; ?>"> <?php echo $v['goods_name']; ?></a></dt>
            <dd class="goods-thumb"> <a target="_blank" href="<?php echo urlShop('goods','index',array('goods_id'=> $v['goods_id'])); ?>"> <img src="<?php echo strpos($v['goods_pic'],'http')===0 ? $v['goods_pic']:UPLOAD_SITE_URL."/".$v['goods_pic'];?>" alt="<?php echo $v['goods_name']; ?>" /> </a></dd>
            <dd class="goods-price"><em><?php echo ncPriceFormatForList($v['goods_price']); ?></em> <span class="original"><?php echo ncPriceFormatForList($v['market_price']); ?></span></dd>
          </dl>
        </li>
        <?php } ?>
      </ul>
    </div>
    <?php } elseif (!empty($val['pic_list']) && is_array($val['pic_list'])) { ?>
    <div class="tabs-panel middle-banner-style01 fade-img <?php echo $i==1 ? '':'tabs-hide';?>">
    
      <div class="right-sidebar">
        <div class="right-side-focus">
          <ul>
            <?php  if (is_array($output['code_adv']['code_info']) && !empty($output['code_adv']['code_info'])) { ?>
            <?php foreach ($output['code_adv']['code_info'] as $key => $val_) { ?>
            <?php if (is_array($val_) && !empty($val_)) { ?>
            <li><a href="<?php echo $val_['pic_url'];?>" title="<?php echo $val_['pic_name'];?>" target="_blank"> <img src="<?php echo UPLOAD_SITE_URL.'/'.$val_['pic_img'];?>" alt="<?php echo $val_['pic_name'];?>"/></a> </li>
            <?php } ?>
            <?php } ?>
            <?php } ?>
          </ul>
        </div>
      </div>
      
      <div class="middle-banner-list">
        <ul>
          <li>
            <dl>
              <?php if (!empty($val['pic_list']['11']['pic_name'])) { ?> 
              <dt class="banner-name"><a href="<?php echo $val['pic_list']['11']['pic_url'];?>" title="<?php echo $val['pic_list']['11']['pic_name'];?>" target="_blank"> <?php echo $val['pic_list']['11']['pic_name'];?></a></dt>
              <?php } ?>
              <dd class="banner-thumb"> <a href="<?php echo $val['pic_list']['11']['pic_url'];?>" title="<?php echo $val['pic_list']['11']['pic_name'];?>" class="a1" target="_blank"> <img src="<?php echo UPLOAD_SITE_URL;?>/shop/common/loading.gif" alt="<?php echo $val['pic_list']['11']['pic_name'];?>" data-url="<?php echo UPLOAD_SITE_URL.'/'.$val['pic_list']['11']['pic_img'];?>" rel="lazy" /></a></dd>
            </dl>
          </li>
		  <li>
            <dl>
              <?php if (!empty($val['pic_list']['31']['pic_name'])) { ?>
              <dt class="banner-name"><a href="<?php echo $val['pic_list']['31']['pic_url'];?>" title="<?php echo $val['pic_list']['31']['pic_name'];?>" target="_blank"> <?php echo $val['pic_list']['31']['pic_name'];?></a></dt>
              <?php } ?>
              <dd class="banner-thumb"> <a href="<?php echo $val['pic_list']['31']['pic_url'];?>" title="<?php echo $val['pic_list']['31']['pic_name'];?>" class="a1" target="_blank"> <img src="<?php echo UPLOAD_SITE_URL;?>/shop/common/loading.gif" alt="<?php echo $val['pic_list']['31']['pic_name'];?>" data-url="<?php echo UPLOAD_SITE_URL.'/'.$val['pic_list']['31']['pic_img'];?>" rel="lazy" /></a></dd>
            </dl>
          </li>
		  <li>
            <dl>
              <?php if (!empty($val['pic_list']['33']['pic_name'])) { ?>
              <dt class="banner-name"><a href="<?php echo $val['pic_list']['33']['pic_url'];?>" title="<?php echo $val['pic_list']['33']['pic_name'];?>" target="_blank"> <?php echo $val['pic_list']['33']['pic_name'];?></a></dt>
              <?php } ?>
              <dd class="banner-thumb"> <a href="<?php echo $val['pic_list']['33']['pic_url'];?>" title="<?php echo $val['pic_list']['33']['pic_name'];?>" class="a1" target="_blank"> <img src="<?php echo UPLOAD_SITE_URL;?>/shop/common/loading.gif" alt="<?php echo $val['pic_list']['33']['pic_name'];?>" data-url="<?php echo UPLOAD_SITE_URL.'/'.$val['pic_list']['33']['pic_img'];?>" rel="lazy" /></a></dd>
            </dl>
          </li>
          <li>
            <dl>
              <?php if (!empty($val['pic_list']['12']['pic_name'])) { ?>
              <dt class="banner-name"><a href="<?php echo $val['pic_list']['12']['pic_url'];?>" title="<?php echo $val['pic_list']['12']['pic_name'];?>" target="_blank"> <?php echo $val['pic_list']['12']['pic_name'];?></a></dt>
              <?php } ?>
              <dd class="banner-thumb"> <a href="<?php echo $val['pic_list']['12']['pic_url'];?>" title="<?php echo $val['pic_list']['12']['pic_name'];?>" class="a1" target="_blank"> <img src="<?php echo UPLOAD_SITE_URL;?>/shop/common/loading.gif" alt="<?php echo $val['pic_list']['12']['pic_name'];?>" data-url="<?php echo UPLOAD_SITE_URL.'/'.$val['pic_list']['12']['pic_img'];?>" rel="lazy" /></a></dd>
            </dl>
          </li>
          <li>
            <dl>
              <?php if (!empty($val['pic_list']['32']['pic_name'])) { ?>
              <dt class="banner-name"><a href="<?php echo $val['pic_list']['32']['pic_url'];?>" title="<?php echo $val['pic_list']['32']['pic_name'];?>" target="_blank"> <?php echo $val['pic_list']['32']['pic_name'];?></a></dt>
              <?php } ?>
              <dd class="banner-thumb"> <a href="<?php echo $val['pic_list']['32']['pic_url'];?>" title="<?php echo $val['pic_list']['32']['pic_name'];?>" class="a1" target="_blank"> <img src="<?php echo UPLOAD_SITE_URL;?>/shop/common/loading.gif" alt="<?php echo $val['pic_list']['32']['pic_name'];?>" data-url="<?php echo UPLOAD_SITE_URL.'/'.$val['pic_list']['32']['pic_img'];?>" rel="lazy" /></a></dd>
            </dl>
          </li>
          <li>
            <dl>
              <?php if (!empty($val['pic_list']['34']['pic_name'])) { ?>
              <dt class="banner-name"><a href="<?php echo $val['pic_list']['34']['pic_url'];?>" title="<?php echo $val['pic_list']['34']['pic_name'];?>" target="_blank"> <?php echo $val['pic_list']['34']['pic_name'];?></a></dt>
              <?php } ?>
              <dd class="banner-thumb"> <a href="<?php echo $val['pic_list']['34']['pic_url'];?>" title="<?php echo $val['pic_list']['34']['pic_name'];?>" class="a1" target="_blank"> <img alt="<?php echo $val['pic_list']['34']['pic_name'];?>" src="<?php echo UPLOAD_SITE_URL.'/'.$val['pic_list']['34']['pic_img'];?>" rel="lazy" /></a></dd>
            </dl>
          </li>
        </ul>
      </div>
      
       </div>
    <?php } ?>
    <?php } ?>
    <?php } ?>
  </div>
</div>
