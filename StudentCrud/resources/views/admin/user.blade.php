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

            

        <div class="user-main">

            <h1>Системийн Хэрэглэгчид</h1>

            <a class="btn btn-default" href="#">
                <i class="fa fa-plus fa-md" aria-hidden="true">Шинээр хэрэглэгч нэмэх</i>
            </a>

                <table class="user-table">
                    <tr align="center" class="user-tr">
                        <th >Нэр</th>
                        <th >И-мэйл</th>
                        <th >Засах</th>
                        <th >Устгах</th>
                    </tr>

                    @foreach($data as $data)
                    <tr align="center" class="user1-tr">
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>

                        <td><a href="{{url('/deleteusers',$data->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>

                        @if($data->role=="0")
                        
                        <td><a href="{{url('/deleteusers',$data->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                        @else
                        <td><a >Зөвшөөрөгдөөгүй</a></td>
                        @endif
                    </tr>
                    @endforeach
                </table>
        </div>
            

    </div>
    <!-- container-scroller -->


    @include("admin.adminscript");
  </body>
</html>
 