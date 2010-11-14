<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container">
	<div id="header">
		<div id="logo"><h1><?php echo CHtml::encode(Yii::app()->name); ?></h1></div>
		<div id="links">
			你好，<?php echo Yii::app()->user->name; ?> 
			- <?php echo CHtml::link('控制台',Yii::app()->homeUrl); ?> 
			- <?php echo CHtml::link('前台',array('../')); ?> 
			- <?php echo CHtml::link('注销', array('site/logout')); ?>
		</div>
	</div>
	<div class="span-3 sidebar">
		<div class="mainmenu">
		<?php
			$this->widget('zii.widgets.CMenu', array(
				'items'=>array(
					// 默认显示需要审批的经验
					array('label'=>'经验', 'url'=>array('/post/index', 'view'=>'unpassed')),
					array('label'=>'分类', 'url'=>array('/category/index')),
					array('label'=>'附件', 'url'=>array('/attachment/index')),
					// 用来测试模板
					array('label'=>'测试', 'url'=>array('/hello/index')),
					array('label'=>'用户', 'url'=>array('/user/index')),
					array('label'=>'管理员', 'url'=>array('/admin/index')),
					array('label'=>'设置', 'url'=>array('/setting/index'))
				)
			));
		?>
		</div>
		<div class="sidebox">
			<h5>帮助</h5>
			<ul class="content">
				<li><a href="" target="_blank">插件开发指南</a></li>
				<li><a href="" target="_blank">模板开发指南</a></li>
				<li><a href="" target="_blank">系统整合说明</a></li>
				<li><a href="" target="_blank">官方论坛</a></li>
			</ul>
		</div>
		<div class="sidebox">
			<h5>关于</h5>
			<div class="content">大犀牛经验<br>版本：1.0<br><a href="http://daxiniu.com" target="_blank">DAXINIU.COM</a></div>
		</div>
	</div>
	<?php echo $content; ?>
</div>

</body>
</html>