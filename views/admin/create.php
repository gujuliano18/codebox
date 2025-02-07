<?php

use humhub\modules\ui\form\widgets\CodeMirrorInputWidget;
use humhub\modules\ui\form\widgets\SortOrderField;
use humhub\modules\ui\form\widgets\ActiveForm;
use humhub\widgets\ModalButton;
use humhub\widgets\ModalDialog;
use humhub\libs\Html;

?>
<?php ModalDialog::begin(['header' => \Yii::t('CodeboxModule.base', '<strong>Add New Entry</strong>')]); ?>
    <?php $form = ActiveForm::begin(['options' => ['data-pjax' => 0]]); ?>
    <div class="modal-body">
        <div class="form-group">
            <?= $form->field($model, 'title')->textInput(['class' => 'form-control', 'placeholder' => Yii::t('CodeboxModule.base', 'Title'), 'disabled' => false])->label(true) ?>
            <?= $form->field($model, 'htmlCode')->widget(CodeMirrorInputWidget::class); ?>
            <?= $form->field($model, 'sortOrder')->widget(SortOrderField::class) ?>
        </div>
        <hr>
    </div>
    <div class="modal-footer">
        <?= Html::submitButton(Yii::t('CodeboxModule.base', 'Save'), ['class' => 'btn btn-success', 'data-ui-loader' => '']); ?>
        <?= ModalButton::cancel() ?>
    </div>
    <?php ActiveForm::end(); ?>
<?php ModalDialog::end(); ?>
