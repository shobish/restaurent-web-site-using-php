    <x-app-layout></x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        @include("admin.admincss")
    </head>

    <body>
        <div class="container-scroller" style="margin-left: 25px; top:15px;">
            @include("admin.navbar")
            <!-- adding form start-->
            <div>
                <form action="{{url('/formUpload')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class=" form-row">

                        <div class="form-group col-md-6">
                            <label for="food name">Title</label>
                            <input type="text" class="form-control" name="title" id=" inputEmail4" placeholder="food name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" name="price" id="Food price" placeholder="Food price" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image">image</label>
                        <input type="file" class="form-control" name="image" id="image" placeholder="1234 Main St" required>
                    </div>
                    <div class="form-group">
                        <label for="description">description</label>
                        <input type="text" class="form-control" name="des" id="description" placeholder="description" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                <!-- adding form end-->

                <!-- table start-->

                <div>
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Food Name</th>
                                <th scope="col">Food Price</th>
                                <th scope="col">Food Discription</th>
                                <th scope="col">Food Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @php
                        $i=1;
                        @endphp
                        @foreach($list as $list)
                        <tbody>
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$list->foodName}}</td>
                                <td>{{$list->foodPrice}}</td>
                                <td>{{$list->foodDec}}</td>
                                <td>image</td>

                                <td>

                                    <a href="{{url('/deleteFoodList',$list->id)}}"> <button type="submit" class="btn btn-danger">Delete</button></a>
                                    <a href="{{url('/updateview',$list->id)}}"> <button type="submit" class="btn btn-primary">update</button></a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>

                <!--table end-->

            </div>
        </div>

        @include(" admin.adminscript")
    </body>

    </html>