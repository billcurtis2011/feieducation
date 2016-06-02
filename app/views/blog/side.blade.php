<div class="box_style_1">
@if(Request::segment(1) == 'blog')
    <div class="widget">
        <h4>{{Lang::get('blog.right_widget_title_1')}}</h4>
        <p>
            {{Lang::get('blog.right_widget_txt')}}
        </p>
    </div><!-- End widget -->

@endif
    <div class="widget">
        <h4>{{Lang::get('blog.right_widget_title_2')}}</h4>

        <ul class="recent_post">
            @if(count($articles))
                @foreach($articles as $article)
                     <?php $post_link = end((explode('/', rtrim($article->link, '/')))); ?>
                    <li>
                        <i class="icon-calendar-empty"></i> {{date( 'jS F, Y',strtotime($article->pubDate))}}
                        <div><a href="/blog/{{$post_link}}">{{$article->title}}</a></div>
                    </li>
                @endforeach
            @endif
        </ul>
    </div><!-- End widget -->

</div><!-- End box-sidebar -->


<div class="fei_tweets" style="width: 100%; margin-bottom: 20px;">
    <a class="twitter-timeline" href="https://twitter.com/FEIMiami" data-widget-id="510104090852855808">Tweets by @FEIMiami</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

