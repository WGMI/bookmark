@extends('app')
@section('content')

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">What are people reading?</h1>

        <!-- Author -->
      
        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{URL::asset('img/lib.jpg')}}" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead">Check out what people are reading and post your own favorite titles on this open platform where all books are welcome!</p>

        <blockquote class="blockquote">
          <p class="mb-0">Books are our gateway to the past, present, future and the universe</p>
          <footer class="blockquote-footer">Anonymous
          </footer>
        </blockquote>

        <br>

        @include('book.createmodal')

        <a data-toggle="modal" data-target="#createModal" type="button" class="btn btn-primary" style="color:#fff;">
          Add A Book
        </a>


        <br><br>

        <div class="responsive">
          @include('includes.singlebook')
        </div>

        <hr>

      </div>

      <!-- Sidebar Widgets Column -->
    

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <script>
    function refreshList(){
      $('div.responsive').load('/booklist');
    }

    setInterval(function(){
      refreshList();
    },3000);
  </script>

@endsection