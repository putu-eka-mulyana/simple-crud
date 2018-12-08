<?php 
	require 'config.php';
	$id =$_GET['id'];
	$query = "DELETE FROM tbl_sinopsis WHERE id=".$id;
	if(mysqli_query($con,$query)){
		echo "<script>
			document.location.href='data.php'
			// alert('success')
		</script>";
	}else{
		echo "<script>
			alert('failed')
		</script>";
	}
mysqli_close($con);
	
	
?>