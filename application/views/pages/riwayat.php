<style>
    span {
        cursor: pointer;
    }


    .minus,
    .plus {
        width: 20px;
        height: 20px;
        background: #f2f2f2;
        border-radius: 4px;
        padding-bottom: 4px;
        border: 1px solid #ddd;
        display: inline-block;
        vertical-align: middle;
        text-align: center;
    }

    input {
        height: 34px;
        width: 50px;
        text-align: center;
        font-size: 16px;
        border: 1px solid #ddd;
        border-radius: 4px;
        display: inline-block;
        vertical-align: middle;
    }
</style>

<div class="container-fluid p-5">
    <h4 class="">Riwayat Pemesanan Terakhir</h4>
	<h3 class="">Belum Selesai</h4>
    <table class="table table-borderless">


        <?php
        if (!empty($buku)) {
            $no = 1;
        ?>
            <tr>
                <th>No</th>
                <th>Sampul</th>
                <th>Nama Buku</th>
                <th>Penulis</th>
                <th>Qty</th>
                <th>Rating</th>
                <th>Feedback</th>
				<th>Action</th>
            </tr>
            <?php
            foreach ($buku as $items) : ?>
			

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><img src="<?php echo base_url() . '/img/' . unserialize($items['barang'])[0]['gambar'] ?>" alt="" width="150"></td>
                    <td><?php echo unserialize($items['barang'])[0]['nama_buku'] ?></td>
                    <td><?php echo unserialize($items['barang'])[0]['penulis'] ?></td>
					<form action="<?php echo site_url('Beranda/simpanUlasan') ?>" method="post" enctype="multipart/form-data" >
                    <td>
					<input type="hidden" name="id" value="<?php echo unserialize($items['barang'])[0]['barang_id']?>" />
					<input type="hidden" name="id_transaksi" value="<?php echo $items['id_transaksi']?>" />
                        <div class="field<?= unserialize($items['barang'])[0]['id_keranjang']; ?>">
                            <!-- <button type="button" id="sub" class="sub">-</button> -->
                            <input id="<?= unserialize($items['barang'])[0]['id_keranjang']; ?>" class="input" type="number" value="<?= unserialize($items['barang'])[0]['qty']; ?>" min="1" max="10" onchange="sum()" readonly/>
                            <!-- <button type="button" id="add" class="add">+</button> -->
                        </div>

                    </td>
                    <td>
						<input name="rating" type="range" class="form-range" min="0" max="5" id="customRange2">
                    </td>
                    <td>
                        <textarea name="ulasan" id="" cols="30" rows="3"></textarea>
                    </td>
					<td>
						<button class="btn btn-success" type="submit">Selesaikan</button>
                    </td>
					</form>
                </tr>


            <?php endforeach;
        } else { ?>
        <div class="container-fluid d-flex justify-content-center">

            <div class="row-12">
                <div class="col-12">
                    
                    <div class="alert alert-info mx-5  text-center " role="alert">
                        Kosong !!!
                    </div>
                </div>
            </div>
        </div>
        <?php
        } ?>

    </table>
	<h3 class="">Sudah Selesai</h4>
    <table class="table table-borderless">


        <?php
        if (!empty($bukuSelesai)) {
            $no = 1;
        ?>
            <tr>
                <th>No</th>
                <th>Sampul</th>
                <th>Nama Buku</th>
                <th>Penulis</th>
                <th>Qty</th>
            </tr>
            <?php
            foreach ($bukuSelesai as $items) : ?>


                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><img src="<?php echo base_url() . '/img/' . unserialize($items['barang'])[0]['gambar'] ?>" alt="" width="150"></td>
                    <td><?php echo unserialize($items['barang'])[0]['nama_buku'] ?></td>
                    <td><?php echo unserialize($items['barang'])[0]['penulis'] ?></td>
					<td>
					<?= unserialize($items['barang'])[0]['qty']; ?>
                    </td>
                </tr>


            <?php endforeach;
        } else { ?>
        <div class="container-fluid d-flex justify-content-center">

            <div class="row-12">
                <div class="col-12">
                    
                    <div class="alert alert-info mx-5  text-center " role="alert">
                        Kosong !!!
                    </div>
                </div>
            </div>
        </div>
        <?php
        } ?>

    </table>
</div>

<script type='text/javascript'>
    $(document).ready(function() {

        // Initialize
        $('.ratingbar').rating({
            showCaption: false,
            showClear: false,
            size: 'sm'
        });

        // Rating change
        $('.ratingbar').on('rating:change', function(event, value, caption) {
            var id = this.id;
            var splitid = id.split('_');
            var postid = splitid[1];

            $.ajax({
                url: '<?= base_url() ?>index.php/employee/updateRating',
                type: 'post',
                data: {
                    postid: postid,
                    rating: value
                },
                success: function(response) {
                    $('#averagerating_' + postid).text(response);
                }
            });
        });
    });
</script>
<script>
    // $('.add').click(function() {
    //     if ($(this).prev().val() < 10) {
    //         $(this).prev().val(+$(this).prev().val() + 1);
    //     }
    // });
    // $('.sub').click(function() {
    //     if ($(this).next().val() > 1) {
    //         if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
    //     }
    // });
    // $('#total').val() = $('.input').val().sum()   
</script>
<script>
    // const sum = () => {

    //     let total = document.getElementById('total');
    //     let input = document.getElementsByClassName('input');

    //     for (let object of input) {
    //         let val = parseInt(object.value);
    //         let jumlah=0;
    //         jumlah += val ;

    //         total.value +=  jumlah ;  
    //         console.log();
    //     }
    // }
</script>
