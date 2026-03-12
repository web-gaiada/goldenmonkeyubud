<?php

/**
 * Template Name: Media Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *
 */


 get_header();

?>
<main class="padding-avoid-nav">
<?php 
if(have_posts()) :
    while(have_posts()) :
        the_post(); 
        get_template_part( 'template-parts/content', 'header' );
        ?>

<?php $content = get_field('page_media'); ?>
<style>
    .pt-67 {
        padding-top: 67%;
    }
    main a {
        text-decoration: underline;
        font-size: 18px;
        color: #b40304;
    }
    main hr {
        margin: 0;
    }
    .object-cover {
        object-fit: cover;
    }
</style>
<div class="py-5">
    
    <?php if($content['logos']['logo']) : ?>
    <div class="container py-5">
        <div class="title-wrapper text-center mb-5">
            <h2><?= $content['logos']['title'] ?></h2>
        </div>
        <div class="d-flex flex-wrap justify-content-between">
            <?php foreach($content['logos']['logo'] as $logo) : ?>
            <a href="<?= $logo['link'] ?>" target="_blank" download><?= $logo['name'] ?></a>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif ?>
    
    <div class="container">
        <hr>
    </div>
    
    <?php if($content['documents']['document']) : ?>
    
        <div class="container py-5">
            <div class="title-wrapper text-center mb-5">
                <h2><?= $content['documents']['title'] ?></h2>
            </div>
            <div class="content d-flex flex-wrap justify-content-between">
                <?php foreach($content['documents']['document'] as $document) : ?>
                        <a href="<?= $document['link'] ?>"><?= $document['name'] ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    
    <?php endif; ?>

    <div class="container">
        <hr>
    </div>
    
    
    <?php if($content['images']['image']) : ?>
    
        <div class="container py-5">
            <div class="title-wrapper text-center mb-5">
                <h2><?= $content['images']['title'] ?></h2>
            </div>
            <div class="content">
                <div class="row g-lg-5 g-0">
                    <?php foreach($content['images']['image'] as $image) : ?>
                        <div class="col-lg-4 col-12">
                            <a href="<?= $image['link'] ?>" target="_blank" download>
                                <div class="image-wrapper position-relative pt-67 mb-3">
                                    <img src="<?= $image['image']['url'] ?>" class="position-absolute object-cover w-100 h-100 top-0 end-0 bottom-0 start-0" alt="">
                                </div>
                            </a>
                            <div class="description">
                                <p class="mb-0"><?= $image['name'] ?></p>
                            </div>
                            <div class="download-button">
                                <a href="<?= $image['link'] ?>">Download</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    
    <?php endif ?>

    <div class="container">
        <hr>
    </div>
    
    <?php if($content['videos']['video']) : ?>
    
        <div class="container py-5">
            <div class="title-wrapper text-center mb-5">
                <h2><?= $content['videos']['title'] ?></h2>
            </div>
            <div class="content">
                <div class="row g-lg-5 g-0">
                    <?php foreach($content['videos']['video'] as $video) : ?>
                        <div class="col-lg-4 col-12">
                            <a href="<?= $video['link'] ?>" target="_blank" download>
                                <div class="video-wrapper position-relative pt-67 mb-3">
                                    <img src="<?= $video['video']['url'] ?>" class="position-absolute object-cover w-100 h-100 top-0 end-0 bottom-0 start-0" alt="">
                                </div>
                            </a>
                            <div class="description">
                                <p class="mb-0"><?= $video['name'] ?></p>
                            </div>
                            <div class="download-button">
                                <a href="<?= $video['link'] ?>">Download</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    
    <?php endif ?>
</div>



    <?php 
    endwhile;
endif;
?>
</main>
<?php get_footer() ?>