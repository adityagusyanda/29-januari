
<h3 align=center>DATA PETUGAS
<!-- Button trigger modal -->
<br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inputmodal">
  Tambah Data
</button>
<br>
<table class="table table-light">
    
    <tr class="text-center">
        <th>NO</th>
        <th>NAMA</th>
        <th>JABATAN</th>
        <th>NO TELEPON</th>
        <th>ALAMAT</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>ACTION</th>
    </tr>
    <?php
    $no =1;
    $query = mysqli_query($koneksi,"SELECT * FROM petugas");
    foreach ($query as $row ) {
  
    ?>
    <tr >
        <td class="text-center" valign=middle><?php echo $no?></td>
        <td valign=middle><?php echo $row['nama']?></td>
        <td class="text-center" valign=middle><?php echo $row['jabatan']?></td>
        <td class="text-center" valign=middle><?php echo $row['nomor_telepon']?></td>
        <td valign=middle><?php echo $row['alamat']?></td>
        <td class="text-center" valign=middle><?php echo $row['username']?></td>
        <td class="text-center" valign=middle><?php echo $row['password']?></td>
        <td class="text-center" valign=middle>
        <a href="?page=petugas-delete&hapus&id=<?php echo $row['id_petugas']; ?>">
        <button class="btn btn-danger" ><i class="far fa-trash-alt"></i></button></a>
        <a href="?page=petugas-edit&edit&id=<?php echo $row['id_petugas']; ?>">
        <button class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="edit-Modal"><i class="fas fa-edit"></i></button></a>
        </td>
    </tr>
    <?php
    $no++;
    }
    ?>

</table>


<!-- Modal input -->
<div class="modal fade" id="inputmodal" tabindex="-1" aria-labelledby="inputModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="inputModalLabel">Form Input Data Petugas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form  action="?page=petugas-insert" method="post">
        <div class="form-group mb-2">
            <input class="form-control" type="text" name="nama" placeholder="NAMA" required>
        </div>
        <div class="from-group ">
            <select class="form-control" name="jabatan" required >
            <option value="">-Pilih Jabatan-</option>
                <option value="petugas">Petugas</option>
                <option value="karyawan">Karyawan</option>
            </select>
        </div>
        <div class="from-group mb-2">
            <input class="form-control" type="text" name="nomor_telepon" placeholder="NO TELEPON" required>
        </div>
        <div class="from-group mb-2">
            <input class="form-control" type="text" name="alamat" placeholder="ALAMAT" required>
        </div>
        <div class="from-group mb-2">
            <input class="form-control" type="text" name="username" placeholder="USERNAME" required>
        </div>
        <div class="from-group mb-2">
            <input class="form-control" type="password" name="password" placeholder="PASSWORD" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- end modal input-->