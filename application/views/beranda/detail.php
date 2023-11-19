<div class="container">
    <div class="row">
        <div class="col my-5">
            <div class="isi d-flex ">

                <div class="gambar mx-5">
                    <img width="200" src="<?php echo base_url() . "./img/" . $barang[0]['gambar'] ?>" alt="">
                </div>

                <div class="detail-buku">
                    <h2><?= $barang[0]['nama_buku']; ?></h2>
                    <p>Penulis : <?= $barang[0]['penulis']; ?></p>
                    <p>Kategori : <?= $barang[0]['kategori']; ?></p>
                    <p>Sinopsis</p>
                    <p><?= $barang[0]['sinopsis']; ?></p>
                </div>
            </div>

        </div>
    </div>
</div>