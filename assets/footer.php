        <script type="text/javascript">
            const header = document.getElementById('header');
            let scrollpos = window.scrollY
            const scrollChange = 1

            const add_class_on_scroll = () => header.classList.add("header-scrolled")
            const remove_class_on_scroll = () => header.classList.remove("header-scrolled")

            window.addEventListener('scroll', function() { 
            scrollpos = window.scrollY;

            if (scrollpos >= scrollChange) { add_class_on_scroll() }
            else { remove_class_on_scroll() }
            
            })
        </script>
        <script src="<?php echo SITE_PATH?>/js/nav.js"></script>
        <?php if($current_page === 'home'){?>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $('#app-developers').owlCarousel({
                loop:true,
                margin:100,
                nav:true,
                autoplay:true,
                autoplayTimeout:2000,
                dots:false,
                smartSpeed:2000,
                responsive:{
                    0:{
                        items:2
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            });
            $('#excl-developers').owlCarousel({
                loop:true,
                margin:200,
                nav:false,
                autoplay:true,
                autoplayTimeout:2000,
                smartSpeed:1500,
                slideTransition:'linear',
                dots:false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });
        </script>
        <?php } ?>
    </body>
</html>