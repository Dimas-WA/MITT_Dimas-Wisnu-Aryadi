@extends('layouts.main')
@section('custom_css')
<!-- Toast Error  -->
<link rel="stylesheet" href="{{ asset('themes') }}/plugins/toastr/toastr.min.css">
@endsection
@section('content')

<div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Input Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('skilllevels.store') }}">
                <div class="card-body">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputPassword1">Skill Level Name</label>
                    <input type="text" class="form-control" name="name" id="inputCode" placeholder="Skill Name">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-info" onclick="this.disabled=true;this.value='Sending, please wait...';this.form.submit();">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>


</div>
@endsection
@section('custom_js')

<!-- Toastr -->
<script src="{{ asset('themes') }}/plugins/toastr/toastr.min.js"></script>
<script>
@foreach($errors->all() as $error)

      // $(document).Toasts('create', {
      //   class: 'bg-danger',
      //   title: 'Error',
      //   subtitle: 'add VA',
      //   body: '{{ $error }}'

        
      // });

      toastr.error('{{ $error }}');

@endforeach

</script>
@endsection