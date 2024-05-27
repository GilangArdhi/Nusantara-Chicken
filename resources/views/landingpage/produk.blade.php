<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nusantara chiken</title>
  <link rel="icon" href="{{asset('/assets/images/logo.png')}}" type="image">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body, h1, p, a, button, .navbar-brand, .nav-link {
        font-family: 'Roboto', sans-serif;
      }
    body{
        background-image: url('{{asset('/assets/images/produk.jpg')}}');
      }
      .no-underline {
        text-decoration: none;
    }
    .latar{
        background-color: #DAEBFF;
    }
    .product-image {
      max-width: 100%;
      height: auto;
    }
    .card {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .card-body {
      flex-grow: 1;
    }
  </style>
</head>
<body>

    <custom-navbar data-logo-url="{{ asset('/assets/images/logo home.png') }}" data-show-logout="{{ isset($showLogoutLink) ? 'true' : 'false' }}" ></custom-navbar>

    <div class="mt-5 mb-5"></div>

  <div class="container mt-5 pt-5 mb-5">
    <div class="row">
      <div class="col text-center">
        <h1><b class="text-white">PRODUK KAMI</b></h1>
        <div class="row">
          <!-- <div class="col">
            <a href="#" class="no-underline text-white " ><b>All Product</b></a>
          </div>
          <div class="col">
            <a href="#"class="no-underline text-white" ><b>Karkas</b></a>
          </div>
          <div class="col">
            <a href="#"class="no-underline text-white" ><b>Parting</b></a>
          </div>
          <div class="col">
            <a href="#" class="no-underline text-white" ><b>Boneless</b></a>
          </div>
          <div class="col">
            <a href="#" class="no-underline text-white" ><b>Jeroan</b></a>
          </div>
          <div class="col">
            <a href="#" class="no-underline text-white" ><b>Ekses</b></a>
          </div>
          <div class="col">
            <a href="#" class="no-underline text-white"><b>Telur</b></a>
          </div> -->
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col">
        <div class="p-3 latar text-white">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-3">
            @foreach ($ayam as $chick)  
              <div class="col">
                <div class="card">
                  <form id="detailForm{{ $chick->id }}" action="/detail" method="GET">
                    @csrf
                    <img src="{{asset('/assets/images/'. $chick -> gambarProduk)}}" class="card-img-top img-fluid d-block p-3 product-image" alt="Produk">
                    <div class="card-body text-center ">
                      <h5 class="card-title"><b>{{$chick -> namaProduk}}</b> </h5>
                      <input type="hidden" name="id" value="{{$chick->id}}">
                      <!-- <p class="card-text text-body-tertiary"><b>Boneless</b></p> -->
                      <a href="#" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('detailForm{{ $chick->id }}').submit();">Detail</a>
                    </div>
                  </form>
                </div>
              </div>
            @endforeach
            <!-- <div class="col">
              <div class="card">
                <img src="{ {asset('/assets/images/produk1.png')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title"><b>Boneless Dada Ayam</b></h5>
                  <p class="card-text text-body-tertiary"><b>Boneless</b></p>
                  <a href="#" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="{ {asset('/assets/images/produk1.png')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title"><b>Boneless Dada Ayam</b></h5>
                  <p class="card-text text-body-tertiary "><b>Boneless</b></p>
                  <a href="#" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="{ {asset('/assets/images/produk1.png')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title"><b>Boneless Dada Ayam</b></h5>
                  <p class="card-text text-body-tertiary"><b>Boneless</b></p>
                  <a href="#" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="{ {asset('/assets/images/produk1.png')}}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title"><b>Boneless Dada Ayam</b></h5>
                  <p class="card-text text-body-tertiary"><b>Boneless</b></p>
                  <a href="#" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="{ {asset('/assets/images/produk1.png')}}" class="card-img-top" alt="...">
                <div class="card-body text-center ">
                  <h5 class="card-title"><b>Boneless Dada Ayam</b></h5>
                  <p class="card-text text-body-tertiary"><b>Boneless</b></p>
                  <a href="#" class="btn btn-primary">Detail</a>
                </div>
              </div>
            </div> -->
          <!-- card lainnya disini -->
        </div>
    </div>
      </div>
    </div>
  </div>

  <custom-footer class="mt-5 pt-5"></custom-footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('assets/js/navbar.js')}}"></script>
  <script src="{{asset('assets/js/footer.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script>
    $(document).ready(function() {
      var maxHeight = 0;

      // Cari gambar dengan tinggi maksimal
      $('.product-image').each(function() {
        var height = $(this).height();
        if (height > maxHeight) {
          maxHeight = height;
        }
      });

      // Set semua gambar ke tinggi maksimal
      $('.product-image').each(function() {
        $(this).height(maxHeight);
      });
    });
  </script>
</body>
</html>
