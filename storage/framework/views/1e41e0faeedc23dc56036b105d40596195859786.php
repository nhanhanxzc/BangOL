<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $__env->yieldContent('title'); ?></title>
        <!-- Fonts -->
        <link href="/css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/css/nav.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="/css/raleway_fonts.css" rel="stylesheet" type="text/css">

        <script type="text/javascript" src="/js/jquery.js"></script>
        <script type="text/javascript" src="/js/login.js"></script>
        <script type="text/javascript" src="/js/Chart.js"></script>
         <script type="text/javascript" src="/js/jquery.easing.js"></script>
         <script type="text/javascript" src="/js/jquery.ulslide.js"></script>
         <!----Calender -------->
          <link rel="stylesheet" href="css/clndr.css" type="text/css" />
          <script src="/js/underscore-min.js"></script>
          <script src= "/js/moment-2.2.1.js"></script>
          <script src="/js/clndr.js"></script>
          <script src="/js/site.js"></script>
          <!----End Calender -------->
    </head>
    <body>
        <?php echo $__env->yieldContent('contents'); ?>
    </body>
</html>
