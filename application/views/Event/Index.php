<section>
    <div class="container-fluid">
        <div class="row mx-auto mt-5 mb-5">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <th>Event</th>
                        <th>Tanggal</th>
                        <th>Tempat</th>
                        <th>Harga</th>
                    </tr>
                    <?php foreach ($event as $event) : ?>
                        <tr>
                            <td><?= $event['nama_event']?></td>
                            <td><?= $event['tanggal_event']?></td>
                            <td><?= $event['tempat_event']?></td>
                            <td><?= $event['harga']?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>