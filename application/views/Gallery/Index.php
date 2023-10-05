<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-5">
                <table class="table">
                    <tr>
                        <th>foto</th>
                        <th>Keterangan foto</th>
                    </tr>
                    <?php foreach ($gallery as $gallery) : ?>
                        <tr>
                            <td><?= $gallery['foto'] ?></td>
                            <td><?= $gallery['ket_foto'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>