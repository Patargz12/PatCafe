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

            <form action="{{ url('/uploadfood') }}" enctype="multipart/form-data" method="post"
                style="max-width: 400px; margin: auto;">
                @csrf <!-- Cross-Site Request Forgery -->

                <div style="margin-bottom: 15px;">
                    <label for="title" style="display: inline-block; width: 100px;">Title:</label>
                    <input id="title" name="title" placeholder="Write a title" required
                        style="color: blue; width: calc(100% - 120px);" type="text" />
                </div>

                <div style="margin-bottom: 15px;">
                    <label for="price" style="display: inline-block; width: 100px;">Price:</label>
                    <input id="price" name="price" placeholder="Price" required
                        style="color: blue; width: calc(100% - 120px);" type="number" />
                </div>

                <div style="margin-bottom: 15px;">
                    <label for="image" style="display: inline-block; width: 100px;">Image:</label>
                    <input id="image" name="image" required type="file" />
                </div>

                <div style="margin-bottom: 15px;">
                    <label for="description" style="display: inline-block; width: 100px;">Description:</label>
                    <textarea id="description" name="description" placeholder="Description" required
                        style="color: blue; width: calc(100% - 120px);"></textarea>
                </div>

                <div style="text-align: center;">
                    <button class="btn btn-primary" style="background-color: white; color: black;"
                        type="submit">Save</button>
                </div>
            </form>
            <br>
            <div>
                <table bgcolor="black" class="table" style="color: white">
                    <tr>
                        <th style="padding: 30px">Food Name</th>
                        <th style="padding: 30px">Price</th>
                        <th style="padding: 30px">Description</th>
                        <th style="padding: 30px">Image</th>
                        <th style="padding: 30px">Action</th>
                        <th style="padding: 30px">Action2</th>
                    </tr>

                    @foreach ($data as $data)
                        <tr align="center">
                            <td>{{ $data->title }}</td>
                            <td>P{{ $data->price }}</td>
                            <td>{{ $data->description }}</td>
                            <td><img height="600" src="/foodimage/{{ $data->image }}" width="600" /></td>
                            <td><a class="btn btn-danger" href="{{ url('/deletemenu', $data->id) }} ">Delete</a>
                            </td>
                            <td><a class="btn btn-info" href="{{ url('/updateview', $data->id) }}">Update</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
    @include('admin.adminscript')
</body>

</html>
