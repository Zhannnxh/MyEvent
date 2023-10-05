<section>
    <div class="container-fluid">
        <div class="row mx-auto mt-5 mb-5">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Perihal</th>
                        <th>Pesan</th>
                    </tr>
                    <?php foreach ($contact_us as $contact_us) : ?>
                        <tr>
                            <td><?= $contact_us['nama_contact']?></td>
                            <td><?= $contact_us['email']?></td>
                            <td><?= $contact_us['perihal']?></td>
                            <td><?= $contact_us['pesan']?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>