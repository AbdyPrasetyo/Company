<?php include('Template_Backend/header.php'); ?>
<?php include('Template_Backend/sidebar.php'); ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">


          <!-- Reports -->
          <div class="col-12">
            <div class="card">



              <div class="card-body">
                <h5 class="card-title"></h5>

                <!-- Line Chart -->
                <div id="reportsChart"></div>


                <h4>Latar Belakang</h4>
                <p>


                  Pengolahan hasil pertanian merupakan komponen kedua dalam kegiatan agrobisnis setelah komponen produksi pertanian. Banyak pula dijumpai petani yang tidak melaksanakan pengolahan hasil yang disebabkan oleh berbagai sebab, padahal disadari bahwa kegiatan pengolahan ini dianggap penting karena dianggap dapat meningkatkan nilai tambah.
                  <br>
                  Pembuatan tempe kedelai merupakan salah satu usaha dalam peningkatan nilai tambah produk kedelai menjadi tempe kedelai.Tempe kedelai merupakan makanan tradisional yang telah lama dikenal di Indonesia. Tempedibuat dengan cara fermentasi atau peragian. Dalam proses fermentasi terlibat tiga faktor pendukung, yaitu bahan baku yang diurai (kedelai), mikroorganisme (kapang tempe), dan lingkungan tumbuh (suhu, pH, kelembaban). Pembuatannya merupakan industri rakyat sehingga hampir setiap orang dapat dikatakan mampu membuat tempe sendiri.

                </p>
                <h4>Object</h4>

                <p>Yang menjadi object kami disini adalah:
                <ol>
                  <li>Tempe biasa</li>
                  <li>Tempe Gambus</li>
                </ol>
                </p>

                <img src="assets/img/2t.jpg" class="img-fluid" alt="">
                <img src="assets/img/3t.jpg" class="img-fluid" alt=""><br><br>

                <h4>Studi Kasus</h4>
                <p>
                  produsen industri tahu tempe mempunyai sisa stok kacang kedelai sebanyak 180 kg, dari sisa stok tersebut produsen tersebut ingin mengolahnya menjadi tempe memmakai 85 kg kacang kedelai, dan tempe gambus memakai 95 kg kacang kedelai. produsen tersebut mempunyai 1 kg ragi untuk permentasi tempe, dan plastik pembungkus sebanyak 20 lusin. Produsen tersebut ingin membuat produk tempe jenis gambus yang terbuat dari ampas tahu, ia memproduksi 95 kg kacang kedelai untuk menjadi tempe gambus dan menghasilkan ampas setengah dari berat kacang kedelai basah sekitar 65 kg. untuk sekali pembuatan tempe, pabrik tersebut memakai 4 kg kacang kedelay dan 2 gram ragi untuk tempe biasa sedangkan untuk tempe gambus sekali pembuatan membutuhkan 5 kg kacang kedelai dan 2gr ragi.
                  <br>

                  jadi terciptalah persamaan
                  <br>
                  4x + 2y = 85
                  <br> 5x + 2y = 95


                </p>







                <!-- End Line Chart -->

              </div>

            </div>
          </div><!-- End Reports -->


        </div><!-- End Left side columns -->

      </div>
  </section>

</main><!-- End #main -->
<?php include('Template_Backend/footer.php'); ?>