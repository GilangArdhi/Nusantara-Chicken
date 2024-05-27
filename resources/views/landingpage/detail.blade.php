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
        background-image: url('{{asset('/assets/images/ulasan.jpg')}}');
      }
      .form-control-blue {
        background-color: #DAEBFF;
        color: white;
    }
    .form-control-blue::placeholder {
        color: #000000;
    }
    .product-image {
        max-width: 100%;
        height: auto;
    }
    .whatsapp-button {
        background-color: #25D366;
        color: white;
        border: none;
        padding: 15px 30px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .whatsapp-button:hover {
        background-color: #1da851;
    }
</style>
</head>
<body>
    <custom-navbar data-logo-url="{{ asset('/assets/images/logo home.png') }}" data-show-logout="{{ isset($showLogoutLink) ? 'true' : 'false' }}"></custom-navbar>
    <div class="pt-5 mb-5 "> </div>
    <div class="container ">
    @foreach ($user as $cust)
        <input type="hidden" id="userName" value="{{$cust->name}}">
    @endforeach
        <div class="p-5 rounded-top" style="background-color: #DBEAFE;">
            <div class="p-5 rounded" style="background-color: #DBEAFE;">
            @foreach ($ayam as $tampil)    
                <!-- Konten -->
                <div class="row mb-4 align-items-center">
                    <div class="col-md-4 text-center">
                        <img src="{{asset('/assets/images/'. $tampil -> gambarProduk)}}" class="img-fluid" alt="Gambar">
                    </div>
                    <div class="col-md-8">
                        <h5 class="text-secondary">HOME / PRODUK</h5>
                        <h2>{{$tampil -> namaProduk}}</h2>
                        <p>Harga : Rp{{$tampil -> harga}}/Kg</p>
                        <button class="whatsapp-button" onclick="redirectToWhatsApp()">Kirim Pesan ke WhatsApp</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5><b>DESCRIPTION</b></h5>
                        <p>{{$tampil -> deskripsi}}</p>
                        <!-- <h5><b>Klasifikasi Ukuran</b></h5>
                        <ul>
                            <li>200-250 gram</li>
                            <li>200-250 gram</li>
                        </ul>

                        <h5><b>Grade</b></h5>
                        <ul>
                            <li>Grade A love</li>
                            <li>Grade A love</li>
                            <li>Grade A love</li>
                        </ul>

                        <h5><b>Klasifikasi Potongan</b></h5>
                        <ul>
                            <li>Love</li>
                            <li>Love</li>
                        </ul>

                        
                        <h5><b>Boneless Dada Ayam Grade A Love</b></h5>
                        <ul>
                            <li>Produk berbentuk love dan masih ada kulit</li>
                            <li>Produk berbentuk love dan masih ada kulit</li>
                            <li>Produk berbentuk love dan masih ada kulit</li>
                            <li>Produk berbentuk love dan masih ada kulit</li>
                        </ul>
                        
                        <h5><b>Boneless Dada Ayam Grade A non-love</b></h5>
                        <ul>
                            <li>Produk tidak berbentuk love namu kulit masih ada</li>
                            <li>Produk tidak berbentuk love namu kulit masih ada</li>
                            <li>Produk tidak berbentuk love namu kulit masih ada</li>
                            <li>Produk tidak berbentuk love namu kulit masih ada</li>
                            <li>Produk tidak berbentuk love namu kulit masih ada</li>
                        </ul>
                        
                        <h5><b>Boneless Dada Ayam Grade C</b></h5>
                        <ul>
                            <li>Produk berubah warna menjadi hijau dan bau</li>
                            <li>Produk berubah warna menjadi hijau dan bau</li>
                            <li>Produk berubah warna menjadi hijau dan bau</li>
                            <li>Produk berubah warna menjadi hijau dan bau</li>
                        </ul> -->

                    </div>
                </div>
                <h5><b>RELATED PRODUCTS</b></h5>
                <!-- Carousel -->
                @php
                    $chunks = $allAyam->chunk(3); // Mengelompokkan setiap 3 item
                @endphp
                <div id="carouselExampleControls" class="carousel slide mt-4" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($chunks as $chunkIndex => $chunk)
                            <div class="carousel-item {{ $chunkIndex === 0 ? 'active' : '' }}">
                                <div class="row">
                                    @foreach ($chunk as $related)
                                        <div class="col-md-4">
                                            <div class="card">
                                                <form id="detailForm{{ $related->id }}" action="/detail" method="GET">
                                                    @csrf
                                                    <img src="{{ asset('/assets/images/' . $related->gambarProduk) }}" class="card-img-top img-fluid d-block p-3 product-image" alt="Produk">
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title"><b>{{ $related->namaProduk }}</b></h5>
                                                        <input type="hidden" name="id" value="{{ $related->id }}">
                                                        <a href="#" class="btn btn-primary" onclick="event.preventDefault(); document.getElementById('detailForm{{ $related->id }}').submit();">Detail</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
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
            @endforeach
            </div>

           
        </div>
        <div class="rounded-bottom" style="background-color: #FFF0BF;">
            <h4 class="text-center pt-5"><b>Nusantara Chicken siap kirim ke wilayah lainnya</b></h4>
            <p class="text-center pb-5">Jakarta, Bogor, Depok, Tangerang, Bekasi,Bularaja, Cilegon,Tasikmalaya, Ciamis, Garut, Bandung, Cianjur, Cirebon, Karawang, Purwokerto, Sukabumi,Tegal</p>
        </div>
    </div>

    <custom-footer></custom-footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/js/navbar.js')}}"></script>
    <script src="{{asset('assets/js/footer.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function redirectToWhatsApp() {
            // Ganti nomor berkut dengan nomor WhatsApp tujuan
            var phoneNumber = "+6285339455068";
            // Ambil nilai nama dari elemen HTML yang diisi oleh Blade
            var userName = document.getElementById('userName').value;
            // Template pesan yang ingin dikirim
            var message = "Nama: " + userName + "\nAlamat: \nNomorHP: \nRincihan Pesanan";
            // Membuat URL untuk WhatsApp
            var whatsappUrl = "https://wa.me/" + phoneNumber + "?text=" + encodeURIComponent(message);
            // Mengarahkan ke URL WhatsApp
            window.location.href = whatsappUrl;
        }
    </script>
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
