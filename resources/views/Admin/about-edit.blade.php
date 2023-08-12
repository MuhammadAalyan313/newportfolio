<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('Admin/bcdn')
</head>
<body>
@include('Admin/sidebar')
@include('Admin/navbar')
    <form action="{{url('About-create/update'.$data->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-row">
          <div class="col-4 mt-2">
            <input type="text" class="form-control" name="title" value="{{$data->title}}" placeholder="Title">
          </div>
          <div class="col-4 mt-2">
            <input type="text" class="form-control" name="birthday" value="{{$data->birthday}}" placeholder="Birthday">
          </div>
          <div class="col-4 mt-2">
            <input type="text" class="form-control" name="age" value="{{$data->age}}" placeholder="Age">
          </div>
          <div class="col-4 mt-2">
            <input type="text" class="form-control" name="website" value="{{$data->website}}" placeholder="Website">
          </div>
          <div class="col-4 mt-2">
            <input type="text" class="form-control" name="degree" value="{{$data->degree}}" placeholder="Degree">
          </div>
          <div class="col-4 mt-2">
            <input type="text" class="form-control" name="phone" value="{{$data->phone}}" placeholder="Phone">
          </div>
          <div class="col-4 mt-2">
            <input type="text" class="form-dfcontrol" name="email" value="{{$data->email}}" placeholder="Email">
          </div>
          <div class="col-4 mt-2">
            <input type="text" class="form-control"  name="city" value="{{$data->city}}" placeholder="City">
          </div>
          <div class="col-4 mt-2">
            <input type="text" class="form-control" name="freelance" value="{{$data->freelance}}" placeholder="Freelance">
          </div>
          <div class="col-4 mt-2">
            <input type="text" class="form-control" name="description" value="{{$data->description}}" placeholder="Description">
          </div>
        <button class="btn btn-info mt-2">Update</button>
        </div>
      </form>
      @include('Admin/script')
</body>
</html>
