@extends('layouts.app')

@section('title', 'Blog')



@section('content')
@include('components.banner',['pagename' => "Our Blog", 'imgurl' => "img/full/02.jpg", 'page' => "Blog"])
<section class="ptb ptb-sm-80">
  <div class="container">
      <!-- Post Item -->
      <div class="row masonry">

          @foreach ($posts as $post)
              @include('components.imagepost',['post' => $post])
          @endforeach


      </div>
      <!-- End Post Item -->

      <!-- Pagination Nav -->
      {{ $posts->links() }}
      {{-- <div class="pagination-nav mt-60 mt-xs-30">
          <ul>
              <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
          </ul>
      </div> --}}
      <!-- End Pagination Nav -->
  </div>
</section>

@endsection