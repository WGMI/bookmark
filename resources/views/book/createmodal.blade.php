<div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" id="createModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Add A New Book</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="/newbook" enctype="multipart/form-data" id="form">
                @csrf

                <div class="form-group">
                  <label for="title">Title:</label>
                  <input name="title" type="text" class="form-control" required>
                  <p style="color: red">@error('title') {{$message}} @enderror</p>
                </div>

                <div class="form-group">
                  <label for="author">Author:</label>
                  <input name="author" type="text" class="form-control" required>
                  <p style="color: red">@error('author') {{$message}} @enderror</p>
                </div>

                <div class="form-group">
                  <label for="rating">Rating:</label>
                  <input name="rating" type="number" class="form-control" min="0" max="5" step="1" required>
                  <p style="color: red">@error('rating') {{$message}} @enderror</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="addbook()" data-dismiss="modal">Submit</button>
                </div>
              </form>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
  function addbook(){
    $.ajax({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
      url: '/newbook',
      type: 'post',
      dataType: 'json',
      data: $('form').serializeArray(),
      success: function(){
        console.log('Success');
      },
      error: function(xhr, status, error){
        var errorMessage = xhr.status + ': ' + xhr.statusText
        console.log('Error - ' + errorMessage);
      }
    });
  }
</script>