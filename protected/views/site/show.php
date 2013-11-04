<!DOCTYPE html>
<html>
<head>
    <title>Pastanga</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Pastebin like, copypaste, copy and paste, share, code share, source share, qr code">
    <meta name="description" content="Free pastebin like service. Share you code!">
    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="stylesheet" href="/css/bootstrap.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/google-code-prettify/prettify.js"></script>
    <link rel="stylesheet" href="/js/google-code-prettify/prettify.css"/>
    <style type="text/css">
        ul li {
            color: #bababa;
        }
        a:hover {
            color: #bababa !important;
        }
    </style>
</head>
<body style="background: url('/img/bg.jpg');">
<div class="container">
    <a href="/"><h1 style="color:#bababa;margin-left:350px;">Pastanga</h1></a>
    <div>
    <pre style="padding-top:30px;min-height: 200px;padding-left:25px;" id="<?php echo $type; ?>" class="prettyprint"><?php echo htmlspecialchars($text); ?></pre>

    <script type="text/javascript">
        $(document).ready(function(){
            if("<?php echo $type; ?>" != "plain") {
                prettyPrint();
            }
        });
    </script>
        </div>
    <div style="margin-left:400px;"><img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=<?php echo Request::url(); ?>%2F&choe=UTF-8" title="Link to this page" /></div>
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
