<?php
/**
 * User: KryDos <furyinbox@gmail.com>
 * Date: 04.11.13
 */
?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/google-code-prettify/prettify.js'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/js/google-code-prettify/prettify.css'); ?>
<div class="showContainer">
    <pre id="<?php echo $model->type; ?>"
             class="prettyprint textView"><?php echo htmlspecialchars($model->text); ?></pre>
    <script type="text/javascript">
        $(document).ready(function () {
            if ("<?php echo $model->type; ?>" != "plain") {
                prettyPrint();
            }
        });
    </script>
</div>
<div class="qrCode">
    <img
        src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=<?php echo Yii::app()->getBaseUrl(true) . Yii::app()->request->url; ?>%2F&choe=UTF-8"
        title="Link to this page"/>
</div>
