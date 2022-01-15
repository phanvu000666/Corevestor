<?php
$news = $factory->make('news');
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $ret=$news->getNewsDuaVaoIDManage($id);
    if (isset($_POST['btnChange'])) {
        include("Model/Upload.php");
        $news_title=$_POST["txtNewstitle"];
        $news_content=$_POST["txtContent"];
        $post_athour=$_POST["txtAthour"];
        if (isset($_FILES['txtImageUrl'])) {
            $fileName = Upload::UploadImage("txtImageUrl", "Upload");
        }
        if (!isset($_FILES['txtImageUrl'])) {
            $value=$news->UpdateNews($id, $news_title, $news_content,$post_athour);
        } else {
            //print_r($_FILES);
            $value=$news->UpdateNews($id, $news_title, $news_content, $fileName, $post_athour);
        }
        if ($value<0) {
            echo "<p class=\"error\">Lỗi</p>";
        }else{
			?>
			<script> location.replace("index.php?mod=news&act=news"); </script>
			<?php
		}
    }
}
?>
<div style="width: 95%; margin: 0 auto;">
<div style="min-height: 420px;margin-top:30px;"> 
		<form action="index.php?mod=news&act=update&id=<?php echo $id; ?>" method="post" class="form" enctype="multipart/form-data" >
			<table cellpadding="10" >
				<tr>
					<td>Tiêu đề bài viết</td>
					<td><input type="text" name="txtNewstitle" id="txtNewstitle" value="<?php echo $ret['news_title']; ?>"/></td>
				</tr>
				<tr>
					<td>Nội dung (*)</td>
					<td><textarea name="txtContent"><?php echo $ret['news_content']; ?></textarea></td>
				</tr>
                <tr>
					<td>Tác giả</td>
                    <td><input type="text" name="txtAthour" id="txtAthour" value="<?php echo $ret['post_athour']; ?>"/></td>
				</tr>
				<tr>
					<td>Ảnh</td>
					<td><img src="Upload/<?php echo $ret['news_img'] ?>" width="90" /></td>
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