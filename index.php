<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>NGO</title>
    <script src="<?php bloginfo ('template_url'); ?>/js/jquery-1.7.2.min.js"></script>
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<body>
    <div class="page">
        <header class="clearfix">
            <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php bloginfo ('template_url'); ?>/img/logo.jpg" alt="logo">
            </a>
        </header>
        <div class="page-title clearfix">
            <h2>NEWS & VIEWS</h2>
        </div>
        <script>window.ngoDir = "<?php bloginfo ('template_url'); ?>/"</script>
		<script id="mapScript" src="<?php bloginfo ('template_url'); ?>/js/map.js"></script>

    </div>
</body>

</html>
