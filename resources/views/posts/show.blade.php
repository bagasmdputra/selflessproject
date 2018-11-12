@extends('layouts.app')

@section('title', $post->title)



@section('content')
@include('components.banner',['pagename' => $post->title , 'midpage'=>'Blog', 'midurl'=> 'blog','imgurl' => 'storage/'.($post->image != null? $post->image : 'img/full/10.jpg'), 'page' => $post->title])
        <!-- Blog Post Section -->
        <section class="ptb ptb-sm-80">
          <div class="container">
              <div class="row">
                  <!-- Post Bar -->
                  <div class="col-lg-9 col-md-9 blog-post-hr">
                      <div class="blog-post mb-30">
                          <div class="post-meta"><span>{{ $post->created_at->format('M d, Y') }}</span></div>

                          {{-- <div class="post-header">
                              <h2>{{ $post->title }}</h2>
                          </div>

                          <div class="post-media">
                              <img alt="" src="{{ asset('storage/'.($post->image != null? $post->image : 'img/full/10.jpg')) }}">
                          </div> --}}

                          <div class="post-entry">
                              {!! $post->body !!}
                          </div>

                          <div class="post-tag pull-left"><span><a>Branding</a>,</span><span><a>Design</a></span></div>
                      </div>

                      <hr />

                      <div class="post-author">
                          <div class="post-author-img pull-left">
                              <img alt="author" src="{{ asset('img/user-av.jpg') }}">
                          </div>
                          <div class="post-author-details pull-left">
                              <h6>Admin</h6>
                              <ul class="social">
                                  <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                  <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                  <li><a href="https://www.dribbble.com/" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                  <li><a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                  <li><a href="https://www.behance.net/" target="_blank"><i class="fa fa-behance"></i></a></li>
                              </ul>

                          </div>
                      </div>

                      <hr />

                      <div class="clearfix"></div>


                  </div>
                  <!-- End Post Bar -->

                 
              </div>
          </div>
      </section>
      <!-- End Blog Post Section -->
@endsection