
<?php
/*
Template Name: Registration
*/
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>BYYD<?php wp_title('|'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="Мобильная реклама для брендов и рекламных агентств">
    <meta name="keywords" content="мобильная реклама, мобильный маркетинг, продвижение бренда, мобильная рекламная платформа, мобайл, mobile, видеореклама, dsp, programmatic, программатик, rtb, real-time bidding, byyd, бид, супергео, локальная реклама">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/media-queries.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animations.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900&subset=latin,cyrillic'
          rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Comfortaa:300,700,400&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>
</head>
<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P5SZ5V"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-P5SZ5V');</script>
<!-- End Google Tag Manager -->
<div class="registration">
    <div class="container">
        <div class="first-screen">
            <div class="registration-top">
                <div class="wrapper-logo-reg">
                    <a href="<?php echo site_url(); ?>/<?php echo pll_current_language(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/byyd.png"></a>
                </div>
                <p>
                    <?php pll_e('Мобильная рекламная платформа'); ?>
                </p>
            </div>
            <h2 class="registration-title">
                <?php pll_e('Регистрация'); ?>
            </h2>
            <form action="" id="registration-form">
                <div class="form-title">
                    <?php pll_e('Регистрация абсолютно бесплатна'); ?>
                </div>
                <div class="form-text">
                    <?php pll_e('Реквизиты банковских карт не потребуются'); ?>
                </div>
               <div class="form-group-1">
                   <input type="text" name="name" id="Name" placeholder="<?php pll_e('Имя Фамилия'); ?>">
                   <input type="email" name="mail" id="Mail" placeholder="<?php pll_e('Рабочий e-mail'); ?>">

               </div>
                <div class="form-group-2">
                    <select name="type" id="Type" name="type">
                        <option disabled selected hidden value="0"> <?php pll_e('Выберите тип компании'); ?></option>
                        <option value="Advertising Agency"><?php pll_e('Рекламное агенство'); ?></option>
                        <option value="Direct Advertiser"><?php pll_e('Прямой рекламадатель'); ?></option>
                        <option value="Mobile App"><?php pll_e('Мобильное приложение'); ?></option>
                        <option value="Publisher"><?php pll_e('Паблишер'); ?></option>
                        <option value="Others"><?php pll_e('Другое'); ?></option>
                    </select>
                    <input type="text" name="company" id="Company" placeholder="<?php pll_e('Название компании'); ?>" required>
                    <input type="tel" name="phone" id="Phone" placeholder="<?php pll_e('Контактный телефон'); ?>" required>
                </div>
                <div  class="registration-button first-screen-button">
                    <?php pll_e('Далее'); ?>
                </div>
               <div class="registration-button submit-button">
                   <?php pll_e('Далее'); ?>
                </div>
                <div class="form-stages">
                    <div class="stage-1 stage-active"></div>
                    <div class="stage-2"></div>
                    <div class="stage-3"></div>
                </div>
            </form>
            <div class="reg-clients">
                <div class="reg-clients-title">
                    <?php pll_e('Вы в хорошей компании'); ?>
                </div>
                <div class="reg-clients-logo">
                    <div class="reg-logo reg-logo-1"></div>
                    <div class="reg-logo reg-logo-2"></div>
                    <div class="reg-logo reg-logo-3"></div>
                    <div class="reg-logo reg-logo-4"></div>
                    <div class="reg-logo reg-logo-5"></div>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/base.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.js"></script>

</body>
</html>

<?php ?>
