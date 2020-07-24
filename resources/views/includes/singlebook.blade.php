<table class="table">
  <tbody>
  	@foreach($books as $b)
    <tr>
      <th scope="row"><img src=""><img src="{{URL::asset('img/'.$b->image)}}" class="img-fluid" alt="book"></th>
      <td>{{$b->title}}</td>
      <td>{{$b->author}}</td>
      <td>
      	<p class="rating">
	      	@for($i=0;$i<$b->rating;$i++)
	          &#9733;
	        @endfor
    	</p>
      </td>
      <td>
      	<a href="/edit/{{$b->id}}" type="button" class="btn btn-warning" style="color:#fff;">
          Edit
        </a>
      </td>
      <td>
      	<a href="/delete/{{$b->id}}" type="button" class="btn btn-danger" style="color:#fff;">
          Delete
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
