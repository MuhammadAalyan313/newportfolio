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
    <table class="table">
        <a href="{{url('resume')}}" class="btn btn-success">Add</a>
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Description</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Title</th>
            <th scope="col">Year</th>
            <th scope="col">College or Uni name</th>
            <th scope="col">Description</th>
            <th scope="col">Titile</th>
            <th scope="col">Year</th>
            <th scope="col">Address</th>
            <th scope="col">Points</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $value )
          <tr>
            <th>{{$value->id}}</th>
            <td>{{$value->R_description}}</td>
            <td>{{$value->address}}</td>
            <td>{{$value->phone}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->E_title}}</td>
            <td>{{$value->year}}</td>
            <td>{{$value->school_name}}</td>
            <td>{{$value->E_description}}</td>
            <td>{{$value->Pe_title}}</td>
            <td>{{$value->Pe_year}}</td>
            <td>{{$value->Pe_address}}</td>
            <td>{{$value->points}}</td>
                <td><a href="{{url('resume/show'.$value->id)}}"> <button type="button" class="btn btn-success">Edit</button></a>
                    <form method="POST" action="{{url('resume/destroy'.$value->id)}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>
@include('Admin/script')
