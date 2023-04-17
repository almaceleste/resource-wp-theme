<!DOCTYPE html>
<html lang="en">
<head>
    <?php get_template_part('head'); ?>
</head>
<body>
    <header>
        <?php get_header(); ?>
    </header>

    <main>
        <h1 class="alignwide has-text-align-center"><?php _e('Space of freedom, support and understanding', 'resource') ?></h1>

        <div class="wp-block-columns alignwide resources">
            <div class="wp-block-column">
                <figure class="wp-block-image aligncenter size-medium">
                    <img src="http://localhost/wp-content/uploads/2023/03/groupp1-300x300.png" alt="" class="wp-image-15"/>
                </figure>
                <h4 class="has-text-align-center">Группы поддержки</h4>
                <p class="has-text-align-center">Для представителей ЛГБТК+ сообщества проводятся регулярные группы психологической поддержки как в очном формате, так и онлайн</p>
                <div class="wp-block-buttons">
                    <div class="wp-block-button">
                        <a class="wp-block-button__link wp-element-button">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="wp-block-column">
                <figure class="wp-block-image aligncenter size-medium">
                    <img src="http://localhost/wp-content/uploads/2023/03/group2-1-300x300.png" alt="" class="wp-image-21"/>
                </figure>
                <h4 class="has-text-align-center">Консультации специалистов</h4>
                <p class="has-text-align-center">Психологические консультации, юридические консультации по всем правовым вопросам и коучинг для ЛГБТК+ и их близких (очные и онлайн)</p>
                <div class="wp-block-buttons">
                    <div class="wp-block-button">
                        <a class="wp-block-button__link wp-element-button">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="wp-block-column">
                <figure class="wp-block-image aligncenter size-medium">
                    <img src="http://localhost/wp-content/uploads/2023/03/club-300x300.png" alt="" class="wp-image-19"/>
                </figure>
                <h4 class="has-text-align-center">Клубы по интересам</h4>
                <p class="has-text-align-center">Мероприятия, обучающие курсы и регулярные тематические встречи по инициативе представителей сообщества (очные и онлайн)</p>
                <div class="wp-block-buttons">
                    <div class="wp-block-button">
                        <a class="wp-block-button__link wp-element-button">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="wp-block-column">
                <figure class="wp-block-image aligncenter size-medium">
                    <img src="http://localhost/wp-content/uploads/2023/03/group3-300x300.png" alt="" class="wp-image-20"/>
                </figure>
                <h4 class="has-text-align-center">Специалистам</h4>
                <p class="has-text-align-center">Супервизия, интервизорские группы, обучающие семинары и курсы для психологов и помогающих специалистов, работающих с ЛГБТК+ сообществом (очные и онлайн)</p>
                <div class="wp-block-buttons">
                    <div class="wp-block-button">
                        <a class="wp-block-button__link wp-element-button">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
        <?php get_sidebar() ?>
    </main>

    <footer>
        <?php get_footer(); ?>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>