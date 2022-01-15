<?php
    if (isset($_POST['btnSave'])) {
    include_once("Model/Upload.php");
    $banner_title = $_POST['txtTitle'];
    $filename = Upload::UploadImage("txtImageUrl", "Upload");
    $banner_content=$_POST["txtContent"];
    if($filename != ""){
        $ref=$banner->InsertBanner($banner_title, $banner_content, $filename);
        if ($ref>0) {
            ?>
			<script> location.replace("index.php?mod=banner&act=banner"); </script>
			<?php
        } else {
            echo "<p class=\"error\">Thêm bị lỗi</p>";
        }
    }else{
    echo"Vui long chon file anh !!!";
    }
}
?>
<div style="width: 80%; float: right; margin: 0 auto;">
    <form class="form" method="post" action="index.php?mod=banner&act=insert" enctype="multipart/form-data">
        <p><label>Tiêu đề (*)</label><input type="text" name="txtTitle" id="txtTitle" style="margin-left: 10px;" /></p>
        <p><label>Nội dung (*)</label><input type="text" name="txtContent" id="txtContent" style="margin-left: 10px;" />
        <p><label>Ảnh hiển thị</label><input type="file" name="txtImageUrl" id="txtImageUrl" value="Chọn file"
                style="margin-left: 125px;" /></p>
        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave" /></p>

        <p id="error" class="error"></p>
    </form>
</div>