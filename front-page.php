<?php get_header(); ?>

<body>
    
    <div id="header">
        <a href="/">Главная</a> <span>/</span> <a href="/turkie
        ">Турция</a> <span>/</span> <a href="/bali">Бали</a>
    </div>
    <?php if (have_posts()) { while (have_posts()) { the_post(); ?>
    <div id="content">
        <h1>Личный сайт студента GeekBrains</h1>
    <div id="center">
         <img src="<?php echo get_the_post_thumbnail_url(); ?>" width="390" height="390" alt="photo">   
        

    <div id="box_text"><?php the_content(); ?></div>

    </div>
    <?php }} ?>


    <div id="footer"> 
    Copyright &copy; 2017 <a href="https://geekbrains.ru/" target = "_blank" > GeekBrains </a>
    </div>
    
<?php wp_footer(); ?>    
</body>

</html>
