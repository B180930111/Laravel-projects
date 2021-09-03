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
                <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

                @csrf
                    <div>
                        <label>Title</label>
                        <input style="color:black" type="text" name="title" placeholder="Write a title" required>
                    </div>
                    <div>
                        <label>Price</label>
                        <input style="color:black" type="num" name="price" placeholder="price" required>
                    </div>
                    <div>
                        <label>Image</label>
                        <input style="color:black" type="file" name="image" required>
                    </div>
                    <div>
                        <label>description</label>
                        <input style="color:black" type="text" name="description" placeholder="Write a description" required>
                    </div>
                    <div style="color: black">
                        <input type="submit" value="save">
                    </div>
                </form>


                <div>
                    <table bgcolor="black">
                        <tr>
                            <th style="padding:30px">Food Name</th>
                            <th style="padding:30px">Price</th>
                            <th style="padding:30px">Description</th>
                            <th style="padding:30px">image</th>
                            <th style="padding:30px">Action 1</th>
                            <th style="padding:30px">Action 2</th>
                        </tr>
                        @foreach($data as $data)
                        <tr align="center">
                            <td>{{$data->title}}</td>
                            <td>{{$data->price}}</td>
                            <td>{{$data->description}}</td>
                            <td><img height="150" width="150" src="/foodimage/{{$data->image}}"></td>
                            <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                            <td><a href="{{url('/uptadeview',$data->id)}}">Uptade</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>

            </div>

        

    </div>
    <!-- container-scroller -->


    @include("admin.adminscript");
  </body>
</html>