<?php
    require "koneksi.php";
    $queryProduk = mysqli_query ($con,"SELECT id, nama, harga, foto, detail FROM produk LIMIT 6");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Komputer Online | Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "navbar.php"; ?>

    <!-- BANNER -->
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center text-white">
            <h1>Toko Komputer Online</h1>
            <h4>Lengkapi Bagian Komputermu dengan Belanja Disini</h4>
                <div class="col-8 offset-2">
                    <form method="get" action="produk.php">
                        <div class="input-group input-group-lg my-4">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" 
                            aria-describedby="basic-addon2" name="keyword">
                            <button type="submit" class="btn color3 text-white">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- HIGHLIGHT CATEGORY -->
        <div class="container-fluid py-5">
            <div class="container text-center">
                <h3>Direkomendasikan Untuk Anda</h3>

                <div class="row mt-5">
                    <div class="col-md-4 mb-3">
                        <div class="highlighted-kategori kategori-motherboard d-flex justify-content-center
                        align-items-center">
                            <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Motherboard">Motherboard</a></h4>
                        </div>
                    </div>
                        <div class="col-md-4 mb-3">
                            <div class="highlighted-kategori kategori-processor d-flex justify-content-center
                            align-items-center">
                                <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Processor">Processor</a></h4>
                        </div>
                    </div>
                        <div class="col-md-4 mb-3">
                            <div class="highlighted-kategori kategori-memory d-flex justify-content-center
                            align-items-center">
                                <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Memory">Memory</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ABOUT US -->
        <div class="container-fluid color3 py-5">
            <div class="container text-center">
                <h3 class="text-white">Tentang Kami</h3>
                <p class="fs-6 mt-3 text-white">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Nostrum aut facilis dignissimos dicta ipsa necessitatibus delectus voluptatem 
                    laudantium sunt reprehenderit quas maiores minima explicabo facere aliquam vero, 
                    officia corporis esse exercitationem eum omnis sit quasi, repudiandae sequi? 
                    Vitae quibusdam ipsum veniam explicabo aliquid voluptatum dolor dolores id. 
                    Quasi laboriosam necessitatibus ipsa, nisi qui iste illo perferendis, 
                    magni reprehenderit dolores, 
                    porro vitae rem modi similique obcaecati excepturi architecto culpa. 
                    Ducimus tenetur, in temporibus nostrum commodi porro eligendi explicabo impedit illo optio?
                </p>
            </div>
        </div>


        <!-- PRODUK -->
        <div class="container-fluid py-5">
            <div class="container text-center">
                <h3>Produk</h3>

                <div class="row mt-5">
                    <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
                    <div class="col-sm-6 col-md-4 mb-3">
                        <div class="card h-100">
                            <div class="image-box">
                                <img class="card-img-top" src="image/<?php echo $data['foto']; ?>" alt="Card image cap">
                            </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $data['nama']?></h5>
                                    <p class="card-text text-truncate"><?php echo $data['detail']?></p>
                                    <p class="card-text text-harga">RP <?php echo $data['harga']?></p>
                                    <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn color2">Lihat Detail</a>
                                </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <a class="btn btn-outline-warning mt-3 p-3 fs-5" href="produk.php">See More</a>
            </div>
        </div>

        <!-- footer -->
        <?php require "footer.php"; ?>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>