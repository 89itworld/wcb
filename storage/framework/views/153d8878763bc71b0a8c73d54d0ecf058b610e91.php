<?php
/**
 * Created by PhpStorm.
 * User: Mahipal Singh
 * Date: 03-06-2016
 */
?>
<html lang="en">
<head>
    <title>WhiteCashback</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php echo Html::style('public/css/layout.css'); ?>

    <?php echo Html::style('public/css/home.css'); ?>

    <?php echo Html::style('public/css/common.css'); ?>

    <?php echo Html::style('public/css/font-awesome.min.css'); ?>

    <?php echo Html::style('public/css/jquery-ui-custom.css'); ?>



    <?php /*<link rel="stylesheet" type="text/css" href="<?php echo asset('assets/css/layout.css'); ?>" />*/ ?>

</head>

 <body>
  <div id="main-body">
        <!-- Navbar Contents -->
        <header> <?php echo $__env->make('layouts.common.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> </header>

        <div class="contents"> <?php echo $__env->yieldContent('content'); ?> </div>

        <footer> <?php echo $__env->make('layouts.common.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> </footer>

<?php /*<?php echo $__env->yieldContent('content'); ?>*/ ?>
 </body>
</html>
