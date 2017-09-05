<?php
/* Created by Concrete5 user Jozzeh */
defined('C5_EXECUTE') or die(_("Access Denied."));

$form = Core::make('helper/form');
$colors = Core::make('helper/form/color');
$filemanager = Core::make('helper/concrete/file_manager');
$editor = Core::make('editor');

$overlapArray = array();
for($i=0; $i<100; $i+=5){
  $overlapArray[$i] = $i;
}

$colorOptions = array(
  'showInitial' => true,
  'showInput' => true,
  'allowEmpty' => false,
  'preferredFormat' => 'hex3',
  'showPalette' => 'true', 'palette' => array(
    array('yellow', 'blue', 'red', 'black', 'white')
  )
);

?>
<div class="form-group">
  <?php echo $form->label('fID', t('Image')); ?>
	<div class="input-group">
		<?php echo $filemanager->image('fID', 'fID', t('Select of upload an image'), $mirrorFile ? $mirrorFile : $fID); ?>
	</div>
</div>

<div class="form-group">
  <?php echo $form->label('direction', t('Mirror direction')); ?>
	<div class="input-group">
		<?php echo $form->select('direction', array(t('Horizontal'), t('Vertical')), $direction); ?>
	</div>
</div>

<div class="form-group">
  <?php echo $form->label('overlap', t('Overlap (%)')); ?>
  <span class="small"><?php echo t('Percentage of image that will be hidden.'); ?></span>
	<div class="input-group">
		<?php echo $form->select('overlap', $overlapArray, $overlap); ?>
	</div>
</div>

<div class="form-group">
  <?php echo $form->label('backgroundColor', t('Background Color')); ?>
	<div class="input-group">
		<?php echo $colors->output('backgroundColor', $backgroundColor ? $backgroundColor : '#000000', $colorOptions); ?>
	</div>
</div>
<hr/>
<div class="form-group">
  <?php echo $form->label('textColor', t('Text Color')); ?>
	<div class="input-group">
		<?php
    echo $colors->output('textColor', $textColor ? $textColor : '#000000', $colorOptions);
    ?>
	</div>
</div>

<div class="form-group">
  <?php echo $form->label('title', t('Title')); ?>
	<div class="input-group" style="width: 100%;">
		<?php echo $form->text('title', $title, array('style' => 'width: 100%;')); ?>
	</div>
</div>

<div class="form-group">
  <?php echo $form->label('description', t('Description')); ?>
	<div class="input-group">
		<?php echo $editor->outputStandardEditor('description', $description); ?>
	</div>
</div>
