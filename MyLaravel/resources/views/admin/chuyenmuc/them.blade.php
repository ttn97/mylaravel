<link rel="stylesheet" href="{{ URL::asset('css/css.css') }}">
    <div id="me">
        <h1>Welcome to admin</h1>
        <ul>
            <a href="#">Quản lí thành viên</a><br>
            <a href="#">quản lí chuyên mục</a><br>
            <a href="#">quản lí bài viết</a><br>
            <a href="#">quản lí bình luận</a><br>  
        </ul>
    </div>
    @if(session('thongbao'))
        <div class=alert alert-success style="color:red;font-size:25px;text-align:center">
        {{session('thongbao')}}
        </div>
    @endif

    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="" method="POST" name="form" style="margin-left:400px;margin-top:100px">
            <input type="hidden" name="_token" valude="{{csrf_token()}}"/>
            <div>
                <label style="font-size:20px;">Tên thể loại</label>
                <input name="Ten" placeholder="Nhập tên chuyên mục" style="font-size:20px;"/>
            </div>       
            <br>  
            <button style="font-size:20px;" type="submit" class="btn btn-default">Thêm vào</label>
            <button style="font-size:20px;" type="reset" class="btn btn-default">Reset</label>
        </form>
    </div>

@include('layout.footer')