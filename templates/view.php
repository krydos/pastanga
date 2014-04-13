<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/js/google-code-prettify/prettify.css" />
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <script type="text/javascript" src="/js/libs/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="/js/google-code-prettify/prettify.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/miniNotification.js"></script>
        <title>Pastanga. Paste your text here</title>
        <meta charset="utf-8">
        <meta name="keywords" content="Pastebin like, copypaste, copy and paste, share, code share, source share, qr code">
        <meta name="description" content="Free pastebin like service. Share you code!">
    </head>

    <body>
        <div class="container">
            <div class="wrapper">
                <a href="/"><h1 style="margin-left:250px;" class="projectTitle">Pastanga</h1></a>
                <div id="content">
        	<div class="showContainer">
                <pre id="plain" class="prettyprint textView"><?php echo htmlspecialchars($text); ?></pre>
            <script type="text/javascript">
                $(document).ready(function () {
                    if ("<?php echo $type; ?>" != "plain") {
                        prettyPrint();
                    }
                });
            </script>
        </div>
        <div class="qrCode">
            <img
                src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=http://pastanga.com/m6OU%2F&choe=UTF-8"
                title="Link to this page"/>
        </div>
        </div><!-- content -->
            </div>
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

