<section>
    <div class="container-fluid">
        <div class="row mx-auto mt-5 mb-5">
            <div class="col-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>Events</h3>
                        <a href="#" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</a>
                    </div>
                    <div class="card-body">
                    <table class="table">
                    <tr>
                        <th>Event</th>
                        <th>Tanggal</th>
                        <th>Tempat</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                    <?php foreach ($event as $event) : ?>
                            <tr>
                            <td><?= $event['nama_event']?></td>
                            <td><?= $event['tanggal_event']?></td>
                            <td><?= $event['tempat_event']?></td>
                            <td><?= $event['harga']?></td>
                            <td>
                                <a href="#" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-"></a>
                            </td>
                            </tr>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="">
            <div class="form-group mb-3">
                <label for="">Event</label>
                <input type="text" name="nama_event" class="form-control" value="<?=$event ['nama_event']?>">
            </div>
            <div class="form-group mb-3">
                <label for="">Tanggal</label>
                <input type="date" name="tanggal_event" class="form-control" value="<?=$event ['tanggal_event']?>">
            </div>
            <div class="form-group mb-3">
                <label for="">Tempat</label>
                <input type="text" name="tempat_event" class="form-control" value="<?=$event ['tempat_event']?>">
            </div>
            <div class="form-group mb-3">
                <label for="">Harga</label>
                <input type="double" name="harga" class="form-control" value="<?=$event ['harga']?>">
            </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?=base_url('Event/insert/') ?>" method="POST"></form>
        <div class="modal-body">
            <div class="form-group mb-3">
                <label for="">Event</label>
                <input type="text" name="nama_event" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Tanggal</label>
                <input type="date" name="tanggal_event" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Tempat</label>
                <input type="text" name="tempat_event" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Harga</label>
                <input type="double" name="harga_event" class="form-control">
            </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>