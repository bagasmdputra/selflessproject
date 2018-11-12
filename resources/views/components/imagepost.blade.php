<div class="col-md-6 col-sm-6 nf-item spacing-grid">
    <div class="blog-post">
        <div class="post-media">
            <img class="item-container" src="{{ asset('storage/'.($post->image != null? $post->image : 'img/full/10.jpg')) }}" alt="1" />
        </div>
        <div class="post-meta"><span>{{ $post->created_at->format('M d, Y') }}</span></div>
        <div class="post-header">
            <h5><a href="{{ route('post', ['id' => $post->id]) }}">{{ $post->title }}</a></h5>
        </div>
        <div class="post-entry">
            {!!html_entity_decode( (strlen($post->body) > 13) ? substr($post->body,0,300).'...' : $post->body ) !!}
        </div>
        <div class="post-tag pull-left"><span><a>Branding</a>,</span><span><a>Design</a></span></div>
        <div class="post-more-link pull-right"><a href="{{ route('post', ['id' => $post->id]) }} ">Read More<i class="fa fa-long-arrow-right right"></i></a></div>
    </div>
</div>