<section>
    <div class="container-fluid">
        <div class="row mx-auto mt-5 mb-5">
            <div class="col-8 mx-auto">

                <div class="card">
                    <div class="card-header">
                        <h3>User</h3>
                        <a href="#" class="btn btn-primary float-end"data-bs-toggle="modal" data-bs-target="#exampleModal" >Tambah Data</a>
                    </div>
                    <div class="card-body">
                    <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Nama User</th>
                    </tr>
                    <?php foreach ($user as $user) : ?>
                        <tr>
                            <td><?= $user['id_user'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['nama_user'] ?></td>
                        </tr>
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
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="">
            <div class="form-group mb-3">
                <label for="">ID user</label>
                <input type="int" name="foto" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama_user" class="form-control">
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