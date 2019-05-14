<div id="banner">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    @foreach($sliders as $key => $value)
    <div class="carousel-item active">
      <img src="{{url('storage/images')}}/{{$value->image_url}}" class="d-block w-100" alt="...">
	  <div class="carousel-caption d-none d-md-block">
	    <div class="container">
          <h2>{{$value->image_heading}}</h2>
          <p>{{$value->image_description}}</p>
		</div>  
      </div>
    </div>
    @endforeach
    
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
  </div>
</div>
</div>