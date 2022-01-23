<?php session_start();
if (!isset($_SESSION["user"])) {
    header("Location: pages-login.php");
    exit;
}
?>
<?php include('Template_Backend/header.php'); ?>
<?php include('Template_Backend/sidebar.php'); ?>


<main id="main" class="main">

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Penggunaan</h5>
                        <div class="col-8">
                            <h5><b>Berikut ini merupakan cara penggunaan aplikasi perhitungan Metode Eliminasi Gauss Jordan:</b></h5>
                            <ol>
                                <li>Masukan Jumlah Persaaman yang ingin dihitung</li>
                                <li>klik Sumbit</li>
                                <li>Masukan Data Variabel Persamaan yang mau dihitung</li>
                                <li>klik execute jika ingin menghitung dan klik Delete Form jika ingin mereset jumlah persamaan</li>
                                <li>setelah meklik execute maka hasil perhitungan tepat dibawah ini dan tekan back jika ingin melakukan perhitungan ulang.</li>
                            </ol>

                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php include('Template_Backend/footer.php'); ?>
