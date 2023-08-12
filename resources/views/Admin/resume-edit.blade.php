<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('Admin.bcdn')
</head>
<body>
    @include('Admin/navbar')
    @include('Admin/sidebar')
    {{-- <a href="{{url('resume-create')}}" class="btn btn-success">Back</a> --}}

    <form action="{{ url('resume/update/'.$data->id) }}" method="post">
        @csrf
        @method('PUT')
        <table>
            <thead>
                <tr>
                    <td colspan="2">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Resume</button>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" class="form-control" value="{{$data->R_description}}" placeholder="Description" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" value="{{$data->address}}" placeholder="Address" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" value="{{$data->phone}}" placeholder="Phone" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" value="{{$data->email}}" placeholder="Email" />
                    </td>
                </tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <td colspan="2">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Education</button>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" class="form-control" value="{{$data->E_title}}" placeholder="Title" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" value="{{$data->year}}" placeholder="Year" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" value="{{$data->school_name}}" placeholder="College or Uni name" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" value="{{$data->E_description}}" />
                    </td>
                </tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <td colspan="2">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Professional Experience</button>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" class="form-control" value="{{$data->Pe_title}}" placeholder="Title" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" value="{{$data->Pe_year}}" placeholder="Year" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" value="{{$data->Pe_address}}" placeholder="Address" />
                    </td>
                </tr>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" class="form-control" value="{{$data->points}}" placeholder="Points" />
            </td>
        </tr>
            </tbody>
        </table>
        <button class="btn btn-info mt-2">Update</button>
    </form>
    </body>
    </html>
    @include('Admin/script')
