<?php require_once('./assets/config.php')?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex , nofollow"/>
    <link rel="icon" href="<?php echo SITE_PATH;?>/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo SITE_PATH;?>/styles/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#0a324c" />
    <meta name="description" content="<?php echo $description[$current_page]?>"/>
    <link rel="apple-touch-icon" href="<?php echo SITE_PATH;?>/images/logo192.png" />
    <link rel="manifest" href="<?php echo SITE_PATH;?>/manifest.json" />
    <title><?php echo $title[$current_page]?></title>
    <?php if($current_page === 'home'){?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php } ?>
  </head>
  <body>
