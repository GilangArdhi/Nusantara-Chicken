<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nusantara chiken</title>
  <link rel="icon" href="/aset/logo.png" type="image">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/css/home2.css')}}">
  <style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
  </style>
</head>
<body>
    <custom-navbar data-logo-url="{{ asset('/assets/images/logo home.png') }}" data-show-logout="{{ isset($showLogoutLink) ? 'true' : 'false' }}"></custom-navbar>
  <!-- section 1 -->
    <div class="section section-1 mt-5 pt-5">
        <div class="container">
          <div class="row">
            <div class="col-md-6 d-flex flex-column justify-content-center " data-aos="fade-right">
              <div class="content">
                <h1><b>Nikmati <br> Kenikmatan Ayam</b> </h1>
                <p>Suplayer ayam adalah para penyedia yang handal dan berkualitas tinggi dalam memasok beragam produk ayam, mulai dari daging segar hingga potongan-potongan yang siap olah.</p>
                <button class="btn btn-warning "> <a href="#beli" class="text-white no-underline"><b>Lihat selengkapnya</b></a></button>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-left">
              <img src="{{asset('/assets/images/logo home.png')}}" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    
      <!-- section 2 -->
      <div class="section section-2 mt-5 pt-5 blur-background">
        <div class="container">
            <div class="row">
              <div class="col-md-6">
                <img src="{{asset('/assets/images/ayamgede.png')}}" alt="Image" class="img-fluid">
              </div>
              <div class="col-md-6 d-flex flex-column justify-content-center">
                <div class="content" >
                  <div data-aos="fade-up"
                  data-aos-duration="3000">
                  <h1 ><b>Services</b></h1>
                  <p class="mt-3">Pelayanan ungulan yang akan kami berikan kedapa pembeli kami !.</p>
              </div>
                  <div class="row mt-3" >
                    <div class="col-md-4 mt-2">
                      <div class="card"data-aos="flip-left"
                      data-aos-easing="ease-out-cubic"
                      data-aos-duration="2000">
                        <div class="card-body">
                          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                              <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
                            </svg>
                          <h5 class="card-title"><b>Pengiriman Cepat</b></h5>
                          <p class="card-text">Pengiriman terjamin cepat dan sampai tujuan </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mt-2">
                      <div class="card"data-aos="flip-left"
                      data-aos-easing="ease-out-cubic"
                      data-aos-duration="2000">
                        <div class="card-body">
                          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                              <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702z"/>
                              <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z"/>
                            </svg>
                          <h5 class="card-title"><b>Kualitas Produk </b></h5>
                          <p class="card-text">Produk yang kami berikan telah melewati kualiti kontrol dan telah dipastikan kualitasnya</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 mt-2 mb-4">
                      <div class="card"data-aos="flip-left"
                      data-aos-easing="ease-out-cubic"
                      data-aos-duration="2000">
                        <div class="card-body">
                          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-piggy-bank" viewBox="0 0 16 16">
                              <path d="M5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0m1.138-1.496A6.6 6.6 0 0 1 7.964 4.5c.666 0 1.303.097 1.893.273a.5.5 0 0 0 .286-.958A7.6 7.6 0 0 0 7.964 3.5c-.734 0-1.441.103-2.102.292a.5.5 0 1 0 .276.962"/>
                              <path fill-rule="evenodd" d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069q0-.218-.02-.431c.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a1 1 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.74.74 0 0 0-.375.562c-.024.243.082.48.32.654a2 2 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595M2.516 6.26c.455-2.066 2.667-3.733 5.448-3.733 3.146 0 5.536 2.114 5.536 4.542 0 1.254-.624 2.41-1.67 3.248a.5.5 0 0 0-.165.535l.66 2.175h-.985l-.59-1.487a.5.5 0 0 0-.629-.288c-.661.23-1.39.359-2.157.359a6.6 6.6 0 0 1-2.157-.359.5.5 0 0 0-.635.304l-.525 1.471h-.979l.633-2.15a.5.5 0 0 0-.17-.534 4.65 4.65 0 0 1-1.284-1.541.5.5 0 0 0-.446-.275h-.56a.5.5 0 0 1-.492-.414l-.254-1.46h.933a.5.5 0 0 0 .488-.393m12.621-.857a.6.6 0 0 1-.098.21l-.044-.025c-.146-.09-.157-.175-.152-.223a.24.24 0 0 1 .117-.173c.049-.027.08-.021.113.012a.2.2 0 0 1 .064.199"/>
                            </svg>
                          <h5 class="card-title"><b>Harga Murah</b></h5>
                          <p class="card-text">Harga yang kami berikan merupakan harga yang menjamin kepuasan pembeli terhadap produk </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="blur-overlay">
            <h3><b>Silahkan login untuk mengakses semua fitur</b></h3>
            <button class="btn btn-primary btn-custom"><a href="/login" style="color: white; text-decoration: none;">Login</a></button>
          </div>
      </div>
    
    
<custom-footer></custom-footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('assets/js/navbar.js')}}"></script>
  <script src="{{asset('assets/js/footer.js')}}"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
