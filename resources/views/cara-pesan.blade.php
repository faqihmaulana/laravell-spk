@extends('layouts.template')

@section('judul')
Cara Pesan
@endsection

@section('main')


<!-- ======= Features Section ======= -->
<section id="features" class="features">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
    </header>

    <div class="row">

      <div class="col-lg-6">
      </div>

      <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
        <div class="row align-self-center gy-4">

          <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
            <div class="d-flex align-items-center">
         
            </div>
          </div>

        </div>
      </div>

    </div> <!-- / row -->

    <!-- Feature Tabs -->
    <div class="row feture-tabs" data-aos="fade-up">
      <div class="col-lg-6">

        <!-- Tabs -->
        <ul class="nav nav-pills mb-3">
          <li>
            <a class="nav-link" data-bs-toggle="pill" href="#tab3">Cara Penanganan</a>
          </li>
        </ul><!-- End Tabs -->

        
        <!-- Tab Content -->
        <div class="tab-content">
          
          <div class="tab-pane fade show active" id="tab1">
              
         <div class="d-flex align-items-center mb-2">
              <i class=""></i>
              <h4>1. Penimbangan minimal 8 kali setahun, <br> pengukuran panjang/tinggi badan minimal 2 kali setahun;</h4>
            </div>
        
            <div class="d-flex align-items-center mb-2">
              <i class=""></i>
            <h4>2. Pemberian kapsul vitamin A 2 kali setahun.</h4>
            </div>
             
            <div class="d-flex align-items-center mb-2">
              <i class=""></i>
            <h4>3. Pemberian imunisasi dasar lengkap.</h4>
            </div>

            <div class="d-flex align-items-center mb-2">
              <i class=""></i>
            <h4>4. Pendataan Balita 0-59 bulan.</h4>
            </div>

            <div class="d-flex align-items-center mb-2">
              <i class=""></i>
            <h4>5. Pemberian Pelayanan Kesehatan balita (Pelayanan dalam dan luar gedung).</h4>
            </div>

            <div class="d-flex align-items-center mb-2">
              <i class=""></i>
            <h4>6. Pencatatan dan Pelaporan.</h4>
            </div>
          
          </div><!-- End Tab 1 Content -->

          <div class="tab-pane fade show" id="tab2">
        
            <div class="d-flex align-items-center mb-2">
              <i class=""></i>
              <h4>1. Meninggalkan 2 KTP /2 KTM /Kartu Pegawai</h4>
            </div>
            
            <div class="d-flex align-items-center mb-2">
              <i class=""></i>
              <h4>2. Kartu keluarga / C1</h4>
              </div>

            <div class="d-flex align-items-center mb-2">
              <i class=""></i>
              <h4>3. Photo Copy SIM A</h4>
                </div>

            <div class="d-flex align-items-center mb-2">
                <i class=""></i>
                <h4>4. Motor dan STNK atas nama penyewa / se-alamat dengan penyewa minimal tahun 2012</h4>
            </div> 
            
            <div class="d-flex align-items-center mb-2">
              <i class=""></i>
              <h4>5. Motor, STNK dan BPKB jika bukan atas nama</h4>
          </div> 

          <div class="d-flex align-items-center mb-2">
            <i class=""></i>
            <h4>6. Rekening Listrik</h4>
        </div>
        
        <div class="d-flex align-items-center mb-2">
           <i class=""></i>
            <h4>7. Membayar Uang Muka minimal 50% dari tarif sewa, dibayarkan maksimal 1 jam setelah booking</h4>
             </div> 

         <div class="d-flex align-items-center mb-2">
            <i class=""></i>
              <h4>8. Jaminan Uang Rp. 5jt-10jt / Unit sebagai Pengganti Jaminan Motor + STNK</h4>
                </div> 
                
        <div class="d-flex align-items-center mb-2">
           <i class=""></i>
             <h4>9. Bersedia untuk disurvey</h4>
               </div> 

        <div class="d-flex align-items-center mb-2">
           <i class=""></i>
               <h4>10. Anda Order, Mobil Kami Antar</h4>
                 </div> 
          </div><!-- End Tab 3 Content -->
          
          <div class="tab-pane fade show" id="tab3">

            <div class="d-flex align-items-center mb-2">
              <i class=""></i>
              <h4>Lakukan Pemesanan dengan cara sebagai berikut :</h4>
            </div>
            
            <div class="d-flex align-items-center mb-2">
              <i class=""></i>
              <h4>1. Silahkan hubungi 085998028730 (Whatsapp) dan tentukan tanggal pemakaian kendaraan</h4>
              </div>

            <div class="d-flex align-items-center mb-2">
              <i class=""></i>
              <h4>2. Selanjutnya kami akan mengecek ketersediaan kendaraan yang dipesan.</h4>
                </div>

            <div class="d-flex align-items-center mb-2">
                <i class=""></i>
                <h4>3. Setelah terjadi kesepakatan harga silahkan melakukan pembayaran DP / Uang Muka minimal sebesar 50 % dari harga sewa total.</h4>
            </div> 
            
            <div class="d-flex align-items-center mb-2">
              <i class=""></i>
              <h4>4.Pembayaran dapat melalui transfer bank atau langsung ke kantor kami.</h4>
          </div> 

          <div class="d-flex align-items-center mb-2">
            <i class=""></i>
            <h4>5. Setelah pembayaran DP kami terima maka selanjutnya akan kami masukkan pemesanan ke dalam daftar booking kami.</h4>
        </div>
        
        <div class="d-flex align-items-center mb-2">
           <i class=""></i>
            <h4>6. Pelunasan pembayaran dilakukan paling lambat pada H-3 perjalanan.</h4>
             </div> 
          
        </div><!-- End Tab 4 Content -->
        </div>

      </div>

      <div class="col-lg-6">
        <img src="{{asset('tema/img/cara-pesan.png')}}" class="img-fluid" alt="">
      </div>

    </div><!-- End Feature Tabs -->
  </div>
  
    </div>
  </div>
@endsection