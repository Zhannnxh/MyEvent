<section>
    <div class="container-fluid">
        <div class="row mx-auto mt-5 mb-5">
            <div class="col-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Contact Us</h3>
                        <a href="#"class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</a>
                    </div>
                    <div class="card-body">
                    <table class="table">
                         <tr>
                           <th>Nama</th>
                           <th>Email</th>
                           <th>Perihal</th>
                           <th>Pesan</th>
                           <th>Aksi</th>
                        </tr>
                        <?php foreach ($contact_us as $contact_us) : ?>
                        <tr>
                            <td><?= $contact_us['nama_contact']?></td>
                            <td><?= $contact_us['email']?></td>
                            <td><?= $contact_us['perihal']?></td>
                            <td><?= $contact_us['pesan']?></td>
                            <td>
                              <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $contact_us ['id_contact_us']?>">Edit</a>
                              <a href="<?= base_url('Contact_us/delete/') .$contact_us["id_contact_us"]?>" class="btn btn-danger">Hapus</a>
                            </td>
                           </tr>
                           <div class="modal fade" id="exampleModal<?= $contact_us['id_contact_us']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('Contact_us/update/') . $contact_us['id_contact_us'] ?>" method="POST">
      <div class="modal-body">
        <div class="form-group mb-3">
            <label for="">Nama</label>
            <input type="text" name="nama_contact" class="form-control" value="<?= $contact_us ['nama_contact']?>">
        </div>
        <div class="form-group mb-3">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" value="<?= $contact_us ['email']?>">
        </div>
        <div class="form-group mb-3">
            <label for="">Perihal</label>
            <input type="text" name="perihal" class="form-control" value="<?= $contact_us ['perihal']?>">
        </div>
        <div class="form-group mb-3">
            <label for="">Pesan</label>
            <textarea name="pesan" id="" cols="30" rows="3" class="form-control">
              <?= $contact_us ['pesan']?>
            </textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
                         <?php endforeach; ?>
                         </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('Contact_us/insert') ?>" method="POST">
      <div class="modal-body">
        <div class="form-group mb-3">
            <label for="">Nama</label>
            <input type="text" name="nama_contact" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="">Perihal</label>
            <input type="text" name="perihal" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="">Pesan</label>
            <textarea name="pesan" id="" cols="30" rows="3" class="form-control"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>