<?php
/*
Inspiration Basic version : https://tympanus.net/codrops/2017/01/04/mirror-effect/
Adapted for Concrete5 by Jozzeh
*/
defined('C5_EXECUTE') or die(_("Access Denied."));
$visibleArea = 1 - (intval($overlap)/100);
$dataLayout = 'horizontal';
if($direction == 1){
  $dataLayout = 'vertical';
}
?>
<div class="mirror-wrapper<? echo $bID; ?>">
  <?php if(!empty($title) || !empty($description)){ ?>
    <div class="mirror-text-wrapper">
      <div class="mirror-text<?= $bID; ?>">
        <?php if(!empty($title)){ ?>
          <h3><?php echo $title; ?></h3>
          <hr/>
        <?php
        }
        if(!empty($description)){
          echo $description;
        }
        ?>
      </div>
  </div>
  <?php } ?>
  <div class="mirror<?= $bID; ?> mirror" data-layout="<?php echo $dataLayout; ?>" data-visible-area="<?= $visibleArea ?>">
		<div class="mirror__side mirror__side--one">
			<img class="mirror__img" src="<?php echo $mirrorImage->getURL(); ?>" alt="<?php echo $mirrorImage->getTitle(); ?>" />
		</div>
		<div class="mirror__side mirror__side--two">
			<img class="mirror__img" src="<?php echo $mirrorImage->getURL(); ?>" alt="<?php echo $mirrorImage->getTitle(); ?> mirrored" />
		</div>
	</div>
</div>
<script>
$(window).load(function(){
  var mirrorEffect = new MirrorFx($('.mirror<?= $bID; ?>')[0]);
  mirrorEffect.show();
});
</script>
<style>
  .mirror-wrapper<?php echo $bID; ?>{
    background-color: <?php echo $backgroundColor; ?>;
    position: relative;
  }
  .ccm-page .mirror-text<?= $bID; ?>, .ccm-page .mirror-text<?= $bID; ?> h3{
    color: <?php echo $textColor; ?>;
  }
  .ccm-page .mirror-text<?= $bID; ?> hr{
    border-top: solid 1px <?php echo $textColor; ?>;
  }
</style>
