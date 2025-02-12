<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')

        <div style="position: relative; top: 60px; right: -150px">
            <h1>USERS TABLE</h1>
            <table bgcolor="black" border="3px" class="table" style="color: white">
                <tr>
                    <th style="padding: 30px">Name</th>
                    <th style="padding: 30px">Email</th>
                    <th style="padding: 30px">Action</th>
                </tr>

                @foreach ($data as $data)
                <tr align="center">
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    @if ($data->usertype == '0')
                    <td><a class="btn btn-danger" href="{{ url('/deleteuser', $data->id) }}">Delete</a>
                    </td>
                    @else
                    <td><a>Not Allowed</a></td>
                    @endif
                </tr>
                @endforeach


            </table>
        </div>
    </div>
    @include('admin.adminscript')
</body>

</html>