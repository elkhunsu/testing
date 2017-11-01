<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\date\DatePicker;
use andrewblake1\creditcard\CreditCardNumber;
use andrewblake1\creditcard\CreditCardExpiry;
use andrewblake1\creditcard\CreditCardCVCode;


$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            <div style="padding-top:20px;">
            <h3>Data Diri</h3>
                <section>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'firstname') ?>
                <?= $form->field($model, 'lastname') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'status')->checkbox(array('label'=>'Term Condition')) ?>

                </section>
                <h3>Detail Data</h3>
                <section>
                <?= $form->field($model, 'alamat')->textarea() ?>
                <?= $form->field($model, 'date_of_birth')->widget(DatePicker::classname(), [
                    'options' => ['placeholder' => 'Enter birth date ...'],
                    'pluginOptions' => [
                        'autoclose'=>true
                    ]
                ]);?>   
                <?= $form->field($model, 'membership_type')->dropDownList(
                    [
                        'silver' => 'Silver', 
                        'gold' => 'Gold', 
                        'platinum' => 'Platinum',
                        'black' => 'Black',
                        'vip' => 'VIP',
                        'vvip' => 'VVIP',
                        ]);  ?>
                <?= $form->field($model, 'credit_card_number')->textInput(['maxLenght'=> 16])->widget(CreditCardNumber::className()) ?>
                <?= $form->field($model, 'credit_card_expiration_date')->widget(CreditCardExpiry::className()) ?>
                <?= $form->field($model, 'credit_card_cvv')->widget(CreditCardCVCode::className()) ?>
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

                </section>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<?php
$this->registerJs(<<<'EOD'
var form = $("#form-signup");
form.validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        confirm: {
            equalTo: "#password"
        }
    }
});
form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        $('#form-signup').submit();
    }
});
EOD
); ?>
