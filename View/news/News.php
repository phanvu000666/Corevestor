<?php
$listNews = $news->get3News()
?>
<?php
foreach($listNews as $ref) 
echo"<article class='et_pb_post post-1 post type-post status-publish format-standard has-post-thumbnail hentry category-news'>

    <a class='entry-featured-image-url' ref='#'>
        <img src='admin/Upload/".$ref['news_img']."' class='' width='600'
        height='400'/> </a>

    <h2 class='entry-title'><a href='#'>".$ref['news_title']."</a></h2>

    <p class='post-meta'> by <span class='author vcard'><a href='#' title='Posts by devacc247'
                rel='author'>".$ref['post_athour']."</a></span> | <span
            class='published'>".$ref['post_date']."</span> | <a href='News.php' rel='category tag'>News</a></p>".$ref['news_content']."
</article>";?>