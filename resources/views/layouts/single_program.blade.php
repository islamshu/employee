<!DOCTYPE html>


<head>
    <meta charset="UTF-8">

    <style>
   

        .vc_custom_1601577362547 {
            margin-right: 100px !important;
            margin-left: 100px !important;
            background-image: url({{ asset('wp_content/uploads/2020/09/bk2.png') }}) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1601379468885 {
            margin-bottom: 0px !important;
        }

        .vc_custom_1601241618181 {
            margin-bottom: 0px !important;
            padding-bottom: 280px !important;
            background: #ffffff url({{ asset('wp_content/uploads/2020/04/13.png') }}) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: contain !important;
        }

        .vc_custom_1601651531510 {
            margin-top: -140px !important;
            background-color: #007396 !important;
        }

        .vc_custom_1601241757843 {
            margin-top: -128px !important;
            margin-bottom: -128px !important;
            background-color: #df7242 !important;
        }

        .vc_custom_1601558781755 {
            background-color: #00c387 !important;
        }

        .vc_custom_1601557382229 {
            margin-bottom: 0px !important;
            border-top-width: -30px !important;
            padding-bottom: 0px !important;
        }

        .vc_custom_1601238104696 {
            background: red;
            margin-bottom: -20px !important;
        }

        .vc_custom_1586345650863 {
            padding-top: 0px !important;
        }

        .vc_custom_1601374775066 {
            padding-top: 0px !important;
            padding-left: 74px !important;
            background-color: #69489D !important;
        }

        .vc_custom_1601559313917 {
            background-image: url({{ asset('uploads/'.$pro->image) }}) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1601374889804 {
            padding-right: 50px !important;
            padding-left: 21px !important;
        }

        .vc_custom_1601375026412 {
            padding-right: 21px !important;
            padding-left: 21px !important;
        }

        .vc_custom_1584448622072 {
            margin-bottom: 0px !important;
        }

        .vc_custom_1601374987064 {
            padding-top: 60px !important;
            padding-bottom: 60px !important;
        }

        .vc_custom_1586873359510 {
            padding-top: 0px !important;
        }

        .vc_custom_1601652476530 {
            padding-top: 150px !important;
            padding-bottom: -60px !important;
        }

        .tgpli-background-inited {
            background-image: none !important;
        }

        .partner_class {
            height: 850px;
            overflow-y: scroll;
        }

        img[data-tgpli-image-inited] {
            display: none !important;
            visibility: hidden !important;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .gallery {
            -webkit-column-count: 3;
            -moz-column-count: 3;
            column-count: 3;
            -webkit-column-width: 33%;
            -moz-column-width: 33%;
            column-width: 33%;
        }

        .gallery .pics {
            -webkit-transition: all 350ms ease;
            transition: all 350ms ease;
        }

        .gallery .animation {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
        }

        @media (max-width: 450px) {
            .gallery {
                -webkit-column-count: 1;
                -moz-column-count: 1;
                column-count: 1;
                -webkit-column-width: 100%;
                -moz-column-width: 100%;
                column-width: 100%;
            }
        }

        @media (max-width: 400px) {
            .btn.filter {
                padding-left: 1.1rem;
                padding-right: 1.1rem;
            }
        }
    </style>

    <script type="text/javascript" async src="{{ asset('wp_content/themes/thegem/js/thegem-pagespeed-lazy-items.js') }}">
    </script>
    @if (get_lang() == 'ar')
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css"
            integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
    @else
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    @endif
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>{{ get_general_value('title') }}</title>
    <meta name="description" content="{{ get_general_value('title') }}" />
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>

    <link rel='stylesheet' id='layerslider-css'
        href='{{ asset('wp_content/plugins/LayerSlider/assets/static/layerslider/css/layersliderfa4a.css?ver=6.11.6') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-preloader-css'
        href='{{ asset('wp_content/themes/thegem/css/thegem-preloader647e.css?ver=5.5.9') }}' type='text/css'
        media='all' />
    <style id='thegem-preloader-inline-css' type='text/css'>
        body:not(.compose-mode) .gem-icon-style-gradient span,
        body:not(.compose-mode) .gem-icon .gem-icon-half-1,
        body:not(.compose-mode) .gem-icon .gem-icon-half-2 {
            opacity: 0 !important;
        }
    </style>




    @if (get_lang() == 'ar')
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css"
            integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">

        <link rel='stylesheet' id='thegem-reset-css'
            href='{{ asset('wp_content/themes/thegem/css/thegem-reset647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='thegem-grid-css'
            href='{{ asset('wp_content/themes/thegem/css/thegem-grid647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='thegem-style-css'
            href='{{ asset('wp_content/themes/thegem/style647e.css?ver=5.5.9') }}' type='text/css' media='all' />
        <link rel='stylesheet' id='thegem-child-style-css'
            href='{{ asset('wp_content/themes/thegem-child/style647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='thegem-header-css'
            href='{{ asset('wp_content/themes/thegem/css/thegem-header647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='thegem-widgets-css'
            href='{{ asset('wp_content/themes/thegem/css/thegem-widgets647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='thegem-new-css-css'
            href='{{ asset('wp_content/themes/thegem/css/thegem-new-css647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='perevazka-css-css-css'
            href='{{ asset('wp_content/themes/thegem/css/thegem-perevazka-css647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='thegem-google-fonts-css'
            href='http://fonts.googleapis.com/css?family=Tajawal%3A700%2Cregular%2C300%7CMontserrat%3A700%2Cregular%7CSource+Sans+Pro%3Aregular%2C300&amp;subset=arabic%2Clatin%2Ccyrillic%2Ccyrillic-ext%2Clatin-ext%2Cvietnamese%2Cgreek%2Cgreek-ext&amp;ver=5.5.9'
            type='text/css' media='all' />
        <link rel='stylesheet' id='thegem-custom-css'
            href='{{ asset('wp_content/themes/thegem-child/css/custom-VDyJnWIQ647e.css?ver=5.5.9') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='thegem-rtl-css'
            href='{{ asset('wp_content/themes/thegem/css/rtl647e.css?ver=5.5.9') }}' type='text/css' media='all' />
        <link rel='stylesheet' id='js_composer_front-css'
            href='{{ asset('wp_content/plugins/js_composer/assets/css/js_composer.min31dc.css?ver=6.6.0') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='thegem-additional-blog-1-css'
            href='{{ asset('wp_content/themes/thegem/css/thegem-additional-blog-1647e.css?ver=5.5.9') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='jquery-fancybox-css'
            href='{{ asset('wp_content/themes/thegem/js/fancyBox/jquery.fancybox.min647e.css?ver=5.5.9') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='thegem-vc_elements-css'
            href='{{ asset('wp_content/themes/thegem/css/thegem-vc_elements647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='wp-block-library-rtl-css'
            href='{{ asset('wp-includes/css/dist/block-library/style-rtl.min647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='wp-components-rtl-css'
            href='{{ asset('wp-includes/css/dist/components/style-rtl.min647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='wp-editor-font-css'
            href='https://fonts.googleapis.com/css?family=Noto+Serif%3A400%2C400i%2C700%2C700i&amp;ver=5.5.9'
            type='text/css' media='all' />
        <link rel='stylesheet' id='wp-block-editor-rtl-css'
            href='{{ asset('wp-includes/css/dist/block-editor/style-rtl.min647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='wp-nux-rtl-css'
            href='{{ asset('wp-includes/css/dist/nux/style-rtl.min647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='wp-editor-rtl-css'
            href='{{ asset('wp-includes/css/dist/editor/style-rtl.min647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='formbuilder-123-block-style-css-css'
            href='{{ asset('wp_content/plugins/123contactform-for-wordpress/admin/gutenberg/blocks.style.build647e.css?ver=5.5.9') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='wpml-menu-item-0-css'
            href='{{ asset('wp_content/plugins/sitepress-multilingual-cms/templates/language-switchers/menu-item/style68b3.css?ver=1') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='thegem_js_composer_front-css'
            href='{{ asset('wp_content/themes/thegem/css/thegem-js_composer_columns647e.css?ver=5.5.9') }}'
            type='text/css' media='all' />
    @endif
    @if (get_lang() == 'en')
        <link rel='stylesheet' id='thegem-reset-css'
            href='{{ asset('wp_content_english/themes/thegem/css/thegem-reset647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='thegem-grid-css'
            href='{{ asset('wp_content_english/themes/thegem/css/thegem-grid647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='thegem-style-css'
            href='{{ asset('wp_content_english/themes/thegem/style647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='thegem-child-style-css'
            href='{{ asset('wp_content_english/themes/thegem-child/style647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='thegem-header-css'
            href='{{ asset('wp_content_english/themes/thegem/css/thegem-header647e.css?ver=5.5.9') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='thegem-widgets-css'
            href='{{ asset('wp_content_english/themes/thegem/css/thegem-widgets647e.css?ver=5.5.9') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='thegem-new-css-css'
            href='{{ asset('wp_content_english/themes/thegem/css/thegem-new-css647e.css?ver=5.5.9') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='perevazka-css-css-css'
            href='{{ asset('wp_content_english/themes/thegem/css/thegem-perevazka-css647e.css?ver=5.5.9') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='thegem-google-fonts-css'
            href='http://fonts.googleapis.com/css?family=Tajawal%3A700%2Cregular%2C300%7CMontserrat%3A700%2Cregular%7CSource+Sans+Pro%3Aregular%2C300&amp;subset=arabic%2Clatin%2Ccyrillic%2Ccyrillic-ext%2Clatin-ext%2Cvietnamese%2Cgreek%2Cgreek-ext&amp;ver=5.5.9'
            type='text/css' media='all' />
        <link rel='stylesheet' id='thegem-custom-css'
            href='{{ asset('wp_content_english/themes/thegem-child/css/custom-VDyJnWIQ647e.css?ver=5.5.9') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='js_composer_front-css'
            href='{{ asset('wp_content_english/plugins/js_composer/assets/css/js_composer.min31dc.css?ver=6.6.0') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='thegem-additional-blog-1-css'
            href='{{ asset('wp_content_english/themes/thegem/css/thegem-additional-blog-1647e.css?ver=5.5.9') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='jquery-fancybox-css'
            href='{{ asset('wp_content_english/themes/thegem/js/fancyBox/jquery.fancybox.min647e.css?ver=5.5.9') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='thegem-vc_elements-css'
            href='{{ asset('wp_content_english/themes/thegem/css/thegem-vc_elements647e.css?ver=5.5.9') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='wp-block-library-css'
            href='{{ asset('includes_english/css/dist/block-library/style.min647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='wp-components-css'
            href='{{ asset('includes_english/css/dist/components/style.min647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='wp-editor-font-css'
            href='https://fonts.googleapis.com/css?family=Noto+Serif%3A400%2C400i%2C700%2C700i&amp;ver=5.5.9'
            type='text/css' media='all' />
        <link rel='stylesheet' id='wp-block-editor-css'
            href='{{ asset('includes_english/css/dist/block-editor/style.min647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='wp-nux-css'
            href='{{ asset('includes_english/css/dist/nux/style.min647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='wp-editor-css'
            href='{{ asset('includes_english/css/dist/editor/style.min647e.css?ver=5.5.9') }}' type='text/css'
            media='all' />
        <link rel='stylesheet' id='formbuilder-123-block-style-css-css'
            href='{{ asset('wp_content_english/plugins/123contactform-for-wordpress/admin/gutenberg/blocks.style.build647e.css?ver=5.5.9') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='wpml-menu-item-0-css'
            href='{{ asset('wp_content_english/plugins/sitepress-multilingual-cms/templates/language-switchers/menu-item/style68b3.css?ver=1') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='vc_animate-css-css'
            href='{{ asset('wp_content_english/plugins/js_composer/assets/lib/bower/animate-css/animate.min.css?ver=6.6.0') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='thegem-lazy-loading-animations-css'
            href='{{ asset('wp_content_english/themes/thegem/css/thegem-lazy-loading-animations.css?ver=5.5.9') }}'
            type='text/css' media='all' />

        <link rel='stylesheet' id='odometr-css'
            href='{{ asset('wp_content_english/themes/thegem/css/odometer-theme-default.css?ver=5.5.9') }}'
            type='text/css' media='all' />
        <link rel='stylesheet' id='thegem_js_composer_front-css'
            href='{{ asset('wp_content_english/themes/thegem/css/thegem-js_composer_columns647e.css?ver=5.5.9') }}'
            type='text/css' media='all' />
    @endif
    <script type='text/javascript' id='thegem-settings-init-js-extra'>
        /* <![CDATA[ */
        var gemSettings = {
            "isTouch": "",
            "forcedLasyDisabled": "",
            "tabletPortrait": "1",
            "tabletLandscape": "",
            "topAreaMobileDisable": "",
            "parallaxDisabled": "",
            "fillTopArea": "",
            "themePath": "https:\/\/walaplus.com\/wp_content\/themes\/thegem",
            "rootUrl": "https:\/\/walaplus.com",
            "mobileEffectsEnabled": "",
            "isRTL": "1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('wp_content/themes/thegem/js/thegem-settings-init647e.js?ver=5.5.9') }}'
        id='thegem-settings-init-js'></script>
    <script type='text/javascript' src='{{ asset('wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp') }}'
        id='jquery-core-js'></script>
    <script type='text/javascript' id='layerslider-utils-js-extra'>
        /* <![CDATA[ */
        var LS_Meta = {
            "v": "6.11.6",
            "fixGSAP": "1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='{{ asset('wp_content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.utilsfa4a.js?ver=6.11.6') }}'
        id='layerslider-utils-js'></script>
    <script type='text/javascript'
        src='{{ asset('wp_content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.kreaturamedia.jqueryfa4a.js?ver=6.11.6') }}'
        id='layerslider-js'></script>
    <script type='text/javascript'
        src='{{ asset('wp_content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.transitionsfa4a.js?ver=6.11.6') }}'
        id='layerslider-transitions-js'></script>
    <script type='text/javascript'
        src='{{ asset('wp_content/themes/thegem/js/thegem-fullwidth-loader647e.js?ver=5.5.9') }}'
        id='thegem-fullwidth-optimizer-js'></script>

    <meta name="generator"
        content="Powered by LayerSlider 6.11.6 - Multi-Purpose, Responsive, Parallax, Mobile-Friendly Slider Plugin for WordPress." />
    <!-- LayerSlider updates and docs at: https://layerslider.kreaturamedia.com -->
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/1016.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{ asset('wp-includes/wlwmanifest.xml') }}" />
    <link rel='shortlink' href='/' />
    <link rel="alternate" type="application/json+oembed"
        href="wp-json/oembed/1.0/embed78b2.json?url=https%3A%2F%2Fwalaplus.com%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="wp-json/oembed/1.0/embedf6e2?url=https%3A%2F%2Fwalaplus.com%2F&amp;format=xml" />
    <meta name="generator" content="WPML ver:4.2.5 stt:5,1;" />
    <!-- Google Tag Manager -->


    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
    <link rel="icon" href="{{ asset('uploads/' . get_general_value('icon')) }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('uploads/' . get_general_value('icon')) }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('uploads/' . get_general_value('icon')) }}" />
    <meta name="msapplication-TileImage" content="{{ asset('uploads/' . get_general_value('icon')) }}" />
    <script>
        if (document.querySelector('[data-type="vc_custom-css"]')) {
            document.head.appendChild(document.querySelector('[data-type="vc_custom-css"]'));
        }
    </script>
    <style type="text/css" id="wp-custom-css">
        .vc_custom_1600161344757 {
            margin-left: auto !important;
            margin-right: auto !important;
            width: 60% !important;
        }

        .vc_custom_1586873359510 .img-responsive {
            display: none !important;
        }

        .vc_custom_1601299991278 .gem-textbox-content * {
            position: inherit;
        }
    </style>
    <style type="text/css" data-type="vc_custom-css">
        .hover-button {
            opacity: 0;
            transition: all 0.3s ease-in 0s;
        }

        .button-hover-block:hover .hover-button {
            opacity: 1;
        }

        body .button-hover-block {
            opacity: 1;
            background-position: top center !important;
        }

        .button-hover-block:before {
            position: absolute;
            width: 100%;
            height: 100%;
            transition: all 0.3s ease-in 0.1s;
        }

        .button-hover-block:hover:before {
            background: rgba(29, 36, 41, 0.5);
        }

        #playerBlock1 {
            display: block;
            width: 960px;
            height: 540px;
            max-width: 100%;
            border-radius: 10px;
            margin: 0 auto;
        }

        #playerBlock2 {
            display: none;
        }

        .fancybox-slide>* {
            width: 1280px !important;
            height: 720px !important;
            max-width: calc(100% - 100px) !important;
            max-height: calc(100% - 88px) !important;
            padding: 0 !important;
            background: transparent !important;
        }

        .fancybox-slide--iframe iframe,
        .fancybox-iframe {
            background: transparent !important;
        }

        .custom-polygon-1 {
            -webkit-clip-path: polygon(0 0, 100% 5%, 100% 100%, 0 95%);
            clip-path: polygon(0 0, 100% 5%, 100% 100%, 0 95%);
        }

        .custom-polygon-2 .fullwidth-block {
            -webkit-clip-path: polygon(0 10%, 100% 0, 100% 100%, 0 100%);
            clip-path: polygon(0 10%, 100% 0, 100% 100%, 0 100%);
        }

        .custom-polygon-3 {
            -webkit-clip-path: polygon(0 0, 100% 10%, 100% 90%, 0 100%);
            clip-path: polygon(0 0, 100% 10%, 100% 90%, 0 100%);
        }

        .custom-polygon-4 {
            -webkit-clip-path: polygon(0 10%, 100% 0%, 100% 100%, 0 90%);
            clip-path: polygon(0 10%, 100% 0%, 100% 100%, 0 90%);
            z-index: 555555;
            overflow: visible !important;
        }

        @media(max-width:767px) {
            #wistia_32.thumb_container a {
                right: 120px !important;
            }

            .custom-polygon-4 .title-xlarge {
                font-size: 50px !important;
            }

            .custom-polygon-4 h1 {
                font-size: 23px !important;
            }
        }

        .fancybox-slide--video .fancybox-content,
        .fancybox-slide--video iframe {
            background: transparent !important;
        }

        .thegem-blocks-header span {
            font-family: Montserrat;
            font-weight: bold;
            text-transform: uppercase;
            color: #1104ce;
            position: relative;
        }

        .custom-block,
        .custom-border {
            position: relative;
            width: 100%;
        }

        .custom-block:before,
        .custom-block:after,
        .custom-border:before,
        .custom-border:after {
            position: absolute;
            width: 82px;
            height: 82px;
            content: '';
            border-color: #1104ce;
            border-style: solid;
        }

        .custom-block:before {
            left: 0px;
            top: 0px;
            border-width: 28px 0 0 28px;
        }

        .custom-block:after {
            right: 0px;
            top: 0px;
            border-width: 28px 28px 0 0;
        }

        .custom-border:before {
            right: 0px;
            bottom: 0px;
            border-width: 0 28px 28px 0;
        }

        .custom-border:after {
            left: 0px;
            bottom: 0px;
            border-width: 0 0 28px 28px;
        }

        .inline-links .gem-button {
            font-size: 16px;
            min-width: 250px;
        }

        .dropcap-landing span.gem-dropcap-letter {
            font-size: 245px !important;
            width: 167px !important;
            height: 230px !important;
            line-height: 280px !important;
        }

        .yellow-square h2 {
            position: relative;
            z-index: 1;
        }

        .yellow-square h2:before {
            content: '';
            width: 65px;
            height: 65px;
            background-color: #ffe138;
            position: absolute;
            left: -18px;
            top: -5px;
            z-index: -1;
            border-radius: 5px;
        }

        .custom-list-style-begin .gem-list>ul>li:before {
            color: #01ffed;
        }

        .custom-list-style-prof .gem-list>ul>li:before {
            color: #ffe138;
        }

        body .custom-list-style {
            background-position: center 20% !important;
        }

        @media(max-width:1280px) {
            .fancybox-slide>* {
                width: 960px !important;
                height: 540px !important;
            }
        }

        @media(max-width:1212px) {
            .dropcap-landing h3 {
                font-size: 40px !important;
                display: block !important;
            }
        }

        @media(max-width:1199px) {
            span.custom-border-text-xl {
                font-size: 160px !important;
            }

            .yellow-square h2:before {
                top: -10px !important;
            }
        }

        @media(max-width:960px) {

            #playerBlock1,
            .fancybox-slide>* {
                width: 640px !important;
                height: 360px !important;
            }
        }

        @media(max-width:900px) {
            span.custom-border-text-xl {
                font-size: 135px !important;
            }

            body .margin-mobile {
                margin: 0 -21px !important;
            }

            .margin-tablet-reset .vc_column-inner {
                margin-top: 0px !important;
            }
        }

        @media(max-width:768px) {
            .inline-links .gem-button-container {
                float: none !important;
                text-align: center;
            }

            .inline-links .gem-button-container a {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }
        }

        @media(max-width:699px) {
            span.custom-border-text-xl {
                font-size: 100px !important;
            }

            .why-block h1.title-xlarge {
                font-size: 50px !important;
            }

            .why-block .why-small {
                margin-left: 0px !important;
            }

            .thegem-mobile {
                font-size: 55px !important;
                line-height: 40px !important;
            }

            .include-block span {
                font-size: 95px !important;
            }

            .include-block b {
                font-size: 10px !important;
                top: -45px !important;
                right: -30px !important;
            }
        }

        @media(max-width:640px) {

            #playerBlock1,
            .fancybox-slide>* {
                width: 360px !important;
                height: 203px !important;
            }
        }

        @media(max-width:550px) {
            span.custom-border-text {
                font-size: 32px !important;
                line-height: 24px !important;
                padding-top: 0 !important;
            }

            span.custom-border-text-xl {
                font-size: 70px !important;
                line-height: 150px !important;
            }
        }

        @media(max-width:414px) {
            span.custom-border-text {
                font-size: 28px !important;
                line-height: 28px !important;
                padding: 0 !important;
                text-align: center;
                display: block;
                width: 100%;
            }

            span.custom-border-text-xl {
                font-size: 50px !important;
            }
        }

        @media(max-width:340px) {
            span.custom-border-text {
                font-size: 21px !important;
            }
        }

        #site-header.fixed.shrink .site-title {
            padding-top: 0px !important;
        }

        @media (max-width: 1199px) {
            .wpb_row {
                margin-top: 0 !important;
            }

            .wpb_row>* {
                margin-top: 0 !important;
            }
        }
    </style>



</head>


<body class="rtl home page-template-default page page-id-1016 wpb-js-composer js-comp-ver-6.6.0 vc_responsive">


    <div id="page-preloader">
        <div class="page-preloader-spin"></div>
    </div>


    <div id="page" class="layout-fullwidth header-style-1">

        <a href="#page" class="scroll-top-button"></a>


        <div id="top-area" class="top-area top-area-style-default top-area-alignment-left">
            <div class="container">
                <div class="top-area-items inline-inside">
                    <div class="top-area-block top-area-socials socials-colored-hover">
                        <div class="socials inline-inside">
                            @if (get_general_value('linkedin') != null)
                                <a class="socials-item" href="{{ get_general_value('linkedin') }}" target="_blank"
                                    title="LinkedIn"><i class="socials-item-icon linkedin "></i></a>
                            @endif

                            @if (get_general_value('twitter') != null)
                                <a class="socials-item" href="{{ get_general_value('twitter') }}s" target="_blank"
                                    title="Twitter"><i class="socials-item-icon twitter "></i></a>
                            @endif
                            @if (get_general_value('instagram') != null)
                                <a class="socials-item" href="{{ get_general_value('instagram') }}" target="_blank"
                                    title="Instagram"><i class="socials-item-icon instagram "></i></a>
                            @endif
                            @if (get_general_value('facebook') != null)
                                <a class="socials-item" href="{{ get_general_value('facebook') }}" target="_blank"
                                    title="facebook"><i class="socials-item-icon facebook "></i></a>
                            @endif

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="site-header-wrapper" class="site-header-wrapper-transparent ">



            <header id="site-header" class="site-header mobile-menu-layout-default" role="banner">

                <div class="transparent-header-background" style="background-color: rgba(255, 255, 255, 0);">
                    <div class="container">
                        <div class="header-main logo-position-menu_center header-layout-default header-style-1">
                            <div class="site-title">
                                <div class="site-logo" style="width:180px;">
                                    <a href="/" rel="home">
                                        <span class="logo"><img
                                                data-tgpli-src="{{ asset('uploads/' . get_general_value('header_logo')) }}"
                                                data-tgpli-srcset="{{ asset('uploads/' . get_general_value('header_logo')) }} 1x,https://walaplus.com/wp_content/uploads/thegem-logos/logo_8c4676c76b0e25450e8e77c212e4cbee_2x.png 2x,https://walaplus.com/wp_content/uploads/thegem-logos/logo_8c4676c76b0e25450e8e77c212e4cbee_3x.png 3x"
                                                alt="ولاء بلس" style="width:180px;" class="default"
                                                data-tgpli-inited data-tgpli-image-inited id="tgpli-62986ef2444d3" />
                                            <img src="wp_content/uploads/thegem-logos/logo_8c4676c76b0e25450e8e77c212e4cbee_1x.png"
                                                srcset="{{ asset('uploads/' . get_general_value('header_logo')) }} 1x,https://walaplus.com/wp_content/uploads/thegem-logos/logo_8c4676c76b0e25450e8e77c212e4cbee_2x.png 2x,https://walaplus.com/wp_content/uploads/thegem-logos/logo_8c4676c76b0e25450e8e77c212e4cbee_3x.png 3x"
                                                alt="ولاء بلس" style="width:180px;"
                                                class="default" /></noscript><img
                                                data-tgpli-src="{{ asset('uploads/' . get_general_value('header_logo')) }}"
                                                data-tgpli-srcset="{{ asset('uploads/' . get_general_value('header_logo')) }} 1x,https://walaplus.com/wp_content/uploads/thegem-logos/logo_8c4676c76b0e25450e8e77c212e4cbee_2x.png 2x,https://walaplus.com/wp_content/uploads/thegem-logos/logo_8c4676c76b0e25450e8e77c212e4cbee_3x.png 3x"
                                                alt="ولاء بلس" style="width:100px;" class="small"
                                                data-tgpli-inited data-tgpli-image-inited
                                                id="tgpli-62986ef2444ea" /></span>
                                    </a>
                                </div>
                            </div>
                            <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                                <button class="menu-toggle dl-trigger">Primary Menu<span
                                        class="menu-line-1"></span><span class="menu-line-2"></span><span
                                        class="menu-line-3"></span></button>
                                <ul id="primary-menu" class="nav-menu styled no-responsive dl-menu">


                                    <li id="menu-item-1451"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-1451 megamenu-first-element">
                                        <a href="{{ route('home') }}/#vc_row-62986ef229645">{{ __('Home') }}
                                        </a><span class="menu-item-parent-toggle"></span>

                                    </li>
                                    <li id="menu-item-1451"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-1451 megamenu-first-element">
                                        <a
                                            href="{{ route('home') }}/#vc_row-62986ef22f13e">{{ __('Partners') }}</a><span
                                            class="menu-item-parent-toggle"></span>

                                    </li>
                                    <li id="menu-item-1451"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-1451 megamenu-first-element">
                                        <a href="{{ route('home') }}/#programs">{{ __('Our programs') }}</a><span
                                            class="menu-item-parent-toggle"></span>

                                    </li>
                                    <li id="menu-item-1451"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-1451 megamenu-first-element">
                                        <a href="/contact_us">{{ __('contact us') }}</a><span
                                            class="menu-item-parent-toggle"></span>

                                    </li>


                                    <li class="menu-item-logo">
                                        <div class="site-logo" style="width:180px;">
                                            <a href="/" rel="home">
                                                <img class="default" width="180" height="80"
                                                    src="{{ asset('uploads/' . get_general_value('header_logo')) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </li>
                                    @if (get_lang() == 'ar')
                                        <li id="menu-item-wpml-ls-50-ar"
                                            class="menu-item wpml-ls-slot-50 wpml-ls-item wpml-ls-item-ar wpml-ls-current-language wpml-ls-menu-item wpml-ls-first-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-has-children menu-item-wpml-ls-50-ar megamenu-first-element">
                                            <a title="العربية" href="/"><span class="wpml-ls-display">العربية</span></a>
                                            <ul class="sub-menu styled dl-submenu">
                                                <li id="menu-item-wpml-ls-50-en"
                                                    class="menu-item wpml-ls-slot-50 wpml-ls-item wpml-ls-item-en wpml-ls-menu-item wpml-ls-last-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-50-en megamenu-first-element">
                                                    <a title="الإنجليزية" href="lang/en"><span
                                                            class="wpml-ls-display">الإنجليزية</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    @else
                                        <li id="menu-item-wpml-ls-50-ar"
                                            class="menu-item wpml-ls-slot-50 wpml-ls-item wpml-ls-item-ar wpml-ls-current-language wpml-ls-menu-item wpml-ls-first-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-has-children menu-item-wpml-ls-50-ar megamenu-first-element">
                                            <a title="English" href="/"><span class="wpml-ls-display">English</span></a>
                                            <ul class="sub-menu styled dl-submenu">
                                                <li id="menu-item-wpml-ls-50-en"
                                                    class="menu-item wpml-ls-slot-50 wpml-ls-item wpml-ls-item-en wpml-ls-menu-item wpml-ls-last-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-50-en megamenu-first-element">
                                                    <a title="ARABIC" href="lang/ar"><span
                                                            class="wpml-ls-display">ARABIC</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- #site-header -->
        </div>
        <!-- #site-header-wrapper -->


        <div id="main" class="site-main">
            <div id="main-content" class="main-content">


                <div class="block-content no-bottom-margin no-top-margin">
                    <div class="container">
                        <div class="panel row">

                            <div class="panel-center col-xs-12">
                                <article id="post-2139" class="post-2139 page type-page status-publish">

                                    <div class="entry-content post-content">


                                        <div class="vc_row-full-width-before"></div>
                                        <div id="vc_row-62a8ac00338c9" data-vc-full-width="true"
                                            data-vc-full-width-init="false"
                                            class="vc_row wpb_row vc_row-fluid margin-mobile vc_custom_1601577362547 vc_row-has-fill">
                                            <script type="text/javascript">
                                                if (typeof(gem_fix_fullwidth_position) == "function") {
                                                    gem_fix_fullwidth_position(document.getElementById("vc_row-62a8ac00338c9"));
                                                }
                                            </script>
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner vc_custom_1586345650863">
                                                    <div class="wpb_wrapper">
                                                        <div id="fullwidth-block-62a8ac0033efe"
                                                            class="fullwidth-block clearfix" style="">
                                                            <script type="text/javascript">
                                                                if (typeof(gem_fix_fullwidth_position) == "function") {
                                                                    gem_fix_fullwidth_position(document.getElementById("fullwidth-block-62a8ac0033efe"));
                                                                }
                                                            </script>
                                                            <div class="tgpli-inited tgpli-background-inited fullwidth-block-background"
                                                                style="background-image: url(../../wp-content/uploads/2020/04/3-2.png);background-position: left top;"
                                                                id="tgpli-62a8ac003b8b7">
                                                                <script>
                                                                    window.tgpQueue.add('tgpli-62a8ac003b8b7')
                                                                </script>
                                                            </div>
                                                            <div class="fullwidth-block-inner">
                                                                <div class="container">
                                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                        <div
                                                                            class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-xs">
                                                                            <div class="vc_column-inner ">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="clearboth"></div>
                                                                                    <div class="gem-divider "
                                                                                        style="margin-top: 80px;"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <br>
                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                        <div class="wpb_wrapper">

                                                                            <h2 style="text-align: center;">
                                                                                {{ $pro->title }}</h2>

                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="wpb_single_image wpb_content_element vc_align_center">

                                                                        <figure class="wpb_wrapper vc_figure">
                                                                            <div
                                                                                class="vc_single_image-wrapper   vc_box_border_grey">
                                                                                <img width="1000" height="218"
                                                                                    data-tgpli-src="https://walaplus.com/wp-content/uploads/2020/09/logos1-1.jpg"
                                                                                    class="vc_single_image-img attachment-full"
                                                                                    alt=""
                                                                                    data-tgpli-srcset="https://walaplus.com/wp-content/uploads/2020/09/logos1-1.jpg 1000w, https://walaplus.com/wp-content/uploads/2020/09/logos1-1-300x65.jpg 300w, https://walaplus.com/wp-content/uploads/2020/09/logos1-1-768x167.jpg 768w"
                                                                                    sizes="(max-width: 1000px) 100vw, 1000px"
                                                                                    data-tgpli-inited
                                                                                    data-tgpli-image-inited
                                                                                    id="tgpli-62a8ac003b7e2" />
                                                                                <script>
                                                                                    window.tgpQueue.add('tgpli-62a8ac003b7e2')
                                                                                </script><noscript><img
                                                                                        width="1000" height="218"
                                                                                        src="../../wp-content/uploads/2020/09/logos1-1.jpg"
                                                                                        class="vc_single_image-img attachment-full"
                                                                                        alt=""
                                                                                        srcset="https://walaplus.com/wp-content/uploads/2020/09/logos1-1.jpg 1000w, https://walaplus.com/wp-content/uploads/2020/09/logos1-1-300x65.jpg 300w, https://walaplus.com/wp-content/uploads/2020/09/logos1-1-768x167.jpg 768w"
                                                                                        sizes="(max-width: 1000px) 100vw, 1000px" /></noscript>
                                                                            </div>
                                                                        </figure>
                                                                    </div>
                                                                    <div class="clearboth"></div>
                                                                    <div class="gem-divider "
                                                                        style="margin-top: 85px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <style>
                                            @media(max-width:900px) {
                                                #vc_row-62a8ac00338c9 .margin-mobile-negative {
                                                    margin: 0px !important
                                                }
                                            }
                                        </style>
                                        <div class="vc_row-full-width-before"></div>
                                        <div id="video" data-vc-full-width="true" data-vc-full-width-init="false"
                                            data-vc-stretch-content="true"
                                            class="vc_row wpb_row vc_row-fluid vc_custom_1601379468885 vc_row-no-padding vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                                            <script type="text/javascript">
                                                if (typeof(gem_fix_fullwidth_position) == "function") {
                                                    gem_fix_fullwidth_position(document.getElementById("video"));
                                                }
                                            </script>
                                            <div
                                                class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-6 vc_col-md-6 vc_col-has-fill disable-custom-paggings-tablet disable-custom-paggings-mobile">
                                                <div class="vc_column-inner vc_custom_1601374775066">
                                                    <div class="wpb_wrapper">
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider " style="margin-top: 125px;"></div>
                                                        <div
                                                            class="wpb_text_column wpb_content_element  vc_custom_1601374889804">
                                                            <div class="wpb_wrapper">
                                                                <div class="title-h2" style="text-align: center;">
                                                                    <p><span
                                                                            style="color: #ffffff;">{{ $pro->title }}</span>
                                                                    </p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider " style="margin-top: 35px;"></div>
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                            <div
                                                                class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-8">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper">
                                                                        <div
                                                                            class="wpb_text_column wpb_content_element  vc_custom_1601375026412">
                                                                            <div class="wpb_wrapper">
                                                                                <p><span style="color: #ffffff;">{!! $pro->desc !!}<br />
                                                                                    </span></p>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider " style="margin-top: 100px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                                                <div class="vc_column-inner vc_custom_1601559313917">
                                                    <div class="wpb_wrapper">
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider " style="margin-top: 175px;"></div>
                                                        <div
                                                            class="wpb_single_image wpb_content_element vc_align_center  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top vc_custom_1584448622072  fancy">

                                                            <figure class="wpb_wrapper vc_figure">
                                                                <a href="javascript:;" target="_self"
                                                                    class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                                        width="80" height="81" data-tgpli-src=""
                                                                        class="vc_single_image-img attachment-full"
                                                                        alt="" data-tgpli-inited data-tgpli-image-inited
                                                                        id="tgpli-62a8ac003b7f6" />
                                                                    <script>
                                                                        window.tgpQueue.add('tgpli-62a8ac003b7f6')
                                                                    </script><noscript><img width="80"
                                                                            height="81"
                                                                            src="../../wp-content/uploads/2020/02/blocks-image-39.png"
                                                                            class="vc_single_image-img attachment-full"
                                                                            alt="" /></noscript>
                                                                </a>
                                                            </figure>
                                                        </div>

                                                        <div class="wpb_raw_code wpb_raw_js">
                                                            <div class="wpb_wrapper">
                                                                <script>
                                                                    var ready = (callback) => {
                                                                        if (document.readyState != "loading") callback();
                                                                        else document.addEventListener("DOMContentLoaded", callback);
                                                                    };

                                                                    ready(() => {
                                                                        if (document.querySelector("#vc_inline-frame")) return;

                                                                        var elem = document.querySelector(".fancy a");
                                                                        elem.setAttribute('data-fancybox', '');

                                                                        elem.setAttribute('data-src', 'https://www.youtube.com/watch?v=oBceVrd-hzI');
                                                                    });
                                                                </script>
                                                            </div>
                                                        </div>
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider " style="margin-top: 175px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <style>
                                            @media (max-width: 1199px) {

                                                #video.wpb_row>*,
                                                #video.wpb_row {
                                                    margin-top: 0;
                                                }
                                            }
                                        </style>
                                        <div id="vc_row-62a8ac00374e4" class="vc_row wpb_row vc_row-fluid">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div
                                                            class="wpb_text_column wpb_content_element  vc_custom_1601374987064">
                                                            <div class="wpb_wrapper">
                                                                @if (get_lang() == 'ar')
                                                                    <h2 style="text-align: center;"><span
                                                                            style="color: #00c387;">{{ __('Features') }}
                                                                            {{ $pro->title }}
                                                                        </span></h2>
                                                                @else
                                                                    <h2 style="text-align: center;"><span
                                                                            style="color: #00c387;">
                                                                            {{ $pro->title }} {{ __('Features') }}
                                                                        </span></h2>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width-before"></div>
                                        <div id="vc_row-62a8ac0037867" data-vc-full-width="true"
                                            data-vc-full-width-init="false"
                                            class="vc_row wpb_row vc_row-fluid custom-list-style vc_custom_1601241618181 vc_row-has-fill">
                                            <script type="text/javascript">
                                                if (typeof(gem_fix_fullwidth_position) == "function") {
                                                    gem_fix_fullwidth_position(document.getElementById("vc_row-62a8ac0037867"));
                                                }
                                            </script>
                                            <div
                                                class="custom-list-style-begin wpb_column vc_column_container vc_col-sm-4" style="display: contents">
                                                <div class="vc_column-inner vc_custom_1586873359510">
                                                    <div class="wpb_wrapper">
                                                        @foreach ($pro->lists as $item)
                                                            
                                                        <div class="gem-textbox-content"
                                                        style="background-color: #f4f6f7;background-position: center top;">
                                                        <div class="centered-box">
                                                            <div class="gem-icon gem-icon-pack-material gem-icon-size-large  gem-icon-shape-square gem-simple-icon"
                                                                style="opacity: 1;">
                                                                <div class="gem-icon-inner" style=""><span
                                                                        class="gem-icon-half-1"
                                                                        style="color: #00c387;"><span
                                                                            class="back-angle">&#x2611;</span></span><span
                                                                        class="gem-icon-half-2"
                                                                        style="color: #00c387;"><span
                                                                            class="back-angle">&#x2611;</span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider "
                                                            style="margin-top: 50px;"></div>
                                             
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider "
                                                            style="margin-top: 50px;"></div>
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <p style="text-align: center;font-size: 2.5em;">{{ $item->title }}
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="clearboth"></div>
                                                        @if($loop->last)
                                                        <div class="gem-divider " style="margin-top: 4;"></div>
                                                        @else
                                                        <div class="gem-divider " style="margin-top: 50px;"></div>

                                                        @endif
                                                        @endforeach
                                                     
                                                    </div>
                                                </div>
                                            </div>
                                         
                                        </div>
                                    </div>
                                    <div class="vc_row-full-width vc_clearfix"></div>

                            </div>
                            <!-- .entry-content -->






                            </article>
                            <!-- #post-## -->

                        </div>


                    </div>

                </div>
            </div>
            <!-- .block-content -->

        </div>


    </div>
    <!-- #main -->
    <div id="lazy-loading-point"></div>

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">

            <div class="row inline-row footer-widget-area" role="complementary">
                <div id="custom_html-3"
                    class="widget_text widget inline-column col-md-4 col-sm-6 col-xs-12 count-3 widget_custom_html">
                    <div class="textwidget custom-html-widget">&nbsp;
                        <p style="text-align: right;"><strong>{{ __('contact us') }}:   </strong></p>
                        <p style="text-align: right;">{{ __('address') }} :
                            {{ get_general_value('address_' . app()->getLocale()) }}</p>
                        <p style="text-align: right;">{{ __('Email address') }} :
                            {{ get_general_value('email') }} </p>
                        <p style="text-align: right;">{{ __('Mobile') }} : {{ get_general_value('phone') }}
                        </p>
                    </div>
                </div>
                <div id="custom_html-2"
                    class="widget_text widget inline-column col-md-4 col-sm-6 col-xs-12 count-3 widget_custom_html">
                    <h3 class="widget-title">{{ __('usful links') }}</h3>
                    <div class="textwidget custom-html-widget">
                        <p dir="rtl" style="text-align: right;"><a
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-1451 megamenu-first-element"
                                href="{{ route('home') }}/#vc_row-62986ef229645">{{ __('Home') }}</a></p>
                        <p dir="rtl" style="text-align: right;">
                            <a href="#vc_row-62986ef22f13e">{{ __('Partners') }}</a>
                        </p>
                        <p dir="rtl" style="text-align: right;">
                            <a href="#programs">{{ __('Our programs') }}</a>
                        </p>
                    </div>
                </div>
                <div id="custom_html-7"
                    class="widget_text widget inline-column col-md-4 col-sm-6 col-xs-12 count-3 widget_custom_html">
                    <div class="textwidget custom-html-widget"><img class="aligncenter"
                            style="margin: 25px 0 15px 0;"
                            data-tgpli-src="{{ asset('uploads/' . get_general_value('header_logo')) }}" alt=""
                            width="190" data-tgpli-inited data-tgpli-image-inited id="tgpli-62986ef24458c" />

                        <img src="{{ asset('uploads/' . get_general_value('header_logo')) }}" height="100"
                            class="aligncenter" style=" height: 200px;" alt="">
                        {!! get_general_value('desc_' . app()->getLocale()) !!}
                    </div>
                </div>
            </div>
            <!-- .footer-widget-area -->
        </div>
    </footer>
    <!-- #colophon -->


    </div>
    <!-- #page -->


    <!-- Facebook Pixel Event Code -->
    <script type='text/javascript'>
        document.addEventListener('wpcf7mailsent', function(event) {
            if ("fb_pxl_code" in event.detail.apiResponse) {
                eval(event.detail.apiResponse.fb_pxl_code);
            }
        }, false);
    </script>
    <!-- End Facebook Pixel Event Code -->
    <div id='fb-pxl-ajax-code'></div>
    <script type="text/html" id="wpb-modifications"></script>
    <link rel='stylesheet' id='vc_animate-css-css'
        href='{{ asset('wp_content/plugins/js_composer/assets/lib/bower/animate-css/animate.min31dc.css?ver=6.6.0') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-lazy-loading-animations-css'
        href='{{ asset('wp_content/themes/thegem/css/thegem-lazy-loading-animations647e.css?ver=5.5.9') }}'
        type='text/css' media='all' />

    <link rel='stylesheet' id='odometr-css'
        href='{{ asset('wp_content/themes/thegem/css/odometer-theme-default647e.css?ver=5.5.9') }}' type='text/css'
        media='all' />
    <script type='text/javascript' src='{{ asset('wp_content/themes/thegem/js/jquery.dlmenu647e.js?ver=5.5.9') }}'
        id='jquery-dlmenu-js'></script>
    <script type='text/javascript' id='thegem-menu-init-script-js-extra'>
        /* <![CDATA[ */
        var thegem_dlmenu_settings = {
            "backLabel": "Back",
            "showCurrentLabel": "Show this page"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('wp_content/themes/thegem/js/thegem-menu_init647e.js?ver=5.5.9') }}'
        id='thegem-menu-init-script-js'></script>
    <script type='text/javascript' src='{{ asset('wp_content/themes/thegem/js/svg4everybody647e.js?ver=5.5.9') }}'
        id='svg4everybody-js'></script>
    <script type='text/javascript'
        src='{{ asset('wp_content/themes/thegem/js/thegem-form-elements647e.js?ver=5.5.9') }}'
        id='thegem-form-elements-js'></script>
    <script type='text/javascript' src='{{ asset('wp_content/themes/thegem/js/jquery.easing647e.js?ver=5.5.9') }}'
        id='jquery-easing-js'></script>
    <script type='text/javascript' src='{{ asset('wp_content/themes/thegem/js/thegem-header647e.js?ver=5.5.9') }}'
        id='thegem-header-js'></script>
    <script type='text/javascript' src='{{ asset('wp_content/themes/thegem/js/SmoothScroll647e.js?ver=5.5.9') }}'
        id='SmoothScroll-js'></script>
    <script type='text/javascript' src='{{ asset('wp_content/themes/thegem/js/functions647e.js?ver=5.5.9') }}'
        id='thegem-scripts-js'></script>
    <script type='text/javascript'
        src='{{ asset('wp_content/themes/thegem/js/fancyBox/jquery.mousewheel.pack647e.js?ver=5.5.9') }}'
        id='jquery-mousewheel-js'></script>
    <script type='text/javascript'
        src='{{ asset('wp_content/themes/thegem/js/fancyBox/jquery.fancybox.min647e.js?ver=5.5.9') }}'
        id='jquery-fancybox-js'></script>
    <script type='text/javascript'
        src='{{ asset('wp_content/themes/thegem/js/fancyBox/jquery.fancybox-init647e.js?ver=5.5.9') }}'
        id='fancybox-init-script-js'></script>
    <script type='text/javascript' id='leadin-script-loader-js-js-extra'>
        /* <![CDATA[ */
        var leadin_wordpress = {
            "userRole": "visitor",
            "pageType": "home",
            "leadinPluginVersion": "8.0.227"
        };
        /* ]]> */
    </script>


    <script type='text/javascript' src='{{ asset('wp-includes/js/wp-embed.min647e.js?ver=5.5.9') }}' id='wp-embed-js'>
    </script>
    <script type='text/javascript'
        src='{{ asset('wp_content/plugins/js_composer/assets/js/dist/js_composer_front.min31dc.js?ver=6.6.0') }}'
        id='wpb_composer_front_js-js'></script>
    <script type='text/javascript'
        src='{{ asset('wp_content/plugins/js_composer/assets/lib/vc_waypoints/vc-waypoints.min31dc.js?ver=6.6.0') }}'
        id='vc_waypoints-js'></script>
    <script type='text/javascript' src='{{ asset('wp_content/themes/thegem/js/thegem-lazyLoading647e.js?ver=5.5.9') }}'
        id='thegem-lazy-loading-js'></script>
    <script type='text/javascript' src='{{ asset('wp_content/themes/thegem/js/odometer647e.js?ver=5.5.9') }}'
        id='odometr-js'></script>
    <script type='text/javascript' src='{{ asset('wp_content/themes/thegem/js/counters-effects647e.js?ver=5.5.9') }}'
        id='thegem-counters-effects-js'></script>
    <script type='text/javascript' src='{{ asset('wp_content/themes/thegem/js/thegem-counters647e.js?ver=5.5.9') }}'
        id='thegem-counter-js'></script>
    <script type='text/javascript' src='{{ asset('wp_content/themes/thegem/js/isotope.min647e.js?ver=5.5.9') }}'
        id='isotope-js-js'></script>
    <script>
        $('#SubmitForm').on('submit', function(e) {
            e.preventDefault();

            let name = $('#InputName').val();
            let email = $('#InputEmail').val();
            let mobile = $('#InputMobile').val();
            let message = $('#InputMessage').val();


            $.ajax({
                url: "/submit-form",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    name: name,
                    email: email,
                    mobile: mobile,
                    message: message,
                },
                success: function(response) {
                    $('#successMsg').show();
                    $('#nameErrorMsg').hide();
                    $('#emailErrorMsg').hide();
                    $('#mobileErrorMsg').hide();
                    $('#messageErrorMsg').hide();
                    $('#InputName').val('');
                    $('#InputEmail').val('');
                    $('#InputMobile').val('');
                    $('#InputMessage').val('');
                },
                error: function(response) {
                    $('#nameErrorMsg').text(response.responseJSON.errors.name);
                    $('#emailErrorMsg').text(response.responseJSON.errors.email);
                    $('#mobileErrorMsg').text(response.responseJSON.errors.mobile);
                    $('#messageErrorMsg').text(response.responseJSON.errors.message);
                },
            });
        });
        $(function() {
            var selectedClass = "";
            $(".filter").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#gallery").fadeTo(100, 0.1);
                $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
                setTimeout(function() {
                    $("." + selectedClass).fadeIn().addClass('animation');
                    $("#gallery").fadeTo(300, 1);
                }, 300);
            });
        });
    </script>
    <script type="text/javascript">
        (function() {
            var parent = document.getElementById("page");
            var deferredFile1 = document.createElement("link");
            deferredFile1.rel = "stylesheet";
            deferredFile1.type = "text/css";
            deferredFile1.href = "{{ asset('wp_content/themes/thegem/css/icons-material647e.css?ver=5.5.9') }}";
            document.body.appendChild(deferredFile1);
            window.addEventListener("load", function() {
                var elem = document.getElementById("thegem-preloader-inline-css");
                if (elem !== null) setTimeout(function() {
                    elem.parentNode.removeChild(elem)
                }, 300);
            });
        })();
    </script>
</body>


</html>