<?php
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $ret=$banner->getBannerDuaVaoID($id);
    if (isset($_POST['btnChange'])) {
        include("Model/Upload.php");
		$banner_title=$_POST["txtTitle"];
        $banner_content=$_POST["txtContent"];
        if (isset($_FILES['txtImageUrl'])) {
            $fileName = Upload::UploadImage("txtImageUrl", "Upload");
        }
        if (!isset($_FILES['txtImageUrl'])) {
            $value=$banner->UpdateBanner($id, $banner_title, $banner_content);
        } else {
            //print_r($_FILES);
            $value=$banner->UpdateBanner($id, $banner_title, $banner_content, $fileName);
        }
        if ($value<0) {
            echo "<p class=\"error\">Lỗi</p>";
        }else{
			?>
			<script> location.replace("index.php?mod=banner&act=banner"); </script>
			<?php
		}
    }
}
?>
<div style="width: 95%; margin: 0 auto;">
<div style="min-height: 420px;margin-top:30px;"> 
		<form action="index.php?mod=banner&act=update&id=<?php echo $id; ?>" method="post" class="form" enctype="multipart/form-data" >
			<table cellpadding="10" >
                <tr>
					<td>Tiêu đề</td>
                    <td><input type="text" name="txtTitle" id="txtTitle" value="<?php echo $ret['banner_title']; ?>"/></td>
				</tr>
				<tr>
					<td>Nội dung (*)</td>
					<td><textarea name="txtContent"><?php echo $ret['banner_content']; ?></textarea></td>
				</tr>
				<tr>
					<td>Ảnh</td>
					<td><img src="Upload/<?php echo $ret['banner_img'] ?>" width="90" /></td>
				</tr>
				<tr>
					<td><input type="file" name="txtImageUrl" id="txtImageUrl"/></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></td>
				</tr>
			</table>
		</form>
	</div>
</div>