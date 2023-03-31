<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @include("admin.admincss")
</head>

<body>
    <div class="container-scroller" style="margin-left: 25px; top:15px;">

        @include("admin.navbar")
        <div class="usertable">
            <table class="table table-striped " style="margin-left: 25px;">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>

                <tbody>
                    @php
                    $i=1;
                    @endphp
                    @foreach($data as $data)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        @if($data->usertype=="0")
                        <td>
                            <a href="{{url("/deleteUser", $data->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
                        </td>
                        @else
                        <td>
                            <button type="button" class="btn btn-dark disabled">No Access</button>
                        </td>
                        @endif


                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
    @include(" admin.adminscript")
</body>


</html>