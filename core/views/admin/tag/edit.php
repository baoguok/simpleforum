<?php
/**
 * @link http://simpleforum.org/
 * @copyright Copyright (c) 2015 SimpleForum
 * @author Jiandong Yu admin@simpleforum.org
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = Yii::t('app/admin', 'Edit a tag');
?>

<div class="row">
<!-- sf-left start -->
<div class="col-md-8 sf-left">

<div class="panel panel-default sf-box">
	<div class="panel-heading">
		<?php
			echo Html::a(Yii::t('app/admin', 'Forum Manager'), ['admin/setting/all']), '&nbsp;/&nbsp;', Html::a(Yii::t('app/admin', 'Tags'), ['index']), '&nbsp;/&nbsp;', $this->title;
		?>
	</div>
	<div class="panel-body">
<?php $form = ActiveForm::begin();
	echo $form->field($model, 'name')->textInput(['maxlength' => 20]);
?>
		<div class="form-group">
			<?php echo Html::submitButton(Yii::t('app', 'Edit'), ['class' => 'btn btn-primary']); ?>
		</div>
<?php ActiveForm::end(); ?>
	</div>
</div>

</div>
<!-- sf-left end -->

<!-- sf-right start -->
<div class="col-md-4 sf-right">
<?php echo $this->render('@app/views/common/_admin-right'); ?>
</div>
<!-- sf-right end -->
</div>
