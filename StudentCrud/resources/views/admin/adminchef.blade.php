<x-app-layout>
    </x-app-layout>
    <!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss");
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar");
    <div style="position: relative; top: 60px; right: -150px">
                <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">

                @csrf
                    <div>
                        <label>Name</label>
                        <input style="color:blue" type="text" name="name" required="" placeholder="Enter a name">
                    </div>

                    <div>
                        <label>speciality</label>
                        <input style="color:blue" type="text" name="speciality" required="" placeholder="Enter a speciality">
                    </div>
                    
                    <div>
                        <input  type="file" name="image" required="">
                    </div>
                    
                    <div style="color: black">
                        <input type="submit" value="save">
                    </div>
                </form>
                <table bgcolor="black" border="1px">
                        <tr>
                            <th style="padding:30px">Chef Name</th>
                            <th style="padding:30px">speciality</th>
                            <th style="padding:30px">image</th>
                            <th style="padding:30px">Action 1</th>
                            <th style="padding:30px">Action 2</th>
                        </tr>
                        @foreach($data as $data)
                        <tr align="center">
                            <td>{{$data->name}}</td>
                            <td>{{$data->speciality}}</td>
                            <td><img height="100" width="100" src="/chefimage/{{$data->image}}"></td>
                            <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
                            <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
                        </tr>
                        @endforeach
                      
                </table>


                

    
</div>
    @include("admin.adminscript");

  </body>
</html>