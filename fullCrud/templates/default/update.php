<?php
echo "<?php\n";
$label = $this->pluralize($this->class2name($this->modelClass));
echo "if(!isset(\$this->breadcrumbs) || (\$this->breadcrumbs === array()))\n
\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->{$this->identificationColumn}=>array('view','{$this->identificationColumn}'=>\$model->{$this->identificationColumn}),
	Yii::t('app', 'Update'),
);\n";
?>

/*if(!isset($this->menu) || $this->menu === array())
$this->menu=array(
	array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
	array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
	array('label'=>Yii::t('app', 'View') , 'url'=>array('view', 'id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
	array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),
);*/
?>

<?php 
$pk = "\$model->" . $this->identificationColumn;
printf('<h1> %s %s #%s </h1>',
'<?php echo Yii::t(\'app\', \'Update\');?>',
'<?php echo Yii::t(\'app\', \''.$this->modelClass.'\');?>',
'<?php echo ' . $pk . '; ?>'); ?>

<?php echo "<?php\n"; ?>
$this->renderPartial('_form', array(
			'model'=>$model));
?>
