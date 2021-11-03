<?php 
include "server.php";

if( isset($_POST['submit']))
{
	if( $_POST['submit'] == "add")
	{
		$nim = $_POST['nim'];
		$namamhs = $_POST['namamhs'];
		$jeniskelamin = $_POST['jk'];
		$alamat = $_POST['alamat'];
		$kota = $_POST['kota'];
		$email = $_POST['email'];
		$foto = $_POST['foto'];

		$query = "INSERT INTO mahasiswa VALUES('', '$nim', '$namamhs', '$jeniskelamin', '$alamat', '$kota', '$email', '$foto')";
		$sql = mysqli_query($conn, $query);
		if( $sql )
		{
			header("location: index.php");
		}
		else
		{
			echo $query;
		}

	}

	else if( $_POST['submit'] == 'edit')
	{
		$id = $_POST['id'];
		$nim = $_POST['nim'];
		$namamhs = $_POST['namamhs'];
		$jeniskelamin = $_POST['jk'];
		$alamat = $_POST['alamat'];
		$kota = $_POST['kota'];
		$email = $_POST['email'];
		$foto = $_POST['foto'];

		$query = "UPDATE mahasiswa SET nim='$nim', namamhs='$namamhs', jk='$jeniskelamin', alamat='$alamat', kota='$kota', email='$email', foto='$foto' WHERE id='$id';";
		$sql = mysqli_query($conn, $query);
		if( $sql )
		{
			header("location: index.php");
		}
		else
		{
			echo $query;
		}
	}
}
	

if (isset($_GET['hapus']))
   {
       $id = $_GET['hapus'];
       $query = "DELETE FROM mahasiswa WHERE id ='$id'; ";
       $sql = mysqli_query($conn, $query);
       if($sql)
       {
           header("location: index.php");
       }
       else
       {
           echo $query;
       }
   }
?>