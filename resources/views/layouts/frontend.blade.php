<!DOCTYPE html>


<head>
    <meta charset="UTF-8">

    <style>
        .tgpli-background-inited {
            background-image: none !important;
        }
        
        .partner_class{
            height:850px;
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
@media (min-width: 768px) {
  .carousel-multi-item-2 .col-md-3 {
    float: left;
    width: 25%;
    max-width: 100%;
  }
}

.carousel-multi-item-2 .card img {
  border-radius: 2px;
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
  
    <script type="text/javascript" async src="wp_content/themes/thegem/js/thegem-pagespeed-lazy-items.js"></script>
    @if(get_lang() == 'ar')
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
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

    <link rel='stylesheet' id='layerslider-css' href='wp_content/plugins/LayerSlider/assets/static/layerslider/css/layersliderfa4a.css?ver=6.11.6' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-preloader-css' href='wp_content/themes/thegem/css/thegem-preloader647e.css?ver=5.5.9' type='text/css' media='all' />
    <style id='thegem-preloader-inline-css' type='text/css'>
        body:not(.compose-mode) .gem-icon-style-gradient span,
        body:not(.compose-mode) .gem-icon .gem-icon-half-1,
        body:not(.compose-mode) .gem-icon .gem-icon-half-2 {
            opacity: 0 !important;
        }
    </style>

 
 
 
    @if(get_lang() == 'ar')
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">

    <link rel='stylesheet' id='thegem-reset-css' href='wp_content/themes/thegem/css/thegem-reset647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-grid-css' href='wp_content/themes/thegem/css/thegem-grid647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-style-css' href='wp_content/themes/thegem/style647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-child-style-css' href='wp_content/themes/thegem-child/style647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-header-css' href='wp_content/themes/thegem/css/thegem-header647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-widgets-css' href='wp_content/themes/thegem/css/thegem-widgets647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-new-css-css' href='wp_content/themes/thegem/css/thegem-new-css647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='perevazka-css-css-css' href='wp_content/themes/thegem/css/thegem-perevazka-css647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-google-fonts-css' href='http://fonts.googleapis.com/css?family=Tajawal%3A700%2Cregular%2C300%7CMontserrat%3A700%2Cregular%7CSource+Sans+Pro%3Aregular%2C300&amp;subset=arabic%2Clatin%2Ccyrillic%2Ccyrillic-ext%2Clatin-ext%2Cvietnamese%2Cgreek%2Cgreek-ext&amp;ver=5.5.9'
        type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-custom-css' href='wp_content/themes/thegem-child/css/custom-VDyJnWIQ647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-rtl-css' href='wp_content/themes/thegem/css/rtl647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css' href='wp_content/plugins/js_composer/assets/css/js_composer.min31dc.css?ver=6.6.0' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-additional-blog-1-css' href='wp_content/themes/thegem/css/thegem-additional-blog-1647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-fancybox-css' href='wp_content/themes/thegem/js/fancyBox/jquery.fancybox.min647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-vc_elements-css' href='wp_content/themes/thegem/css/thegem-vc_elements647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-rtl-css' href='wp-includes/css/dist/block-library/style-rtl.min647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-components-rtl-css' href='wp-includes/css/dist/components/style-rtl.min647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-editor-font-css' href='https://fonts.googleapis.com/css?family=Noto+Serif%3A400%2C400i%2C700%2C700i&amp;ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-editor-rtl-css' href='wp-includes/css/dist/block-editor/style-rtl.min647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-nux-rtl-css' href='wp-includes/css/dist/nux/style-rtl.min647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-editor-rtl-css' href='wp-includes/css/dist/editor/style-rtl.min647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='formbuilder-123-block-style-css-css' href='wp_content/plugins/123contactform-for-wordpress/admin/gutenberg/blocks.style.build647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='wpml-menu-item-0-css' href='wp_content/plugins/sitepress-multilingual-cms/templates/language-switchers/menu-item/style68b3.css?ver=1' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem_js_composer_front-css' href='wp_content/themes/thegem/css/thegem-js_composer_columns647e.css?ver=5.5.9' type='text/css' media='all' />
   @endif
    @if(get_lang() == 'en')
    <link rel='stylesheet' id='thegem-reset-css'  href='wp_content_english/themes/thegem/css/thegem-reset647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-grid-css'  href='wp_content_english/themes/thegem/css/thegem-grid647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-style-css'  href='wp_content_english/themes/thegem/style647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-child-style-css'  href='wp_content_english/themes/thegem-child/style647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-header-css'  href='wp_content_english/themes/thegem/css/thegem-header647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-widgets-css'  href='wp_content_english/themes/thegem/css/thegem-widgets647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-new-css-css'  href='wp_content_english/themes/thegem/css/thegem-new-css647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='perevazka-css-css-css'  href='wp_content_english/themes/thegem/css/thegem-perevazka-css647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Tajawal%3A700%2Cregular%2C300%7CMontserrat%3A700%2Cregular%7CSource+Sans+Pro%3Aregular%2C300&amp;subset=arabic%2Clatin%2Ccyrillic%2Ccyrillic-ext%2Clatin-ext%2Cvietnamese%2Cgreek%2Cgreek-ext&amp;ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-custom-css'  href='wp_content_english/themes/thegem-child/css/custom-VDyJnWIQ647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css'  href='wp_content_english/plugins/js_composer/assets/css/js_composer.min31dc.css?ver=6.6.0' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-additional-blog-1-css'  href='wp_content_english/themes/thegem/css/thegem-additional-blog-1647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='jquery-fancybox-css'  href='wp_content_english/themes/thegem/js/fancyBox/jquery.fancybox.min647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-vc_elements-css'  href='wp_content_english/themes/thegem/css/thegem-vc_elements647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css'  href='wp-includes_english/css/dist/block-library/style.min647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-components-css'  href='wp-includes_english/css/dist/components/style.min647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-editor-font-css'  href='https://fonts.googleapis.com/css?family=Noto+Serif%3A400%2C400i%2C700%2C700i&amp;ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-editor-css'  href='wp-includes_english/css/dist/block-editor/style.min647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-nux-css'  href='wp-includes_english/css/dist/nux/style.min647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-editor-css'  href='wp-includes_english/css/dist/editor/style.min647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='formbuilder-123-block-style-css-css'  href='wp_content_english/plugins/123contactform-for-wordpress/admin/gutenberg/blocks.style.build647e.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='wpml-menu-item-0-css'  href='wp_content_english/plugins/sitepress-multilingual-cms/templates/language-switchers/menu-item/style68b3.css?ver=1' type='text/css' media='all' />
    <link rel='stylesheet' id='vc_animate-css-css'  href='wp_content_english/plugins/js_composer/assets/lib/bower/animate-css/animate.min.css?ver=6.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='thegem-lazy-loading-animations-css'  href='wp_content_english/themes/thegem/css/thegem-lazy-loading-animations.css?ver=5.5.9' type='text/css' media='all' />

<link rel='stylesheet' id='odometr-css'  href='wp_content_english/themes/thegem/css/odometer-theme-default.css?ver=5.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem_js_composer_front-css'  href='wp_content_english/themes/thegem/css/thegem-js_composer_columns647e.css?ver=5.5.9' type='text/css' media='all' />
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
            "themePath": "https:\/\/foryou.com\/wp_content\/themes\/thegem",
            "rootUrl": "https:\/\/foryou.com",
            "mobileEffectsEnabled": "",
            "isRTL": "1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp_content/themes/thegem/js/thegem-settings-init647e.js?ver=5.5.9' id='thegem-settings-init-js'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp' id='jquery-core-js'></script>
    <script type='text/javascript' id='layerslider-utils-js-extra'>
        /* <![CDATA[ */
        var LS_Meta = {
            "v": "6.11.6",
            "fixGSAP": "1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp_content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.utilsfa4a.js?ver=6.11.6' id='layerslider-utils-js'></script>
    <script type='text/javascript' src='wp_content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.kreaturamedia.jqueryfa4a.js?ver=6.11.6' id='layerslider-js'></script>
    <script type='text/javascript' src='wp_content/plugins/LayerSlider/assets/static/layerslider/js/layerslider.transitionsfa4a.js?ver=6.11.6' id='layerslider-transitions-js'></script>
    <script type='text/javascript' src='wp_content/themes/thegem/js/thegem-fullwidth-loader647e.js?ver=5.5.9' id='thegem-fullwidth-optimizer-js'></script>
    <!--[if lt IE 9]>
<script type='text/javascript' src='https://foryou.com/wp_content/themes/thegem/js/html5.js?ver=3.7.3' id='html5-js'></script>
<![endif]-->
    <meta name="generator" content="Powered by LayerSlider 6.11.6 - Multi-Purpose, Responsive, Parallax, Mobile-Friendly Slider Plugin for WordPress." />
    <!-- LayerSlider updates and docs at: https://layerslider.kreaturamedia.com -->
    <link rel="alternate" type="application/json" href="wp-json/wp/v2/pages/1016.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <link rel='shortlink' href='/' />
    <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed78b2.json?url=https%3A%2F%2Fforyou.com%2F" />
    <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embedf6e2?url=https%3A%2F%2Fforyou.com%2F&amp;format=xml" />
    <meta name="generator" content="WPML ver:4.2.5 stt:5,1;" />
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WHQDTZH');
    </script>
    <!-- End Google Tag Manager -->
    <meta name="msvalidate.01" content="DAFF72B6002F1F32D72B85E37B810875" />
    <!-- DO NOT COPY THIS SNIPPET! Start of Page Analytics Tracking for HubSpot WordPress plugin v8.0.227-->
    <script type="text/javascript">
        var _hsq = _hsq || [];
        _hsq.push(["setContentType", "standard-page"]);
    </script>
    <!-- DO NOT COPY THIS SNIPPET! End of Page Analytics Tracking for HubSpot WordPress plugin -->
    <script>
        (function() {
            var hbspt = window.hbspt = window.hbspt || {};
            hbspt.forms = hbspt.forms || {};
            hbspt._wpFormsQueue = [];
            hbspt.enqueueForm = function(formDef) {
                if (hbspt.forms && hbspt.forms.create) {
                    hbspt.forms.create(formDef);
                } else {
                    hbspt._wpFormsQueue.push(formDef);
                }
            }
            if (!window.hbspt.forms.create) {
                Object.defineProperty(window.hbspt.forms, 'create', {
                    configurable: true,
                    get: function() {
                        return hbspt._wpCreateForm;
                    },
                    set: function(value) {
                        hbspt._wpCreateForm = value;
                        while (hbspt._wpFormsQueue.length) {
                            var formDef = hbspt._wpFormsQueue.shift();
                            if (!document.currentScript) {
                                var formScriptId = 'leadin-forms-v2-js';
                                hubspot.utils.currentScript = document.getElementById(formScriptId);
                            }
                            hbspt._wpCreateForm.call(hbspt.forms, formDef);
                        }
                    },
                });
            }
        })();
    </script>

    <!-- Facebook Pixel Code -->
    <script type='text/javascript'>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '../connect.facebook.net/en_US/fbevents.js');
    </script>
    <!-- End Facebook Pixel Code -->
    <script type='text/javascript'>
        fbq('init', '360462288775028', {}, {
            "agent": "wordpress-5.5.9-3.0.5"
        });
    </script>
    <script type='text/javascript'>
        fbq('track', 'PageView', []);
    </script>
    <!-- Facebook Pixel Code -->
    <noscript>
<img height="1" width="1" style="display:none" alt="fbpx" data-tgpli-src="https://www.facebook.com/tr?id=360462288775028&ev=PageView&noscript=1" data-tgpli-inited data-tgpli-image-inited id="tgpli-62986ef244482"  /><script>window.tgpQueue.add('tgpli-62986ef244482')</script><noscript><img height="1" width="1" style="display:none" alt="fbpx"
src="https://www.facebook.com/tr?id=360462288775028&amp;ev=PageView&amp;noscript=1" /></noscript>
    </noscript>
    <!-- End Facebook Pixel Code -->
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
    <link rel="icon" href="{{ asset('uploads/'.get_general_value('icon')) }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('uploads/'.get_general_value('icon')) }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('uploads/'.get_general_value('icon')) }}" />
    <meta name="msapplication-TileImage" content="{{ asset('uploads/'.get_general_value('icon')) }}" />
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
                line-height: 24px!important;
                padding-top: 0 !important;
            }
            span.custom-border-text-xl {
                font-size: 70px !important;
                line-height: 150px!important;
            }
        }
        
        @media(max-width:414px) {
            span.custom-border-text {
                font-size: 28px !important;
                line-height: 28px!important;
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
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1602619660157 {
            margin-bottom: 0px !important;
            background: #2c2e3d url({{ asset('uploads/'.$first_se->image) }}) !important;
            @if(get_lang()=='en')
            transform: scaleX(-1);

            @endif
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }
        
     
        
        .vc_custom_1600125432050 {
            margin-top: -128px !important;
            margin-bottom: -128px !important;
            background-color: #69489d  !important;
        }
        
        .vc_custom_1600777159542 {
            padding-top: 170px !important;
            padding-bottom: 80px !important;
            background-color: #de4f76 !important;
        }
        
        .vc_custom_1609826308527 {
            margin-bottom: 0px !important;
            padding-top: 70px !important;
            background: #ffffff url(https://foryou.com/wp_content/uploads/2020/09/bk2.png?id=1676) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: contain !important;
        }
        
        .vc_custom_1600125704977 {
            margin-top: -140px !important;
            background-color: #007396 !important;
        }
        
        .vc_custom_1601554316679 {
            margin-bottom: 0px !important;
            padding-top: 40px !important;
        }
        
        .vc_custom_1600720753000 {
            margin-bottom: -30px !important;
            background-color: #69489d  !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }
        
        .vc_custom_1601299991278 {
            margin-top: -20px !important;
        }
        
        .vc_custom_1601488817120 {
            margin-top: -40px !important;
            margin-bottom: 0px !important;
            padding-bottom: 0px !important;
        }
        
        .vc_custom_1601208748564 {
            margin-bottom: -20px !important;
        }
        
        .vc_custom_1600125909091 {
            margin-top: -14px !important;
        }
        
        .vc_custom_1586356776935 {
            margin-bottom: 0px !important;
        }
        
        .vc_custom_1586356784318 {
            margin-bottom: 0px !important;
        }
        
        .vc_custom_1586878494167 {
            padding-right: 300px !important;
            padding-left: 300px !important;
        }
        
        .vc_custom_1600125920974 {
            margin-top: -19px !important;
        }
        
        .vc_custom_1630597859616 {
            margin-top: -19px !important;
        }
        
        .vc_custom_1586524780725 {
            padding-left: 50px !important;
        }
        
        .vc_custom_1600771884224 {
            margin-top: -25px !important;
            margin-right: 60px !important;
        }
        
        .vc_custom_1586873359510 {
            padding-top: 0px !important;
        }
        
        .vc_custom_1600772395043 {
            margin-bottom: 0px !important;
        }
        
        .vc_custom_1589911199704 {
            padding-top: 0px !important;
        }
        
        .vc_custom_1601551755857 {
            margin-bottom: 0px !important;
            padding-top: 0px !important;
        }
        
        .vc_custom_1601550661897 {
            margin-bottom: 0px !important;
        }
        
        .vc_custom_1601550931002 {
            border-right-width: 1px !important;
            padding-top: 20px !important;
            border-right-color: #dfe5e8 !important;
            border-right-style: solid !important;
        }
        
        .vc_custom_1589910971774 {
            padding-top: 20px !important;
        }
        
        .vc_custom_1589910960814 {
            border-top-width: 1px !important;
            border-right-width: 1px !important;
            padding-top: 20px !important;
            border-right-color: #dfe5e8 !important;
            border-right-style: solid !important;
            border-top-color: #dfe5e8 !important;
            border-top-style: solid !important;
        }
        
        .vc_custom_1589910976390 {
            border-top-width: 1px !important;
            padding-top: 20px !important;
            border-top-color: #dfe5e8 !important;
            border-top-style: solid !important;
        }
        
        .vc_custom_1600767829431 {
            margin-bottom: 0px !important;
        }
        
        .vc_custom_1600767836328 {
            margin-bottom: 0px !important;
        }
        
        .vc_custom_1587451772836 {
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            padding-top: 0px !important;
            padding-bottom: 0px !important;
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
                            @if( get_general_value('linkedin') != null ) 
                            <a class="socials-item" href="{{ get_general_value('linkedin') }}" target="_blank" title="LinkedIn"><i
									class="socials-item-icon linkedin "></i></a>
                                    @endif
                                   
                                    @if( get_general_value('twitter') != null ) 
                            <a class="socials-item" href="{{ get_general_value('twitter') }}s" target="_blank" title="Twitter"><i
									class="socials-item-icon twitter "></i></a>
                                    @endif
                                    @if( get_general_value('instagram') != null ) 
                            <a class="socials-item" href="{{ get_general_value('instagram') }}" target="_blank" title="Instagram"><i
									class="socials-item-icon instagram "></i></a>
                                    @endif
                                    @if( get_general_value('facebook') != null ) 
                            <a class="socials-item" href="{{  get_general_value('facebook') }}" target="_blank" title="facebook"><i
									class="socials-item-icon facebook "></i></a>
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
                                        <span class="logo"><img data-tgpli-src="{{ asset('uploads/'.get_general_value('header_logo')) }}" data-tgpli-srcset="{{ asset('uploads/'.get_general_value('header_logo')) }} 1x,https://foryou.com/wp_content/uploads/thegem-logos/logo_8c4676c76b0e25450e8e77c212e4cbee_2x.png 2x,https://foryou.com/wp_content/uploads/thegem-logos/logo_8c4676c76b0e25450e8e77c212e4cbee_3x.png 3x" alt="ولاء بلس" style="width:180px;" class="default" data-tgpli-inited data-tgpli-image-inited id="tgpli-62986ef2444d3" />
                                            <img src="wp_content/uploads/thegem-logos/logo_8c4676c76b0e25450e8e77c212e4cbee_1x.png" srcset="{{ asset('uploads/'.get_general_value('header_logo')) }} 1x,https://foryou.com/wp_content/uploads/thegem-logos/logo_8c4676c76b0e25450e8e77c212e4cbee_2x.png 2x,https://foryou.com/wp_content/uploads/thegem-logos/logo_8c4676c76b0e25450e8e77c212e4cbee_3x.png 3x" alt="ولاء بلس" style="width:180px;" class="default"/></noscript><img data-tgpli-src="{{ asset('uploads/'.get_general_value('header_logo')) }}" data-tgpli-srcset="{{ asset('uploads/'.get_general_value('header_logo')) }} 1x,https://foryou.com/wp_content/uploads/thegem-logos/logo_8c4676c76b0e25450e8e77c212e4cbee_2x.png 2x,https://foryou.com/wp_content/uploads/thegem-logos/logo_8c4676c76b0e25450e8e77c212e4cbee_3x.png 3x" alt="ولاء بلس" style="width:100px;" class="small" data-tgpli-inited data-tgpli-image-inited id="tgpli-62986ef2444ea" /></span>
                                    </a>
                                </div>
                            </div>
                            <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                                <button class="menu-toggle dl-trigger">Primary Menu<span class="menu-line-1"></span><span class="menu-line-2"></span><span class="menu-line-3"></span></button>
                                <ul id="primary-menu" class="nav-menu styled no-responsive dl-menu">

                                       
                                    <li id="menu-item-1451" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-1451 megamenu-first-element"><a href="#vc_row-62986ef229645">{{__('Home') }} </a><span class="menu-item-parent-toggle"></span>
                                        
                                    </li>
                                    <li id="menu-item-1451" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-1451 megamenu-first-element"><a href="#vc_row-62986ef22f13e">{{__('Partners') }}</a><span class="menu-item-parent-toggle"></span>
                                        
                                    </li>
                                    <li id="menu-item-1451" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-1451 megamenu-first-element"><a href="#programs">{{__('Our programs') }}</a><span class="menu-item-parent-toggle"></span>
                                        
                                    </li>
                                    <li id="menu-item-1451" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-1451 megamenu-first-element"><a href={{ route('contact_us')}}>{{ __('contact us') }}</a><span class="menu-item-parent-toggle"></span>
                                        
                                    </li>
                                   
                                 
                                    <li class="menu-item-logo">
                                        <div class="site-logo" style="width:180px;">
                                            <a href="/" rel="home">
                                                <img class="default" width="180" height="80" src="{{ asset('uploads/'.get_general_value('header_logo')) }}" alt="">
                                            </a>
                                        </div>
                                    </li>
                                    @if(get_lang() == 'ar')
                                        
                                    
                                    <li id="menu-item-wpml-ls-50-ar" class="menu-item wpml-ls-slot-50 wpml-ls-item wpml-ls-item-ar wpml-ls-current-language wpml-ls-menu-item wpml-ls-first-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-has-children menu-item-wpml-ls-50-ar megamenu-first-element"><a title="العربية" href="/"><span class="wpml-ls-display">العربية</span></a>
                                        <ul class="sub-menu styled dl-submenu">
                                            <li id="menu-item-wpml-ls-50-en" class="menu-item wpml-ls-slot-50 wpml-ls-item wpml-ls-item-en wpml-ls-menu-item wpml-ls-last-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-50-en megamenu-first-element"><a title="الإنجليزية" href="lang/en"><span class="wpml-ls-display">الإنجليزية</span></a></li>
                                        </ul>
                                    </li>
                                    @else
                                    <li id="menu-item-wpml-ls-50-ar" class="menu-item wpml-ls-slot-50 wpml-ls-item wpml-ls-item-ar wpml-ls-current-language wpml-ls-menu-item wpml-ls-first-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-has-children menu-item-wpml-ls-50-ar megamenu-first-element"><a title="English" href="/"><span class="wpml-ls-display">English</span></a>
                                        <ul class="sub-menu styled dl-submenu">
                                            <li id="menu-item-wpml-ls-50-en" class="menu-item wpml-ls-slot-50 wpml-ls-item wpml-ls-item-en wpml-ls-menu-item wpml-ls-last-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-50-en megamenu-first-element"><a title="ARABIC" href="lang/ar"><span class="wpml-ls-display">ARABIC</span></a></li>
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


                <div class="block-content no-bottom-margin no-top-margin" style="background: #de4f76">
                    <div class="container">
                        <div class="panel row">

                            <div class="panel-center col-xs-12">
                                <article id="post-1016" class="post-1016 page type-page status-publish">

                                    <div class="entry-content post-content">




                                        <div class="vc_row-full-width-before"></div>
                                        <div id="vc_row-62986ef229645" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1602619660157 vc_row-has-fill vc_row-o-full-height vc_row-o-columns-middle thegem-fix-full-height vc_row-o-content-top vc_row-flex">
                                            <script type="text/javascript">
                                                if (typeof(gem_fix_fullwidth_position) == "function") {
                                                    gem_fix_fullwidth_position(document.getElementById("vc_row-62986ef229645"));
                                                }
                                            </script>
                                            <div class="wpb_column vc_column_container vc_col-sm-12" @if(get_lang() == 'en')
                                                style="    transform: scaleX(-1);"
                                                @else
                                                style="    text-align: right;"
                                            @endif>
                                                <div class="vc_column-inner vc_custom_1601299991278">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element  vc_custom_1601488817120">
                                                            <div class="wpb_wrapper">
                                                                <div class="title-h1">
                                                                        {!! $first_se->main_title !!}
                                                                </div>

                                                            </div>
                                                        </div>

                                                       
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider " style="margin-top: 50px;"></div>
                                                        <div class="wpb_text_column wpb_content_element  vc_custom_1601208748564">
                                                            <div class="wpb_wrapper">
                                                                <div class="styled-subtitle" style="max-width: 670px;">
                                                                    {!! $first_se->secand_title !!}
                                                                </div>

                                                            </div>
                                                        </div>
                                                        @if($first_se->first_btn != null && $first_se->first_link != null)
                                                        <div class="gem-textbox ">
                                                            <div class="gem-textbox-inner" style="">
                                                                <div class="gem-textbox-content" style="background-position: center top;">
                                                                    <div class="gem-alert-box centered-box">
                                                                        <div class="gem-alert-inner">
                                                                            <div class="gem-alert-box-content"></div>
                                                                            <div class="gem-alert-box-buttons">
                                                                                <div class="gem-button-container gem-button-position-inline"><a class="gem-button gem-button-size-medium gem-button-style-flat gem-button-text-weight-normal" style="border-radius: 36px;background-color: #de4f76;color: #ffffff;" onmouseleave="this.style.backgroundColor='#de4f76';this.style.color='#ffffff';"
                                                                                        onmouseenter="this.style.backgroundColor='#de4f76';this.style.color='#ffffff';" href="{{ $first_se->first_link }}" target="_self">{{ $first_se->first_btn }}</a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                        @if($first_se->secand_btn != null && $first_se->secand_link != null)

                                                        <div class="wpb_raw_code wpb_content_element wpb_raw_html" id="video-header">
                                                            <div class="wpb_wrapper">
                                                                <span class="wistia_embed wistia_async_1w9lj1e9sb popover=true popoverContent=link" style="display:inline;position:relative">
                                                                <a style="border-radius: 36px !important;
                                                                            background-color: #69489d !important;
                                                                            
                                                                            color: #fff !important;
                                                                            height: 50px !important;
                                                                            line-height: 50px !important;
                                                                            padding: 12px 25px;
                                                                            font-size: 19px !important;
                                                                            font-weight: bold !important;
                                                                            position: relative !important;
                                                                            top: -70px !important;
                                                                            right: 155px ;"  href="{{ $first_se->secand_link }}">{{ $first_se->secand_btn }}
                                                                            </a>
                                                                        </span>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <style>
                                            #vc_row-62986ef229645 .gem-textbox-content {
                                                padding: 0;
                                            }
                                            
                                            #vc_row-62986ef229645 .gem-textbox-content .gem-alert-box {
                                                padding: 0;
                                            }
                                            
                                            #vc_row-62986ef229645 .gem-alert-box-buttons {
                                                display: flex;
                                                align-items: center;
                                                justify-content: flex-start;
                                            }
                                            
                                            #vc_row-62986ef229645 .gem-alert-box-buttons .gem-button {
                                                margin-left: 0;
                                            }
                                            
                                            @media (max-width: 475px) {
                                                #vc_row-62986ef229645 .gem-alert-box-buttons {
                                                    flex-wrap: wrap;
                                                }
                                            }
                                            
                                            #vc_row-62986ef229645 #wistia_32.thumb_container a {
                                                border-radius: 36px !important;
                                                background-color: rgb(223, 114, 66) !important;
                                                color: rgb(255, 255, 255) !important;
                                                height: 50px !important;
                                                line-height: 50px !important;
                                                padding: 12px 25px;
                                                font-size: 19px !important;
                                                font-weight: bold !important;
                                                position: relative !important;
                                                top: -70px !important;
                                                right: 155px !important;
                                            }
                                        </style>
                                       
                                        <div class="vc_row-full-width-before"></div>
                                        <div id="vc_row-62986ef231b7c" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid z-index wpb_animate_when_almost_visible wpb_fadeInRight fadeInRight vc_custom_1600125432050 vc_row-has-fill">
                                            <script type="text/javascript">
                                                if (typeof(gem_fix_fullwidth_position) == "function") {
                                                    gem_fix_fullwidth_position(document.getElementById("vc_row-62986ef231b7c"));
                                                }
                                            </script>
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider " style="margin-top: 220px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <style>
                                            @media(max-width:767px) {
                                                #vc_row-62986ef231b7c {
                                                    margin-top: -58px !important;
                                                    margin-bottom: -58px !important;
                                                }
                                                #vc_row-62986ef231b7c .gem-divider {
                                                    margin-top: 80px !important;
                                                }
                                            }
                                            
                                            #vc_row-62986ef231b7c {
                                                clip-path: polygon(100% 0, -1% 50%, 100% 100%);
                                                -webkit-clip-path: polygon(100% 0, -1% 50%, 100% 100%);
                                            }
                                        </style>
                                        <div class="vc_row-full-width-before"></div>
                                        <div id="vc_row-62986ef232c56" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1600777159542 vc_row-has-fill">
                                            <script type="text/javascript">
                                                if (typeof(gem_fix_fullwidth_position) == "function") {
                                                    gem_fix_fullwidth_position(document.getElementById("vc_row-62986ef232c56"));
                                                }
                                            </script>
                                            <div class="why-block wpb_column vc_column_container vc_col-sm-12 vc_col-md-8">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider " style="margin-top: 45px;"></div>
                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top vc_custom_1600771884224">
                                                            <div class="wpb_wrapper">
                                                                <h1 class="thegem-mobile" style="  color: #dوf7242;">
                                                                   {!! $third->body !!}
                                                                </h1>

                                                            </div>
                                                        </div>

                         
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-4 disable-custom-paggings-tablet disable-custom-paggings-mobile">
                                                <div class="vc_column-inner vc_custom_1586524780725">
                                                    <div class="wpb_wrapper">
                                                        @foreach ($third->relation as $item)
                                                            
                                                        

                                                        <div class="gem-icon-with-text gem-icon-with-text-icon-size-medium gem-icon-with-text-flow">
                                                            <div style="margin-bottom:0px;margin-top:0px; " class="gem-icon-with-text-icon">
                                                                <div class="gem-icon gem-icon-pack-material gem-icon-size-medium  gem-icon-shape-square gem-simple-icon" style="opacity: 1;">
                                                                    <div class="gem-icon-inner" style=""><span class="gem-icon-half-1" style="color: #ffffff;">
                                                                        <span class="back-angle">{!! $item->icon !!}</span></span>
                                                                        <span class="gem-icon-half-2" style="color: #ffffff;">
                                                                        <span class="back-angle">{!! $item->icon !!}</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="gem-icon-with-text-content">
                                                                <div class="gem-icon-with-text-text">
                                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top">
                                                                        <div class="wpb_wrapper">
                                                                            <h6><span style="color: #ffffff;">{{ $item->title }}<br />
                                                                                    </span></h6>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearboth"></div>
                                                        </div>
                                                        @endforeach
                                                        


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <style>
                                            @media(max-width:767px) {
                                                #vc_row-62986ef232c56 {
                                                    padding-top: 0px !important;
                                                }
                                            }
                                        </style>
                                        <div class="vc_row-full-width-before"></div>
                                        <div id="programs" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid custom-list-style vc_custom_1609826308527 vc_row-has-fill">
                                            <script type="text/javascript">
                                                if (typeof(gem_fix_fullwidth_position) == "function") {
                                                    gem_fix_fullwidth_position(document.getElementById("programs"));
                                                }
                                            </script>
                                            <div class="custom-list-style-begin wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner vc_custom_1586873359510">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top vc_custom_1600772395043">
                                                            <div class="wpb_wrapper">
                                                                <h2 class="any-custom-text" style="text-align: center;"><span style="color: #de4f76 ; forn size: 70px;">{{ __('Our programs') }}</span></h2>

                                                            </div>
                                                        </div>
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider " style="margin-top: 70px;"></div>
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                            @foreach ($programs as $pro)
                                                            <div class="custom-list-style-begin wpb_column vc_column_container vc_col-sm-6">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper">
                                                                        @php
                                                                            $color = substr(str_shuffle('ABCDEF0123456789'), 0, 6);
                                                                        @endphp
                                                                        <style>
                                                                           #programs .begin-square:before {
                                                                                    content: "" !important;
                                                                                    width: 145px !important;
                                                                                    height: 145px !important;
                                                                                    background : #0eaaf5  !important;
                                                                                    position: absolute !important;
                                                                                    top: -21px !important;
                                                                                    right: -26px !important;
                                                                                    z-index: -1 !important;
                                                                                    border-radius: 5px !important;
                                                                           }
                                                                                    .custom-list-style-begin .gem-list>ul>li:before {
                                                                                    color:  #0eaaf5  !important;
                                                                                }
                                                                                }
                                                                        </style>

                                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top begin-square" >
                                                                            <div class="wpb_wrapper">
                                                                                <h4 style="text-align: right;"><span style="color: #171b2d;">برنامج</span></h4>

                                                                                <h1 style="margin-top: -27px; text-align: right;"><span style="color: #171b2d;">{{ $pro->title }}</span></h1>

                                                                            </div>
                                                                        </div>
                                                                        <div class="clearboth"></div>
                                                                        <div class="gem-divider " style="margin-top: 75px;"></div>
                                                                        <div class="gem-list lazy-loading gem-list-type-check-style-1 gem-list-color-3" style="#0eaaf5  !important">
                                                                            <ul>
                                                                                @foreach ($pro->lists as $item)
                                                                                <li>{{ $item->title }}</li>

                                                                                @endforeach
                                
                                                                            </ul>
                                                                        </div>
                                                                        <div class="clearboth"></div>
                                                                        <div class="gem-divider " style="margin-top: 100px;"></div>
                                                                        <div class="gem-button-container gem-button-position-right lazy-loading"><a title="برنامج برافو" class="gem-button gem-button-size-medium gem-button-style-flat gem-button-text-weight-normal lazy-loading-item" data-ll-effect="drop-right-without-wrap" style="border-radius: 50px;background-color: #0eaaf5 ;color: #ffffff;"
                                                                                onmouseleave="this.style.backgroundColor='#0eaaf5 ';this.style.color='#ffffff';" onmouseenter="this.style.backgroundColor='#0eaaf5 ';this.style.color='#ffffff';" href="{{ route('single_pro',$pro->id) }}"
                                                                                target="_blank">{{ __('Learn about the program') }}</a></div>
                                                                        <div class="clearboth"></div>
                                                                        <div class="gem-divider " style="margin-top: 200px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <style>
                                            #programs .begin-square:before {
                                                content: "";
                                                width: 145px;
                                                height: 145px;
                                                background: #007396;
                                                position: absolute;
                                                top: -21px;
                                                right: -26px;
                                                z-index: -1;
                                                border-radius: 5px;
                                            }
                                            
                                            #programs .prof-square:before {
                                                content: "";
                                                width: 145px;
                                                height: 145px;
                                                background: #df7242;
                                                position: absolute;
                                                top: -21px;
                                                right: -26px;
                                                z-index: -1;
                                                border-radius: 5px;
                                            }
                                            
                                            #programs li {
                                                font-size: 22px;
                                                line-height: 29px;
                                                font-weight: 100;
                                                color: #171b2d;
                                            }
                                            
                                            #programs .gem-list>ul>li:before {
                                                font-size: 24px;
                                                margin-right: 10px;
                                            }
                                            
                                            #programs .gem-image-centered-box {
                                                margin-bottom: -7px;
                                            }
                                            
                                            #programs .prof-square,
                                            #programs .begin-square {
                                                position: relative;
                                                z-index: 1;
                                            }
                                            
                                            @media(max-width:767px) {
                                                #programs .begin-square:before,
                                                #programs .prof-square:before {
                                                    width: 115px !important;
                                                    height: 115px !important;
                                                }
                                            }
                                            
                                            @media(max-width:1250px) {
                                                #programs .gem-list>ul>li:before {
                                                    margin-left: 0px !important;
                                                }
                                            }
                                        </style>
                                        <!-- Gallery -->
                                        <!-- Grid row -->
<!-- Page Content -->
<div style="width: 100%" >

    <h1 id="vc_row-62986ef22f13e" class="fw-light text-center text-lg-start mt-4 mb-0">{{ __('Partners') }}</h1>
  
    <hr class="mt-2 mb-5">



    <div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
          <a class="black-text" href="#multi-item-example" data-slide="prev"><i class="fas fa-angle-left fa-3x pr-3"></i></a>
          <a class="black-text" href="#multi-item-example" data-slide="next"><i class="fas fa-angle-right fa-3x pl-3"></i></a>
        </div>
        <!--/.Controls-->
      
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
      
          <!--First slide-->

          
          @foreach ($partners->chunk(4) as $key=>$item)
   
          
          <div class="carousel-item active">
            @foreach ($item as $chunk)
            <div class="col-md-3 mb-3">
              <div class="card">
                <img class="img-fluid" src="http://foryougo.foryougo.net/images/brand/{{ $chunk->image }}"
                  alt="Card image cap">
              </div>
            </div>
            @endforeach
          </div>
                  

                  
             
       
             @endforeach
          <!--/.Third slide-->
      
        </div>
        <!--/.Slides-->
      
      </div>















  
  </div>
  <!-- Grid row -->
                             
  <!-- Gallery -->
                                          <div class="gem-divider " style="margin-top: 160px;"></div>

                                       
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <div class="vc_row-full-width-before"></div>
                                        <div id="vc_row-62986ef239c0f" style="background:gainsboro" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1601554316679 vc_row-o-content-middle vc_row-flex">
                                            <script type="text/javascript">
                                                if (typeof(gem_fix_fullwidth_position) == "function") {
                                                    gem_fix_fullwidth_position(document.getElementById("vc_row-62986ef239c0f"));
                                                }
                                            </script>
                                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                                <div class="vc_column-inner vc_custom_1589911199704">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <div class="title-h4"><span style="color: #2c2e3d;">{{ __('Figures and Statistics') }}</span></div>

                                                            </div>
                                                        </div>
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider " style="margin-top: 22px;"></div>
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <div class="title-xlarge" style="color: #69489D">{{ $statistic->main_title }}</div>

                                                            </div>
                                                        </div>
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider " style="margin-top: 35px;"></div>
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider " style="margin-top: 50px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="counterdirection wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-6 vc_col-md-offset-0 vc_col-md-6">
                                                <div class="vc_column-inner vc_custom_1601551755857">
                                                    <div class="wpb_wrapper">
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider " style="margin-top: 25px;"></div>
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1601550661897">
                                                            <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                                                                <div class="vc_column-inner vc_custom_1601550931002">
                                                                    <div class="wpb_wrapper">
                                                                        <div data-number-format="(ddd).ddd" class="gem-counter-box row inline-row inline-row-center gem-counter-style-1 lazy-loading lazy-loading-not-hide">
                                                                            <div class="gem-counter col-xs-12 inline-column gem-counter-effect-border-reverse">
                                                                                <div class="gem-counter-inner">
                                                                                    <div class="gem-counter-icon">
                                                                                        <div class="gem-icon gem-icon-pack-material gem-icon-size-small  gem-icon-shape-circle" style="border-color: #4ed2b3;opacity: 1;">
                                                                                            <div class="gem-icon-inner" style=""><span class="gem-icon-half-1" style="color: #4ed2b3;"><span class="back-angle">&#{!! $statistic->icon1 !!};</span></span><span class="gem-icon-half-2" style="color: #4ed2b3;"><span class="back-angle">&#{!! $statistic->icon1 !!};</span></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="gem-counter-number" style="color: #3c3950">
                                                                                        <div class="gem-counter-odometer" data-to="{{ $statistic->number1 }}">0</div><span class="gem-counter-suffix">+</span></div>
                                                                                    <div class="gem-counter-text styled-subtitle" style="color: #5f727f">{{ $statistic->title1 }} </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                                <div class="vc_column-inner vc_custom_1589910971774">
                                                                    <div class="wpb_wrapper">
                                                                        <div data-number-format="(ddd).ddd" class="gem-counter-box row inline-row inline-row-center gem-counter-style-1 lazy-loading lazy-loading-not-hide">
                                                                            <div class="gem-counter col-xs-12 inline-column gem-counter-effect-border-reverse">
                                                                                <div class="gem-counter-inner">
                                                                                    <div class="gem-counter-icon">
                                                                                        <div class="gem-icon gem-icon-pack-material gem-icon-size-small  gem-icon-shape-circle" style="border-color: #00bcd4;opacity: 1;">
                                                                                            <div class="gem-icon-inner" style=""><span class="gem-icon-half-1" style="color: #00bcd4;"><span class="back-angle">&#{!! $statistic->icon2 !!};</span></span><span class="gem-icon-half-2" style="color: #00bcd4;"><span class="back-angle">&#{!! $statistic->icon2 !!};</span></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="gem-counter-number" style="color: #3c3950">
                                                                                        <div class="gem-counter-odometer" data-to="{{ $statistic->number2 }}">0</div><span class="gem-counter-suffix">+</span></div>
                                                                                    <div class="gem-counter-text styled-subtitle" style="color: #5f727f">{{ $statistic->title2 }}  </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                            <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                                                                <div class="vc_column-inner vc_custom_1589910960814">
                                                                    <div class="wpb_wrapper">
                                                                        <div data-number-format="(ddd).ddd" class="gem-counter-box row inline-row inline-row-center gem-counter-style-1 lazy-loading lazy-loading-not-hide">
                                                                            <div class="gem-counter col-xs-12 inline-column gem-counter-effect-border-reverse">
                                                                                <div class="gem-counter-inner">
                                                                                    <div class="gem-counter-icon">
                                                                                        <div class="gem-icon gem-icon-pack-material gem-icon-size-small  gem-icon-shape-circle" style="border-color: #8f6cff;opacity: 1;">
                                                                                            <div class="gem-icon-inner" style=""><span class="gem-icon-half-1" style="color: #8f6cff;"><span class="back-angle">&#{!! $statistic->icon3 !!};</span></span><span class="gem-icon-half-2" style="color: #8f6cff;"><span class="back-angle">&#{!! $statistic->icon3 !!};</span></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="gem-counter-number" style="color: #3c3950">
                                                                                        <div class="gem-counter-odometer" data-to="{{ $statistic->number3 }}">0</div><span class="gem-counter-suffix">+</span></div>
                                                                                    <div class="gem-counter-text styled-subtitle" style="color: #5f727f">{{ $statistic->title3 }} </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill">
                                                                <div class="vc_column-inner vc_custom_1589910976390">
                                                                    <div class="wpb_wrapper">
                                                                        <div data-number-format="(ddd).ddd" class="gem-counter-box row inline-row inline-row-center gem-counter-style-1 lazy-loading lazy-loading-not-hide">
                                                                            <div class="gem-counter col-xs-12 inline-column gem-counter-effect-border-reverse">
                                                                                <div class="gem-counter-inner">
                                                                                    <div class="gem-counter-icon">
                                                                                        <div class="gem-icon gem-icon-pack-material gem-icon-size-small  gem-icon-shape-circle" style="border-color: #3f99ff;opacity: 1;">
                                                                                            <div class="gem-icon-inner" style=""><span class="gem-icon-half-1" style="color: #3f99ff;"><span class="back-angle">&#{!! $statistic->icon4 !!};</span></span>
                                                                                                <span class="gem-icon-half-2" style="color: #3f99ff;"><span class="back-angle">&#{!! $statistic->icon4 !!};</span></span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="gem-counter-number" style="color: #3c3950">
                                                                                        <div class="gem-counter-odometer" data-to="{{ $statistic->number4 }}">0</div><span class="gem-counter-suffix"></span></div>
                                                                                    <div class="gem-counter-text styled-subtitle" style="color: #5f727f">{{ $statistic->title4 }}</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider " style="margin-top: 80px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <style>
                                            #vc_row-62986ef239c0f .gem-counter.inline-column {
                                                margin-bottom: 20px;
                                            }
                                            
                                            @media (max-width: 1199px) {
                                                #vc_row-62986ef239c0f .wpb_row>*,
                                                #vc_row-62986ef239c0f .row>*,
                                                #vc_row-62986ef239c0f .wpb_row,
                                                #vc_row-62986ef239c0f .row {
                                                    margin-top: 0;
                                                }
                                            }
                                            
                                            @media (max-width: 767px) {
                                                #vc_row-62986ef239c0f .vc_column-inner {
                                                    border-width: 0 !important;
                                                }
                                            }
                                        </style>
                                        <div class="vc_row-full-width-before"></div>
                                        <div id="contact_us" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1600720753000 vc_row-has-fill">
                                            <script type="text/javascript">
                                                if (typeof(gem_fix_fullwidth_position) == "function") {
                                                    gem_fix_fullwidth_position(document.getElementById("contact_us"));
                                                }
                                            </script>
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider " style="margin-top: 60px;"></div>
                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top vc_custom_1600767829431">
                                                            <div class="wpb_wrapper">
                                                                <h2 style="text-align: center;"><span style="color: #ffffff;">{{ __('Start your journey with us now') }}</span></h2>

                                                            </div>
                                                        </div>

                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_bottom-to-top bottom-to-top vc_custom_1600767836328">
                                                            <div class="wpb_wrapper">
                                                                <h3 style="text-align: center;"><span style="color: #ffffff;">{{ __('Join us now') }}</span></h3>

                                                            </div>
                                                        </div>
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider " style="margin-top: 5px;"></div>
                                                        
                                                          
                                                          <div class="container"  style="width: 50%">
                                                            <div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
                                                               {{ __('Thank you for joining us') }} 
                                                              </div>
                                                              <form id="SubmitForm" style="color: white">
                                                                <div class="mb-3">
                                                                    <label for="compname" class="form-label">{{ __('Facility Name') }}</label>
                                                                    <input type="text" style="height: 50px;font-size: 18px;" class="form-control" id="compname">
                                                                    <span class="text-danger" id="COMPErrorMsg"></span>
                                                                  </div>
                                                                <div class="mb-3">
                                                                  <label for="InputName" class="form-label">{{ __('Name') }}</label>
                                                                  <input type="text" style="height: 50px;font-size: 18px;" class="form-control" id="InputName">
                                                                  <span class="text-danger" id="nameErrorMsg"></span>
                                                                </div>
                                                          
                                                                <div class="mb-3">
                                                                  <label for="InputEmail" class="form-label">{{ __('Email address') }}</label>
                                                                  <input type="email"  style="height: 50px;font-size: 18px;" class="form-control" id="InputEmail">
                                                                  <span class="text-danger" id="emailErrorMsg"></span>
                                                                </div>
                                                          
                                                                <div class="mb-3">
                                                                  <label for="InputMobile" class="form-label">{{ __('Mobile') }}</label>
                                                                  <input type="number"  style="height: 50px;font-size: 18px;" class="form-control" id="InputMobile">
                                                                  <span class="text-danger" id="mobileErrorMsg"></span> 
                                                                </div>
                                                          
                                                                <div class="mb-3">
                                                                    <label for="InputMobile" class="form-label">{{ __('Commercial Register') }}</label>
                                                                    <input type="number"  style="height: 50px;font-size: 18px;" class="form-control" id="co_register">
                                                                    <span class="text-danger" id="CoErrorMsg"></span> 
                                                                  </div>
                                                                
                                                                
                                                                <button style="    font-size: 17px;
                                                                height: 40px;
                                                                background: #DE4F76;
                                                                width: 100px;" type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                                              </form>
                                                          </div>
                                                          
                                                        <div class="clearboth"></div>
                                                        <div class="gem-divider " style="margin-top: 60px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                        <style>
                                            #vc_row-62986ef23ee6f p span {
                                                font-weight: 700;
                                                font-family: 'Montserrat';
                                                text-transform: uppercase;
                                                vertical-align: top;
                                                margin: 0 3px;
                                                line-height: 73px;
                                            }
                                            
                                            #vc_row-62986ef23ee6f .small-txt {
                                                font-size: 22px;
                                            }
                                            
                                            #vc_row-62986ef23ee6f .medium-txt {
                                                font-size: 30px;
                                            }
                                            
                                            #vc_row-62986ef23ee6f .xlarge-txt {
                                                font-size: 64px;
                                            }
                                            
                                            #vc_row-62986ef23ee6f .large-txt {
                                                font-size: 52px;
                                            }
                                            
                                            #vc_row-62986ef23ee6f .button-padings a {
                                                padding-left: 70px;
                                                padding-right: 70px;
                                            }
                                            
                                            @media(max-width:768px) {
                                                #vc_row-62986ef23ee6f .xlarge-txt {
                                                    font-size: 37px;
                                                }
                                                #vc_row-62986ef23ee6f .large-txt {
                                                    font-size: 35px;
                                                }
                                            }
                                            
                                            @media(max-width:768px) {
                                                #vc_row-62986ef23ee6f .vc_custom_1600719477594 {
                                                    margin-bottom: -150px !important;
                                                }
                                            }
                                        </style>
                                        </p>

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
            <!-- #main-content -->


        </div>
        <!-- #main -->
        <div id="lazy-loading-point"></div>

        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="container">

                <div class="row inline-row footer-widget-area" role="complementary">
                    <div id="custom_html-3" class="widget_text widget inline-column col-md-4 col-sm-6 col-xs-12 count-3 widget_custom_html">
                        <div class="textwidget custom-html-widget">&nbsp;
                            <p style="text-align: right;"><strong>{{ __('contact us') }}:   </strong></p>
                            <p style="text-align: right;">{{ __('address') }} : {{ get_general_value('address_'.app()->getLocale()) }}</p>
                            <p style="text-align: right;">{{ __('Email address') }} : {{ get_general_value('email') }} </p>
                            <p style="text-align: right;">{{ __('Mobile') }}  : {{ get_general_value('phone') }} </p>
                        </div>
                    </div>
                    <div id="custom_html-2" class="widget_text widget inline-column col-md-4 col-sm-6 col-xs-12 count-3 widget_custom_html">
                        <h3 class="widget-title">{{ __('usful links') }}</h3>
                        <div class="textwidget custom-html-widget">
                            <p dir="rtl" style="text-align: right;"><a class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-parent menu-item-1451 megamenu-first-element" href="#vc_row-62986ef229645">{{__('Home') }}</a></p>
                            <p dir="rtl" style="text-align: right;">
                                <a href="#vc_row-62986ef22f13e">{{__('Partners') }}</a></p>
                            <p dir="rtl" style="text-align: right;">
                                <a href="#programs">{{__('Our programs') }}</a></p>
                        </div>
                    </div>
                    <div id="custom_html-7" class="widget_text widget inline-column col-md-4 col-sm-6 col-xs-12 count-3 widget_custom_html">
                        <div class="textwidget custom-html-widget"><img class="aligncenter" style="margin: 25px 0 15px 0;" data-tgpli-src="{{ asset('uploads/'.get_general_value('header_logo')) }}" alt="" width="190" data-tgpli-inited data-tgpli-image-inited id="tgpli-62986ef24458c"
                            />
                            
                            <img  src="{{ asset('uploads/'.get_general_value('header_logo')) }}" height="100" class="aligncenter" style=" height: 200px;" alt="">
                            {!!  get_general_value('desc_'.app()->getLocale()) !!}
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
    <link rel='stylesheet' id='vc_animate-css-css' href='wp_content/plugins/js_composer/assets/lib/bower/animate-css/animate.min31dc.css?ver=6.6.0' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-lazy-loading-animations-css' href='wp_content/themes/thegem/css/thegem-lazy-loading-animations647e.css?ver=5.5.9' type='text/css' media='all' />

    <link rel='stylesheet' id='odometr-css' href='wp_content/themes/thegem/css/odometer-theme-default647e.css?ver=5.5.9' type='text/css' media='all' />
    <script type='text/javascript' src='wp_content/themes/thegem/js/jquery.dlmenu647e.js?ver=5.5.9' id='jquery-dlmenu-js'></script>
    <script type='text/javascript' id='thegem-menu-init-script-js-extra'>
        /* <![CDATA[ */
        var thegem_dlmenu_settings = {
            "backLabel": "Back",
            "showCurrentLabel": "Show this page"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='wp_content/themes/thegem/js/thegem-menu_init647e.js?ver=5.5.9' id='thegem-menu-init-script-js'></script>
    <script type='text/javascript' src='wp_content/themes/thegem/js/svg4everybody647e.js?ver=5.5.9' id='svg4everybody-js'></script>
    <script type='text/javascript' src='wp_content/themes/thegem/js/thegem-form-elements647e.js?ver=5.5.9' id='thegem-form-elements-js'></script>
    <script type='text/javascript' src='wp_content/themes/thegem/js/jquery.easing647e.js?ver=5.5.9' id='jquery-easing-js'></script>
    <script type='text/javascript' src='wp_content/themes/thegem/js/thegem-header647e.js?ver=5.5.9' id='thegem-header-js'></script>
    <script type='text/javascript' src='wp_content/themes/thegem/js/SmoothScroll647e.js?ver=5.5.9' id='SmoothScroll-js'></script>
    <script type='text/javascript' src='wp_content/themes/thegem/js/functions647e.js?ver=5.5.9' id='thegem-scripts-js'></script>
    <script type='text/javascript' src='wp_content/themes/thegem/js/fancyBox/jquery.mousewheel.pack647e.js?ver=5.5.9' id='jquery-mousewheel-js'></script>
    <script type='text/javascript' src='wp_content/themes/thegem/js/fancyBox/jquery.fancybox.min647e.js?ver=5.5.9' id='jquery-fancybox-js'></script>
    <script type='text/javascript' src='wp_content/themes/thegem/js/fancyBox/jquery.fancybox-init647e.js?ver=5.5.9' id='fancybox-init-script-js'></script>
    <script type='text/javascript' id='leadin-script-loader-js-js-extra'>
        /* <![CDATA[ */
        var leadin_wordpress = {
            "userRole": "visitor",
            "pageType": "home",
            "leadinPluginVersion": "8.0.227"
        };
        /* ]]> */
    </script>


    <script type='text/javascript' src='wp-includes/js/wp-embed.min647e.js?ver=5.5.9' id='wp-embed-js'></script>
    <script type='text/javascript' src='wp_content/plugins/js_composer/assets/js/dist/js_composer_front.min31dc.js?ver=6.6.0' id='wpb_composer_front_js-js'></script>
    <script type='text/javascript' src='wp_content/plugins/js_composer/assets/lib/vc_waypoints/vc-waypoints.min31dc.js?ver=6.6.0' id='vc_waypoints-js'></script>
    <script type='text/javascript' src='wp_content/themes/thegem/js/thegem-lazyLoading647e.js?ver=5.5.9' id='thegem-lazy-loading-js'></script>
    <script type='text/javascript' src='wp_content/themes/thegem/js/odometer647e.js?ver=5.5.9' id='odometr-js'></script>
    <script type='text/javascript' src='wp_content/themes/thegem/js/counters-effects647e.js?ver=5.5.9' id='thegem-counters-effects-js'></script>
    <script type='text/javascript' src='wp_content/themes/thegem/js/thegem-counters647e.js?ver=5.5.9' id='thegem-counter-js'></script>
    <script type='text/javascript' src='wp_content/themes/thegem/js/isotope.min647e.js?ver=5.5.9' id='isotope-js-js'></script>
   <script>
        $('#SubmitForm').on('submit',function(e){
            e.preventDefault();
            let co_name = $('#compname').val();
            let name = $('#InputName').val();
            let email = $('#InputEmail').val();
            let mobile = $('#InputMobile').val();
            let co_register = $('#co_register').val();


            
            
            $.ajax({
              url: "/submit-form-partner",
              type:"POST",
              data:{
                "_token": "{{ csrf_token() }}",
                name:name,
                email:email,
                mobile:mobile,
                co_register:co_register,
                co_name:co_name
              },
              success:function(response){
                $('#successMsg').show();
                    $('#nameErrorMsg').hide();
                    $('#emailErrorMsg').hide();
                    $('#mobileErrorMsg').hide();
                    $('#CoErrorMsg').hide();
                    $('#COMPErrorMsg').hide();
                    $('#InputName').val('');
                    $('#InputEmail').val('');
                    $('#InputMobile').val('');
                    $('#co_register').val('');
                    $('#compname').val('');
              },
              error: function(response) {
                $('#nameErrorMsg').text(response.responseJSON.errors.name);
                $('#emailErrorMsg').text(response.responseJSON.errors.email);
                $('#mobileErrorMsg').text(response.responseJSON.errors.mobile);
                $('#CoErrorMsg').text(response.responseJSON.errors.co_register);
                $('#COMPErrorMsg').text(response.responseJSON.errors.co_name);
              },               

              });
            });
            $(function() {
  var selectedClass = "";
  $(".filter").click(function(){
    selectedClass = $(this).attr("data-rel");
    $("#gallery").fadeTo(100, 0.1);
    $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
    setTimeout(function() {
      $("."+selectedClass).fadeIn().addClass('animation');
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
            deferredFile1.href = "wp_content/themes/thegem/css/icons-material647e.css?ver=5.5.9";
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