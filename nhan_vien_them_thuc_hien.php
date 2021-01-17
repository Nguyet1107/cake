
<!DOCTYPE html>
<html>
<head>
	<title>Thực hiện thêm nhân viên</title>
</head>
<body>
	<?php
		$ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

		$ho_ten=$_POST["txtHoTen"];
		$cong_viec=$_POST["txtCongViec"];
		$facebook=$_POST["txtFb"];
		$instagram=$_POST["txtIns"];

		$anh_minh_hoa="./".basename($_FILES["txtAnhMinhHoa"]["name"]);
		$file_anh_tam=$_FILES["txtAnhMinhHoa"]["tmp_name"];
		$result=move_uploaded_file($file_anh_tam, $anh_minh_hoa);
		if (!$result){
			$anh_minh_hoa=null;
		}

		$sql="INSERT INTO `tbl_nhan_vien`(`id_nhan_vien`, `ho_ten`, `hinh_anh`, `cong_viec`, `facebook`, `instagram`) VALUES (null,'".$ho_ten."','".$anh_minh_hoa."','".$cong_viec."','".$facebook."','".$instagram."')";

		mysqli_query($ket_noi,$sql);
		echo 
			"
				<script type='text/javascript'>
					window.alert('Thêm nhân viên thành công');
				</script>
			";
		echo 
			"
				<script type='text/javascript'>
					window.location.href='nhan_vien.php'
				</script>
			";
	;?>

</body>
</html>