<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $ret = $banner->DeleteBanner($id);
        ?>
			<script> location.replace("index.php?mod=banner&act=banner"); </script>
			<?php
    }
