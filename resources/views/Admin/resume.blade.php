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
    <a href="{{url('resume-create')}}" class="btn btn-success">Back</a>

    <form action="{{ route('resume.store') }}" method="post">
        @csrf
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
                        <input type="text" class="form-control" name="R_description" placeholder="Description" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="address" placeholder="Address" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="phone" placeholder="Phone" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="email" placeholder="Email" />
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
                        <input type="text" class="form-control" name="E_title" placeholder="Title" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="year" placeholder="Year" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="school_name" placeholder="College or Uni name" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="E_description" placeholder="Description" />
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
                        <input type="text" class="form-control" name="Pe_title" placeholder="Title" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="Pe_year" placeholder="Year" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="form-control" name="Pe_address" placeholder="Address" />
                    </td>
                </tr>

                <textarea class="form-control" name="points" placeholder="Enter points"></textarea>

            </td>
        </tr>
            </tbody>
        </table>
        <button class="btn btn-info mt-2">Submit</button>
    </form>
    </body>
    </html>
    @include('Admin/script')
