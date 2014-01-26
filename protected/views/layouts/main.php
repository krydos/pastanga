<!DOCTYPE html>
<html>
<head>
    <title>Pastanga. Paste your text here</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Pastebin like, copypaste, copy and paste, share, code share, source share, qr code">
    <meta name="description" content="Free pastebin like service. Share you code!">
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/bootstrap.min.js'); ?>
    <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/miniNotification.js'); ?>
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/bootstrap.min.css'); ?>
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/style.css'); ?>
</head>

<body>
<div class="container">
    <div class="wrapper">
        <a href="/"><h1 class="projectTitle">Pastanga</h1></a>
        <?php echo $content; ?>
    </div>
</div>
<div id="notification">
    <label for="link">Link to pasted text:
        <input type="text" id="link"/>
    </label>
    <script type="text/javascript">
        $('#link').on('click',function(){
            $(this).select();
        });
    </script>
</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44056539-1', 'pastanga.com');
  ga('send', 'pageview');

</script>
</body>
</html>
