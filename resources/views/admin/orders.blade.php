<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
</head>

<body>

    <div class = "container-scroller">

        @include('admin.navbar')

        <div class = "container">


            <h1>Customers Orders</h1>

            <form action = "{{ url('/search') }}" method = "get">

                @csrf

                <input name = "search" style = "color: blue;" type = "text">

                <input class = "btn btn-success" type = "submit" value = "Search">

            </form>
            <br><br><br>
            <table bgcolor = "black" class = "table" style = "color: white">
                <tr align = "center">
                    <td style = "padding: 20px">Name</td>
                    <td style = "padding: 20px">Phone Number</td>
                    <td style = "padding: 20px">Address</td>
                    <td style = "padding: 20px">Foodname</td>
                    <td style = "padding: 20px">Price</td>
                    <td style = "padding: 20px">Quantity</td>
                    <td style = "padding: 20px">Total Price</td>

                </tr>

                @foreach ($data as $data)
                    <tr align="center" style = "background-color: black">
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->address }}</td>
                        <td>{{ $data->foodname }}</td>
                        <td>P{{ $data->price }}</td>
                        <td>{{ $data->quantity }}</td>
                        <td>P{{ $data->price * $data->quantity }}</td>
                    </tr>
                @endforeach
            </table>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>

    </div>


    @include('admin.adminscript')
</body>

</html>
