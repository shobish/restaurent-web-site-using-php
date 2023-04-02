<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include("admin.admincss");
</head>

<body>


    <div class="container-scroller" style="margin-left: 25px; top:15px;">
        @include("admin.navbar")
        <!-- adding form start-->
        <div>
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            <form action="{{url('/updateFoodList',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class=" form-row">
                    <div class="form-group col-md-6">
                        <label for="food name">Title</label>
                        <input type="text" class="form-control" name="title" id=" inputEmail4" value="{{$data->foodName}}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" id="Food price" value="{{$data->foodPrice}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image">image</label>
                    <img src="./foodImage/{{$data->foodImage}}" width="200px" height="100px"> <input type="file" class="form-control" name="image" placeholder="image" required>
                </div>
                <div class=" form-group">
                    <label for="description">description</label>
                    <input type="text" class="form-control" name="des" id="description" value="{{$data->foodDec}}" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
            <!-- adding form end-->
        </div> @include("admin.adminscript");
</body>

</html>