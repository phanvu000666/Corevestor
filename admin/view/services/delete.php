<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $ret = $services->DeleteServices($id);
        ?>
			<script> location.replace("index.php?mod=services&act=services"); </script>
			<?php
    }
