<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss")
</head>

<body>
    <div class="container-scroller" style="margin-left: 25px; top:15px;">
        @include("admin.navbar")
        <div class="form">
            <h2>Add your chef</h2>
            <form action="{{url('/chefForm')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Yor name">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Catagory</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="catagory" placeholder="enter your specilization">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">image</label>
                    <input type="file" class="form-control" id="exampleInputPassword1" name="image" placeholder="image">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div> @include("admin.adminscript")
    </div>
</body>

</html>