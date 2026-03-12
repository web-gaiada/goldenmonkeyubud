<?php
/**
 * Template Name: Landing Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */

get_header('landing');
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Sorts+Mill+Goudy:ital@0;1&display=swap" rel="stylesheet">

<main id="primary">
  <?php get_template_part( 'template-parts/content', 'header' ); ?>
	
<?php if(get_field('theme_color') || get_field('subtheme_color')): ?>
<style>
	
	body, .text-white, .fs-5 {
        color: black !important;
    }
	
	.bg-footer {
		z-index: 2;
	}
	
	.bg-footer.text-white {
		color: #fff!important;
	}
	img.img-header {
		height: 55vh;
	}

    /* For mobile responsiveness */
    @media (max-width: 768px) {

        .fixed-top .btn-reserve {
            display: none!important;
        }
        .hero-image img {
            height: 250px; /* Adjust height for smaller screens */
        }

        /* .outer-wrapper img {
            height: 350px; 
        } */
    }

    #wpsr-reviews-grid-1266 {
        display: none
    }
	
    :root {
        --theme-color: <?= get_field('theme_color'); ?>;
        --subtheme-color: <?= get_field('subtheme_color'); ?>;
    }
    .bg-theme {
        background-color: #fafafa;
    }
    .bg-subtheme {
        background-color: var(--subtheme-color);
    }
    .hero-image::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,.4);
    }
    .hero-image img {
        height: 600px;
    }
    @media(max-width: 768px) {
        .hero-image img {
            height: 300px; 
        }
        .quote-icon {
            top: -20px;
            left: 0px;
        }   
    }
	
	.logo-1 {
		width: 80px;
		height: 80px;
	}
	
	.landing-row {
		display: none;
	}
	
	.navbar-toggler {
		display: none;
	}
	
	.fw-bold {
		color: white;
		margin-top: 100px;
	}

	.tab {
		overflow: hidden;
		border-bottom: 1px solid #B40304;
		background-color: #fafafa;
		margin-top: 50px;
		margin-bottom: 50px;
	}
	
	.tab button {
		background-color: inherit;
		float: left;
		border: none;
		outline: none;
		cursor: pointer; 
	 	padding: 14px 16px; 
		transition: 0.3s;
	}
	
	.tab button:hover {
		background-color: #b40304;
		color: white;
	}
	
	.swiper .wpsr-col-12 {
		max-width: none;
	}
	
	.tabcontent {
		display: none; 
		padding: 6px 12px; 
		border: 1px solid #fafafa; 
		border-top: none;
	}
	
	.swiper .wpsr-review-template {
	margin-top:64px;
}

	#navbarSupportedContent {
    display: none !important;
}
	.fixed-top .navbar-brand {
    margin:auto;
}
	
	/* Menu section CSS */
	
	p {
		font-weight: bold;
	}

	/* End of Menu section CSS */
	
</style>
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	
<?php endif; ?>
<div class="hero-image position-relative">
    <?php the_post_thumbnail('full', array('class' => 'img-fluid w-100', 'style' => 'object-fit: cover;'))  ?>
</div>
<?php if(get_field('section_1') || get_field('section_1_button_link')) : ?>
<div class="outer-wrapper bg-theme py-lg-10 py-5 px-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 mx-auto text-center text-white fs-5">
                
                    <?= get_field('section_1') ?>
                <?php if(get_field('section_1_button_link')) : ?>
                <div class="button-wrapper mt-5">
					
                    <a href="<?= get_field('section_1_button_link')['url'] ?>" target="<?= get_field('section_1_button_link')['target'] ? get_field('section_1_button_link')['target'] : '_self' ?>" class="button px-3 py-2 text-uppercase" style="background-color: <?= get_field('button_color') ?>!important"><?= get_field('section_1_button_text') ? get_field('section_1_button_text') : pll__('Discover Our Menu') ?></a>
					
                </div>
				<?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="outer-wrapper container">
    <div class="row gx-lg-5 align-items-center bg-theme" style="">
        <?php if(get_field('section_2')['text'] || get_field('section_2')['image']) : ?>
		<?php if(get_field('section_2')['text']) : ?>
        <div class="col-12 col-md-6 px-lg-10 px-5 text-center text-lg-start py-5 text-black fs-5">
            <?= get_field('section_2')['text'] ?>
        </div>
		<?php endif; ?>
        <div class="col-12 col-md-6">
            <?php if(get_field('section_2')['image_repeater']) : ?>
                <?php $section3Count = count(get_field('section_2')['image_repeater']); ?>
                <?php if(have_rows('section_2')) : ?>
                    <?php while(have_rows('section_2')) : the_row(); ?>
                        <div class="d-flex">
                            <?php if(have_rows('image_repeater')) : ?>
                                <?php while(have_rows('image_repeater')) : the_row(); ?>
                                <div class="col-<?= 12 / $section3Count ?>">
                                    <img src="<?= wp_get_attachment_image_url(get_sub_field('image'), 'full') ?>" class="img-fluid w-100 h-100" alt="" style="max-width: 90%;">
                                </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php else : ?>
			<?php if(get_field('section_2')['image']) : ?>
            <?= wp_get_attachment_image(get_field('section_2')['image'], 'full', false, array('class' => 'img-fluid w-100')) ?> 
			<?php endif; ?>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
    <div class="row gx-lg-5 align-items-center bg-theme" style="margin-top: 20px">
        <?php if(get_field('section_3')['text'] && get_field('section_3')['image']) : ?>
        <div class="col-12 col-md-6">
            <?php if(get_field('section_3')['image_repeater']) : ?>
                <?php $section3Count = count(get_field('section_3')['image_repeater']); ?>
                <?php if(have_rows('section_3')) : ?>
                    <?php while(have_rows('section_3')) : the_row(); ?>
                        <div class="d-flex">
                            <?php if(have_rows('image_repeater')) : ?>
                                <?php while(have_rows('image_repeater')) : the_row(); ?>
                                <div class="col-<?= 12 / $section3Count ?>">
                                    <img src="<?= wp_get_attachment_image_url(get_sub_field('image'), 'full') ?>" class="img-fluid w-100 h-100" alt="" style="max-width: 90%;">
                                </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php else : ?>
            <?= wp_get_attachment_image(get_field('section_3')['image'], 'full', false, array('class' => 'img-fluid w-100')) ?> 
            <?php endif; ?>
        </div>
        <div class="col-12 col-md-6 px-lg-10 px-5 text-center text-lg-start py-5 text-black fs-5">
            <?= get_field('section_3')['text'] ?>
        </div>
        <?php endif; ?>
    </div>
    <div class="row gx-0 align-items-center bg-theme" style="margin: 0 90px">
        <?php if(get_field('section_4')['text'] && get_field('section_4')['image']) : ?>
        <div class="col-12 col-lg-6 px-lg-10 px-5 text-center text-lg-start py-5 text-white fs-5">
            <?= get_field('section_4')['text'] ?>
        </div>
        <div class="col-12 col-md-6">
            <?php if(get_field('section_4')['image_repeater']) : ?>
                <?php $section3Count = count(get_field('section_4')['image_repeater']); ?>
                <?php if(have_rows('section_4')) : ?>
                    <?php while(have_rows('section_4')) : the_row(); ?>
                        <div class="d-flex">
                            <?php if(have_rows('image_repeater')) : ?>
                                <?php while(have_rows('image_repeater')) : the_row(); ?>
                                <div class="col-<?= 12 / $section3Count ?>">
                                    <img src="<?= wp_get_attachment_image_url(get_sub_field('image'), 'full') ?>" class="img-fluid w-100 h-100" alt="" style="max-width: 90%;">
                                </div>
                                <?php endwhile; ?>
                            <?php endif; ?>col-12 col-md-6 px-lg-10 px-5 text-center text-lg-start py-5 text-black fs-5
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php else : ?>
            <?= wp_get_attachment_image(get_field('section_4')['image'], 'full', false, array('class' => 'img-fluid w-100', 'style' => 'height: 610px;')) ?> 
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
	
	<!-- SECTION 4 MENU -->

    <div class="outer container">
        <div class="tab d-flex justify-content-center">
            <button class="tablinks" onclick="openCity(event, 'Dimsum')">Dimsum</button>
            <button class="tablinks" onclick="openCity(event, 'Chinese BBQ')">Chinese BBQ</button>
            <button class="tablinks" onclick="openCity(event, 'Wok Specialties')">Wok Specialties</button>
        </div>
    </div>
      
    <!-- Tab content -->
    <div id="Dimsum" class="tabcontent container">


        <!-- Use this format -->
        <div class="menu-grid"></div>
<div class="container">
    <div class="row gx-lg-5">
        <!-- Left Column -->
        <div class="col-md-6 col-12">
            <!-- Mixed Dim Sum -->
            <div class="item d-flex align-items-center justify-content-between mb-4">
                <div class="inner">
                    <h3>Mixed Dim Sum (10 pcs)</h3>
                    <p>精选五拼点心</p>
                    <p class="mb-0">Har Gow + Xiao Long Bao + Siu Mai + Fenkow + Crystal Dumplings</p>
                </div>
                <div class="inner ms-4">
                    <p>120,000</p>
                </div>
            </div>

            <!-- Xiao Long Bao -->
            <div class="item d-flex align-items-center justify-content-between mb-4">
                <div class="inner">
                    <h3>Xiao Long Bao</h3>
                    <p>上汤小笼包</p>
                    <p class="mb-0">Steamed Shanghai Pork Broth Dumpling</p>
                </div>
                <div class="inner ms-4">
                    <p>45,000</p>
                </div>
            </div>

            <!-- Pork Buns -->
            <div class="item d-flex align-items-center justify-content-between mb-4">
                <div class="inner">
                    <h3>Pork Buns</h3>
                    <p>蜜汁叉烧包</p>
                    <p class="mb-0">Pork Buns With Pork Char Siu</p>
                </div>
                <div class="inner ms-4">
                    <p>40,000</p>
                </div>
            </div>

            <!-- Crystal Dumplings -->
            <div class="item d-flex align-items-center justify-content-between mb-4">
                <div class="inner">
                    <h3>Crystal Dumplings</h3>
                    <p>韭菜水晶饺</p>
                    <p class="mb-0">Steamed Chives and Prawn Dumpling</p>
                </div>
                <div class="inner ms-4">
                    <p>49,000</p>
                </div>
            </div>

            <!-- Fenkow Dumplings -->
            <div class="item d-flex align-items-center justify-content-between mb-4">
                <div class="inner">
                    <h3>Fenkow Dumplings</h3>
                    <p>潮州素粉饺</p>
                    <p class="mb-0">Vegetarian Dumpling with Broccoli, Carrot, Peanuts</p>
                </div>
                <div class="inner ms-4">
                    <p>40,000</p>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-md-6 col-12">
            <!-- Har Gow -->
            <div class="item d-flex align-items-center justify-content-between mb-4">
                <div class="inner">
                    <h3>Har Gow</h3>
                    <p>水晶鲜虾饺</p>
                    <p class="mb-0">Steamed Prawn Dumplings</p>
                </div>
                <div class="inner ms-4">
                    <p>49,000</p>
                </div>
            </div>

            <!-- Siu Mai -->
            <div class="item d-flex align-items-center justify-content-between mb-4">
                <div class="inner">
                    <h3>Siu Mai</h3>
                    <p>鱼籽靓烧卖</p>
                    <p class="mb-0">Steamed Pork or Chicken Prawn Dumpling</p>
                </div>
                <div class="inner ms-4">
                    <p>45,000</p>
                </div>
            </div>

            <!-- Fried Wonton -->
            <div class="item d-flex align-items-center justify-content-between mb-4">
                <div class="inner">
                    <h3>Fried Wonton</h3>
                    <p>黄金炸云吞</p>
                    <p class="mb-0">Deep Fried Pork and Prawn Wontons</p>
                </div>
                <div class="inner ms-4">
                    <p>45,000</p>
                </div>
            </div>

            <!-- Pork Spare Ribs -->
            <div class="item d-flex align-items-center justify-content-between mb-4">
                <div class="inner">
                    <h3>Pork Spare Ribs</h3>
                    <p>豉汁蒸排骨</p>
                    <p class="mb-0">Steamed Pork Rib With Black Bean Sauce</p>
                </div>
                <div class="inner ms-4">
                    <p>40,000</p>
                </div>
            </div>

            <!-- Chicken Feet -->
            <div class="item d-flex align-items-center justify-content-between mb-4">
                <div class="inner">
                    <h3>Chicken Feet</h3>
                    <p>豉汁滑凤抓</p>
                    <p class="mb-0">Steamed Chicken Feet with Spicy Bean Sauce</p>
                </div>
                <div class="inner ms-4">
                    <p>35,000</p>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- until this -->
    </div>


      <div id="Chinese BBQ" class="tabcontent container">
        <div class="menu-grid"></div>
<div class="container">
    <div class="row gx-lg-5">
        <!-- Left Column -->
        <div class="col-md-6 col-12">
            <!-- Roast Chicken -->
            <div class="item d-flex align-items-center justify-content-between mb-4">
                <div class="inner">
                    <h3>Roast Chicken (S/M/L)</h3>
                    <p>当红炸子鸡</p>
                    <p class="mb-0">With Hoisin Sauce</p>
                </div>
                <div class="inner ms-4">
                    <p>55,000</p>
                </div>
            </div>

            <!-- Char Siew Chicken -->
            <div class="item d-flex align-items-center justify-content-between mb-4">
                <div class="inner">
                    <h3>Char Siew Chicken (S/L)</h3>
                    <p>蜜汁鸡叉烧</p>
                    <p class="mb-0">Honey Roasted Boneless Drumstick Chicken</p>
                </div>
                <div class="inner ms-4">
                    <p>70,000</p>
                </div>
            </div>

            <!-- BBQ Combination -->
            <div class="item d-flex align-items-center justify-content-between mb-4">
                <div class="inner">
                    <h3>BBQ Combination</h3>
                    <p>精美烧腊拼盘</p>
                    <p class="mb-0">Char Siew Chicken + Crispy Pork Belly + Roasted Duck</p>
                </div>
                <div class="inner ms-4">
                    <p>280,000</p>
                </div>
            </div>

        </div>

        <!-- Right Column -->
        <div class="col-md-6 col-12">
            <!-- Roast Duck -->
            <div class="item d-flex align-items-center justify-content-between mb-4">
                <div class="inner">
                    <h3>Roast Duck (S/M/L)</h3>
                    <p>明炉烤鸭</p>
                    <p class="mb-0">With Hoisin Sauce and Plum Sauce</p>
                </div>
                <div class="inner ms-4">
                    <p>145,000</p>
                </div>
            </div>

            <!-- Char Siew Pork -->
            <div class="item d-flex align-items-center justify-content-between mb-4">
                <div class="inner">
                    <h3>Char Siew Pork (S/L)</h3>
                    <p>蜜汁叉烧</p>
                    <p class="mb-0">Honey Roasted Pork Belly</p>
                </div>
                <div class="inner ms-4">
                    <p>80,000</p>
                </div>
            </div>

            <!-- Crispy Pork Belly -->
            <div class="item d-flex align-items-center justify-content-between mb-4">
                <div class="inner">
                    <h3>Crispy Pork Belly (S/L)</h3>
                    <p>脆皮烧肉</p>
                    <p class="mb-0">Crispy Pork Belly with Hoisin Sauce</p>
                </div>
                <div class="inner ms-4">
                    <p>80,000</p>
                </div>
            </div>

        </div>
    </div>
</div>
        </div>
    
      <div id="Wok Specialties" class="tabcontent container">
        <div class="menu-grid"></div>
        <div class="container">
            <div class="row gx-lg-5">
                <div class="col-md-6 col-12">
                    <div class="item d-flex align-items-center justify-content-between mb-4">
                        <div class="inner">
                            <h3>Sweet & Sour Pork (S/L)</h3>
                            <p>酸甜糖醋</p>
                            <p class="mb-0">Battered Pork with Sweet & Sour Sauce.
                            </p>
                        </div>
                        <div class="inner ms-4">
                            <p>105,000</p>
                        </div>
                    </div>
                    <div class="item d-flex align-items-center justify-content-between mb-4">
                        <div class="inner">
                            <h3>Kung Pao Prawns (S/L)</h3>
                            <p>宫保大虾球</p>
                            <p class="mb-0">With Dried Chili and Cashew Nuts.
                            </p>
                        </div>
                        <div class="inner ms-4">
                            <p>145,000</p>
                        </div>
                    </div>

                    <div class="item d-flex align-items-center justify-content-between mb-4">
                        <div class="inner">
                            <h3>Beef Black Pepper Tenderloin(S/L)</h3>
                            <p>中式黑椒牛肉(里脊肉)</p>
                            <p class="mb-0">Sautéed Beef with Chinese Black Pepper Sauce
                            </p>
                        </div>
                        <div class="inner ms-4">
                            <p>110,000</p>
                        </div>
                    </div>

                    <div class="item d-flex align-items-center justify-content-between mb-4">
                        <div class="inner">
                            <h3>Chicken Honey Sesame (S/L)</h3>
                            <p>蜜汁芝麻鸡肉</p>
                            <p class="mb-0">Crispy Chicken with Homemade Honey Sauce.
                            </p>
                        </div>
                        <div class="inner ms-4">
                            <p>100,000</p>
                        </div>
                    </div>
                    
                </div>


                <div class="col-md-6 col-12">
                    <div class="item d-flex align-items-center justify-content-between mb-4"> 
                        <div class="inner">
                            <h3>Egg Noodles</h3>
                            <p>牛肉、鸡肉、海鲜或蔬菜河粉
                            </p>
                            <p class="mb-0">Beef, Chicken, Seafood or Veggie.
                            </p>
                        </div>
                        <div class="inner ms-4">
                            <p>115,000</p>
                        </div>
                    </div>
                    <div class="item d-flex align-items-center justify-content-between mb-4"> 
                        <div class="inner">
                            <h3>Stir Fried Green Vegetables</h3>
                            <p>时蔬</p>
                            <p class="mb-0">*all with Choice of Garlic Sauce 蒜泥 or Oyster Sauce 蚝皇</p>
                        </div>
                        <div class="inner ms-4">
                            <p>70,000</p>
                        </div>
                    </div>

                    <div class="item d-flex align-items-center justify-content-between mb-4">
                        <div class="inner">
                            <h3>Beef Ginger & Shallot</h3>
                            <p>铁板姜葱牛肉(里脊肉)</p>
                            <p class="mb-0">Sautéed Beef with Ginger & Shallot in Hotplate</p>
                        </div>
                        <div class="inner ms-4">
                            <p>120,000</p>
                        </div>
                    </div>

                    <div class="item d-flex align-items-center justify-content-between mb-4">
                        <div class="inner">
                            <h3>Fried Rice Special</h3>
                            <p>扬州炒饭</p>
                            <p class="mb-0">With Prawn, Char Siu Pork and Vegetables.
                            </p>
                        </div>
                        <div class="inner ms-4">
                            <p>95,000</p>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
		</div>
<script>
		  function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  
  // Only try to access evt.currentTarget if evt is not null
  if (evt) evt.currentTarget.className += " active";   
}

document.addEventListener("DOMContentLoaded", () => {
  openCity(null, 'Dimsum');
});

</script>
<!-- end of section 4 menu -->
	
	<div class="text-center mt-4 container">
        <a href="https://www.goldenmonkeyubud.com/menu/" class="btn btn-reserve fw-bold ms-4 d-none d-lg-block" aria-label="Reservations">Full Menu</a>
    </div>
	
<!-- Starting Section 5 -->
	<div>
    <h2 style="color: black; text-align: center; margin-top: 20px; color: #111111; font-weight: bold;">Reviews of Golden Monkey Ubud</h2><br />
    <div class="swiper-container swiper">
        <div class="swiper-wrapper">
            <?php echo do_shortcode( '[wp_social_ninja id="1266" platform="reviews"]' ); ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation (Optional) -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
<br />
<br />
	
	<script>

document.addEventListener("DOMContentLoaded", function() {
    // Initialize Swiper slider
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 1, // Show one review at a time
        spaceBetween: 4, // Space between slides
        loop: true, // Loop through reviews,
        // wrapperClass: 'wpsr-all-reviews',
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        breakpoints: {
            768: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 4,
            }
        }
    });

    // Select all elements with the role="group" attribute
    const reviewGroups = document.querySelectorAll('div[role="group"]');

    reviewGroups.forEach(function(reviewGroup) {
        // Find the rating element within each review group
        const ratingElement = reviewGroup.querySelector('div[data-rating]');

        // Check if the data-rating attribute is equal to 5
        if (ratingElement && ratingElement.getAttribute('data-rating') === '5') {
            // If rating is 5, show this review group (by adding to Swiper wrapper)
            const swiperSlide = document.createElement('div');
            swiperSlide.classList.add('swiper-slide');
            swiperSlide.appendChild(reviewGroup);
            document.querySelector('.swiper-wrapper').appendChild(swiperSlide);
        } else {
            // Otherwise, hide the review group
            reviewGroup.style.display = 'none';
        }
    });
});
</script>
	
	<h2 class="container" style="text-align: center; font-weight: bold; color: #111111">
		Reserve Your Table Today
	</h2>
	
	<div class="text-center container" style="margin-bottom: 50px; margin-top: -50px;">
        <a href="https://www.goldenmonkeyubud.com/reservations/" class="btn btn-reserve fw-bold " aria-label="Reservations">Reservations</a>
	</div>

<script>
	document.addEventListener("DOMContentLoaded", function() {
        // Select all elements with the role="group" attribute
        const reviewGroups = document.querySelectorAll('div[role="group"]');

        reviewGroups.forEach(function(reviewGroup) {
            // Find the rating element within each review group
            const ratingElement = reviewGroup.querySelector('div[data-rating]');

            // Check if the data-rating attribute is equal to 5
            if (ratingElement && ratingElement.getAttribute('data-rating') === '5') {
                // If rating is 5, show this review group
                reviewGroup.style.display = 'block';
            } else {
                // Otherwise, hide the review group
                reviewGroup.style.display = 'none';
            }
        });
    });
</script>
	
    <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.887680897033!2d115.26138147525975!3d-8.510285491531763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d6c77c9d63f%3A0x93f2d70599d31eb!2sGolden%20Monkey%20Ubud!5e0!3m2!1sen!2sid!4v1731478220138!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>			
				
      

  </div> 
</main>
  
<?php
get_footer();