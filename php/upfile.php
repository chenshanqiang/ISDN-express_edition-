<?php
if ($_FILES["file"]["error"] > 0) {
	echo "错误：: " . $_FILES["file"]["error"] . "<br>";
} else {
	// 判断当期目录下的 upload 目录是否存在该文件
	// 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
	if (file_exists("./upload/" . $_FILES["file"]["name"])) {
		$array_1 = array('code'=>0,'status'=>2,'status1'=>3);
		$jsonencode = json_encode($array_1);
		echo $jsonencode;
	} else {
		// 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
		move_uploaded_file($_FILES["file"]["tmp_name"], "./upload/" . $_FILES["file"]["name"]);
		$array_1 = array('code'=>1,'status'=>2,'status1'=>3);
		$jsonencode = json_encode($array_1);
		echo $jsonencode;
	}
}
?>