<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom CSS Link -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
</head>

<body class="default_color">
   <!-- Sidebar -->
   <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="d-flex justify-content-end" href="#"><img style="max-width: 30%;" src="Img/world_fashion_logo.jpg" alt="Logo"></a>
            <!-- navbar-brand ms-3 img-fluid -->
        </div>
    </nav>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header gap-3">
        <svg style="max-width: 8%;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
            <h5 class="offcanvas-title" id="offcanvasMenuLabel">Hello, AlexChan!</h5>   <!-- Buat Ini Jadi Username Akun -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body background_sidebar_color">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <b><h6><a class="nav-link active" aria-current="page" href="#">Home</a></h6></b>
                </li>
                <li class="nav-item">
                    <b><h6><a class="nav-link" href="#">Former events</a></h6></b>
                </li>
                <li class="nav-item">
                    <b><h6><a class="nav-link" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#transactionHistoryModal" href="#">Transaction History</a></h6></b>
                </li>
            </ul>
            <form class="d-flex mt-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="upcoming-events mt-4 jam no_padding_margin">
                <b><h6>Upcoming event:</h6></b>
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-2 text-center no_padding_margin">
                                <h4 class="no_padding_margin">19</h4>
                                <h4 class="no_padding_margin">OCT</h4>
                            </div>
                            <div class="col-6 no_padding_margin text-center">
                                <p class="no_padding_margin">4:00 pm - 8:00 pm</p>
                                <h4>Abu Dhabi</h4>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-2 text-center no_padding_margin">
                            <h4 class="no_padding_margin">25</h4>
                            <h4 class="no_padding_margin">OCT</h4>
                        </div>
                        <div class="col-6 no_padding_margin text-center">
                            <p class="no_padding_margin">4:00 pm - 8:00 pm</p>
                            <h4>New York</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sponsored-by mt-4">
                <b><h6>Sponsored by</h6></b>
                <div class="container">
                    <div class="row">
                        <div class="col-5 mb-3">
                            <div class="sponsor-item bg-light rounded"><img class="img-fluid p-1 rounded" src="Img/sponsor1.jpeg" alt="Sponsor"></div>
                        </div>
                        <div class="col-5 mb-3">
                            <div class="sponsor-item bg-light rounded"><img class="img-fluid p-1 rounded" src="Img/sponsor2.jpeg" alt="Sponsor"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 mb-3">
                            <div class="sponsor-item bg-light rounded"><img class="img-fluid p-1 rounded" src="Img/sponsor3.png" alt="Sponsor"></div>
                        </div>
                        <div class="col-5 mb-3">
                            <div class="sponsor-item bg-light rounded"><img class="img-fluid p-1 rounded" src="Img/sponsor4.png" alt="Sponsor"></div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item text-center mt-2">
                    <b><h6><a class="nav-link cr logout_color rounded" href="#">Logout</a></h6></b>
                </li>
            </ul>
        </div>
    </div>
    <!-- Transaction History -->
    <div class="modal fade" id="transactionHistoryModal" tabindex="-1" aria-labelledby="transactionHistoryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="transactionHistoryModalLabel">Transaction History</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- Transaction Card Example -->
            <div class="transaction-card" data-bs-toggle="modal" data-bs-target="#transactionDetailModal1">
            <div class="d-flex justify-content-between">
                <span>ID: WDP-1715414831-H509BRF0SGF0K0</span>
                <span class="status-success">Success</span>
            </div>
            <div class="mt-2">11/05/2024</div>
            <div class="mt-2">2 Tiket World Fashion</div>
            <div class="mt-2">Rp. 200.000,00</div>
            </div>
            <div class="transaction-card" data-bs-toggle="modal" data-bs-target="#transactionDetailModal2">
            <div class="d-flex justify-content-between">
                <span>ID: FF-1714646394-LVR2MDIWZ79H8CR</span>
                <span class="status-pending">Pending</span>
            </div>
            <div class="mt-2">02/05/2024</div>
            <div class="mt-2">5 Tiket World Fashion</div>
            <div class="mt-2">Rp. 500.000,00</div>
            </div>
            <div class="transaction-card" data-bs-toggle="modal" data-bs-target="#transactionDetailModal3">
            <div class="d-flex justify-content-between">
                <span>ID: FF-1714646294-VNWP79AZYGRESID</span>
                <span class="status-expired">Expired</span>
            </div>
            <div class="mt-2">02/05/2024</div>
            <div class="mt-2">1 Tiket World Fashion</div>
            <div class="mt-2">Rp. 100.000,00</div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!-- Transaction Detail Modal 1 -->
    <div class="modal fade" id="transactionDetailModal1" tabindex="-1" aria-labelledby="transactionDetailModal1Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="transactionDetailModal1Label">Transaction Detail</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Transaction ID: WDP-1715414831-H509BRF0SGF0K0</p>
            <p>Status: Success</p>
            <p>Date: 11/05/2024</p>
            <p>Item: 2 Tiket World Fashion</p>
            <p>Amount: Rp. 200.000,00</p>
        </div>
        </div>
    </div>
    </div>

    <!-- Transaction Detail Modal 2 -->
    <div class="modal fade" id="transactionDetailModal2" tabindex="-1" aria-labelledby="transactionDetailModal2Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="transactionDetailModal2Label">Transaction Detail</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Transaction ID: FF-1714646394-LVR2MDIWZ79H8CR</p>
            <p>Status: Pending</p>
            <p>Date: 02/05/2024</p>
            <p>Item: 5 Tiket World Fashion</p>
            <p>Amount: Rp. 500.000,00</p>
        </div>
        </div>
    </div>
    </div>

    <!-- Transaction Detail Modal 3 -->
    <div class="modal fade" id="transactionDetailModal3" tabindex="-1" aria-labelledby="transactionDetailModal3Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="transactionDetailModal3Label">Transaction Detail</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Transaction ID: FF-1714646294-VNWP79AZYGRESID</p>
            <p>Status: Expired</p>
            <p>Date: 02/05/2024</p>
            <p>Item: 1 Tiket World Fashion</p>
            <p>Amount: Rp. 100.000,00</p>
        </div>
        </div>
    </div>
    </div>
    <!-- Header Video -->
    <div class="container-fluid gx-0">
        <div class="image-container">
            <div class="ratio ratio-16x9">
                <video class="video-bg" src="{{ asset('video/fashionshow.mp4') }}" autoplay loop muted playsinline></video>
            </div>
            <div class="text-overlay">
                <div class="overlay_header">
                    <b>Global Fashion 2017</b>
                    <br>
                    Abu Dhabi
                </div>
                <div class="overlay_desc">
                    <p>Prepare to be dazzled as top designers showcase their latest collections on the runway. Discover the hottest trends and find inspiration for your wardrobe. Immerse yourself in the glamorous atmosphere, mingle with industry insiders, and experience the excitement of the fashion world firsthand.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Three Videos -->
    <div class="container">
        <div class="row mt-3 mb-5">
            <div class="col-4">
                <video class="video-bg img-fluid" src="{{ asset('video/smallvid1.mp4') }}"></video>
            </div>
            <div class="col-4">
                <video class="video-bg img-fluid" src="{{ asset('video/smallvid2.mp4') }}"></video>
            </div>
            <div class="col-4">
                <video class="video-bg img-fluid" src="{{ asset('video/smallvid3.mp4') }}"></video>
            </div>
        </div>
    </div>
    <!-- Countdown Event -->    <!-- NEED BACKEND -->
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>Fashion Event</h2>
                <h3>19 OCT, 18.00</h3>
            </div>
        </div>
        <div class="row text-center d-flex justify-content-center pt-3 pb-3">
            <div class="col-2">
                <h1>00</h1>
                <h3>Days</h3>
            </div>
            <div class="col-2">
                <h1>20</h1>
                <h3>Hrs</h3>
            </div>
            <div class="col-2">
                <h1>22</h1>
                <h3>Min</h3>
            </div>
            <div class="col-2">
                <h1>10</h1>
                <h3>Sec</h3>
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-2 mb-2 pt-3 pb-3">
            <div class="col-6 text-center">
                <b><p>Don't miss this opportunity to indulge your passion for fashion and be a part of an unforgettable event!</p></b>
            </div>
        </div>
    </div>
    <!-- Popup -->
    <div class="container">
        <!-- Trigger button for the modal -->
        <div class="row">
            <div class="col d-flex justify-content-center">
                <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <h1>PRE ORDER NOW</h1>
                </button>
            </div>
        </div>
        <!-- Modal 1 -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pre Order form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Horizontal form with input fields -->
                        <form id="preOrderForm">
                            <div class="mb-3 row">
                                <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputNama" placeholder="Nama">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputNoTelepon" class="col-sm-2 col-form-label">No Telepon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputNoTelepon" placeholder="No Telepon">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="inputJumlahTiket" class="col-sm-2 col-form-label">Jumlah Tiket</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="inputJumlahTiket" placeholder="Jumlah Tiket">
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary w-100" id="submitBtn" data-bs-toggle="modal" data-bs-target="#captchaModal">Bayar Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2 (CAPTCHA) -->
        <div class="modal fade" id="captchaModal" tabindex="-1" aria-labelledby="captchaModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="captchaModalLabel">CAPTCHA Verification</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="captchaForm">
                            <div class="mb-3">
                                <label for="captchaInput" class="form-label">Enter the text shown in the image below:</label>
                                <img src="path/to/captcha.jpg" alt="CAPTCHA Image" class="img-fluid mb-3">
                                <input type="text" class="form-control" id="captchaInput" placeholder="CAPTCHA">
                            </div>
                            <button type="button" class="btn btn-primary w-100" id="submitCaptchaBtn" data-bs-toggle="modal" data-bs-target="#nextInputModal">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 3 -->
        <div class="modal fade" id="nextInputModal" tabindex="-1" aria-labelledby="nextInputModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h5 class="modal-title" id="nextInputModalLabel">Pay Now</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row border ms-1 me-1 d-flex no_padding_margin">
                            <div class="col-12 col-md-4 text-start">
                                <b><p class="no_padding_margin">Tanggal:</p></b>
                                <p class="no_padding_margin">22/05/2024</p>
                            </div>
                            <div class="col-12 col-md-4 text-start">
                                <b><p class="no_padding_margin">Kode:</p></b>
                                <p class="no_padding_margin">KWDF-123456789109</p>
                            </div>
                            <div class="col-12 col-md-4 text-start">
                                <b><p class="no_padding_margin">Status:</p></b>
                                <p class="no_padding_margin">Belum Dibayar</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-center d-flex flex-column justify-content-center align-items-center pt-3 pb-3">
                                <div class="d-flex justify-content-center gap-2">
                                    <div class="cr">
                                        <h3 class="countdown_text no_padding_margin">20</h3>
                                        <h4 class="countdown_text no_padding_margin">Hrs</h4>
                                    </div>
                                    <div class="cr">
                                        <h3 class="countdown_text no_padding_margin">22</h3>
                                        <h4 class="countdown_text no_padding_margin">Min</h4>
                                    </div>
                                    <div class="cr">
                                        <h3 class="countdown_text no_padding_margin">10</h3>
                                        <h4 class="countdown_text no_padding_margin">Sec</h4>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <img src="/Img/logo_tm.png" alt="QR Code" class="img-fluid"> <!-- QR Code Here -->
                                </div>
                            </div>
                            <div class="col-12 col-md-8 border pe-0">
                                <div class="row no_padding_margin">
                                    <div class="col-5 no_padding_margin fs-5 d-flex flex-column gap-1">
                                        <label class="pembelian_text" for="name">Nama: </label>
                                        <label for="no.telp">No Telp: </label>
                                        <label for="email">Email: </label>
                                        <label for="jumlah_tiket">Jumlah Tiket: </label>
                                        <label for="total_bayar">Total Bayar: </label>
                                    </div>
                                    <div class="col-7 no_padding_margin fs-5 d-flex flex-column gap-1">
                                        <label for="name">Shabrina Zatalini</label>
                                        <label for="no.telp">085893459719</label>
                                        <label for="email">bina@gmail.com</label>
                                        <label for="jumlah_tiket">2</label>
                                        <label for="total_bayar">Rp. 200.000,00</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-primary" id="closeConfirmationBtn" data-bs-toggle="modal" data-bs-target="#confirmationModal">Home</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 4 -->
        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmationModalLabel">Pre Order Success</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Your pre-order has been submitted successfully!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('hidden.bs.modal', function (event) {
        if (document.querySelectorAll('.modal.show').length === 0) {
            const backdrop = document.querySelector('.modal-backdrop');
            if (backdrop) {
                backdrop.parentNode.removeChild(backdrop);
            }
            document.body.classList.remove('modal-open');
            document.body.style.paddingRight = '';
        }
    });

    </script>

    <!-- News -->
    <div class="container mt-5 mb-5 border border-2 rounded">
        <div class="row align-items-center border-0 border-md">
            <div class="col-md-4 p-0">
                <div class="square-container">
                    <img src="Img/news.jpeg" alt="Responsive Image" class="img-fluid rounded">
                </div>
            </div>
            <div class="col">
                <p class="fs-5 news_desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="main_color container-fluid">
        <div class="container">
            <div class="row mb-3">
                <div class="col-12">
                    <h2 class="cw pt-1 pb-1">Location</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3613.8073542448806!2d55.1406664!3d25.0745178!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1716210390196!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <h3 class="cw pb-2 border-bottom">Help & FAQ</h3>
                            <ul class="list-unstyled">
                                <li><a href="#" class="cw text-decoration-none">Privacy Policy</a></li>
                                <li><a href="#" class="cw text-decoration-none">Return And Refund Policy</a></li>
                                <li><a href="#" class="cw text-decoration-none">Customer Service</a></li>
                                <li><a href="#" class="cw text-decoration-none">Feedback</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <h3 class="cw pb-2 border-bottom">The Company</h3>
                            <ul class="list-unstyled">
                                <li><a href="#" class="cw text-decoration-none">About</a></li>
                                <li><a href="#" class="cw text-decoration-none">Careers</a></li>
                                <li><a href="#" class="cw text-decoration-none">Store Locator</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <h3 class="cw pb-2 border-bottom mt-3">More</h3>
                            <ul class="list-unstyled">
                                <li><a href="#" class="cw text-decoration-none">Franchise</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <h3 class="cw pb-2 mt-3">Follow Us</h3>
                            <div class="d-flex gap-2">
                                <i style="font-size: 1.5rem;" class="fa-brands fa-twitter"></i>
                                <i style="font-size: 1.5rem;" class="fa-brands fa-instagram"></i>
                                <i style="font-size: 1.5rem;" class="fa-brands fa-youtube"></i>
                                <i style="font-size: 1.5rem;" class="fa-brands fa-facebook-f"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 text-center pt-2 border-top">
                    <p class="cw">© 2024 World Fashion</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
