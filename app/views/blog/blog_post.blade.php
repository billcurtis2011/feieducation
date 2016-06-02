@section('content')
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54edff4372053c96" async="async"></script>

<section id="main_content">

    <div class="container">

        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/blog">News & Updates</a></li>
            <li class="active">{{$article->title}}</li>
        </ol>

        <div class="row">


            <div class="col-md-8">
                <?php
                $content = $article->children("content", true);

                $post_link = end((explode('/', rtrim($article->link, '/'))));

                //Extract the image
                preg_match_all('/<img[^>]+>/i',$content, $result);

                if(count($result[0])) {
                    $image = $result[0][0];
                    $i = new SimpleXMLElement($image);
                    $content = str_replace($image, '', $content);
                }

                ?>
                <div class="post">
                    @if(isset($i['src']))
                        <a href="/blog/{{$post_link}}" title="single_post.html"><img src="{{$i['src']}}" alt="" class="img-responsive"></a>
                    @endif
                    <div class="post_info clearfix">
                        <div class="post-left">
                            <ul>
                                <li><i class="icon-calendar-empty"></i>On <span>{{date( 'M j, Y',strtotime($article->pubDate))}}</span></li>
                                <li><i class="icon-user"></i>By {{$article->children("dc", true)}}</li>
                                <!-- <li><i class="icon-tags"></i>Tags <a href="#">Works</a> <a href="#">Personal</a></li> -->
                            </ul>
                        </div>
                        <div class="pull-right">
                           <div class="addthis_native_toolbox"></div>
                        </div>
                    </div>
                    <h2><a href="/blog/{{$post_link}}" title="{{$article->title}}">{{$article->title}}</a></h2>
                     {{$content}}
                </div><!-- end post -->

                <hr>



            </div><!-- End col-md-8-->
            <aside class="col-md-4">
                 @include('blog.side')
            </aside><!-- End aside -->


        </div>  <!-- End row-->
    </div><!-- End container -->
</section><!-- End main_content-->
@stop