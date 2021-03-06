<?php include 'header.php' ?>        
    <div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('<?php echo base_url('assets/img/head_berita1.jpg');?>')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <h1 class="title-modern">Berita Pangan Lokal</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2>Berita Pangan Lokal Kita!</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">Berita terkini pangan lokal yang bisa diikuti setiap harinya!</p>
                    <?php 
                    if (!empty($isLogin)) 
                    {
                    ?> 
                        <a href="<?php echo site_url('Berita/add');?>" type="btn btn-primary">Upload Berita Pangan Lokal</a>
                    <?php }?>
                </div>
            </div>
            <div class="row">
                <?php foreach($dataBerita as $row): ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo base_url('assets/img/'.$row->foto);?>" class="card-img-top" alt="aaaa">
                         <div class="card-body" style="padding: 10px;">
                            <h3 class="card-title"><?php echo $row->judul ?></h3>
                            <p class="card-text" style="white-space: nowrap; width: 300px; overflow: hidden; text-overflow: ellipsis;"><?php echo $row->deskripsi ?></p>
                            <div class="text-right">
                                <a href="<?php echo site_url('Artikel_Berita/tampil/'.$row->kode_berita) ?>"><button class="btn btn-danger btn-fill">Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php include 'footer.php' ?>    