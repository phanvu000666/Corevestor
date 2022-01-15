<?php
    include_once("admin/Model/FactoryPattern.php");
    $factory = new FactoryPattern();
    $news = $factory->make('news');
    $services = $factory->make('services');
    $banner = $factory->make('banner');
?>
<header id="main-header" data-height-onload="66">
    <div class="container clearfix et_menu_container">
        <div class="logo_container">
            <span class="logo_helper"></span>
            <a href="Index.php">
                <img src="https://corevestor.vn/wp-content/uploads/2021/10/Logo-corevestor-ngang@4x.png"
                    alt="Corevestor" id="logo" data-height-percentage="54" />
            </a>
        </div>
        <div id="et-top-navigation" data-height="66" data-fixed-height="40">
            <nav id="top-menu-nav">
                <ul id="top-menu" class="nav">
                    <li id="menu-item-23"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-23">
                        <a href="Index.php" aria-current="page">Home</a>
                    </li>
                    <li id="menu-item-595"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-595">
                        <a href="#">Services</a>
                        <ul class="sub-menu">
                            <li class="dropdown" id="menu-item-662"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-662">
                                <div class="dropdown-content">
                                    <?php
                                        include_once("View/Services/menuServices.php");
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54">
                        <a href="News.php">News</a>
                    </li>
                    <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24">
                        <a href="About.php">About</a>
                    </li>
                    <li id="menu-item-465"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-465"><a
                            href="Contact.php">Contact</a></li>
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
        </div> <!-- #et-top-navigation -->
    </div> <!-- .container -->
    <div class="et_search_outer">
        <div class="container et_search_form_container">
            <form role="search" method="get" class="et-search-form" action="https://corevestor.vn/">
                <input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s"
                    title="Search for:" />
            </form>
            <span class="et_close_search_field"></span>
        </div>
    </div>
</header> <!-- #main-header -->