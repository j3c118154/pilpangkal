<?php include 'header.php' ?>    
    <div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('<?php echo base_url('assets/img/head_pangan1.jpg');?>')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <h1 class="title-modern">Pangan Lokal Indonesia</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">            
            <div class="row">
                <div class="title-area">
                    <h2>Pangan Lokal Kita!</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">Hasil bumi Indonesia</p>
                </div>
            </div>
            
            <div class="row">
                <?php foreach ($dataPangan as $row): ?>
                <div class="col-md-6">
                    <div class="card">
                        <img src="<?php echo base_url('assets/img/'.$row->foto);?>" class="card-img-top" alt="aaaa">
                         <div class="card-body" style="padding: 10px;">
                            <h3 class="card-title"><?php echo $row->nama_pangan; ?></h3>
                            <p class="card-text" style="white-space: nowrap; width: 500px; overflow: hidden; text-overflow: ellipsis;"><?php echo $row->deskripsi;?></p>
                            <div class="text-right">
                                <a href="<?php echo site_url('Artikel_Pangan/tampil/'.$row->kode_pangan) ?>"><button class="btn btn-danger btn-fill">Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php include 'footer.php' ?>    