<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss")
</head>

<body>
    <div class="container-scroller" style="margin-left: 25px; top:15px;">
        @include("admin.navbar")

        <form action="{{url('/formUpload')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class=" form-row">
                <div class="form-group col-md-6">
                    <label for="food name">Title</label>
                    <input type="text" class="form-control" name="title" id=" inputEmail4" placeholder="food name">
                </div>
                <div class="form-group col-md-6">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" id="Food price" placeholder="Food price">
                </div>
            </div>
            <div class="form-group">
                <label for="image">image</label>
                <input type="file" class="form-control" name="image" id="image" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <input type="text" class="form-control" name="des" id="description" placeholder="description">
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    @include("admin.adminscript")
</body>

</html>