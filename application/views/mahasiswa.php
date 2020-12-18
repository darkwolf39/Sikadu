<div class="content-wrapper">
<section class="content-header">
      <h1>
        Data Mahasiswa
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Mahasiswa</li>
      </ol>
    </section>

    <!-- Tambah data -->
    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Data Mahasiswa</button>
        <table class="table">
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>NAMA MAHASISWA</th>
                <th>TANGGAL LAHIR</th>
                <th>JURUSAN</th>
                <th colspan="2">AKSI</th>
            </tr>

            <?php

                $no = 1;
                foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $mhs->nim ?></td>
                <td><?php echo $mhs->nama_mhs ?></td>
                <td><?php echo $mhs->tgl_lahir ?></td>
                <td><?php echo $mhs->jurusan ?></td>
                <td onclick="javascript: return confirm('Apakah Anda yakin untuk hapus data ini?')">
                    <?php echo anchor('mahasiswa/hapus/'.$mhs->nim, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                </td>

                <td>
                    <?php echo anchor('mahasiswa/edit/'.$mhs->nim, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA MAHASISWA</h4>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
        <div class="modal-body">
            <form method="POST" action="<?php echo base_url().'index.php/mahasiswa/tambah_aksi' ?>">

            <div class="form-group">
                <label for="">NIM</label>
                <input type="number" name="nim" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Nama Mahasiswa</label>
                <input type="text" name="nama_mhs" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Jurusan</label>
                <input type="text" name="jurusan" class="form-control">
            </div>

            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        
            </form>
        </div>
        </div>
    </div>
    </div>

</div>
