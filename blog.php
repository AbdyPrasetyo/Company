<?php include('Template_frontend/header.php'); ?>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Blog</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Blog</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">
          <!-- ======================================================================================================== -->
          <article class="entry">

            <div class="entry-img">
              <img src="assets/img/blog/blog_1.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="blog-single.php">Eliminasi Gauss dan Gauss Jordan</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.php">Abdy Prasetyo</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.php"><time datetime="2020-01-01">Jan 18, 2022</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.php">0 Comments</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                Eliminasi Gauss-Jordan adalah prosedur pemecahan sistem persamaan linear dengan mengubahnya menjadi bentuk matriks eselon baris tereduksi dengan Operasi Baris Elementer.
              </p>
              <div class="read-more">
                <a href="blog-single.php">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->
          <!-- ============================================================================================== -->
          <article class="entry">

            <div class="entry-img">
              <img src="assets/img/blog/21.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="blog-single2.php">Studi Kasus Pada Penelitian kami</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.php">Abdy Prasetyo</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.php"><time datetime="2020-01-01">Jan 19, 2022</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.php">0 Comments</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                Pengolahan hasil pertanian merupakan komponen kedua dalam kegiatan agrobisnis setelah komponen produksi pertanian. Banyak pula dijumpai petani yang tidak melaksanakan pengolahan hasil yang disebabkan oleh berbagai sebab, padahal disadari bahwa kegiatan pengolahan ini dianggap penting karena dianggap dapat meningkatkan nilai tambah.
              </p>
              <div class="read-more">
                <a href="blog-single2.php">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->


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
                <li><a href="#">Educaion <span>(3)</span></a></li>
              </ul>
            </div><!-- End sidebar categories-->



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
  </section><!-- End Blog Section -->

</main><!-- End #main -->

<?php include('Template_frontend/footer.php'); ?>