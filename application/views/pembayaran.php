<div class="container-fluid">

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if($keranjang = $this->cart->contents())
                {
                    foreach($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h5>Total Belanja Anda : Rp. ". number_format($grand_total,0,',','.');
                
                ?>
            </div><br><br>
        
            <h3>Input Halaman Dan Pembayaran</h3>

            <form method="post" action="<?php echo base_url()?>dashboard/proses_pesanan">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" placeholder="Masukan Nama Lengkap Anda . . . " class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" placeholder="Masukan Alamat Lengkap Anda . . ." class="form-control">
                </div>
                <div class="form-group">
                    <label>No HP</label>
                    <input type="text" name="nohp" placeholder="Masukan No HP Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>Pilih Jasa Pengiriman</label>
                    <select class="form-control">
                        <option>JNE</option>
                        <option>TIKI</option>
                        <option>GOJEK</option>
                        <option>GRAB</option>
                        <option>POS Indonesia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pilih BANK</label>
                    <select class="form-control">
                        <option>BCA - XXXXXX</option>
                        <option>BRI - XXXXXX</option>
                        <option>MANDIRI - XXXXXX</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
            </form>
        
            <?php
            }else{
                echo "<h5>Keranjang Belanja Anda Masih Kosong";
            }
            ?>

        </div>
        <div class="col-md2"></div>
    </div>

</div>