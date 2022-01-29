<?php
    $id_anggota     = $_GET['id_anggota'];
    $nama           = $_POST['nama'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $tempat_lahir   = $_POST['tempat_lahir'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $kelas          = $_POST['id_kelas'];
    $jurusan        = $_POST['id_jurusan'];
    $no_telepon     = $_POST['nomor_telepon'];
    $alamat         = $_POST['alamat'];

    $query_update = mysqli_query($koneksi,"UPDATE anggota
    SET nis ='$nis', nama ='$nama', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir ='$tanggal_lahir',kelas ='$kelas',jurusan ='$jurusan', nomor_telepon ='$no_telepon', alamat ='$alamat' 
    WHERE id_anggota='$id_anggota'
    ");
   if ($query_update) {
    ?>
    <script>
        alert('data berhasil di ubah');
        window.location.href='http://localhost/3_mywebsite_12RPL2/admin.php?page=anggota';
    </script>
    <?php
    
}else
{
    ?>
        <div class="alert alert-danger">
            Data GAGAL Diupdate !!!!!!!!!
        </div>
    <?php
}

?>