<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href = "/public" />
    @include('admin.admincss')
</head>

<body>

    <div class = "container-scroller">

        @include('admin.navbar')

        <form action="{{ url('/updatefoodchef', $data->id) }}" enctype="multipart/form-data" method="post">
            @csrf

            <div style="margin-bottom: 15px; mx-5">
                <br>
                <label for="name">Chef Name:</label>
                <input name="name" style="color: blue; width: 100%;" type="text" value="{{ $data->name }}">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="speciality">Speciality:</label>
                <input name="speciality" style="color: blue; width: 100%;" type="text"
                    value="{{ $data->speciality }}">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="old_image">Old Image:</label>
                <img src="/chefimage/{{ $data->image }}" style="max-width: 300px; max-height: 200px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label for="new_image">New Image:</label>
                <input name="image" type="file">
            </div>

            <div style="text-align: center;">
                <button class="btn btn-primary" style="background-color: white; color: black;" type="submit">Update
                    Chef</button>
            </div>
        </form>


    </div>


    @include('admin.adminscript')
</body>

</html>
