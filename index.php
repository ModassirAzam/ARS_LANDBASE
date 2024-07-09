<?php require_once('./assets/header.php')?>
<div class="container col">
    <div class="banner container">
        <video autoplay="" muted="" playsinline="" loop="" class="banner-img">
            <source src="<?php echo SITE_PATH?>/banner/banner_home.mp4" type="video/mp4">
        </video>
        <div class="banner-cover container">
            <div class="box-white row" >
                <select name="type" id="" class="banner-box-input mobile-hide">
                    <option value="" selected>All Types</option>
                    <option value="">Apartment</option>
                    <option value="">Duplex</option>
                    <option value="">Penthouse</option>
                    <option value="">Plot</option>
                </select>
                <input type="text" class="banner-box-input" placeholder="Area / Location">
                <select name="type" id="" class="banner-box-input mobile-hide">
                    <option value="" selected>Price Range</option>
                    <option value="">Min Price</option>
                    <option value="">Max Price</option>
                </select>
                <button class="banner-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path class="header-icon-path" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                    <div id="btn-text">
                        Submit
                    </div>
                </button>
            </div>
        </div>
    </div>
    <div class="container col">
        <h2 class="big-heading mbt-50">A++ Developers</h2>
        <div class="developers-row">
            <div id="app-developers" class="owl-carousel owl-theme container">
                <div class="item">
                    <img class="developer-logo" src="<?php echo SITE_PATH?>/images/developers/adani.png" alt="adani">
                </div>
                <div class="item">
                    <img class="developer-logo" src="<?php echo SITE_PATH?>/images/developers/anantraj.png" alt="anantraj">
                </div>
                <div class="item">
                    <img class="developer-logo" src="<?php echo SITE_PATH?>/images/developers/birla.png" alt="birla">
                </div>
                <div class="item">
                    <img class="developer-logo" src="<?php echo SITE_PATH?>/images/developers/dlf.png" alt="DLF">
                </div>
                <div class="item">
                    <img class="developer-logo" src="<?php echo SITE_PATH?>/images/developers/elan.png" alt="ELAN">
                </div>
                <div class="item">
                    <img class="developer-logo" src="<?php echo SITE_PATH?>/images/developers/godrej.png" alt="godrej">
                </div>
                <div class="item">
                    <img class="developer-logo" src="<?php echo SITE_PATH?>/images/developers/m3m.png" alt="M3M">
                </div>
            </div>
        </div>
        <h2 class="big-heading mbt-50">Exclusive Properties</h2>
        <div class="developers-row">
            <div id="excl-developers" class="owl-carousel owl-theme container">
                <div class="item">
                    <img class="developer-logo" src="<?php echo SITE_PATH?>/images/developers/dlf.png" alt="DLF">
                </div>
                <div class="item">
                    <img class="developer-logo" src="<?php echo SITE_PATH?>/images/developers/omaxe.png" alt="Omaxe">
                </div>
                <div class="item">
                    <img class="developer-logo" src="<?php echo SITE_PATH?>/images/developers/elan.png" alt="ELAN">
                </div>
            </div>
        </div>
        <h2 class="big-heading mbt-50">Properties</h2>
        <div class="cards grid-3-lg grid-2-md grid-1-sm w-100">
            <div class="cards_item">
                <div class="card">
                    <div class="card_image">
                        <img src="<?php echo SITE_PATH ?>/images/properties/property.jpg" class="card-img-top" alt="..." loading="lazy" alt="" srcset="">
                    </div>
                    <div class="card_content">
                        <h2 class="card_title">Palm Jumeirah</h2>
                        <p class="card_text">Palm Jumeirah is a thriving residential, tourism, and amusement destination in Dubai, established in 2001.</p>
                    </div>
                </div>
            </div>
            <div class="cards_item">
                <div class="card">
                    <div class="card_image">
                        <img src="<?php echo SITE_PATH ?>/images/properties/property2.webp" class="card-img-top" alt="..." loading="lazy" alt="" srcset="">
                    </div>
                    <div class="card_content">
                        <h2 class="card_title">Palm Jumeirah</h2>
                        <p class="card_text">Palm Jumeirah is a thriving residential, tourism, and amusement destination in Dubai, established in 2001.</p>
                    </div>
                </div>
            </div>
            <div class="cards_item">
                <div class="card">
                    <div class="card_image">
                        <img src="<?php echo SITE_PATH ?>/images/properties/property.jpg" class="card-img-top" alt="..." loading="lazy" alt="" srcset="">
                    </div>
                    <div class="card_content">
                        <h2 class="card_title">Palm Jumeirah</h2>
                        <p class="card_text">Palm Jumeirah is a thriving residential, tourism, and amusement destination in Dubai, established in 2001.</p>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="about-panel">
            <div class="about-img">
                <img src="https://www.eliteproinfra.com/front/images/about-us.jpg">
            </div>
            <div class="about-content">
                <h3>ABOUT US</h3>
                <p class="p-first"><b>We Help You Buy, Occupy & Invest in Real Estate Assets.</b></p>
                <p>With an absolutely integrated and robust Real Estate platform, we started our journey of addressing the realty needs of Gurugram’s commercial and residential segment in 2012. We have a core vision to deliver the best and most viable investment opportunities PAN India. As the name suggests, we are dedicated to providing exclusive and superior services in terms of proficiency and quality. Since our inception, we have been serving the objective of elevating our customers' monetary well-being.</p>
                <p class="p-third">To date, we have sold an area of about 45 million sq. ft. with more than 25,000 happy and regular customers. From best deals to effortless transactions and property management, our experienced team of consultants and market experts provide you most profitable deals, data-backed solutions, and full-fledged post-sales services.</p>

                <div >
                    <a href="about.php" ><button class="abt-btn">READ MORE</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('./assets/footer.php')?>