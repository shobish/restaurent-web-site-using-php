<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    @include("admin.admincss")
</head>

<body>
    <div class="container-scroller" style="margin-left: 25px; top:15px;">
        @include("admin.navbar")

        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Number Of Guest</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Message</th>
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
                    <td>{{$data->phone}}</td>
                    <td>{{$data->number}}</td>
                    <td>{{$data->date}}</td>
                    <td>{{$data->time}}</td>
                    <td>{{$data->message}}</td>

                </tr>
                @endforeach
            </tbody>

        </table>





    </div>


    @include("admin.adminscript")
</body>

</html>