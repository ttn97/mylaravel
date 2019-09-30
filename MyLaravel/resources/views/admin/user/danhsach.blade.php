@include('layout.header')
<div id="me">
        <h1>Welcome to admin</h1>
        <ul>
            <a href="#">Quản lí thành viên</a>
            <a href="#">quản lí chuyên mục</a>
            <a href="#">quản lí bài viết</a>
            <a href="#">quản lí bình luận</a>     
        </ul>
    </div>

    <div id="wrapper">
        <div id="table">
            <table> 
                <tr>            
                    <td colspan="3"></td>
                    <td colspan="2" style="background-color:blueviolet;"><a href="#">Thêm chuyên mục</a></td>
                </tr>
                <tr id="row1">
                    <td><a style="font-size:30px;color:white;">id</a></td>
                    <td><a style="font-size:30px;color:white;">Tên Tin Tức</a></td>
                    <td><a style="font-size:30px;color:white;">Tên Không Dấu</a></td>
                    <td><a style="font-size:30px;color:white;">Edit</a></td>
                    <td><a style="font-size:30px;color:white;">delete</a></td>
                </tr>

                @foreach($user as $u)
                <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td><a href="#">Edit<a></td>
                    <td><a href="#">delete</a></td>
                </tr>
                @endforeach()

            </table>
        </div>
    </div>    

@include('layout.footer')