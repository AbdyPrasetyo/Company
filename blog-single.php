<?php include('Template_frontend/header.php'); ?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Blog Single</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li>Blog Single</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Single Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">

          <article class="entry entry-single">

            <div class="entry-img">
              <img src="assets/img/blog/blog_1.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="#">Eliminasi Gauss dan Gauss Jordan</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Abdy Prasetyo</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 18, 2022</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">0 Comments</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <h4>Eliminasi Gauss</h4>
              <p>
                Eliminasi Gauss adalah suatu metode untuk mengoperasikan nilai-nilai di dalam matriks sehingga menjadi matriks yang lebih sederhana lagi. Dengan melakukan operasi baris sehingga matriks tersebut menjadi matriks yang baris. Ini dapat digunakan sebagai salah satu metode penyelesaian persamaan linear dengan menggunakan matriks. Caranya dengan mengubah persamaan linear tersebut ke dalam matriks teraugmentasi dan mengoperasikannya. Setelah menjadi matriks baris, lakukan substitusi balik untuk mendapatkan nilai dari variabel-variabel tersebut.
              </p>
              <h4>Ciri ciri Metode Gauss adalah</h4>
              <img src="assets/img/blog/gauss.jpg" class="img-fluid" alt="">
              <ol>
                <li>Jika suatu baris tidak semua nol, maka bilangan pertama yang tidak nol adalah 1 (1 utama) </li>
                <li>Baris nol terletak paling bawah</li>
                <li> 1 utama baris berikutnya berada dikanan 1 utama baris diatasnya </li>
                <li> Dibawah 1 utama harus nol </li>
              </ol>
              <br>
              <h4>Eliminasi gauss Jordan</h4>
              <p>
                Eliminasi Gauss-Jordan adalah pengembangan dari eliminasi Gauss yang hasilnya lebih sederhana lagi. Caranya adalah dengan meneruskan operasi baris dari eliminasi Gauss sehingga menghasilkan matriks yang Eselon-baris. Ini juga dapat digunakan sebagai salah satu metode penyelesaian persamaan linear dengan menggunakan matriks.

                <br>
                <img src="assets/img/blog/gaussjordan.jpg" class="img-fluid" alt=""><br>
                Metode ini digunakan untuk mencari invers dari sebuah matriks.
                Prosedur umum untuk metode eliminasi Gauss-Jordan ini adalah:
              <ol>
                <li> Ubah sistem persamaan linier yang ingin dihitung menjadi matriks augmentasi.</li>
                <li>Lakukan operasi baris elementer pada matriks augmentasi (A|b) untuk mengubah matriks A menjadi dalam bentuk baris eselon yang tereduksi</li>
              </ol>
              </p>
              <br>
              <h4>
                Contoh Soal Untuk Gauss dan Gauss jordan

              </h4>
              <p>
                Cari Nilai X1,X2,X3 pada persamaan dibawah ini menggunakan eliminasi gauss dan eliminasi gauss jordan
                <br>
                2X<sub>1</sub> + X <sub>2</sub> + 4X<sub>3</sub> = 8 <br>
                3X<sub>1</sub> + 2X<sub>2</sub> + X<sub>3</sub> = 10 <br>
                X<sub>1</sub> + 3X<sub>2</sub> + 3X<sub>3</sub> = 8 <br>
                Penyelesaian :
              </p>
              <img src="assets/img/blog/jor1.jpg" class="img-fluid" alt=""><br><br>
              <hr>
              <img src="assets/img/blog/jor2.jpg" class="img-fluid" alt=""><br><br>
              <hr>
              <img src="assets/img/blog/jor3.jpg" class="img-fluid" alt=""><br><br>
              <h6>jadi hasil yang didapat adalah: <br> X <sub>1</sub> = 2.23 <br> X <sub>2</sub> = 1.384 <br> X <sub>3</sub> = 0.538
              </h6>


            </div>

            <div class="entry-footer">
              <i class="bi bi-folder"></i>
              <ul class="cats">
                <li><a href="#">komputasi</a></li>
              </ul>

              <i class="bi bi-tags"></i>
              <ul class="tags">
                <li><a href="#">Metode Numerik</a></li>
                <li><a href="#">Matrix</a></li>
              </ul>
            </div>

          </article><!-- End blog entry -->

          <div class="blog-author d-flex align-items-center">
            <img src="assets/img/blog/1.jpeg" class="rounded-circle float-left" alt="">
            <div>
              <h4>Reza Abdy Prasetyo</h4>
              <div class="social-links">
                <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
              </div>
              <p>
                "Kesempatan kamu untuk sukses di setiap kondisi selalu dapat diukur oleh seberapa besar kepercayaan kamu pada diri sendiri."
              </p>
            </div>
          </div><!-- End blog author bio -->

          <div class="blog-comments">

            <h4 class="comments-count">0 Comments</h4>



            <div class="reply-form">
              <h4>Leave a Reply</h4>
              <p>Your email address will not be published. Required fields are marked * </p>
              <form action="">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input name="name" type="text" class="form-control" placeholder="Your Name*">
                  </div>
                  <div class="col-md-6 form-group">
                    <input name="email" type="text" class="form-control" placeholder="Your Email*">
                  </div>
                </div>
                <div class="row">
                  <div class="col form-group">
                    <input name="website" type="text" class="form-control" placeholder="Your Website">
                  </div>
                </div>
                <div class="row">
                  <div class="col form-group">
                    <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Post Comment</button>

              </form>

            </div>

          </div><!-- End blog comments -->

        </div><!-- End blog entries list -->

        <div class="col-lg-4">

          <div class="sidebar">

            <h3 class="sidebar-title">Search</h3>
            <div class="sidebar-item search-form">
              <form action="">
                <input type="text">
                <button type="submit"><i class="bi bi-search"></i></button>
              </form>
            </div><!-- End sidebar search formn-->

            <h3 class="sidebar-title">Categories</h3>
            <div class="sidebar-item categories">
              <ul>
                <li><a href="#">Educaion <span>(2)</span></a></li>
              </ul>
            </div><!-- End sidebar categories-->

            <h3 class="sidebar-title">Recent Posts</h3>
            <div class="sidebar-item recent-posts">
              <div class="post-item clearfix">
                <img src="assets/img/blog/21.jpg" alt="">
                <h4><a href="blog-single2.php">Studi Kasus Pada Penelitian</a></h4>
                <time datetime="2020-01-01">Jan 19, 2022</time>
              </div>


            </div><!-- End sidebar recent posts-->

            <h3 class="sidebar-title">Tags</h3>
            <div class="sidebar-item tags">
              <ul>
                <li><a href="#">App</a></li>
                <li><a href="#">IT</a></li>
                <li><a href="#">Metode Numerik</a></li>
                <li><a href="#">Aritmatika</a></li>
                <li><a href="#">Creative</a></li>
                <li><a href="#">Smart</a></li>
                <li><a href="#">Tips</a></li>
              </ul>
            </div><!-- End sidebar tags-->

          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Single Section -->

</main><!-- End #main -->

<?php include('Template_frontend/footer.php'); ?>