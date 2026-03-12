<?php
/**
 * Template Name: Conversion Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goldenmonkey
 */

get_header('landing');
?>
<link rel="preconnect" href="https://fonts.googleapis.com" data-no-optimize="true">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin data-no-optimize="true">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Sorts+Mill+Goudy:ital@0;1&display=swap" rel="stylesheet" data-no-optimize="true">
<style>
	
	body {
        color: black !important;
		font-family: "Montserrat", serif;
    }
	
	.bg-footer {
		z-index: 2;
	}
	
	.bg-footer.text-white {
		color: #fff!important;
	}
	img.img-header {
		height: 100vh;
	}
	img.img-cta.img-header {
		height: 50vh;
	}
	.fixed-top {
		display: none !important;
	}
	.overlay {
		position: absolute;
	  height: 100%;
	  width: 100%;
	  top: 0;
	  left: 0;
	  background: rgba(0, 0, 0, 0.4);	  
	}
	.landing-top h1 {
		margin-top: 28px;
		margin-bottom: 28px;
		font-weight: 700 !important;
	}
	.landing-top-btn a {
		padding: 0.6rem 3rem !important;
		font-size: 18px;
	}
	.fw-semibold {
		font-weight: 600 !important;
	}
	.sec-section-container {
		width: 50%;
		left: 8%;
		bottom: 8%;
	}
	.sec-section-container h2 {
		font-size: 40px;
	}
	.sec-section-container p {
		font-size: 24px;
		font-weight: 300;
		margin-bottom: 0;
	}	
	
	.landing-swiper .swiper {
      width: 100%;
      height: 100%;
    }

    .landing-swiper .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
    }

    .landing-swiper .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
		inset: 0;
		position: absolute;
		z-index: -1;
    }
	
	.swiper-slide .sec-section-container {
		width: 50%;
		right: 8%;
		bottom: 10%;
		left: auto;
	}
	.swiper-pagination-clickable .swiper-pagination-bullet {
		cursor: pointer;
		background: #fff;
	}
	.swiper-pagination {
		bottom: var(--swiper-pagination-bottom, 8%);
		right: 8% !important;
		left: auto;
	}
	.landing-swiper .landing-top {
		padding-top: 60%;
	}
	.swiper-pagination {
		bottom: var(--swiper-pagination-bottom, 8%) !important;
		left: auto !important;
		right: 8% !important;
		text-align: end !important;
	}
	
    /* For mobile responsiveness */
    @media (max-width: 768px) {

        .fixed-top .btn-reserve {
            display: none!important;
        }
        .hero-image img {
            height: 250px; /* Adjust height for smaller screens */
        }        
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
    @media(max-width: 768px) {
        .hero-image img {
            height: 300px; 
        }
        .quote-icon {
            top: -20px;
            left: 0px;
        }
		.landing-top h1 {
			font-size: 22px;
			margin-top: 8px; 
			margin-bottom: 8px;
		}
		.landing-top h2 {
			line-height: 1.2 !important;
			font-size: 18px;
		}
		.sec-section-container {
			width: 80%;
		}
		.sec-section-container p {
			font-size: 12px;
		}
		.landing-swiper .landing-top {
			padding-top: 66%;
		}
		.swiper-slide .sec-section-container {
			width: 90%;
		}
    }
	
	.logo-landing {
		width: 120px;
		margin-bottom: 14px;
	}
	
	.landing-row {
		display: none;
	}
	
	.navbar-toggler {
		display: none;
	}
	
	.fw-bold {
		color: white;
	}		
	
	.swiper .wpsr-col-12 {
		max-width: none;
	}	
	
	.swiper .wpsr-review-template {
	margin-top:64px;
}			
</style>

<main id="primary">

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


	
<div class="position-relative landing-top">
	<div class="overlay"></div>
    <div class="position-absolute mb-4 top-50 start-50 translate-middle text-center text-white">
        <img src="https://www.goldenmonkeyubud.com/wp-content/themes/goldenmonkey-ubud/images/golden-monkey-logo.svg" class="logo-landing">
		<h1 class="fw-bold">Timeless Chinese Recipes, Made Fresh For You</h1>
		<h2 class="lh-base fw-semibold">Delightful Decadent Chinese-Cantonese<br>Culinary Delicacy Situated In Ubud</h2>
		<div class="text-center container mt-3 mt-md-5 landing-top-btn">
			<a href="https://www.goldenmonkeyubud.com/reservations/" class="btn btn-reserve fw-bold " aria-label="Reservations">Book Now</a>
		</div>
    </div>
	<img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2024/11/Golden-Monkey-Ubud-Interior.webp" class="img-header">
</div> 

<div class="position-relative landing-top">
	<div class="overlay"></div>
    <div class="position-absolute mb-4 sec-section-container text-start text-white">
		<h2 class="lh-base fw-semibold">A Culinary Delight In Bali</h2>
		<p>Every meal is a delightful experience at our Ubud restaurant, offering the best food in Ubud Bali. Savor the vibrant taste of authentic Chinese dishes, crafted with fresh local ingredients and a passion for tradition, creating moments you'll cherish with every bite.</p>
		<div class="text-start mt-5 landing-top-btn">
			<a href="https://www.goldenmonkeyubud.com/reservations/" class="btn btn-reserve fw-bold " aria-label="Reservations">Reserve Your Table</a>
		</div>
    </div>
	<img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2025/02/E-GOLDEN-MONKEY-41-scaled.webp" class="img-header">
</div>
	
<div class="landing-swiper position-relative">
	<div class="swiper mySwiper">
		<div class="swiper-wrapper">
		  <div class="swiper-slide">
			  <div class="position-relative landing-top">
					<div class="overlay"></div>
					<div class="position-absolute mb-4 sec-section-container text-end text-white">
						<h2 class="lh-base fw-semibold">Mixed Dim Sum (10 pcs) | 精选五拼点心 </h2>
						<p>Har Gow + Xiao Long Bao + Siu Mai + Fenkow + Crystal Dumplings</p>
						<div class="text-end mt-4 landing-top-btn">
							<a href="https://www.goldenmonkeyubud.com/reservations/" class="btn btn-reserve fw-bold " aria-label="Reservations">Book Now</a>
						</div>
					</div>
					<img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2025/02/Golden-Monkey-Basket-of-Dim-Sum-scaled.webp" class="img-header">
				</div>
			</div>
		  <div class="swiper-slide">
			<div class="position-relative landing-top">
					<div class="overlay"></div>
					<div class="position-absolute mb-4 sec-section-container text-end text-white">
						<h2 class="lh-base fw-semibold">Beef Black Pepper | 中式铁板牛肉 </h2>
						<p>Sautéed Beef with Chinese Black Pepper Sauce</p>
						<div class="text-end mt-4 landing-top-btn">
							<a href="https://www.goldenmonkeyubud.com/reservations/" class="btn btn-reserve fw-bold " aria-label="Reservations">Book Now</a>
						</div>
					</div>
					<img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2025/02/Golden-Monkey-Beef-Black-Pepper-scaled.webp" class="img-header">
				</div>
			</div>
		  <div class="swiper-slide">
			<div class="position-relative landing-top">
					<div class="overlay"></div>
					<div class="position-absolute mb-4 sec-section-container text-end text-white">
						<h2 class="lh-base fw-semibold">Sweet & Sour Chicken | 菠萝咕噜鸡肉 </h2>
						<p>With Tri Color Capsicums & Pineapples.</p>
						<div class="text-end mt-4 landing-top-btn">
							<a href="https://www.goldenmonkeyubud.com/reservations/" class="btn btn-reserve fw-bold " aria-label="Reservations">Book Now</a>
						</div>
					</div>
					<img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2025/02/Golden-Monkey-Sweet-Sour-Chicken-scaled.webp" class="img-header">
				</div>
			</div>
		  <div class="swiper-slide">
			  <div class="position-relative landing-top">
					<div class="overlay"></div>
					<div class="position-absolute mb-4 sec-section-container text-end text-white">
						<h2 class="lh-base fw-semibold">Egg Noodles | 牛肉、鸡肉、海鲜或蔬菜河粉</h2>
						<p>Beef, Chicken, Seafood or Veggie.</p>
						<div class="text-end mt-4 landing-top-btn">
							<a href="https://www.goldenmonkeyubud.com/reservations/" class="btn btn-reserve fw-bold " aria-label="Reservations">Book Now</a>
						</div>
					</div>
					<img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2025/02/Golden-Monkey-Egg-Noodle-Chicken-scaled.webp" class="img-header">
				</div>
		  </div>
		  <div class="swiper-slide">
			  <div class="position-relative landing-top">
			<div class="overlay"></div>
					<div class="position-absolute mb-4 sec-section-container text-end text-white">
						<h2 class="lh-base fw-semibold">Chicken Honey Sesame | 蜜汁芝麻鸡肉</h2>
						<p>Crispy Chicken with Homemade Honey Sauce.</p>
						<div class="text-end mt-4 landing-top-btn">
							<a href="https://www.goldenmonkeyubud.com/reservations/" class="btn btn-reserve fw-bold " aria-label="Reservations">Book Now</a>
						</div>
					</div>
					<img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2025/02/Golden-Monkey-Chicken-Honey-Sesame-scaled.webp" class="img-header">
				</div>
		   </div>
		</div>
		</div>
		<div class="swiper-pagination"></div>
	  </div>
	<style>
		@media(min-width: 992px) {
			.landing-gallery .img-wrapper img {
				height: 100%;
				width: 100%;
				object-fit: cover;
			}
			.landing-gallery .h-1-2 {
				height: 50%;
			}
			.landing-gallery .h-1-3 {
				height: 35%;
			}
			.landing-gallery .h-2-3 {
				height: 65%;
			}
		}
	</style>
	
	<div class="bg-footer py-5">
		<div class="landing-gallery container">
			<div class="row">
				<h2 class="lh-base text-center text-white mb-3 fw-semibold">Our Gallery</h2>
				<div class="col-lg-4 col-12">
					<div class="img-wrapper h-100">
						<img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2025/02/GOLDEN-MONKEY-35-scaled.webp">
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="img-wrapper h-1-2 pb-lg-3">
						<img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2025/02/Golden-Monkey-Staff-scaled.webp">
					</div>
					<div class="img-wrapper h-1-2">
						<img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2025/02/Rio-Photos-2-scaled.webp">
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="img-wrapper h-1-3 pb-lg-3">
						<img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2025/02/E-GOLDEN-MONKEY-54-scaled.webp">
					</div>
					<div class="img-wrapper h-2-3">
						<img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2025/02/E-GOLDEN-MONKEY-44-scaled.webp">
					</div>
				</div>
			</div>
		</div>
	</div>	
	
<!-- Starting Section 5 -->
	<div class="my-4 pt-4">
    <h2 style="color: black; text-align: center; margin-top: 20px; color: #111111; font-weight: bold;">Reviews of Golden Monkey Ubud</h2><br />
    <div class="swiper-container swiper-testimonial swiper">
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
    const swiper = new Swiper('.swiper-container.swiper-testimonial', {
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
		if(!reviewGroup.classList.contains('wpsr-col-12')) return false;
        // Find the rating element within each review group
        const ratingElement = reviewGroup.querySelector('div[data-rating]');

        // Check if the data-rating attribute is equal to 5
        if (ratingElement && ratingElement.getAttribute('data-rating') === '5') {
            // If rating is 5, show this review group (by adding to Swiper wrapper)
            const swiperSlide = document.createElement('div');
            swiperSlide.classList.add('swiper-slide');
            swiperSlide.appendChild(reviewGroup);
            document.querySelector('.swiper-testimonial .swiper-wrapper').appendChild(swiperSlide);
        } else {
            // Otherwise, hide the review group
            reviewGroup.style.display = 'none';
        }
    });
});
</script>

<script>
	document.addEventListener("DOMContentLoaded", function() {
        // Select all elements with the role="group" attribute
        const reviewGroups = document.querySelectorAll('div[role="group"]');

        reviewGroups.forEach(function(reviewGroup) {
			if(!reviewGroup.classList.contains('wpsr-col-12')) return false;
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
	
	<div class="position-relative landing-top">
		<div class="overlay"></div>
		<div class="position-absolute mb-4 top-50 start-50 translate-middle text-center text-white">
			<h2 class="lh-base fw-semibold">Reserve Your Table Today For An<br>Unforgetable Dining Experience</h2>
			<div class="text-center container mt-5 landing-top-btn">
				<a href="https://www.goldenmonkeyubud.com/reservations/" class="btn btn-reserve fw-bold " aria-label="Reservations">Reservation</a>
			</div>
		</div>
		<img src="https://www.goldenmonkeyubud.com/wp-content/uploads/2025/02/Golden-Monkey-Interior-scaled.webp" class="img-cta img-header">
	</div>
	
    <div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.887680897033!2d115.26138147525975!3d-8.510285491531763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d6c77c9d63f%3A0x93f2d70599d31eb!2sGolden%20Monkey%20Ubud!5e0!3m2!1sen!2sid!4v1731478220138!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
	
	 
</main>
<script>
    var swiper = new Swiper(".landing-swiper .mySwiper", {
      spaceBetween: 0,
		autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".landing-swiper .swiper-pagination",
        clickable: true,
      },
    });
  </script>
<?php
get_footer();