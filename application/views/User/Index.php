<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-5">
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
</section>