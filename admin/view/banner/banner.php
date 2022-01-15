<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Banner</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <strong><a href="index.php?mod=banner&act=insert"> <i class="fas fa-table me-1"></i>Thêm</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>

                </a></strong></p>
                <tr class="title">
                    <th>ID</th>
                    <th>Tiêu Đề</th>
                    <th>Nội Dung</th>
                    <th>Hình Ảnh</th>
                    <th>Xoá</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <?php
$ret = $banner->getBanner();
foreach ($ret as $row) {
    echo "<tr><td>";
    echo $row['banner_id']."</td><td>";
    echo $row['banner_title']."</td><td>";
    echo $row['banner_content']."</td><td>";
    echo "<img src=\"./Upload/$row[banner_img]\" width=\"100\" height=\"100\" /></td><td>";
    echo "<a href=\"index.php?mod=banner&act=delete&id=$row[banner_id]\" onclick=\"return IsDelete()\"><img src=\"Upload/Delete.gif\" /></a></td><td>";
    echo "<a href=\"index.php?mod=banner&act=update&id=$row[banner_id]\"><img src=\"Upload/Edit.gif\" /></a>";
    echo "</td></tr>";
}
?>
        </table>
    </div>
</div>