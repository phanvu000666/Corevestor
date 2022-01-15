<?php
    if (isset($_POST['btnSave'])) {
    include_once("Model/Upload.php");
    $news_title = $_POST['txtTitle'];
    $filename = Upload::UploadImage("txtImageUrl", "Upload");
    $news_content=$_POST["txtContent"];
    $post_athour=$_POST["txtTacGia"];
    if($filename != ""){
        $ref=$news->InsertNews($news_title, $news_content, $filename,$post_athour);
        if ($ref>0) {
            ?>
			<script> location.replace("index.php?mod=news&act=news"); </script>
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
    <form class="form" method="post" action="index.php?mod=news&act=insert" enctype="multipart/form-data">
        <p><label>Tiêu đề (*)</label><input type="text" name="txtTitle" id="txtTitle" style="margin-left: 10px;" /></p>
        <p><label>Tác giả (*)</label><input type="text" name="txtTacGia" id="txtTacGia" style="margin-left: 10px;" />
        </p>
        <p><label>Nội dung ( *)</label></p>
        <textarea name="txtContent" cols="60"></textarea>
        <p><label>Ảnh hiển thị</label><input type="file" name="txtImageUrl" id="txtImageUrl" value="Chọn file"
                style="margin-left: 125px;" /></p>
        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave" /></p>

        <p id="error" class="error"></p>
    </form>
</div>