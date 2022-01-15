<?php
$listNews = $news->getNews();
?>
<div id="recent-posts-2" class="et_pb_widget widget_recent_entries">
    <h4 class="widgettitle">Recent Posts</h4>
    <ul>
        <?php foreach($listNews as $ref)
        {
        echo"<li>
            <a href='news.php?mod=news&act=resultNews&id={$ref['news_id']}'>{$ref['news_title']}</a>
        </li>";
        }?>
    </ul>
</div>