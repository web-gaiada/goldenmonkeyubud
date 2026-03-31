<?php
/**
 * Template Name: Linktree Page
 *
 * @package goldenmonkey
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <style>
        body.page-template-page-linktree {
            background-color: #f8f9fa; /* Warna latar belakang abu-abu muda ala Linktree */
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 40px 0;
            font-family: inherit;
        }
        .linktree-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .linktree-logo {
            max-width: 140px;
            margin: 0 auto 20px;
            display: block;
        }
        .linktree-title {
            text-align: center;
            font-weight: bold;
            font-size: 1.5rem;
            margin-bottom: 30px;
            color: #333;
        }
        
        /* Nav Tabs Style */
        .linktree-tabs {
            background-color: #fff;
            border-radius: 50px;
            padding: 5px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            margin-bottom: 30px;
            display: flex;
            border: 1px solid #eaeaea;
        }
        .linktree-tabs .nav-item {
            flex: 1;
        }
        .linktree-tabs .nav-link {
            border-radius: 50px !important;
            padding: 12px 20px;
            color: #666;
            font-weight: 600;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
            background: transparent;
        }
        .linktree-tabs .nav-link.active {
            background-color: #b40304 !important; /* Warna merah brand */
            color: #fff !important;
            box-shadow: 0 4px 8px rgba(180, 3, 4, 0.2);
        }

        /* Buttons Style */
        .linktree-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 18px 25px;
            margin-bottom: 16px;
            background-color: #fff;
            color: #333;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            border-radius: 50px;
            border: 2px solid transparent;
            box-shadow: 0 4px 15px rgba(0,0,0,0.04);
            transition: transform 0.2s ease, box-shadow 0.2s ease, border 0.2s ease;
            position: relative;
        }
        .linktree-btn i {
            position: absolute;
            left: 25px;
            font-size: 1.4rem;
        }
        .linktree-btn.btn-wa i { color: #25D366; }
        .linktree-btn.btn-maps i { color: #EA4335; }
        .linktree-btn.btn-menu i { color: #b40304; }

        .linktree-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            border-color: #b40304;
            color: #b40304;
        }

        /* Info Text */
        .linktree-info {
            text-align: center;
            font-size: 0.85rem;
            color: #777;
            margin-top: -5px;
            margin-bottom: 20px;
            padding: 0 20px;
        }
        .linktree-footer {
            text-align: center;
            margin-top: 40px;
            font-size: 0.85rem;
            color: #aaa;
        }
    </style>
</head>
<body <?php body_class('page-template-page-linktree'); ?>>
<?php wp_body_open(); ?>

<div class="linktree-container">
    
    <!-- Logo -->
    <?php
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    if ( $custom_logo_id ) {
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        echo '<a href="'.home_url('/').'"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="linktree-logo"></a>';
    } else {
        echo '<a href="'.home_url('/').'" style="text-decoration:none;"><h1 class="linktree-title">' . get_bloginfo( 'name' ) . '</h1></a>';
    }
    ?>

    <!-- Tabs Header -->
    <ul class="nav linktree-tabs" id="linktreeTab" role="tablist">
        <li class="nav-item text-center" role="presentation">
            <button class="nav-link w-100 active text-uppercase"
                id="tab-ubud" data-bs-toggle="pill" data-bs-target="#content-ubud" type="button"
                role="tab">Ubud</button>
        </li>
        <li class="nav-item text-center" role="presentation">
            <button class="nav-link w-100 text-uppercase" id="tab-sanur"
                data-bs-toggle="pill" data-bs-target="#content-sanur" type="button" role="tab">Sanur</button>
        </li>
    </ul>

    <!-- Tabs Content -->
    <div class="tab-content" id="linktreeTabContent">
        
        <!-- ================= UBUD CONTENT ================= -->
        <div class="tab-pane fade show active" id="content-ubud" role="tabpanel">
            <?php 
            $wa_number_ubud = get_field('whatsapp_number_ubud', 'option');
            $wa_text_ubud   = get_field('whatsapp_text_ubud', 'option');
            $maps_url_ubud  = get_field('google_maps_url_ubud', 'option');
            $address_ubud   = strip_tags(get_field('address_ubud', 'option'));
            $wa_link_ubud   = 'https://api.whatsapp.com/send/?phone=' . esc_attr($wa_number_ubud) . '&text=' . urlencode($wa_text_ubud);
            ?>
            
            <!-- WhatsApp -->
            <a href="<?php echo esc_url($wa_link_ubud); ?>" target="_blank" class="linktree-btn btn-wa">
                <i class="fab fa-whatsapp"></i> WhatsApp Ubud
            </a>
            
            <!-- Google Maps -->
            <a href="<?php echo esc_url($maps_url_ubud); ?>" target="_blank" class="linktree-btn btn-maps">
                <i class="fas fa-map-marker-alt"></i> Google Maps Ubud
            </a>
            <?php if ($address_ubud) : ?>
                <div class="linktree-info"><?php echo $address_ubud; ?></div>
            <?php endif; ?>
            
            <!-- Menu Makanan -->
            <a href="<?php echo home_url('/menu'); ?>" class="linktree-btn btn-menu">
                <i class="fas fa-utensils"></i> Menu Makanan
            </a>
        </div>

        <!-- ================= SANUR CONTENT ================= -->
        <div class="tab-pane fade" id="content-sanur" role="tabpanel">
            <?php 
            $wa_number_sanur = get_field('whatsapp_number_sanur', 'option');
            $wa_text_sanur   = get_field('whatsapp_text_sanur', 'option');
            $maps_url_sanur  = get_field('google_maps_url_sanur', 'option');
            $address_sanur   = strip_tags(get_field('address_sanur', 'option'));
            $wa_link_sanur   = 'https://api.whatsapp.com/send/?phone=' . esc_attr($wa_number_sanur) . '&text=' . urlencode($wa_text_sanur);
            ?>
            
            <!-- WhatsApp -->
            <a href="<?php echo esc_url($wa_link_sanur); ?>" target="_blank" class="linktree-btn btn-wa">
                <i class="fab fa-whatsapp"></i> WhatsApp Sanur
            </a>
            
            <!-- Google Maps -->
            <a href="<?php echo esc_url($maps_url_sanur); ?>" target="_blank" class="linktree-btn btn-maps">
                <i class="fas fa-map-marker-alt"></i> Google Maps Sanur
            </a>
            <?php if ($address_sanur) : ?>
                <div class="linktree-info"><?php echo $address_sanur; ?></div>
            <?php endif; ?>
            
            <!-- Menu Makanan -->
            <a href="<?php echo home_url('/menu'); ?>" class="linktree-btn btn-menu">
                <i class="fas fa-utensils"></i> Menu Makanan
            </a>
        </div>

    </div>

    <div class="linktree-footer">
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
    </div>

</div>

<!-- Memuat scripts dasar WP seperti Bootstrap JS jika ada -->
<?php wp_footer(); ?>
</body>
</html>
