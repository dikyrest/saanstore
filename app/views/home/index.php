<?php require_once __DIR__ . "/../templates/header.php" ?>
<?php require_once __DIR__ . "/../templates/navbar.php" ?>
    
<section id="home">
<div class="container py-5">
    <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= BASE_URL ?>/public/images/Banner.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= BASE_URL ?>/public/images/Banner1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= BASE_URL ?>/public/images/Banner2.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
</section>

<section id="about">
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h1>About Us</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 video-container">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dA5AEgPr-Hk"></iframe>
            </div>
        </div>
        <div class="col-md-4 content">
            <h3>Why Choose Us?</h3>
            <p>San Store merupakan Toko Kecantikan yang berlokasi di Kota Cimahi. 
                Kami menjual produk kecantikan selama 4 tahun. 
                Kami menjual berbagai produk seperti skincare dan kosmetik untuk segala jenis kulit yang bisa digunakan untuk wanita maupun pria. 
                Kami menjual produk lokal dan import yang pastinya aman dan sudah ber-BPOM. 
                San Store memiliki visi untuk menjadi toko kosmetik yang menjual produk yang aman, lengkap dan ter up to date dengan kualitas terbaik untuk customer kami tercinta.
            </p>
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
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<section id="product">
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h1>Products</h1>
        </div>
    </div>
    <div>
        <h3>
            Lip Products Recommendations
        </h3>
    </div>
    <div class="row">
        <div class="card col-md-3 me-3">
            <img class="card-img-top" src="<?= BASE_URL ?>/public/images/bnb lip cream.png" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">BNB Berry Lip Cream</h5>
                <p class="card-text">Rp69.000</p>
                <?php if (isset($_SESSION['username']) && ($_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <div class="d-flex justify-content-around">
                            <a href="#" class="btn btn-primary text-center">Edit</a>
                            <a href="#" class="btn btn-danger text-center">Delete</a>
                        </div>
                    </div>
                <?php } else if (isset($_SESSION['username']) && (!$_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <a href="#" class="btn btn-primary text-center">Buy Now</a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="card col-md-3 me-3">
            <img class="card-img-top" src="<?= BASE_URL ?>/public/images/bnb liptint.png" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">BNB Bossy Lip Tint</h5>
                <p class="card-text">Rp69.000</p>
                <?php if (isset($_SESSION['username']) && ($_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <div class="d-flex justify-content-around">
                            <a href="#" class="btn btn-primary text-center">Edit</a>
                            <a href="#" class="btn btn-danger text-center">Delete</a>
                        </div>
                    </div>
                <?php } else if (isset($_SESSION['username']) && (!$_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <a href="#" class="btn btn-primary text-center">Buy Now</a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="card col-md-3 me-3">
            <img class="card-img-top" src="<?= BASE_URL ?>/public/images/bnb lip velvet.png" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">BNB Berry Lip Velvet</h5>
                <p class="card-text">Rp69.000</p>
                <?php if (isset($_SESSION['username']) && ($_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <div class="d-flex justify-content-around">
                            <a href="#" class="btn btn-primary text-center">Edit</a>
                            <a href="#" class="btn btn-danger text-center">Delete</a>
                        </div>
                    </div>
                <?php } else if (isset($_SESSION['username']) && (!$_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <a href="#" class="btn btn-primary text-center">Buy Now</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div>
        <h3>
            Facial Wash Recommendations
        </h3>
    </div>
    <div class="row">
        <div class="card col-md-3 me-3">
            <img class="card-img-top" src="<?= BASE_URL ?>/public/images/Kleveru fcw.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">KLEVERU Sea Buckthorn Cleansing Gel</h5>
                <p class="card-text">Rp69.000</p>
                <?php if (isset($_SESSION['username']) && ($_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <div class="d-flex justify-content-around">
                            <a href="#" class="btn btn-primary text-center">Edit</a>
                            <a href="#" class="btn btn-danger text-center">Delete</a>
                        </div>
                    </div>
                <?php } else if (isset($_SESSION['username']) && (!$_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <a href="#" class="btn btn-primary text-center">Buy Now</a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="card col-md-3 me-3">
            <img class="card-img-top" src="<?= BASE_URL ?>/public/images/Whitelab fcw.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">Whitelab Brightening Facial Wash</h5>
                <p class="card-text">Rp42.000</p>
                <?php if (isset($_SESSION['username']) && ($_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <div class="d-flex justify-content-around">
                            <a href="#" class="btn btn-primary text-center">Edit</a>
                            <a href="#" class="btn btn-danger text-center">Delete</a>
                        </div>
                    </div>
                <?php } else if (isset($_SESSION['username']) && (!$_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <a href="#" class="btn btn-primary text-center">Buy Now</a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="card col-md-3 me-3">
            <img class="card-img-top" src="<?= BASE_URL ?>/public/images/Azarine fcw.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">Azarine Acne Gentle Cleansing Foam</h5>
                <p class="card-text">Rp29.000</p>
                <?php if (isset($_SESSION['username']) && ($_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <div class="d-flex justify-content-around">
                            <a href="#" class="btn btn-primary text-center">Edit</a>
                            <a href="#" class="btn btn-danger text-center">Delete</a>
                        </div>
                    </div>
                <?php } else if (isset($_SESSION['username']) && (!$_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <a href="#" class="btn btn-primary text-center">Buy Now</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div>
        <h3>
            Moisturizer Recommendations
        </h3>
    </div>
    <div class="row">
        <div class="card col-md-3 me-3">
            <img class="card-img-top" src="<?= BASE_URL ?>/public/images/avoskin moist.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">Avoskin Your Skin Bae Glow Concentrate</h5>
                <p class="card-text">Rp269.000</p>
                <?php if (isset($_SESSION['username']) && ($_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <div class="d-flex justify-content-around">
                            <a href="#" class="btn btn-primary text-center">Edit</a>
                            <a href="#" class="btn btn-danger text-center">Delete</a>
                        </div>
                    </div>
                <?php } else if (isset($_SESSION['username']) && (!$_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <a href="#" class="btn btn-primary text-center">Buy Now</a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="card col-md-3 me-3">
            <img class="card-img-top" src="<?= BASE_URL ?>/public/images/skintific moist.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">SKINTIFIC Ceramide Moisturize Gel</h5>
                <p class="card-text">Rp169.000</p>
                <?php if (isset($_SESSION['username']) && ($_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <div class="d-flex justify-content-around">
                            <a href="#" class="btn btn-primary text-center">Edit</a>
                            <a href="#" class="btn btn-danger text-center">Delete</a>
                        </div>
                    </div>
                <?php } else if (isset($_SESSION['username']) && (!$_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <a href="#" class="btn btn-primary text-center">Buy Now</a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="card col-md-3 me-3">
            <img class="card-img-top" src="<?= BASE_URL ?>/public/images/somethinc moist.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">SOMETHINC Skin Saviour Moisturizer Gel</h5>
                <p class="card-text">Rp199.000</p>
                <?php if (isset($_SESSION['username']) && ($_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <div class="d-flex justify-content-around">
                            <a href="#" class="btn btn-primary text-center">Edit</a>
                            <a href="#" class="btn btn-danger text-center">Delete</a>
                        </div>
                    </div>
                <?php } else if (isset($_SESSION['username']) && (!$_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <a href="#" class="btn btn-primary text-center">Buy Now</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div>
        <h3>
            Sun Screen Recommendations
        </h3>
    </div>
    <div class="row">
        <div class="card col-md-3 me-3">
            <img class="card-img-top" src="<?= BASE_URL ?>/public/images/azarine ss.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">AZARINE Hydrasoothe Sunscreen Gel</h5>
                <p class="card-text">Rp55.000</p>
                <?php if (isset($_SESSION['username']) && ($_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <div class="d-flex justify-content-around">
                            <a href="#" class="btn btn-primary text-center">Edit</a>
                            <a href="#" class="btn btn-danger text-center">Delete</a>
                        </div>
                    </div>
                <?php } else if (isset($_SESSION['username']) && (!$_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <a href="#" class="btn btn-primary text-center">Buy Now</a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="card col-md-3 me-3">
            <img class="card-img-top" src="<?= BASE_URL ?>/public/images/nivea ss.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">Nivea Sun Face Protection Serum</h5>
                <p class="card-text">Rp55.000</p>
                <?php if (isset($_SESSION['username']) && ($_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <div class="d-flex justify-content-around">
                            <a href="#" class="btn btn-primary text-center">Edit</a>
                            <a href="#" class="btn btn-danger text-center">Delete</a>
                        </div>
                    </div>
                <?php } else if (isset($_SESSION['username']) && (!$_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <a href="#" class="btn btn-primary text-center">Buy Now</a>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="card col-md-3 me-3">
            <img class="card-img-top" src="<?= BASE_URL ?>/public/images/originote ss.jpeg" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">The Originote Ceramella Sunscreen</h5>
                <p class="card-text">Rp48.000</p>
                <?php if (isset($_SESSION['username']) && ($_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <div class="d-flex justify-content-around">
                            <a href="#" class="btn btn-primary text-center">Edit</a>
                            <a href="#" class="btn btn-danger text-center">Delete</a>
                        </div>
                    </div>
                <?php } else if (isset($_SESSION['username']) && (!$_SESSION['isAdmin'])) { ?>
                    <div class="card-footer bg-transparent text-center">
                        <a href="#" class="btn btn-primary text-center">Buy Now</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div>
        <h3>
            New Products
        </h3>
        <div class="row">
        <?php if (isset($data['products']) && count($data['products']) > 0) { ?>
            <?php foreach ($data['products'] as $product) : ?>
                <div class="card col-md-3 me-3">
                    <img class="card-img-top" src="<?= BASE_URL . "/" . $product['image'] ?>" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $product['name'] ?></h5>
                        <p class="card-text"><?= "Rp" . $product['price'] ?></p>
                        <?php if (isset($_SESSION['username']) && ($_SESSION['isAdmin'])) { ?>
                            <div class="card-footer bg-transparent text-center">
                                <div class="d-flex justify-content-around">
                                    <a href="<?= BASE_URL ?>/product/edit/<?= $product['id'] ?>" class="btn btn-primary text-center">Edit</a>
                                    <a href="<?= BASE_URL ?>/product/delete/<?= $product['id'] ?>" class="btn btn-danger text-center">Delete</a>
                                </div>
                            </div>
                        <?php } else if (isset($_SESSION['username']) && (!$_SESSION['isAdmin'])) { ?>
                            <div class="card-footer bg-transparent text-center">
                                <a href="<?= BASE_URL ?>/cart/add/<?= $product['id'] ?>" class="btn btn-primary text-center">Buy Now</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php } else { ?>
            <p>Coming Soon</p>
        <?php } ?>
        </div>
    </div>
</div>
</section>

<section id="contact">
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h1>Contact</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <i class="fas fa-map"></i>
                <h3>Address</h3>
                <p>Jl. Melon No. 1, Cimahi Selatan, Cimahi, Jawa Barat 40534</p>
            </div>
            <div class="row">
                <i class="fas fa-envelope"></i>
                <h3>Phone</h3>
                <p>0812-3456-7890</p>
            </div>
            <div class="row">
                <i class="fas fa-phone"></i>
                <h3>Email</h3>
                <p>storesaan@gmail.com</p>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <h3>Send Us a Message</h3>
                <form action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
    </div>
</div>
</section>

<div class="container py-5">
    <h3>Customer Rating</h3>
    <p>Based on category product</p>
	<div class="progress">
		<div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
	</div>
</div>

<?php require_once __DIR__ . "/../templates/footer.php" ?>