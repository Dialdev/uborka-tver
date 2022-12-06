<?php get_header(); ?>

<!-- BREADCRUMBS : begin -->
<div id="breadcrumbs">

    <div class="container_12">
        <div class="grid_12">
            <ul>
                <li><a href="/" title="">Главная</a></li>
                <li class="unavailable"><a href="#">Услуги</a></li>
                <li><a href="<?php echo get_permalink( $post->post_parent ); ?>" title=""><?php echo get_the_title( $post->post_parent ); ?></a></li>
                <li class="current"><a href="#" title=""><?php echo $post->post_title; ?></a></li>
            </ul>
        </div>
    </div>

</div>
<!-- BREADCRUMBS : end -->
<div class="works_container"> 
    <div class="works_items">
         <div class="works_item">
              <img src="/wp-content/uploads/works/works1.jpg" alt="works">
              <span>Генеральная уборка кухни</span>
         </div>
    </div>
</div>
<div class="advantages">
    <div class="container_12">
        <div class="grid_12">
            <h2>Преимущества работы с нами</h2>
</div>
</div>
<div class="container_12">
<div class="grid_6 grid_mob_6 grid_xs_12">
    <ul>
        <li>Высокое качество профессионального уборочного оборудования, инвентаря и моющих средств европейских производителей.</li>
        <li>Качество уборки как самая важная составляющая контракта. Конструктивный подход к вопросу ценообразования.</li>
        <li>Легально устроенный, обученный и взаимозаменяемый
    персонал.</li>
        <li>Страхование. Профессиональная ответственность сотрудников застрахована. В случае непредумышленной порчи имущества, ущерб будет возмещен в полном объеме.</li>
    </ul>
</div>
<div class="grid_6 grid_mob_6 grid_xs_12">
    <ul>
        <li>Хорошая деловая репутация. 10 лет бузупречной работы в тверском клининге, опыт сотрудничества с десятками коммерческих организаций и тысячами частных лиц.</li>
        <li>Опыт работы с иностранными компаниями, предъявляющими высокие требования к технике безопасности, охране труда, вопросам экологии и системе докуметооборота.</li>
        <li>Разработанная и проверенная на собственном опыте в течение многих лет эффективная система управления процессом уборки с учетом индивидуальных пожеланий клиентов.</li>
    </ul>
</div>
</div>
</div>

<?php get_footer(); ?>