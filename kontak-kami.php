<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="https://indikanopi.com/assets/svg/Indi-favicoon.svg">
    <title> Kontak Kami | IndiKanopi</title>
    <!--- css --->
    
    <link rel="stylesheet" type="text/css" href="https://indikanopi.com/assets/css/indi.css">
    <link rel="preload" href="https://indikanopi.com/assets/css/indi.css" as="style">
    <link rel="stylesheet" type="text/css" href="https://indikanopi.com/assets/css/style.css">
    <link rel="preload" href="https://indikanopi.com/assets/css/style.css" as="style">
    <link rel="stylesheet" href="/assets/font/icomoon/style.css">
    
    <!--- icon --->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!--- js --->
    
    <script src="https://indikanopi.com/assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://indikanopi.com/assets/js/indi-header.js"></script>
    <script src="https://indikanopi.com/assets/js/swiper-bundle.min.js"></script>
    
    
    
    <!--- font --->
    <link rel="preload" href="https://indikanopi.com/assets/Font/Nunitosans/nunitosans-300.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="https://indikanopi.com/assets/Font/Nunitosans/nunitosans-400.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="https://indikanopi.com/assets/Font/Nunitosans/nunitosans-700.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="https://indikanopi.com/assets/Font/Nunitosans/nunitosans-300.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://indikanopi.com/assets/Font/Nunitosans/nunitosans-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://indikanopi.com/assets/Font/Nunitosans/nunitosans-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://indikanopi.com/assets/Font/Didact-gothic/didact-gothic-v18-latin-regular.woff" as="font" type="font/woff" crossorigin>
    <link rel="preload" href="https://indikanopi.com/assets/Font/Didact-gothic/didact-gothic-v18-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
</head>
<body class="body">
    <header>
        <?php $page = 'kontak'; include 'navbar.php'?>
    </header>
    <section class="ind-content">
            <div class="container">
                <div class="row align-items-stretch no-gutters contact-wrap">
                  <div class="col-md-8">
                    <div class="form h-100">
                      <h3>Kirim Kami Pesan</h3>
                      <form class="mb-5" method="post" id="contactForm" name="contactForm">
                        <div class="row">
                          <div class="col-md-6 form-group mb-5">
                            <label for="" class="col-form-label">Nama *</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama Kamu">
                          </div>
                          <div class="col-md-6 form-group mb-5">
                            <label for="" class="col-form-label">Email *</label>
                            <input type="text" class="form-control" name="email" id="email"  placeholder="Email Kamu">
                          </div>
                        </div>
          
                        <div class="row">
                          <div class="col-md-6 form-group mb-5">
                            <label for="" class="col-form-label">Telepon (opsional)</label>
                            <input type="text" class="form-control" name="phone" id="phone"  placeholder="0812-3456-7890">
                          </div>
                          <div class="col-md-6 form-group mb-5">
                            <label for="" class="col-form-label">Perusahaan (opsional)</label>
                            <input type="text" class="form-control" name="company" id="company"  placeholder="Nama Perusahaan">
                          </div>
                        </div>
          
                        <div class="row">
                          <div class="col-md-12 form-group mb-5">
                            <label for="message" class="col-form-label">Pesan *</label>
                            <textarea class="form-control" name="message" id="message" cols="30" rows="4"  placeholder="Tulis Pesan Mu..."></textarea>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 form-group">
                            <input type="submit" value="Kirim Pesan" class="btn btn-primary rounded-0 py-2 px-4">
                            <span class="submitting"></span>
                          </div>
                        </div>
                      </form>
          
                      <div id="form-message-warning mt-4"></div> 
                      <div id="form-message-success">
                        Pesan mu telah terkirim, Terimakasih!
                      </div>
          
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="contact-info h-100">
                      <h3>Informasi Kontak</h3>
                      <p class="mb-5">Hubungi kami untuk info lebih lanjut atau bagaimana kami dapat membantu Anda dengan lebih baik!</p>
                      <ul class="list-unstyled">
                        <li class="d-flex">
                          <span class="wrap-icon icon-room mr-3"></span>
                          <span class="text">Jl. Raya Tajur Blok Tulus Rejo No.5, RT.03/RW.07, Muarasari, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16137, Indonesia.</span>
                        </li>
                        <li class="d-flex">
                          <span class="wrap-icon icon-phone mr-3"></span>
                          <span class="text">+62 (821) 1417 1245</span>
                        </li>
                        <li class="d-flex">
                            <span class="wrap-icon icon-whatsapp mr-3"></span>
                            <span class="text">+62 (857) 2107 0704</span>
                          </li>
                        <li class="d-flex">
                          <span class="wrap-icon icon-envelope mr-3"></span>
                          <span class="text">cs@indikanopi.com</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
        </section>

    <footer class="ind-footer">
          <?php include 'footer.php'?>
    </footer>
    
    <script src="https://indikanopi.com/assets/js/main.js"></script>
    <script src="https://indikanopi.com/assets/js/indi.bundle.js"></script>
    <script src="https://indikanopi.com/assets/js/jquery.validate.min.js"></script>
</body>
</html>