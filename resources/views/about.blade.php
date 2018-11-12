@extends('layouts.app')

@section('title', $title)



@section('content')
@include('components.banner',['pagename' => $pagename, 'imgurl' => $imgurl, 'page' => $title])
<section class="ptb ptb-sm-80">
  <div class="container">
     
        <!-- About Section -->
        <section class="ptb ptb-sm-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>KAMI, STARTUP BERORIENTASI SOSIAL</h3>
                        <p class="lead">Sesuai dengan namanya, Selfless Massage berdiri bukan hanya sebagai sebuah bisnis. Selfless Massage adalah titik temu antara komitmen berbagi dan kegiatan usaha. </p>
                    </div>
                    <div class="col-md-6">
                        <p>Kami melakukan pembekalan dan pelatihan pijat bagi angkatan kerja berpendidikan rendah, pengangguran sementara, dan Ibu rumah tangga untuk dapat memperoleh penghasilan tambahan sebagai terapis pijat profesional.
                        </p>
                        <p>Tidak hanya itu, kami berkomitmen untuk memberikan kontribusi kepada masyarakat dengan memberikan 51% keuntungan usaha untuk kegiatan sosial. Kami juga memberikan layanan pijat gratis bagi pelayan publik seperti  tim orange, pengurus masjid, guru, polantas, dan profesi lain yang perlu diapresiasi.</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- Team -->
        <section class="pb pb-sm-80">
            <div class="container">
                <!--Team Carousel -->
                <div class="row">
                    <div class="owl-carousel team-carousel nf-carousel-theme">

                        <div class="item">
                            <div class="team-item nf-col-padding">
                                <div class="team-item-img">
                                    <img src="img/team/people-1.jpg" alt="" />
                                    <div class="team-item-detail">
                                        <div class="team-item-detail-inner light-color">
                                            <h5>Ivan Butar</h5>
                                            <p>Dosen Fakultas Ekonomi
                                                program Doktoral, Konsultan
                                                Bisnis dan ekonomi, Peneliti
                                                berpengalaman.</p>
                                            <ul class="social">
                                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="https://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-item-info">
                                    <h5>Ivan Destian Butar Butar, Ph.D.</h5>
                                    <p class="">Director</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team-item nf-col-padding">
                                <div class="team-item-img">
                                    <img src="img/team/people-2.jpg" alt="" />
                                    <div class="team-item-detail">
                                        <div class="team-item-detail-inner light-color">
                                            <h5>Ariyanto</h5>
                                            <p>Alumni IESEG School of
                                                Management, LILLE - Perancis,
                                                Business Mind, dan startupaholic.</p>
                                            <ul class="social">
                                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="https://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-item-info">
                                    <h5>Ariyanto, B.B.A.</h5>
                                    <p class="">Business Development & Ops</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team-item nf-col-padding">
                                <div class="team-item-img">
                                    <img src="img/team/people-3.jpg" alt="" />
                                    <div class="team-item-detail">
                                        <div class="team-item-detail-inner light-color">
                                            <h5>Alimah</h5>
                                            <p>Terapis dan pelatih dengan lebih
                                                dari 13 tahun pengalaman di
                                                berbagai Spa dan hotel.
                                                Mengantongi berbagai sertifikasi
                                                dan pengakuan.</p>
                                            <ul class="social">
                                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="https://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-item-info">
                                    <h5>Alimah</h5>
                                    <p class="">Certified Trainer</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team-item nf-col-padding">
                                <div class="team-item-img">
                                    <img src="img/team/people-4.jpg" alt="" />
                                    <div class="team-item-detail">
                                        <div class="team-item-detail-inner light-color">
                                            <h5>Michael Lee</h5>
                                            <p>Similique sunt culpa qui officia deserunt mollitia animi dolorum fuga.</p>
                                            <ul class="social">
                                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="https://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-item-info">
                                    <h5>Michael Lee</h5>
                                    <p class="">Photographer</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Team Carousel --->
            </div>
        </section>
        <!-- End Team -->

        <!-- Testimonials -->
        <section id="testimonial" class="overlay-dark80 dark-bg ptb ptb-sm-80" style="background-image: url('img/full/25.jpg');" data-stellar-background-ratio="0.4">
            <div class="container">
                <div class="owl-carousel testimonial-carousel nf-carousel-theme white">
                    <div class="item">
                        <div class="testimonial text-center dark-color">
                            <div class="container-icon"><i class="fa fa-quote-right"></i></div>
                            <p class="lead">“Sejak saya bergabung sebagai terapis Selfless Massage, saya dapat meningkatkan
                                pendapatan sampingan sebesar 2x lipat sebagai biaya hidup tambahan dan untuk
                                tabungan. Selfless Massage sangat membantu meningkatkan kesejahteraan kami, para
                                Ibu rumah tangga. ”</p>
                            <h6 class="quote-author">Martini <span style="font-weight: 400;">( Terapis )</span></h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial text-center dark-color">
                            <div class="container-icon"><i class="fa fa-quote-right"></i></div>
                            <p class="lead">“Dalam kurun waktu yang cukup singkat, Selfless Massage mampu menarik banyak
                                orang sebagai terapis pijat dan melatih mereka dengan penuh dedikasi. ”</p>
                            <h6 class="quote-author">Ath Thur
                                Ganesha <span style="font-weight: 400;">( Regional Manager Go-Massage )</span></h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial text-center dark-color">
                            <div class="container-icon"><i class="fa fa-quote-right"></i></div>
                            <p class="lead">“Profesionalisme membutuhkan keseimbangan stamina dalam beraktifitas dan relaksasi
                                dalam beristirahat. Selfless Massage memiliki rumus menjaga keseimbangan itu bagi
                                karyawan perkantoran. ”</p>
                            <h6 class="quote-author">Bun Sucento <span style="font-weight: 400;">( Dirut Indonesia Professional Development
                                Center )</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonials -->
  </div>
</section>

@endsection