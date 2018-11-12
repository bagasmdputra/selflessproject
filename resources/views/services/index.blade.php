@extends('layouts.app')

@section('title', $title)



@section('content')
@include('components.banner',['pagename' => $pagename, 'imgurl' => $imgurl, 'page' => $title])
<section class="ptb ptb-sm-80">
  <div class="container">
     
   <!-- Service Section -->
   <section id="service" class="wow fadeIn pt pb-80">
    <div class="container text-center">
        <div class="row text-center">
            <div class="col-md-8 offset-md-2">
                <h3 class="h4">Our Service</h3>
                <div class="spacer-15"></div>
                <p class="lead">Selfless Massage menerima booking layanan pijat bagi perusahaan, kegiatan indoor/outdoor, dan personal. Dengan jumlah terapis yang memadai, Selfless Massage mampu menyesuaikan permintaan tenaga terapis Anda.</p>
            </div>
        </div>
        <div class="row mt-60">
            <div class="col-md-4 mb-45">
                <div class="page-icon-top"><i class="ion ion-ios-compose-outline"></i></div>
                <h5>Corporate Massage</h5>
                <p>Layanan pijat ringan (light massage) bagi seluruh/sebagian karyawan perusahaan.</p>
            </div>
            <div class="col-md-4 mb-45">
                <div class="page-icon-top"><i class="ion ion-ios-gear-outline"></i></div>
                <h5>Event Massage</h5>
                <p>Layanan massage corner/instant spa untuk kegiatan seminar, outbond, workshop, dll.</p>
            </div>
            <div class="col-md-4 mb-45">
                <div class="page-icon-top"><i class="ion ion-social-apple-outline"></i></div>
                <h5>Personal Massage</h5>
                <p>Layanan massage per orangan untuk dating ke rumah, hotel, dan apartment.</p>
            </div>
            <div class="col-md-4 mb-45">
                <div class="page-icon-top"><i class="ion ion-ios-compose-outline"></i></div>
                <h5>Layanan Berkelanjutan</h5>
                <p>
                    Layanan massage therapy bagi Ibu hamil menjelang dan setelah melahirkan, dan pijat anak untuk membantu terapi pertumbuhan
                    </p>
            </div>
            <div class="col-md-4 mb-45">
                <div class="page-icon-top"><i class="ion ion-ios-gear-outline"></i></div>
                <h5>Experts & Guest Gift</h5>
                <p>Layanan exclusive massage untuk tamu dinas dan rekanan usaha perusahaan.</p>
            </div>
            <div class="col-md-4 mb-45">
                <div class="page-icon-top"><i class="ion ion-social-apple-outline"></i></div>
                <h5>Massage Training</h5>
                <p>
                    Layanan pelatihan pijat bagi pencari kerja, persiapan ujian profesi dan sertifikasi pijat
                    .</p>
            </div>
        </div>
    </div>
</section>

<!-- Statement Section -->
<section class="dark-bg  ptb-60" id="statement">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h4 class="mb-15">Ingin tahu lebih banyak tentang layanan kami?</h4>
                <a class="btn btn-md btn-white">See More</a>
            </div>
        </div>
    </div>
</section>
<!-- End Statement Section -->

<!-- Pricing Section -->
<section id="Pricing" class="ptb ptb-sm-80">
    <div class="container text-center">
        <h3>Pricing</h3>
        <div class="spacer-60"></div>
        <div class="row">
            <div class="col-md-4">
                <div class="Pricing-box">
                    <div class="price-title spacing-box">
                        <h4>Silver</h4>
                    </div>
                    <hr />
                    <div class="spacing-box">
                        <div class="price"><span class="price-sm">Rp</span><span class="price-lg">100k</span></div>
                        <div class="price-tenure">per jam</div>
                    </div>
                    <hr />
                    <div class="pricing-features spacing-grid">
                        <ul>
                            <li>2-4 orang / jam</li>
                            <li>15 – 20 Menit Light Massage / orang
                            </li>
                            <li>Tempat fleksibel (bangku kerja/back massage chair)</li>
                            <li>Tidak Menggunakan Massage Oil</li>
                            <li>Set up dan packing cepat</li>
                            <li>Minim gangguan aktifitas kerja</li>
                        </ul>
                    </div>
                    <hr />
                    <div class="spacing-grid">
                        <a class="btn btn-md btn-black">Get It Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="Pricing-box highlight">
                    <div class="price-title spacing-box">
                        <h4>Standard</h4>
                    </div>
                    <hr />
                    <div class="spacing-box">
                        <div class="price"><span class="price-sm">$</span><span class="price-lg">79</span></div>
                        <div class="price-tenure">per month</div>
                    </div>
                    <hr />
                    <div class="pricing-features spacing-grid">
                        <ul>
                            <li>Full Access</li>
                            <li>1 Domain <strong>Free</strong></li>
                            <li>Source Files</li>
                            <li><strong>500 User Accounts</strong></li>
                            <li>6 Month License</li>
                            <li>Premium Support</li>
                        </ul>
                    </div>
                    <hr />
                    <div class="spacing-grid">
                        <a class="btn btn-md btn-black">Sign Up Today</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="Pricing-box">
                    <div class="price-title spacing-box">
                        <h4>Advanced</h4>
                    </div>
                    <hr />
                    <div class="spacing-box">
                        <div class="price"><span class="price-sm">$</span><span class="price-lg">109</span></div>
                        <div class="price-tenure">per month</div>
                    </div>
                    <hr />
                    <div class="pricing-features spacing-grid">
                        <ul>
                            <li>Full Access</li>
                            <li>1 Domain <strong>Free</strong></li>
                            <li>Source Files</li>
                            <li><strong>5000 User Accounts</strong></li>
                            <li>6 Month License</li>
                            <li>Free Support</li>
                        </ul>
                    </div>
                    <hr />
                    <div class="spacing-grid">
                        <a class="btn btn-md btn-black">Sign Up Today</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Pricing Section -->

<!-- End Service Section -->

  </div>
</section>

@endsection