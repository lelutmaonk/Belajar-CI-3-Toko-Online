<div class="container-fluid">
    <h4>Invoices Pemesanan Produk</h4>

    <table class="table table-bordered table-striped">
        <tr>
            <th>Id Invoices</th>
            <th>Nama Pemensan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>
        
        <?php foreach($invoices as $inv) : ?>
            <tr>
                <td><?php echo $inv->id_invoices ?></td>
                <td><?php echo $inv->nama ?></td>
                <td><?php echo $inv->alamat ?></td>
                <td><?php echo $inv->tgl_pesan ?></td>
                <td><?php echo $inv->batas_bayar ?></td>
                <td><?php echo anchor('admin/invoices/detail/'. $inv->id_invoices, '<div class="btn btn-sm btn-primary">Detail</div>')?></td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>