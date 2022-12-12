<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <?php require_once 'templates/navbar.php'; ?>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <h1>About Us</h1>
            </div>
        </div>
        <div class="row">
            <div class="video-container">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dA5AEgPr-Hk"></iframe>
                </div>
            </div>
            <div class="content">
                <h3>Why choose us?</h3>
                <p>San Store merupakan Toko Kecantikan yang berlokasi di Kota Cimahi. 
                    Kami menjual produk kecantikan selama 4 tahun. 
                    Kami menjual berbagai produk seperti skincare dan kosmetik untuk segala jenis kulit yang bisa digunakan untuk wanita maupun pria. 
                    Kami menjual produk lokal dan import yang pastinya aman dan sudah ber-BPOM. 
                    San Store memiliki visi untuk menjadi toko kosmetik yang menjual produk yang aman, lengkap dan ter up to date dengan kualitas terbaik untuk customer kami tercinta.
                </p>
                <a href="#" class="btn btn-primary">learn more</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Our Store</h3>
                <section id="Maps">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="600" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.74768479183!2d107.5581920141144!3d-6.920737594999522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5f03a313cd3%3A0x4361e07dd0d1fbf9!2sGg.%20Melon%2C%20Melong%2C%20Kec.%20Cimahi%20Sel.%2C%20Kota%20Cimahi%2C%20Jawa%20Barat%2040534!5e0!3m2!1sen!2sid!4v1667101947774!5m2!1sen!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="https://fmovies-online.net"></a>
                        <br>
                        <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                    </div>
                </div>
            </div>
        </div>
        <section id="Maps">
      
    </section>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>