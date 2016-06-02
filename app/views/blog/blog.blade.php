@section('content')
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54edff4372053c96" async="async"></script>
 <section id="sub-header" class="blog-sub-header">
        <div class="header-overlay-imgthief"></div>
        <div class="container sub-header-content">
        <div class="row">
            <div class="col-md-12 sub-header-text-content">
                <h1 class="main-headeing"><span class="animated fadeInDown">{{Lang::get('blog.heading_title')}}</span></h1>
                <p class="lead boxed-subheading-semiblue animated fadeInDown">
                    {{Lang::get('blog.heading_subtitle')}}
                </p>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    <div class="divider_top"></div>
</section><!-- End sub-header -->

<section id="main_content">

    <div class="container">

        <ol class="breadcrumb">
            <li><a href="/">FEI</a></li>
            <li class="active">{{Lang::get('header.menu_news')}}</li>
        </ol>

        <div class="row">


            <div class="col-md-8">
                @if(count($articles))
                    @foreach($articles as $article)
                    <?php
                    //
                    $post_link = end((explode('/', rtrim($article->link, '/'))));

                    //Extract the image
                    preg_match_all('/<img[^>]+>/i',$article->description, $result);

                    if(count($result[0])) {
                        $image = $result[0][0];
                        $i = new SimpleXMLElement($image);
                    }

                    ?>
                <div class="post">
                    @if(isset($i['src']))
                        <a href="/blog/{{$post_link}}" title="{{$article->title}}"><img src="{{$i['src']}}" alt="" class="img-responsive"></a>
                    @endif
                    <div class="post_info clearfix">
                        <div class="post-left">
                            <ul>
                                <li><i class="icon-calendar-empty"></i>On <span>{{date( 'M j, Y',strtotime($article->pubDate))}}</span></li>
                                <li><i class="icon-user"></i>By {{$article->children("dc", true)}}</li>
                            </ul>
                        </div>
                        <div class="pull-right">
                           <div class="addthis_native_toolbox"></div>
                        </div>
                    </div>
                    <h2><a href="/blog/{{$post_link}}" title="{{$article->title}}">{{$article->title}}</a></h2>
                    <p>
                       {{substr_replace(strip_tags($article->description), '…', 300)}}
                    </p>
                    <a href="/blog/{{$post_link}}" class="button_medium" title="{{$article->title}}">Read more</a>
                </div><!-- end post -->
                @endforeach
                @else
                    <div class="blog-post-list-no-item">
                        <p>We don't have any blog post yet.</p>
                    </div>
                @endif
                <hr>

                <div class="text-center">
                    <!-- <ul class="pagination">
                        <li><a href="#">Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul><!-- end pagination-->
                    {{$pagination->render()}}
                </div>
            </div><!-- End col-md-8-->

            <aside class="col-md-4">
                @include('blog.side')
            </aside><!-- End aside -->


        </div>  <!-- End row-->
    </div><!-- End container -->
</section><!-- End main_content-->
@stop