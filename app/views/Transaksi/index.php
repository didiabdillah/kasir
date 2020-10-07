<div class="container">
    <h3>Daftar Transaksi</h3>

    <?php Flasher::flash(); ?>

    <a href="<?= BASEURL ?>barang/insert/" class="paper-btn btn-secondary btn-small"> Tambah Transaksi </a>

    <table class="table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>No Transaksi</th>
                <th>Waktu Transaksi</th>
                <th>Total Transaksi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($data["transaksi"] as $row) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><a href="<?= BASEURL . "transaksi/show/" . $row["no_transaksi"]; ?>"><?= $row["no_transaksi"]; ?></a></td>
                    <td><a href="<?= BASEURL . "transaksi/show/" . $row["no_transaksi"]; ?>"><?= $row["waktu_transaksi"]; ?></a></td>
                    <td><a href="<?= BASEURL . "transaksi/show/" . $row["no_transaksi"]; ?>"><?= $row["total_transaksi"]; ?></a></td>

                    <td>
                        <a href="<?= BASEURL . "transaksi/edit/" . $row["no_transaksi"]; ?>" class="paper-btn btn-small btn-warning">Edit</a>
                        <a href="<?= BASEURL . "transaksi/destroy/" . $row["no_transaksi"]; ?>" onclick="return confirm('Yakin?');" class="paper-btn btn-small btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>