<?php
$result = $services->getDichVu();
$body_table = <<< Gryphon
<thead>
    <tr>
        <th class="services_id">ID</th>
        <th class="services_name">Dịch Vụ</th>
        <th class="services_title">Tiêu Đề</th>
        <th class="services_content">Nội Dung</th>
        <th class="services_img">Hình Ảnh</th>
        <th class="product_total">Handle</th>
    </tr>
</thead> <!-- End Cart Table Head -->
<tbody>
Gryphon;
foreach ($result as $key => $value) {

    $encode = $value['services_id'];
    $body_table .= <<< Gryphon
    <tr class="single-product" data-prid={$encode}>
        <td class="product-id">{$encode}</td>
        <td class="product-name">{$value['services_name']}</td>
        <td class="product-price">{$value['services_title']}</td>
        <td class="product-quantity"><b>{$value['services_content']}</b></td>
        <td class="product-thumb">
            <a href="product-details-default.html">
            <img src="../Upload/{$value['services_img']}" alt="">
            </a>
        </td>
        <td class="product-handle">
           <div><button
           style="all:unset" id="{$encode}" onclick="editProduct({$encode})" type="button" class="edit-data" data-toggle="modal" data-target="#editProductModal">
           <span class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </span>
            </span>
           </button>
                <a href="{$_SERVER['PHP_SELF']}?ProductID={$encode}&handle=delete" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                    </span>
                </a>
            </div>
        </td>
    </tr>
    Gryphon;
}
// <a href="{$_SERVER['PHP_SELF']}?ProductID={$encode}&handle=delete"><i class="fa fa-trash-o 1"></i></a>
$body_table .= <<< Gryphon
</tbody>
Gryphon;
// echo $body_table;
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dịch Vụ</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <strong><a href="index.php?mod=services&act=insert"> <i class="fas fa-table me-1"></i>Thêm</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>

                </a></strong></p>
                <tr class="title">
                    <th>ID</th>
                    <th>Dịch Vụ</th>
                    <th>Tiêu Đề</th>
                    <th>Nội Dung</th>
                    <th>Hình Ảnh</th>
                    <th>Xoá</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <?php
$ret = $services->getDichVu();
foreach ($ret as $row) {
    echo "<tr><td>";
    echo $row['services_id']."</td><td>";
    echo $row['services_name']."</td><td>";
    echo $row['services_title']."</td><td>";
    echo $row['services_content']."</td><td>";
    echo "<img src=\"Upload/$row[services_img]\" width=\"100\" height=\"100\" /></td><td>";
    echo "<a href=\"index.php?mod=services&act=delete&id=$row[services_id]\" onclick=\"return IsDelete()\"><img src=\"Upload/Delete.gif\" /></a></td><td>";
    echo "<a href=\"index.php?mod=services&act=update&id=$row[services_id]\"><img src=\"Upload/Edit.gif\" /></a>";
    echo "</td></tr>";
}
?>
        </table>
    </div>
</div>