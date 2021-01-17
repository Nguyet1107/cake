
<!DOCTYPE html>
<html>
<head>
	<title>Thực hiện cập nhật nhân viên</title>
</head>
<body>
	<?php
		$ket_noi=mysqli_connect("localhost","root","","cua_hang_banh");

		$id_nhan_vien=$_POST["txtID"];
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

		if ($anh_minh_hoa==null){
			$sql="UPDATE `tbl_nhan_vien` 
			SET `ho_ten`='".$ho_ten."',
				`cong_viec` = '".$cong_viec."' , 
				`facebook` = '".$facebook."', 
				`instagram` = '".$instagram."'
				
			WHERE `tbl_nhan_vien`.`id_nhan_vien` = '".$id_nhan_vien."'";
		} else {
			$sql="UPDATE `tbl_nhan_vien` 
			SET `ho_ten`='".$ho_ten."',
			 	`hinh_anh` = '".$anh_minh_hoa."' ,
				`cong_viec` = '".$cong_viec."',
				`facebook` = '".$facebook."', 
				`instagram` = '".$instagram."'
				
			WHERE `tbl_nhan_vien`.`id_nhan_vien` = '".$id_nhan_vien."'";
		}

		mysqli_query($ket_noi,$sql);
		echo 
			"
				<script type='text/javascript'>
					window.alert('Cập nhật thành công');
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