<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    @include('Admin/bcdn')
    <style>
        .dismiss{
            margin-left: 1370px;
            margin-top: -220px;
        }
        .alert{
            height: 90px;
        }
    </style>
</head>
<body>
    @include('Admin/sidebar')
    @include('Admin/navbar')
{{-- <a href="{{ url('Admin/about-create') }}" class="btn btn-info">Add</a> --}}
@if (session()->has('message'))
<div class="alert alert-seccess">
    {{ session()->get('message') }}
</div>
<div class="dismiss">
    <button>
        <span>&times;</span>
    </button>
</div>

@endif

<a href="{{url('About-create')}}" class="btn btn-success">Back</a>

        <form action="{{route('About-create.store')}}" method="post">
            @csrf
            <div class="form-row">
              <div class="col-4 mt-2">
                <input type="text" class="form-control" name="title" placeholder="Title">
              </div>
              <div class="col-4 mt-2">
                <input type="text" class="form-control" name="birthday" placeholder="Birthday">
              </div>
              <div class="col-4 mt-2">
                <input type="text" class="form-control" name="age" placeholder="Age">
              </div>
              <div class="col-4 mt-2">
                <input type="text" class="form-control" name="website" placeholder="Website">
              </div>
              <div class="col-4 mt-2">
                <input type="text" class="form-control" name="degree" placeholder="Degree">
              </div>
              <div class="col-4 mt-2">
                <input type="text" class="form-control" name="phone" placeholder="Phone">
              </div>
              <div class="col-4 mt-2">
                <input type="text" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="col-4 mt-2">
                <input type="text" class="form-control"  name="city" placeholder="City">
              </div>
              <div class="col-4 mt-2">
                <input type="text" class="form-control" name="freelance" placeholder="Freelance">
              </div>

              <div class="col-4 mt-2">
                <input type="text" class="form-control" name="description" placeholder="Description">
              </div>
            <button class="btn btn-info mt-2">Submit</button>
            </div>
          </form>



</body>
</html>
@include('Admin/script')
