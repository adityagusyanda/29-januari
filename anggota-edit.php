<?php
        $id_anggota =$_GET['id'];
        $query = mysqli_query($koneksi,"SELECT * FROM anggota WHERE id_anggota ='$id_anggota'");
        foreach ($query as $row){
    ?>
    <script>
        $(document).ready(function(){
            $("#edit-modal").modal('show');
        });
    </script>
<div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form edit Data Anggota</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form  action="?page=anggota-edit-proses" method="post"> 
        <input type="hidden" name="id_anggota" value="<?php echo $row['id_anggota']; ?>">
        <div class="formm-group mb-2">
            <input value="<?php echo $row['nis']; ?>" class="form-control" type="text" name="nis" placeholder="NIS" required>
        </div>
        <div class="form-group mb-2">
            <input value="<?php echo $row['nama']; ?>" class="form-control" type="text" name="nama" placeholder="NAMA" required>
        </div>

        <div class="from-group ">
            <select value="<?php echo $row['jenis_kelamin']; ?>" class="form-control" name="jenis_kelamin" required >
            <option vvalue="<?php echo $row['jenis_kelamin']; ?>">
                <?php
                        if ($row['jenis_kelamin']=='L') {
                            echo "Laki-Laki";
                        }else  {
                            echo "Perempuan";
                        }
                ?>
            </option>
                <option value="L">Laki - Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <div class="from-group mb-2">
            <input value="<?php echo $row['tempat_lahir']; ?>" class="form-control" type="text" name="tempat_lahir" placeholder="TEMPAT LAHIR" required>
        </div>

        <div class="input-group mb-2">
        <span class="input-group-text">Tanggal Lahir</span>
            <input value="<?php echo $row['tanggal_lahir']; ?>" class="form-control" type="date" name="tanggal_lahir" placeholder="TANGGAL LAHIR" required>
        </div>

        <div class="form-group mb-2">
           <select value="<?php echo $row['id_kelas']; ?>" class="form-control" name="id_kelas" placeholder="KELAS" required>
           <option value="<?php echo $row['id_kelas']; ?>">
           <?php
                if ($row['id_kelas']=='10') {
                    echo "X";
                }elseif ($row['id_kelas']=='11') {
                    echo "XI";
                }else{
                    echo "XII";
                }
           ?>
           </option>
            <option value="10">X</option>
            <option value="11">XI</option>
            <option value="12">XII</option>
            </select>
        </div>
        <div class="form-group mb-2">
           <select  class="form-control" name="id_jurusan" placeholder="JURUSAN" required >
           <option value="<?php echo $row['id_jurusan']; ?>">
            <?php
                    if ($row['id_jurusan']=='111') {
                        echo "RPL";
                    }elseif ($row['id_jurusan']=='222') {
                        echo "TKR";
                    }elseif ($row['id_jurusan']=='333') {
                        echo "TAV";
                    }elseif ($row['id_jurusan']=='444') {
                        echo "TITL";

                    }
                    
            ?> 
            </select>
        </div>
        
        <div class="from-group mb-2">
            <input value="<?php echo $row['nomor_telepon']; ?>" class="form-control" type="text" name="nomor_telepon" placeholder="NO TELEPON" required>
        </div>
        <div class="form-floating">
            <textarea  class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="alamat" required><?php echo $row['alamat']; ?></textarea>
            <label for="floatingTextarea2">Alamat</label>
        </div>
       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php
}

?>