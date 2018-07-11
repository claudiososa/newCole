<!-- breadcrumb start -->
<!-- ================ -->
<div class="breadcrumb-container">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home pr-2"></i><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Noticias</li>
    </ol>
  </div>
</div>
<!-- breadcrumb end -->

<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

  <div class="container">
    <div class="row">

      <!-- main start -->
      <!-- ================ -->
      <div class="main col-lg-8">

        <!-- page-title start -->
        <!-- ================ -->
        <h3 class="my-4"><a href="{{route('noticia', ['id' => $post->id])}}">{{$post->title}}</a></h3>
        <!-- page-title end -->

        <!-- blogpost start -->
        <!-- ================ -->
        <article class="blogpost full">
          <header>
            <div class="post-info mb-4">
              <span class="post-date">
                <span class="day">{{ucwords($post->created_at->format('l'))}}
                  {{$post->created_at->format('d')}}
                  {{ucwords($post->created_at->format('F '))}}de
                  {{ucwords($post->created_at->format(' Y'))}}
                </span>
              </span>
              {{-- <span class="submitted"><i class="fa fa-user pr-1 pl-1"></i> by <a href="#">John Doe</a></span>
              <span class="comments"><i class="fa fa-comments-o pl-1 pr-1"></i> <a href="#">22 comments</a></span> --}}
            </div>
          </header>
          <div class="blogpost-content">
              <!-- Wrapper for slides -->
              <div class="overlay-container">
                @foreach ($post->picture as $picture)
                  <img src="{{Storage::disk('public')->url($picture->name)}}" alt="">
                @endforeach
                {{-- <a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a> --}}
              </div>

            <p><?php echo $post->content ?></p>
            <p>Imágenes</p>
            @foreach ($albums as $album)
            <div class="row">
                    @foreach($album->Photos as $photo)
                      <div class="col-lg-6">
                        <div class="thumbnail">
                          {{-- <p>Fecha de creación:  {{ date("d F Y",strtotime($photo->created_at)) }}at {{ date("g:ha",strtotime($photo->created_at)) }}</p> --}}
                          <img  alt="{{$album->name}}" src="{{Storage::disk('public')->url($photo->imageLittle)}}">
                          <div class="caption">
                            {{-- <p>{{$photo->description}}</p> --}}

                            {{-- <a href="{{route('deleteImage',['id'=>$photo->id])}}" onclick="returnconfirm('Are you sure?')"><button type="button"class="btn btn-danger btn-small">Borrar imagen</button></a> --}}
                            {{-- <p>Move image to another Album :</p> --}}
                            {{-- <form name="movephoto" method="POST"action="{{URL::route('move_image')}}">
                              {{csrf_field()}}
                              <select name="new_album">
                                @foreach($albums as $others)
                                  <option value="{{$others->id}}">{{$others->name}}</option>
                                @endforeach
                              </select>
                              <input type="hidden" name="photo"value="{{$photo->id}}" />
                              <button type="submit" class="btn btn-smallbtn-info" onclick="return confirm('Are you sure?')">Move Image</button>
                            </form> --}}
                          </div>
                        </div>
                        <hr>
                      </div>

                    @endforeach
            </div>
            @endforeach
          </div>
          <footer class="clearfix">
            <div class="tags pull-left"><i class="fa fa-tags pr-1"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
            <div class="link pull-right">
              <ul class="social-links circle small colored clearfix margin-clear text-right animated-effect-1">
                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
              </ul>
            </div>
          </footer>
        </article>
        <!-- blogpost end -->


      </div>
      <!-- main end -->

      <!-- sidebar start -->
      <!-- ================ -->
      <aside class="col-lg-4 col-xl-3 ml-xl-auto">
        <div class="sidebar">
          <div class="block clearfix">
            <form role="search">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Buscar cursos">
                <i class="fa fa-search form-control-feedback"></i>
              </div>
            </form>
          </div>
          <div class="block clearfix">
            <h3 class="title">Testimonial</h3>
            <div class="separator-2"></div>
            <blockquote class="margin-clear">
              <p>Reprehenderit, nihil magni odit ducimus, ab animi eaque vel excepturi, incidunt.</p>
              <footer><cite title="Source Title">Someone Famous </cite></footer>
            </blockquote>
            <blockquote class="margin-clear">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolorem.</p>
              <footer><cite title="Source Title">Steve Doe </cite></footer>
            </blockquote>
          </div>
          <div class="block clearfix">
            <h3 class="title">Latest News</h3>
            <div class="separator-2"></div>
            <div class="media margin-clear">
              <div class="d-flex pr-2">
                <div class="overlay-container">
                  <img class="media-object" src="images/blog-thumb-1.jpg" alt="blog-thumb">
                  <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                </div>
              </div>
              <div class="media-body">
                <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 23, 2017</p>
              </div>
            </div>
            <hr>
            <div class="media margin-clear">
              <div class="d-flex pr-2">
                <div class="overlay-container">
                  <img class="media-object" src="images/blog-thumb-2.jpg" alt="blog-thumb">
                  <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                </div>
              </div>
              <div class="media-body">
                <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 22, 2017</p>
              </div>
            </div>
            <hr>
            <div class="media margin-clear">
              <div class="d-flex pr-2">
                <div class="overlay-container">
                  <img class="media-object" src="images/blog-thumb-3.jpg" alt="blog-thumb">
                  <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                </div>
              </div>
              <div class="media-body">
                <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2017</p>
              </div>
            </div>
            <hr>
            <div class="media margin-clear">
              <div class="d-flex pr-2">
                <div class="overlay-container">
                  <img class="media-object" src="images/blog-thumb-4.jpg" alt="blog-thumb">
                  <a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
                </div>
              </div>
              <div class="media-body">
                <h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
                <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2017</p>
              </div>
            </div>
            <div class="text-right space-top">
              <a href="blog-large-image-right-sidebar.html" class="link-dark"><i class="fa fa-plus-circle pl-1 pr-1"></i>More</a>
            </div>
          </div>
          <div class="block clearfix">
            <h3 class="title">Text Sample</h3>
            <div class="separator-2"></div>
            <p class="margin-clear">Debitis eaque officia illo impedit ipsa earum <a href="#">cupiditate repellendus</a> corrupti nisi nemo, perspiciatis optio harum, hic laudantium nulla maiores rem sit magni neque nihil sequi temporibus. Laboriosam ipsum reiciendis iste, nobis obcaecati, a autem voluptatum odio? Recusandae officiis dicta quod qui eligendi.</p>
          </div>

        </div>
      </aside>
      <!-- sidebar end -->

    </div>
  </div>
</section>
<!-- main-container end -->
