<link rel="stylesheet" href="{{ URL::asset('css/css.css') }}">
<div id="me">
        <h1>Welcome to admin</h1>
        <ul>
            <a href="#">Quản lí thành viên</a>
            <a href="#">quản lí chuyên mục</a>
            <a href="#">quản lí bài viết</a>
            <a href="#">quản lí bình luận</a>     
        </ul>
        @if(session('thongbao'))
                <div class=alert alert-success style="color:red;font-size:25px;text-align:center">
                {{session('thongbao')}}
                </div>
        @endif
</div>

    <div id="wrapper">
        <div id="table">

            <table> 
                <tr id="row1">
                    <td><a style="font-size:30px;color:white;">id</a></td>
                    <td><a style="font-size:30px;color:white;">Tên Chuyên Mục</a></td>
                    <td><a style="font-size:30px;color:white;">Tên Không Dấu</a></td>
                    <td><a style="font-size:30px;color:white;">Edit</a></td>
                    <td><a style="font-size:30px;color:white;">delete</a></td>
                </tr>

                @foreach($chuyenmuc as $cm)
                <tr>
                    <td>{{$cm->id}}</td>
                    <td>{{$cm->Ten}}</td>
                    <td>{{$cm->TenKhongDau}}</td>
                    <td><a href="sua/{{$cm->id}}">Edit<a></td>
                    <td><a href="xoa/{{$cm->id}}">delete</a></td>
                </tr>
                @endforeach()

            </table>
        </div>
    </div>    

@include('layout.footer')