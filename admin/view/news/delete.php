<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $ret = $news->DeleteNews($id);
        ?>
			<script> location.replace("index.php?mod=news&act=news"); </script>
			<?php
    }
