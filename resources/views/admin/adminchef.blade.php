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
        <div style="text-align: center;">
            <br><br><br>
            <h2>Add Chef</h2>
            <form action="{{ url('/uploadchef') }}" enctype="multipart/form-data" method="post"
                style="max-width: 400px; margin: auto;">
                @csrf <!-- Cross-Site Request Forgery -->

                <div style="margin-bottom: 15px;">
                    <label for="name" style="display: inline-block; width: 100px;">Name:</label>
                    <input id="name" name="name" placeholder="Enter name" required
                        style="color: blue; width: calc(100% - 120px);" type="text" />
                </div>

                <div style="margin-bottom: 15px;">
                    <label for="speciality" style="display: inline-block; width: 100px;">Speciality:</label>
                    <input id="speciality" name="speciality" placeholder="Enter the Speciality" required
                        style="color: blue; width: calc(100% - 120px);" type="text" />
                </div>

                <div style="margin-bottom: 15px;">
                    <label for="image" style="display: inline-block; width: 100px;">Image:</label>
                    <input id="image" name="image" required type="file" />
                </div>

                <div style="text-align: center;">
                    <button class="btn btn-primary" style="background-color: white; color: black;"
                        type="submit">Save</button>
                </div>
            </form>
        </div>

        <div style="margin-top: 50px;">
            <h2 class = "mx-5">Chef List</h2>
            <table class="mx-5 table" style="color: white; margin: auto;">
                <thead>
                    <tr style="color: white">
                        <th style="padding: 15px; color: white">Chef Name</th>
                        <th style="padding: 15px; color: white">Speciality</th>
                        <th style="padding: 15px; color: white">Image</th>
                        <th style="padding: 15px; color: white">Action</th>
                        <th style="padding: 15px; color: white">Action2</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $chef)
                        <tr align="center">
                            <td>{{ $chef->name }}</td>
                            <td>{{ $chef->speciality }}</td>
                            <td><img height="100" src="/chefimage/{{ $chef->image }}" width="100"></td>
                            <td><a class="btn btn-info" href="{{ url('/updatechef', $chef->id) }}">Update</a></td>
                            <td><a class="btn btn-danger" href="{{ url('/deletechef', $chef->id) }}">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



        @include('admin.adminscript')
</body>

</html>
