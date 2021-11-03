<?php
include 'server.php';
$id = '';
$nim = '';
$namamhs = '';
$jeniskelamin = '';
$alamat = '';
$kota = '';
$email = '';

if (isset($_GET['edit']))
{
    $id = $_GET['edit'];
    $query = "SELECT * FROM mahasiswa WHERE id = '$id';";
    $sql = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($sql);

    $nim = $result['nim'];
    $namamhs = $result['namamhs'];
    $jeniskelamin = $result['jk'];
    $alamat = $result['alamat'];
    $kota = $result['kota'];
    $email = $result['email'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Tugas PBO CRUD OOP</title>
    <!--Style-->
    <style>
      .container {
        background-color: #F0FFF0;
        margin: 40px auto;
        padding: 50px;
        border: 4px solid #eaeaea;
        border-radius: 20px;
        box-sizing: border-box;
        position: relative;
      }
    </style>
</head>
<body>
      <div class="container">
        <h2 class="text-center">FORM INPUT DATA MAHASISWA</h2>
        <br>
        <form method="POST" action="proses.php" class="font-weight-bold">
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            
            <!--Form NIM-->
            <div class="mb-3 row">
                <label for="Nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" name="nim" class="form-control" id="Nim" placeholder="contoh: 20051217000" required value="<?php echo $nim; ?>">
                </div>
            </div>

            <!--Form Nama Mahasiswa-->
            <div class="mb-3 row">
                <label for="Namamhs" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-10">
                    <input type="text" name="namamhs" class="form-control" id="Namamhs" placeholder="contoh: Kinasih Widi" required value="<?php echo $namamhs; ?>">
                </div>
            </div>

            <!--Form Jenis Kelamin-->
            <div class="mb-3 row">
                <label for="Jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline font-weight-normal">
                        <input class="form-check-input" type="radio" name="jk" id="laki-laki" required value="L" <?php if($jeniskelamin=="L") {
                            echo "checked=\"checked\" ";} ?>>
                        <label class="form-check-label" for="laki-laki">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline font-weight-normal">
                        <input class="form-check-input" type="radio" name="jk" id="perempuan" required value="P" <?php if($jeniskelamin=="P") {
                            echo "checked=\"checked\" ";} ?>>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>
            </div>

            <!--Form Alamat-->
            <div class="mb-3 row">
                <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text"  name="alamat" class="form-control" id="Alamat" placeholder="Contoh: Perumahan Graha Candi Permai, No 12" required value="<?php echo $alamat; ?>">
                </div>
            </div>

            <!--Form Kota-->
            <div class="mb-3 row">
                <label for="Kota" class="col-sm-2 col-form-label">Kota</label>
                <div class="col-sm-10">
                    <input type="text" name="kota" class="form-control" id="Kota" placeholder="contoh: Surabaya" required value="<?php echo $kota; ?>">
                </div>
            </div>

            <!--Form Email-->
            <div class="mb-3 row">
                <label for="Email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" id="Email" placeholder="contoh: kanaya@mhs.unesa.ac.id" required value="<?php echo $email; ?>">
                </div>
            </div>

            <!--Form Foto Mahasiswa-->
            <div class="mb-3 row">
                <label for="Foto" class="col-sm-2 col-form-label">Foto Mahasiswa</label>
                <div class="col-sm-10">
                  <input type="file" name="foto" class="form-label" id="Foto" required value="<?php echo $foto; ?>">
                </div>
            </div>

            <!--Tombol Button-->
            <div class ="col text-right" style="float: right;">
                <?php
                if (isset($_GET['edit']))
                {
                    ?>
                    <button type="submit" name="submit" value="edit" class="btn btn-outline-success btn-sm">Simpan</button>
                    <?php
                }
                else
                {
                    ?>
                    <button type="submit" name="submit" value="add" class="btn btn-outline-success btn-sm">Tambah</button>  
                    <?php
                }
                ?>
                <a href="index.php" type="button" class="btn btn-outline-danger btn-sm">Batal</a>
            </div>
        </form>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>