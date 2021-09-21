<div class="section-area section-sp2">
          <div class="container">
    <div class="row">
      <div class="col-md-12 heading-bx left">
        <h2 class="title-head">Blogs<span></span></h2>

      </div>
    </div>
    <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0">
      <?php
      $blogs = App\Models\AdminBlog::all();

       ?>
      @foreach ($blogs as $row)
      <div class="item" >
        <div class="recent-news">
          <div class="action-box">
            <img src="{{asset('storage/blogs/' .$row->blogs_image)}}" alt="image"
            height="700"
            width="438">
          </div>
          <div class="info-bx">
            <ul class="media-post">
              <li><a href="#"><i class="fa fa-calendar"></i>{{$row->created_at}}</a></li>
            <!--  <li><a href="#"><i class="fa fa-user"></i></a></li>-->
            </ul>
            <h5 class="post-title"><a href="/blogs_details/{{$row->id}}">{{$row->blogs_title}}</h5>
            <p>{{$row->short_description}}</p>
            <div class="post-extra">
              <a href="#" class="btn-link">READ MORE</a>

            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
