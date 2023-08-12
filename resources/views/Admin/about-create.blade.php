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
    @include('Admin/navbar')
@include('Admin/sidebar')
<table class="table content-wrapper">
    <a href="{{url('About')}}" class="btn btn-success">Add</a>
    <thead>
      <tr>
        <th scope="col-1">title</th>
        <th scope="col-1">Birthday</th>
        <th scope="col-1">Age</th>
        <th scope="col-1">Website</th>
        <th scope="col-1">Degree</th>
        <th scope="col-1">Phone</th>
        <th scope="col-1">Email</th>
        <th scope="col-1">City</th>
        <th scope="col-1">Freelance</th>
        <th scope="col-1">Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($result as $data)
      <tr>
        <td>{{$data->title}}</td>
        <td>{{$data->birthday}}</td>
        <td>{{$data->age}}</td>
        <td>{{$data->website}}</td>
        <td>{{$data->degree}}</td>
        <td>{{$data->phone}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->city}}</td>
        <td>{{$data->freelance}}</td>
        <td>{{$data->description}}</td>
        <td><a href="{{url('About-create/show'.$data->id)}}"><button class="btn btn-success">Edit</button></a>
        <form method="POST" action="{{url('About-create/destroy'.$data->id)}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form></td>
      </tr>
      @endforeach
    </tbody>
  </table>
    @include('Admin/script')
</body>
</html>
