<div class="content-warpper">
    <section class="content">(
        <?php foreach($mahasiswa as $mhs) { ?>
            <form action="<?php echo base_url().'mahasiswa/update' ?>" method="POST">

                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="hidden" name="nim" class="form-control" value="<?php echo $mhs->nim ?>">
                    <input type="text" name="nama_mhs" class="form-control" value="<?php echo $mhs->nama_mhs ?>">
                </div>

                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim ?>">
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $mhs->tgl_lahir ?>">
                </div>

                <div class="form-group">
                    <label for="">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="<?php echo $mhs->jurusan ?>">
                </div>

                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>
        <?php } ?>
    </section>
</div>

