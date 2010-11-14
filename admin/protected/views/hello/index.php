<?php
$this->breadcrumbs=array(
	'魔兽世界'=>'http://wow.163.com',
	'巫妖王之怒'=>'http://jingyan.baidu.com',
	'经验列表',
);
?>

<div class="span-18">
<?php $this->widget('zii.widgets.CBreadcrumbs', array(
	'homeLink'=>'<span class="icon-position"></span>'.CHtml::link('控制台',Yii::app()->homeUrl),
	'links'=>$this->breadcrumbs,
)); ?>
</div>

<div class="span-3 last">
	<div class="exlink">
		<span class="icon-category"></span>
		<?php echo CHtml::link('切换分类', array('category/index')); ?>
	</div>
</div>

<div class="clear">
test
</div>