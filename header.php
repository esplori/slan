<html>

<head>
    <title><?php bloginfo("name") ?><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" type="text/css" media="screen" >
    <?php wp_head() ?>
</head>

<body>
    <header class="header">
        <div class="site-name">
            <h1><a name="toc-7"></a><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
            <span><?php bloginfo('description'); ?></span>
        </div>
    </header>