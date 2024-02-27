<?php

    $football_sports_club_theme_css= "";

    /*--------------------------- Scroll To Top Positions -------------------*/

    $football_sports_club_scroll_position = get_theme_mod( 'football_sports_club_scroll_top_position','Right');
    if($football_sports_club_scroll_position == 'Right'){
        $football_sports_club_theme_css .='#button{';
            $football_sports_club_theme_css .='right: 20px;';
        $football_sports_club_theme_css .='}';
    }else if($football_sports_club_scroll_position == 'Left'){
        $football_sports_club_theme_css .='#button{';
            $football_sports_club_theme_css .='left: 20px;';
        $football_sports_club_theme_css .='}';
    }else if($football_sports_club_scroll_position == 'Center'){
        $football_sports_club_theme_css .='#button{';
            $football_sports_club_theme_css .='right: 50%;left: 50%;';
        $football_sports_club_theme_css .='}';
    }

    /*--------------------------- Slider Image Opacity -------------------*/

    $football_sports_club_slider_img_opacity = get_theme_mod( 'football_sports_club_slider_opacity_color','');
    if($football_sports_club_slider_img_opacity == '0'){
        $football_sports_club_theme_css .='.slider-box img{';
            $football_sports_club_theme_css .='opacity:0';
        $football_sports_club_theme_css .='}';
        }else if($football_sports_club_slider_img_opacity == '0.1'){
        $football_sports_club_theme_css .='.slider-box img{';
            $football_sports_club_theme_css .='opacity:0.1';
        $football_sports_club_theme_css .='}';
        }else if($football_sports_club_slider_img_opacity == '0.2'){
        $football_sports_club_theme_css .='.slider-box img{';
            $football_sports_club_theme_css .='opacity:0.2';
        $football_sports_club_theme_css .='}';
        }else if($football_sports_club_slider_img_opacity == '0.3'){
        $football_sports_club_theme_css .='.slider-box img{';
            $football_sports_club_theme_css .='opacity:0.3';
        $football_sports_club_theme_css .='}';
        }else if($football_sports_club_slider_img_opacity == '0.4'){
        $football_sports_club_theme_css .='.slider-box img{';
            $football_sports_club_theme_css .='opacity:0.4';
        $football_sports_club_theme_css .='}';
        }else if($football_sports_club_slider_img_opacity == '0.5'){
        $football_sports_club_theme_css .='.slider-box img{';
            $football_sports_club_theme_css .='opacity:0.5';
        $football_sports_club_theme_css .='}';
        }else if($football_sports_club_slider_img_opacity == '0.6'){
        $football_sports_club_theme_css .='.slider-box img{';
            $football_sports_club_theme_css .='opacity:0.6';
        $football_sports_club_theme_css .='}';
        }else if($football_sports_club_slider_img_opacity == '0.7'){
        $football_sports_club_theme_css .='.slider-box img{';
            $football_sports_club_theme_css .='opacity:0.7';
        $football_sports_club_theme_css .='}';
        }else if($football_sports_club_slider_img_opacity == '0.8'){
        $football_sports_club_theme_css .='.slider-box img{';
            $football_sports_club_theme_css .='opacity:0.8';
        $football_sports_club_theme_css .='}';
        }else if($football_sports_club_slider_img_opacity == '0.9'){
        $football_sports_club_theme_css .='.slider-box img{';
            $football_sports_club_theme_css .='opacity:0.9';
        $football_sports_club_theme_css .='}';
        }

    /*--------------------------- Footer background image -------------------*/

    $football_sports_club_footer_bg_image = get_theme_mod('football_sports_club_footer_bg_image');
    if($football_sports_club_footer_bg_image != false){
        $football_sports_club_theme_css .='#colophon{';
            $football_sports_club_theme_css .='background: url('.esc_attr($football_sports_club_footer_bg_image).')!important;';
        $football_sports_club_theme_css .='}';
    }

    /*---------------------------Slider Height ------------*/

    $football_sports_club_slider_img_height = get_theme_mod('football_sports_club_slider_img_height');
    if($football_sports_club_slider_img_height != false){
        $football_sports_club_theme_css .='#top-slider .owl-carousel .owl-item img{';
            $football_sports_club_theme_css .='height: '.esc_attr($football_sports_club_slider_img_height).';';
        $football_sports_club_theme_css .='}';
    }

    /*--------------------------- Woocommerce Product Sale Positions -------------------*/

    $football_sports_club_product_sale = get_theme_mod( 'football_sports_club_woocommerce_product_sale','Right');
    if($football_sports_club_product_sale == 'Right'){
        $football_sports_club_theme_css .='.woocommerce ul.products li.product .onsale{';
            $football_sports_club_theme_css .='left: auto; right: 15px;';
        $football_sports_club_theme_css .='}';
    }else if($football_sports_club_product_sale == 'Left'){
        $football_sports_club_theme_css .='.woocommerce ul.products li.product .onsale{';
            $football_sports_club_theme_css .='left: 15px; right: auto;';
        $football_sports_club_theme_css .='}';
    }else if($football_sports_club_product_sale == 'Center'){
        $football_sports_club_theme_css .='.woocommerce ul.products li.product .onsale{';
            $football_sports_club_theme_css .='right: 50%;left: 50%;';
        $football_sports_club_theme_css .='}';
    }

    /*--------------------------- Footer background image -------------------*/

    $football_sports_club_footer_bg_image = get_theme_mod('football_sports_club_footer_bg_image');
    if($football_sports_club_footer_bg_image != false){
        $football_sports_club_theme_css .='#colophon{';
            $football_sports_club_theme_css .='background: url('.esc_attr($football_sports_club_footer_bg_image).')!important;';
        $football_sports_club_theme_css .='}';
    }