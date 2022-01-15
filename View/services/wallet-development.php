<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="pingback" href="https://corevestor.vn/xmlrpc.php" />

    <script type="text/javascript">
        document.documentElement.className = 'js';
    </script>

    <script>
        var et_site_url = 'https://corevestor.vn';
        var et_post_id = '32';

        function et_core_page_resource_fallback(a, b) {
            "undefined" === typeof b && (b = a.sheet.cssRules && 0 === a.sheet.cssRules.length);
            b && (a.onerror = null, a.onload = null, a.href ? a.href = et_site_url + "/?et_core_page_resource=" + a.id + et_post_id : a.src && (a.src = et_site_url + "/?et_core_page_resource=" + a.id + et_post_id))
        }
    </script>
    <title>Wallet Development | Corevestor</title>
    <meta name='robots' content='noindex, nofollow' />
    <link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Corevestor &raquo; Feed" href="https://corevestor.vn/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Corevestor &raquo; Comments Feed" href="https://corevestor.vn/comments/feed/" />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/corevestor.vn\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.2"
            }
        };
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case "emoji":
                        return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <meta content="Corevestor v.2.3.0.1.1620916267" name="generator" />
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
    <link rel='stylesheet' id='gtranslate-style-css' href='https://corevestor.vn/wp-content/plugins/gtranslate/gtranslate-style24.css?ver=5.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='https://corevestor.vn/wp-includes/css/dist/block-library/style.min.css?ver=5.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='divi-style-css' href='https://corevestor.vn/wp-content/themes/Corevestor/style.css?ver=4.4.0' type='text/css' media='all' />
    <link rel='stylesheet' id='et-builder-googlefonts-cached-css' href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CTitillium+Web%3A200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C900&#038;ver=5.8.2#038;subset=latin,latin-ext'
        type='text/css' media='all' />
    <link rel='stylesheet' id='corevestor-parent-css' href='https://corevestor.vn/wp-content/themes/Divi/style.css?ver=5.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='corevestor-css' href='https://corevestor.vn/wp-content/themes/Corevestor//assets/styles/corevestor.css?ver=5.8.2' type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css' href='https://corevestor.vn/wp-includes/css/dashicons.min.css?ver=5.8.2' type='text/css' media='all' />
    <script type='text/javascript' src='https://corevestor.vn/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
    <script type='text/javascript' src='https://corevestor.vn/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <script type='text/javascript' src='//cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js?ver=5.8.2' id='es6-promise-js'></script>
    <script type='text/javascript' id='et-core-api-spam-recaptcha-js-extra'>
        /* <![CDATA[ */
        var et_core_api_spam_recaptcha = {
            "site_key": "",
            "page_action": {
                "action": "wallet_development"
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://corevestor.vn/wp-content/themes/Divi/core/admin/js/recaptcha.js?ver=5.8.2' id='et-core-api-spam-recaptcha-js'></script>
    <link rel="https://api.w.org/" href="https://corevestor.vn/wp-json/" />
    <link rel="alternate" type="application/json" href="https://corevestor.vn/wp-json/wp/v2/pages/32" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://corevestor.vn/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://corevestor.vn/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 5.8.2" />
    <link rel="canonical" href="https://corevestor.vn/wallet-development/" />
    <link rel='shortlink' href='https://corevestor.vn/?p=32' />
    <link rel="alternate" type="application/json+oembed" href="https://corevestor.vn/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcorevestor.vn%2Fwallet-development%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://corevestor.vn/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcorevestor.vn%2Fwallet-development%2F&#038;format=xml" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <style type="text/css" id="custom-background-css">
        body.custom-background {
            background-color: #282828;
        }
    </style>
    <link rel="icon" href="https://corevestor.vn/wp-content/uploads/2021/10/cropped-z2829409816325_dd5de2e9e67ef9d7d2b011ce149d54e5-32x32.jpg" sizes="32x32" />
    <link rel="icon" href="https://corevestor.vn/wp-content/uploads/2021/10/cropped-z2829409816325_dd5de2e9e67ef9d7d2b011ce149d54e5-192x192.jpg" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://corevestor.vn/wp-content/uploads/2021/10/cropped-z2829409816325_dd5de2e9e67ef9d7d2b011ce149d54e5-180x180.jpg" />
    <meta name="msapplication-TileImage" content="https://corevestor.vn/wp-content/uploads/2021/10/cropped-z2829409816325_dd5de2e9e67ef9d7d2b011ce149d54e5-270x270.jpg" />
    <link rel="stylesheet" id="et-core-unified-32-cached-inline-styles" href="https://corevestor.vn/wp-content/et-cache/32/et-core-unified-32-16373185222944.min.css" onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)"
    />
</head>

<body class="page-template-default page page-id-32 custom-background et_button_custom_icon et_pb_button_helper_class et_fixed_nav et_show_nav et_primary_nav_dropdown_animation_slide et_secondary_nav_dropdown_animation_fade et_header_style_left et_pb_footer_columns2 et_cover_background et_pb_gutter windows et_pb_gutters3 et_pb_pagebuilder_layout et_smooth_scroll et_no_sidebar et_divi_theme et-db et_minified_js et_minified_css">
    <div id="page-container">



        <header id="main-header" data-height-onload="66">
            <div class="container clearfix et_menu_container">
                <div class="logo_container">
                    <span class="logo_helper"></span>
                    <a href="https://corevestor.vn/">
						<img src="https://corevestor.vn/wp-content/uploads/2021/10/Logo-corevestor-ngang@4x.png" alt="Corevestor" id="logo" data-height-percentage="54" />
					</a>
                </div>
                <div id="et-top-navigation" data-height="66" data-fixed-height="40">
                    <nav id="top-menu-nav">
                        <ul id="top-menu" class="nav">
                            <li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-23"><a href="https://corevestor.vn/">Home</a></li>
                            <li id="menu-item-595" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-595"><a href="#">Services</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-662" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-662"><a href="https://corevestor.vn/ico-development/">ICO Development</a></li>
                                    <li id="menu-item-883" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-883"><a href="https://corevestor.vn/ico-website-design/">ICO Website Design</a></li>
                                    <li id="menu-item-343" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-343"><a href="https://corevestor.vn/ico-marketing-guide/">ICO Marketing Guide</a></li>
                                    <li id="menu-item-344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-344"><a href="https://corevestor.vn/ico-marketing-services/">ICO Marketing Services</a></li>
                                    <li id="menu-item-342" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-342"><a href="https://corevestor.vn/smart-contract-development/">Smart contract development</a></li>
                                    <li id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-32 current_page_item menu-item-34"><a href="https://corevestor.vn/wallet-development/" aria-current="page">Wallet Development</a></li>
                                    <li id="menu-item-341" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-341"><a href="https://corevestor.vn/cryptocurrency-exchange-development/">Cryptocurrency Exchange</a></li>
                                </ul>
                            </li>
                            <li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54"><a href="https://corevestor.vn/news/">News</a></li>
                            <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="https://corevestor.vn/about/">About</a></li>
                            <li id="menu-item-465" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-465"><a href="https://corevestor.vn/contact/">Contact</a></li>
                        </ul>
                    </nav>



                    <div id="et_top_search">
                        <span id="et_search_icon"></span>
                    </div>

                    <div id="et_mobile_nav_menu">
                        <div class="mobile_nav closed">
                            <span class="select_page">Select Page</span>
                            <span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
                        </div>
                    </div>
                </div>
                <!-- #et-top-navigation -->
            </div>
            <!-- .container -->
            <div class="et_search_outer">
                <div class="container et_search_form_container">
                    <form role="search" method="get" class="et-search-form" action="https://corevestor.vn/">
                        <input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" /> </form>
                    <span class="et_close_search_field"></span>
                </div>
            </div>
        </header>
        <!-- #main-header -->
        <div id="et-main-area">

            <div id="main-content">



                <article id="post-32" class="post-32 page type-page status-publish hentry">


                    <div class="entry-content">
                        <div id="et-boc" class="et-boc">

                            <div class="et-l et-l--post">
                                <div class="et_builder_inner_content et_pb_gutters3">
                                    <div class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular">




                                        <div class="et_pb_row et_pb_row_0 section-header-content">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">


                                                    <div class="et_pb_text_inner">
                                                        <h1>Cryptocurrency Wallet Development Company</h1>
                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                                <div class="et_pb_button_module_wrapper et_pb_button_0_wrapper  et_pb_module ">
                                                    <a class="et_pb_button et_pb_button_0 et_pb_bg_layout_light" href="http://corevetor.vn/contact/" target="_blank">contact us</a>
                                                </div>
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->


                                    </div>
                                    <!-- .et_pb_section -->
                                    <div class="et_pb_section et_pb_section_1 et_section_regular">




                                        <div class="et_pb_row et_pb_row_1">
                                            <div class="et_pb_column et_pb_column_3_5 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_left et_pb_bg_layout_light">


                                                    <div class="et_pb_text_inner">
                                                        <h3>Company</h3>
                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                                <div class="et_pb_module et_pb_text et_pb_text_2  et_pb_text_align_left et_pb_bg_layout_light">


                                                    <div class="et_pb_text_inner">
                                                        <h2>Cryptocurrency Wallet Development</h2>
                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                                <div class="et_pb_module et_pb_divider et_pb_divider_0 et_pb_divider_position_ et_pb_space">
                                                    <div class="et_pb_divider_internal"></div>
                                                </div>
                                                <div class="et_pb_module et_pb_text et_pb_text_3  et_pb_text_align_left et_pb_bg_layout_light">


                                                    <div class="et_pb_text_inner">
                                                        <p>Cryptocurrency wallet is a software functionality allowing users to earn, monitor and transfer virtual currencies. Unlike existing banks or pocket wallets that store physical currencies, cryptocurrencies
                                                            can only be recorded as transactions on the blockchain technology. If a cryptocurrency is transferred to the wallet it means that the ownership of the currency is signed off to a dedicated wallet’s
                                                            address. Cryptocurrency wallet development is a requisite for the effective exchange of cryptocurrencies.</p>
                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_2_5 et_pb_column_2  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module et_pb_image et_pb_image_0">


                                                    <span class="et_pb_image_wrap "><img src="https://corevestor.vn/wp-content/uploads/2021/05/deskstop_wallet.png" alt="" title="" srcset="https://corevestor.vn/wp-content/uploads/2021/05/deskstop_wallet.png 876w, https://corevestor.vn/wp-content/uploads/2021/05/deskstop_wallet-300x219.png 300w, https://corevestor.vn/wp-content/uploads/2021/05/deskstop_wallet-768x560.png 768w" sizes="(max-width: 876px) 100vw, 876px" /></span>
                                                </div>
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->


                                    </div>
                                    <!-- .et_pb_section -->
                                    <div class="et_pb_section et_pb_section_2 et_pb_with_background et_section_regular">




                                        <div class="et_pb_row et_pb_row_2 section-header-content">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_3  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module et_pb_text et_pb_text_4  et_pb_text_align_left et_pb_bg_layout_light">


                                                    <div class="et_pb_text_inner">
                                                        <h2><span style="color: #ff9900;">Cryptocurrency Wallet Development Services</span></h2>
                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                                <div class="et_pb_module et_pb_divider et_pb_divider_1 et_pb_divider_position_center et_pb_space">
                                                    <div class="et_pb_divider_internal"></div>
                                                </div>
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->
                                        <div class="et_pb_row et_pb_row_3 et_pb_equal_columns">
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_4  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_0  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><img src="https://corevestor.vn/wp-content/uploads/2021/05/20-copy-e1622181931139.png" alt="" class="et-waypoint et_pb_animation_top" /></span></div>
                                                        <div class="et_pb_blurb_container">
                                                            <h4 class="et_pb_module_header"><span>Mobile Wallet</span></h4>
                                                            <div class="et_pb_blurb_description">
                                                                <p>A wallet app that can be accessed on any mobile device to lead seamless cryptocurrency transactions while sending and receiving cryptos between buyer and seller.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_5  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_1  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><img src="https://corevestor.vn/wp-content/uploads/2021/05/decentralized-copy-e1622181869392.png" alt="" class="et-waypoint et_pb_animation_top" /></span></div>
                                                        <div class="et_pb_blurb_container">
                                                            <h4 class="et_pb_module_header"><span>Web wallet</span></h4>
                                                            <div class="et_pb_blurb_description">
                                                                <p>An integrated wallet application inside an exchange that leads secure cryptocurrency transactions between user and admin or between sender and receiver.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_6  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_2  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><img src="https://corevestor.vn/wp-content/uploads/2021/05/hybird-exchange-copy-e1622181901581.png" alt="" class="et-waypoint et_pb_animation_top" /></span></div>
                                                        <div class="et_pb_blurb_container">
                                                            <h4 class="et_pb_module_header"><span>Decentralized Wallet</span></h4>
                                                            <div class="et_pb_blurb_description">
                                                                <p>Make peer to peer operation between the sender and receiver to proceed seamless crypto transaction without the control of any central authority.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->


                                    </div>
                                    <!-- .et_pb_section -->
                                    <div class="et_pb_section et_pb_section_3 et_section_regular">




                                        <div class="et_pb_row et_pb_row_4">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_7  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module et_pb_text et_pb_text_5  et_pb_text_align_left et_pb_bg_layout_light">


                                                    <div class="et_pb_text_inner">
                                                        <h2><span style="color: #ff9900;">Cryptocurrency Wallet Features</span></h2>
                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                                <div class="et_pb_module et_pb_divider et_pb_divider_2 et_pb_divider_position_center et_pb_space">
                                                    <div class="et_pb_divider_internal"></div>
                                                </div>
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->
                                        <div class="et_pb_row et_pb_row_5 et_animated et_pb_equal_columns">
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_8  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_3  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#xe052;</span></span>
                                                        </div>
                                                        <div class="et_pb_blurb_container">
                                                            <h4 class="et_pb_module_header"><span>2 Factor Authentication</span></h4>
                                                            <div class="et_pb_blurb_description">
                                                                <p>Protecting the wallet with dual or multi factor authentication can lead a highly secured way of access to a wallet application while proceeding p2p transaction.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_9  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_4  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#xe052;</span></span>
                                                        </div>
                                                        <div class="et_pb_blurb_container">
                                                            <h4 class="et_pb_module_header"><span>Multi Coin Supported</span></h4>
                                                            <div class="et_pb_blurb_description">
                                                                <p>It Prevents a trader from maintaining multiple separate wallets for each type of cryptocurrency and can bring high security for all the crypto assets of a trader at one place.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_10  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_5  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#xe052;</span></span>
                                                        </div>
                                                        <div class="et_pb_blurb_container">
                                                            <h4 class="et_pb_module_header"><span>Merchant APIs</span></h4>
                                                            <div class="et_pb_blurb_description">
                                                                <p>Enriching the wallet application with merchant features can bring high user retention, as it paves the way for making cryptos as payment in real life use cases.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->
                                        <div class="et_pb_row et_pb_row_6 et_animated et_pb_equal_columns">
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_11  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_6  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#xe052;</span></span>
                                                        </div>
                                                        <div class="et_pb_blurb_container">
                                                            <h4 class="et_pb_module_header"><span>Billing and Invoicing</span></h4>
                                                            <div class="et_pb_blurb_description">
                                                                <p>Instant billing and automated invoice reports can ensure your crypto transaction is valid and will provide you a strong legal proof for the completed transactions.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_12  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_7  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#xe052;</span></span>
                                                        </div>
                                                        <div class="et_pb_blurb_container">
                                                            <h4 class="et_pb_module_header"><span>Dapps Supported</span></h4>
                                                            <div class="et_pb_blurb_description">
                                                                <p>Supports seamless operation with decentralized applications on any blockchain network, and will ensure the security of the tokens that passed in dapp network.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_13  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_8  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_light">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#xe052;</span></span>
                                                        </div>
                                                        <div class="et_pb_blurb_container">
                                                            <h4 class="et_pb_module_header"><span>Security</span></h4>
                                                            <div class="et_pb_blurb_description">
                                                                <p>Secures the wallet applications with password and PIN and ensures the authority of accessing the wallet before accessing the wallet account.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->


                                    </div>
                                    <!-- .et_pb_section -->
                                    <div class="et_pb_section et_pb_section_4 et_pb_with_background et_section_regular">




                                        <div class="et_pb_row et_pb_row_7">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_14  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module et_pb_text et_pb_text_6  et_pb_text_align_left et_pb_bg_layout_light">


                                                    <div class="et_pb_text_inner">
                                                        <h1 style="text-align: center;"><strong><span style="color: #ffffff;">Additional Features </span><span style="color: #ffffff;">of Cryptocurrency Wallet</span></strong></h1>
                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                                <div class="et_pb_module et_pb_divider et_pb_divider_3 et_pb_divider_position_ et_pb_space">
                                                    <div class="et_pb_divider_internal"></div>
                                                </div>
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->
                                        <div class="et_pb_row et_pb_row_8 et_animated">
                                            <div class="et_pb_column et_pb_column_1_2 et_pb_column_15  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_9  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><img src="https://corevestor.vn/wp-content/uploads/2021/05/stellar-block-copy-e1622181920709.png" alt="" class="et-waypoint et_pb_animation_top" /></span></div>
                                                        <div class="et_pb_blurb_container">
                                                            <h4 class="et_pb_module_header"><span>Hardware support</span></h4>
                                                            <div class="et_pb_blurb_description">
                                                                <p style="text-align: center;">Supports hardware wallet like trezor, ledger nano and keepkey to transfer cryptos During, the decentralized trading along with a decentralized wallet.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_2 et_pb_column_16  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_10  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><img src="https://corevestor.vn/wp-content/uploads/2021/05/p-to-p-copy-e1622181893116.png" alt="" class="et-waypoint et_pb_animation_top" /></span></div>
                                                        <div class="et_pb_blurb_container">
                                                            <h4 class="et_pb_module_header"><span>Push notifications</span></h4>
                                                            <div class="et_pb_blurb_description">
                                                                <p>Send frequent notifications of market denoting the bitcoin price, transaction details, market status and every dynamic changes of cryptocurrency industry can make you engaged always.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->
                                        <div class="et_pb_row et_pb_row_9 et_animated">
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_17  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_11  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><img src="https://corevestor.vn/wp-content/uploads/2021/05/15-copy-e1622181814663.png" alt="" class="et-waypoint et_pb_animation_top" /></span></div>
                                                        <div class="et_pb_blurb_container">
                                                            <h4 class="et_pb_module_header"><span>Wallet Backup</span></h4>
                                                            <div class="et_pb_blurb_description">
                                                                <p style="text-align: center;">If Incase of software failure or theft, wallet backup can prevent a trader from losing the cryptos,account details, PIN, transaction details and payments.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_18  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_12  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><img src="https://corevestor.vn/wp-content/uploads/2021/05/Solidity-soft-copy-e1622181912811.png" alt="" class="et-waypoint et_pb_animation_top" /></span></div>
                                                        <div class="et_pb_blurb_container">
                                                            <h4 class="et_pb_module_header"><span>QR Code Scanner</span></h4>
                                                            <div class="et_pb_blurb_description">
                                                                <p>This can make the buying and selling process of cryptocurrencies in one click, and make the crypto payments handier also safest across various devices or wallet apps.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_3 et_pb_column_19  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_with_border et_pb_module et_pb_blurb et_pb_blurb_13  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">


                                                    <div class="et_pb_blurb_content">
                                                        <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><img src="https://corevestor.vn/wp-content/uploads/2021/05/harsgrap-copy-e1622181907707.png" alt="" class="et-waypoint et_pb_animation_top" /></span></div>
                                                        <div class="et_pb_blurb_container">
                                                            <h4 class="et_pb_module_header"><span>Transaction History</span></h4>
                                                            <div class="et_pb_blurb_description">
                                                                <p>User/Trader can view the complete report of the transaction history which made through the wallet, and can give the traders a detailed clarity of each transaction which he/she made.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .et_pb_blurb_content -->
                                                </div>
                                                <!-- .et_pb_blurb -->
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->


                                    </div>
                                    <!-- .et_pb_section -->
                                    <div class="et_pb_section et_pb_section_5 et_section_regular">




                                        <div class="et_pb_row et_pb_row_10">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_20  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module et_pb_text et_pb_text_7  et_pb_text_align_left et_pb_bg_layout_light">


                                                    <div class="et_pb_text_inner">
                                                        <h2>Technologies We Use</h2>
                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                                <div class="et_pb_module et_pb_divider et_pb_divider_4 et_pb_divider_position_ et_pb_space">
                                                    <div class="et_pb_divider_internal"></div>
                                                </div>
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->
                                        <div class="et_pb_row et_pb_row_11">
                                            <div class="et_pb_column et_pb_column_1_5 et_pb_column_21  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module et_pb_image et_pb_image_1">


                                                    <span class="et_pb_image_wrap "><img src="https://corevestor.vn/wp-content/uploads/2021/05/Ethereum.png" alt="" title="" /></span>
                                                </div>
                                                <div class="et_pb_module et_pb_text et_pb_text_8  et_pb_text_align_center et_pb_bg_layout_light">


                                                    <div class="et_pb_text_inner">
                                                        <p>Ethereum</p>
                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_5 et_pb_column_22  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module et_pb_image et_pb_image_2">


                                                    <span class="et_pb_image_wrap "><img src="https://corevestor.vn/wp-content/uploads/2021/05/Hyperledger.png" alt="" title="" /></span>
                                                </div>
                                                <div class="et_pb_module et_pb_text et_pb_text_9  et_pb_text_align_center et_pb_bg_layout_light">


                                                    <div class="et_pb_text_inner">
                                                        <p>Hyperledger</p>
                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_5 et_pb_column_23  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module et_pb_image et_pb_image_3">


                                                    <span class="et_pb_image_wrap "><img src="https://corevestor.vn/wp-content/uploads/2021/05/Multichain.png" alt="" title="" /></span>
                                                </div>
                                                <div class="et_pb_module et_pb_text et_pb_text_10  et_pb_text_align_center et_pb_bg_layout_light">


                                                    <div class="et_pb_text_inner">
                                                        <p>Multichain</p>
                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_5 et_pb_column_24  et_pb_css_mix_blend_mode_passthrough">


                                                <div class="et_pb_module et_pb_image et_pb_image_4">


                                                    <span class="et_pb_image_wrap "><img src="https://corevestor.vn/wp-content/uploads/2021/05/azure.png" alt="" title="" /></span>
                                                </div>
                                                <div class="et_pb_module et_pb_text et_pb_text_11  et_pb_text_align_center et_pb_bg_layout_light">


                                                    <div class="et_pb_text_inner">
                                                        <p>Azure Blockchain</p>
                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_5 et_pb_column_25  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module et_pb_image et_pb_image_5">


                                                    <span class="et_pb_image_wrap "><img src="https://corevestor.vn/wp-content/uploads/2021/05/angular.png" alt="" title="" /></span>
                                                </div>
                                                <div class="et_pb_module et_pb_text et_pb_text_12  et_pb_text_align_center et_pb_bg_layout_light">


                                                    <div class="et_pb_text_inner">
                                                        <p>Angular JS</p>
                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->


                                    </div>
                                    <!-- .et_pb_section -->
                                    <div class="et_pb_section et_pb_section_6 et_pb_with_background et_section_regular">




                                        <div class="et_pb_row et_pb_row_12">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_26  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module et_pb_text et_pb_text_13  et_pb_text_align_left et_pb_bg_layout_light">


                                                    <div class="et_pb_text_inner">
                                                        <h1><span style="color: #ff9900;"><strong>CONTACT US</strong></span></h1>
                                                    </div>
                                                </div>
                                                <!-- .et_pb_text -->
                                                <div class="et_pb_module et_pb_divider et_pb_divider_5 et_pb_divider_position_ et_pb_space">
                                                    <div class="et_pb_divider_internal"></div>
                                                </div>
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->
                                        <div class="et_pb_row et_pb_row_13">
                                            <div class="et_pb_column et_pb_column_1_2 et_pb_column_27  et_pb_css_mix_blend_mode_passthrough">



                                                <div id="et_pb_contact_form_0" class="et_pb_with_border et_pb_module et_pb_contact_form_0 et_pb_contact_form_container clearfix" data-form_unique_num="0">



                                                    <div class="et-pb-contact-message"></div>

                                                    <div class="et_pb_contact">
                                                        <form class="et_pb_contact_form clearfix" method="post" action="">
                                                            <p class="et_pb_contact_field et_pb_contact_field_0 et_pb_contact_field_half" data-id="name" data-type="input">


                                                                <label for="et_pb_contact_name_0" class="et_pb_contact_form_label">Name</label>
                                                                <input type="text" id="et_pb_contact_name_0" class="input" value="" name="et_pb_contact_name_0" data-required_mark="required" data-field_type="input" data-original_id="name" placeholder="Name">
                                                            </p>
                                                            <p class="et_pb_contact_field et_pb_contact_field_1 et_pb_contact_field_half et_pb_contact_field_last" data-id="phone" data-type="input">


                                                                <label for="et_pb_contact_phone_0" class="et_pb_contact_form_label">Phone</label>
                                                                <input type="text" id="et_pb_contact_phone_0" class="input" value="" name="et_pb_contact_phone_0" data-required_mark="required" data-field_type="input" data-original_id="phone" placeholder="Phone">
                                                            </p>
                                                            <p class="et_pb_contact_field et_pb_contact_field_2 et_pb_contact_field_half" data-id="email" data-type="email">


                                                                <label for="et_pb_contact_email_0" class="et_pb_contact_form_label">Email</label>
                                                                <input type="text" id="et_pb_contact_email_0" class="input" value="" name="et_pb_contact_email_0" data-required_mark="required" data-field_type="email" data-original_id="email" placeholder="Email">
                                                            </p>
                                                            <p class="et_pb_contact_field et_pb_contact_field_3 et_pb_contact_field_last" data-id="message" data-type="text">


                                                                <label for="et_pb_contact_message_0" class="et_pb_contact_form_label">Request</label>
                                                                <textarea name="et_pb_contact_message_0" id="et_pb_contact_message_0" class="et_pb_contact_message input" data-required_mark="required" data-field_type="text" data-original_id="message" placeholder="Request"></textarea>
                                                            </p>
                                                            <input type="hidden" value="et_contact_proccess" name="et_pb_contactform_submit_0" />
                                                            <div class="et_contact_bottom_container">

                                                                <button type="submit" name="et_builder_submit_button" class="et_pb_contact_submit et_pb_button">Submit</button>
                                                            </div>
                                                            <input type="hidden" id="_wpnonce-et-pb-contact-form-submitted-0" name="_wpnonce-et-pb-contact-form-submitted-0" value="fe008a62ce" /><input type="hidden" name="_wp_http_referer" value="/wallet-development/"
                                                            />
                                                        </form>
                                                    </div>
                                                    <!-- .et_pb_contact -->
                                                </div>
                                                <!-- .et_pb_contact_form_container -->

                                            </div>
                                            <!-- .et_pb_column -->
                                            <div class="et_pb_column et_pb_column_1_2 et_pb_column_28  et_pb_css_mix_blend_mode_passthrough et-last-child">


                                                <div class="et_pb_module et_pb_image et_pb_image_6">


                                                    <span class="et_pb_image_wrap "><img src="https://corevestor.vn/wp-content/uploads/2021/05/8897.jpg_wh860.jpg" alt="" title="" srcset="https://corevestor.vn/wp-content/uploads/2021/05/8897.jpg_wh860.jpg 860w, https://corevestor.vn/wp-content/uploads/2021/05/8897.jpg_wh860-300x169.jpg 300w, https://corevestor.vn/wp-content/uploads/2021/05/8897.jpg_wh860-768x432.jpg 768w" sizes="(max-width: 860px) 100vw, 860px" /></span>
                                                </div>
                                            </div>
                                            <!-- .et_pb_column -->


                                        </div>
                                        <!-- .et_pb_row -->


                                    </div>
                                    <!-- .et_pb_section -->
                                </div>
                                <!-- .et_builder_inner_content -->
                            </div>
                            <!-- .et-l -->


                        </div>
                        <!-- #et-boc -->
                    </div>
                    <!-- .entry-content -->


                </article>
                <!-- .et_pb_post -->



            </div>
            <!-- #main-content -->


            <span class="et_pb_scroll_top et-pb-icon"></span>


            <footer id="main-footer">

                <div class="container">
                    <div id="footer-widgets" class="clearfix">
                        <div class="footer-widget">
                            <div id="text-2" class="fwidget et_pb_widget widget_text">
                                <h4 class="title">Headquarters And Delivery Centre</h4>
                                <div class="textwidget">
                                    <p><img loading="lazy" class="alignnone size-medium wp-image-1416" src="https://corevestor.vn/wp-content/uploads/2021/10/Logo-corevestor-ngang@4x-300x100.png" alt="" width="300" height="100" style="
    filter: brightness(0) invert(1);
" srcset="https://corevestor.vn/wp-content/uploads/2021/10/Logo-corevestor-ngang@4x-300x100.png 300w, https://corevestor.vn/wp-content/uploads/2021/10/Logo-corevestor-ngang@4x-1024x342.png 1024w, https://corevestor.vn/wp-content/uploads/2021/10/Logo-corevestor-ngang@4x-768x256.png 768w"
                                            sizes="(max-width: 300px) 100vw, 300px" /></p>
                                    <p>Rep quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                            </div>
                            <!-- end .fwidget -->
                        </div>
                        <!-- end .footer-widget -->
                        <div class="footer-widget">
                            <div id="text-3" class="fwidget et_pb_widget widget_text">
                                <h4 class="title">Software Development Centre</h4>
                                <div class="textwidget">
                                    <p><img loading="lazy" class="alignnone size-medium wp-image-1416" src="https://corevestor.vn/wp-content/uploads/2021/10/Logo-corevestor-ngang@4x-300x100.png" alt="" width="300" height="100" style="
    filter: brightness(0) invert(1);
" srcset="https://corevestor.vn/wp-content/uploads/2021/10/Logo-corevestor-ngang@4x-300x100.png 300w, https://corevestor.vn/wp-content/uploads/2021/10/Logo-corevestor-ngang@4x-1024x342.png 1024w, https://corevestor.vn/wp-content/uploads/2021/10/Logo-corevestor-ngang@4x-768x256.png 768w"
                                            sizes="(max-width: 300px) 100vw, 300px" /></p>
                                    <p>Rep quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                </div>
                            </div>
                            <!-- end .fwidget -->
                        </div>
                        <!-- end .footer-widget -->
                    </div>
                    <!-- #footer-widgets -->
                </div>
                <!-- .container -->


                <div id="footer-bottom">
                    <div class="container clearfix">
                        <ul class="et-social-icons">

                            <li class="et-social-icon et-social-facebook">
                                <a href="#" class="icon">
			<span>Facebook</span>
		</a>
                            </li>
                            <li class="et-social-icon et-social-twitter">
                                <a href="#" class="icon">
			<span>Twitter</span>
		</a>
                            </li>
                            <li class="et-social-icon et-social-google-plus">
                                <a href="#" class="icon">
			<span>Google</span>
		</a>
                            </li>
                            <li class="et-social-icon et-social-instagram">
                                <a href="#" class="icon">
			<span>Instagram</span>
		</a>
                            </li>
                            <li class="et-social-icon et-social-rss">
                                <a href="https://corevestor.vn/feed/" class="icon">
			<span>RSS</span>
		</a>
                            </li>

                        </ul>
                        <div id="footer-info">All Rights Reserved. © Copyright 2021 by COREVESTOR</div>
                    </div>
                    <!-- .container -->
                </div>
            </footer>
            <!-- #main-footer -->
        </div>
        <!-- #et-main-area -->


    </div>
    <!-- #page-container -->

    <div style="position:fixed;bottom:10px;right:8%;z-index:999999;" id="gtranslate_wrapper">
        <!-- GTranslate: https://gtranslate.io/ -->
        <a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="glink nturl notranslate"><img src="//corevestor.vn/wp-content/plugins/gtranslate/flags/24/en.png" height="24" width="24" alt="English" /> <span>EN</span></a> <a href="#"
            onclick="doGTranslate('en|vi');return false;" title="Tiếng Việt" class="glink nturl notranslate"><img src="//corevestor.vn/wp-content/plugins/gtranslate/flags/24/vi.png" height="24" width="24" alt="Tiếng Việt" /> <span>VI</span></a>
        <style>
            #goog-gt-tt {
                display: none !important;
            }

            .goog-te-banner-frame {
                display: none !important;
            }

            .goog-te-menu-value:hover {
                text-decoration: none !important;
            }

            .goog-text-highlight {
                background-color: transparent !important;
                box-shadow: none !important;
            }

            body {
                top: 0 !important;
            }

            #google_translate_element2 {
                display: none !important;
            }
        </style>

        <div id="google_translate_element2"></div>
        <script>
            function googleTranslateElementInit2() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    autoDisplay: false
                }, 'google_translate_element2');
            }
        </script>
        <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>


        <script>
            function GTranslateGetCurrentLang() {
                var keyValue = document['cookie'].match('(^|;) ?googtrans=([^;]*)(;|$)');
                return keyValue ? keyValue[2].split('/')[2] : null;
            }

            function GTranslateFireEvent(element, event) {
                try {
                    if (document.createEventObject) {
                        var evt = document.createEventObject();
                        element.fireEvent('on' + event, evt)
                    } else {
                        var evt = document.createEvent('HTMLEvents');
                        evt.initEvent(event, true, true);
                        element.dispatchEvent(evt)
                    }
                } catch (e) {}
            }

            function doGTranslate(lang_pair) {
                if (lang_pair.value) lang_pair = lang_pair.value;
                if (lang_pair == '') return;
                var lang = lang_pair.split('|')[1];
                if (GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0]) return;
                var teCombo;
                var sel = document.getElementsByTagName('select');
                for (var i = 0; i < sel.length; i++)
                    if (sel[i].className.indexOf('goog-te-combo') != -1) {
                        teCombo = sel[i];
                        break;
                    }
                if (document.getElementById('google_translate_element2') == null || document.getElementById('google_translate_element2').innerHTML.length == 0 || teCombo.length == 0 || teCombo.innerHTML.length == 0) {
                    setTimeout(function() {
                        doGTranslate(lang_pair)
                    }, 500)
                } else {
                    teCombo.value = lang;
                    GTranslateFireEvent(teCombo, 'change');
                    GTranslateFireEvent(teCombo, 'change')
                }
            }
        </script>
    </div>
    <script type="text/javascript">
        var et_animation_data = [{
            "class": "et_pb_row_5",
            "style": "fade",
            "repeat": "once",
            "duration": "1000ms",
            "delay": "0ms",
            "intensity": "50%",
            "starting_opacity": "0%",
            "speed_curve": "ease-in-out"
        }, {
            "class": "et_pb_row_6",
            "style": "fade",
            "repeat": "once",
            "duration": "1000ms",
            "delay": "0ms",
            "intensity": "50%",
            "starting_opacity": "0%",
            "speed_curve": "ease-in-out"
        }, {
            "class": "et_pb_row_8",
            "style": "zoom",
            "repeat": "once",
            "duration": "1000ms",
            "delay": "0ms",
            "intensity": "50%",
            "starting_opacity": "0%",
            "speed_curve": "ease-in-out"
        }, {
            "class": "et_pb_row_9",
            "style": "zoom",
            "repeat": "once",
            "duration": "1000ms",
            "delay": "0ms",
            "intensity": "50%",
            "starting_opacity": "0%",
            "speed_curve": "ease-in-out"
        }];
    </script>
    <script type='text/javascript' id='divi-custom-script-js-extra'>
        /* <![CDATA[ */
        var DIVI = {
            "item_count": "%d Item",
            "items_count": "%d Items"
        };
        var et_shortcodes_strings = {
            "previous": "Previous",
            "next": "Next"
        };
        var et_pb_custom = {
            "ajaxurl": "https:\/\/corevestor.vn\/wp-admin\/admin-ajax.php",
            "images_uri": "https:\/\/corevestor.vn\/wp-content\/themes\/Divi\/images",
            "builder_images_uri": "https:\/\/corevestor.vn\/wp-content\/themes\/Divi\/includes\/builder\/images",
            "et_frontend_nonce": "0b77c45abe",
            "subscription_failed": "Please, check the fields below to make sure you entered the correct information.",
            "et_ab_log_nonce": "6433e69adf",
            "fill_message": "Please, fill in the following fields:",
            "contact_error_message": "Please, fix the following errors:",
            "invalid": "Invalid email",
            "captcha": "Captcha",
            "prev": "Prev",
            "previous": "Previous",
            "next": "Next",
            "wrong_captcha": "You entered the wrong number in captcha.",
            "wrong_checkbox": "Checkbox",
            "ignore_waypoints": "no",
            "is_divi_theme_used": "1",
            "widget_search_selector": ".widget_search",
            "ab_tests": [],
            "is_ab_testing_active": "",
            "page_id": "32",
            "unique_test_id": "",
            "ab_bounce_rate": "5",
            "is_cache_plugin_active": "no",
            "is_shortcode_tracking": "",
            "tinymce_uri": ""
        };
        var et_frontend_scripts = {
            "builderCssContainerPrefix": "#et-boc",
            "builderCssLayoutPrefix": "#et-boc .et-l"
        };
        var et_pb_box_shadow_elements = [];
        var et_pb_motion_elements = {
            "desktop": [],
            "tablet": [],
            "phone": []
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://corevestor.vn/wp-content/themes/Divi/js/custom.unified.js?ver=4.4.0' id='divi-custom-script-js'></script>
    <script type='text/javascript' src='https://corevestor.vn/wp-content/themes/Corevestor/assets/js/corevestor.js?ver=2.3.0.1' id='corevestor-js'></script>
    <script type='text/javascript' src='https://corevestor.vn/wp-content/themes/Divi/core/admin/js/common.js?ver=4.4.0' id='et-core-common-js'></script>
    <script type='text/javascript' src='https://corevestor.vn/wp-includes/js/wp-embed.min.js?ver=5.8.2' id='wp-embed-js'></script>
</body>

</html>

<!-- Page generated by LiteSpeed Cache 4.4.3 on 2021-11-23 13:26:36 -->