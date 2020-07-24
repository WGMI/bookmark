@extends('app')
@section('content')

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">Edit a Book</h1>

        <hr>

        <form method="POST" action="/updatebook/{{$book->id}}" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="title">Title:</label>
            <input name="title" type="text" class="form-control" value="{{$book->title}}">
            <p style="color: red">@error('title') {{$message}} @enderror</p>
          </div>

          <div class="form-group">
            <label for="author">Author:</label>
            <input name="author" type="text" class="form-control" value="{{$book->author}}">
            <p style="color: red">@error('author') {{$message}} @enderror</p>
          </div>

          <div class="form-group">
            <label for="rating">Rating:</label>
            <input name="rating" type="number" class="form-control" min="0" max="5" step="1" value="{{$book->rating}}">
            <p style="color: red">@error('rating') {{$message}} @enderror</p>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <br><br><br><br><br><br><br>

        <!-- Author -->
      
        

      </div>

      <!-- Sidebar Widgets Column -->
    

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection