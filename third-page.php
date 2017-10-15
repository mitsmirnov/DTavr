<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Личный сайт студента Geekbrains</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <?php wp_head(); ?>
</head>

<body>
<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
    <div id="header">
        <a href="/">Главная</a> <span>/</span> <a href="/turkie">Турция</a> <span>/</span> <a href="/third-page.php">Бали</a>
    </div>
    <div id="content">
        <h1>Личный сайт студента GeekBrains</h1>
    <div id="center">
           
           <img src="<?php echo get_the_post_thumbnail_url(); ?>" width="390" height="390" alt="photo">

        <img src="img/1%D0%B1.jpg" width="400" height="300"alt="photo">
        <img src="img/2%D0%B1.jpg" width="400" height="300"alt="photo">
        <img src="img/3%D0%B1.jpg" width="400" height="300"alt="photo">
        <img src="img/4%D0%B1.jpg" width="400" height="500"alt="photo">
        <img src="img/5%D0%B1.jpg" width="400" height="500"alt="photo">
        <img src="img/6%D0%B1.jpg" width="400" height="500"alt="photo">
        
        <div id="box_text"><?php the_content(); ?></div>
    
            
            
        </div>
        </div>
    </div>

<?php }} ?>
<?php wp_footer(); ?> 

    <div id="footer"> 
    Copyright &copy; 2017 <a href="https://geekbrains.ru/" target = "_blank" > GeekBrains </a>
    </div>
</body>

</html>

