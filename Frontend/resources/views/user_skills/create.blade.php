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
              <form method="POST" action="{{ route('userskills.store') }}">
                <div class="card-body">
                  @csrf
                  <div class="form-group">
                  <label for="exampleSelectRounded0">Skill <code>Name</code></label>
                  <select class="custom-select rounded-0" id="exampleBankCode" name="skill_name">
                    <!-- <option value="">Select Skill</option>
                      <option value="0">Pilih</option> -->
                    @foreach ($skills as $skill)
                      <option value="{{ $skill->id }}">{{ $skill->skillName }}</option>
                    @endforeach

                  </select>
                </div>
                  <div class="form-group">
                  <label for="exampleSelectRounded0">Skill <code>Level</code></label>
                  <select class="custom-select rounded-0" id="exampleBankCode" name="skill_level">
                    <!-- <option value="">Select Level</option>
                      <option value="0">Pilih</option> -->
                    @foreach ($skill_levels as $skill_level)
                      <option value="{{ $skill_level->id }}">{{ $skill_level->skillLevelName }}</option>
                    @endforeach
                  </select>
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