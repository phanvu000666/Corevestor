<?php
$listServices = $services->getDichVu();
// var_dump($result);
foreach ($listServices as $row) {
    echo "<a href=\"services.php?mod=services&act=resultServices&id={$row['services_id']}\">{$row['services_name']}</a>";
}