@foreach($books as $b)
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-sm-8 col-lg-5">
      <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          
          <img src="{{URL::asset('img/'.$b->image)}}" class="img-fluid" alt="book">
          
          <span style="color : white">_____</span>
          <p>{{$b->title}}</p>
          <span style="color : white">_____</span>
          <p class="author">{{$b->author}}</p><br>
          <span style="color : white">_____</span>
          <p class="rating">
            @for($i=0;$i<$b->rating;$i++)
              &#9733;
            @endfor
          </p>
          <span style="color : white">_____</span>
        </li>
      </ul>
    </div>
  </div>
</div>
@endforeach