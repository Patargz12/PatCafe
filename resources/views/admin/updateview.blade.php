<x-app-layout>

</x-app-layout>


<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
        <div bgcolor="black" class="table" style="position: relative; top: 60px; right: -150px; color: white">
            <form action="{{ url('/update', $data->id) }}" enctype="multipart/form-data" method="post">

                @csrf <!-- Cross-Site Request Forgery -->
                <div>
                    <label>Title</label>
                    <input name="title" placeholder="Write a title" required style="color:white" type="text" value="{{ $data->title }}" />
                </div>

                <div>
                    <label>Price</label>
                    <input name="price" required style="color:white" style="color:white" type="num" value="{{ $data->price }}" />
                </div>
                <div>
                    <label>Description</label>
                    <input name="description" required style="color:white" type="text" value="{{ $data->description }}" />
                </div>

                <div>
                    <label>Old Image</label>
                    <img height="200" required src="/foodimage/{{ $data->image }}" width="200">
                </div>

                <div>
                    <label>Image</label>
                    <input name="image" required type="file" />
                </div>

                <div>
                    <button type="submit" value="Save">
                        <button class="btn" style="background-color: white ; color: black" type="submit" value="Save">Save</button>
                </div>
            </form>
        </div>
    </div>

    @include('admin.adminscript')
</body>

</html>