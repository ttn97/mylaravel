<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChuyenMuc;

class ChuyenMucController extends Controller
{
    //
    public function getDanhsach(){
        $chuyemuc = ChuyenMuc::all();
        return view('admin/chuyenmuc/danhsach',['chuyenmuc'=>$chuyemuc]);
    }

    public function getThem(){
        return view('admin/chuyenmuc/them');
    }

    public function postThem(Request $request){
        // $this->validate($request,
        // [
        //     'Ten' => "required|min:6|max:100"
        // ],
        // [
        //     'Ten.required'=>'Bạn chưa nhập tên chuyên mục',
        //     'Tên.min'=>'Tên phải có độ dài hơn 6 kí tự',
        //     'Tên.max'=>'Tên phải có độ dài nhỏ hơn 100 kí tự',
        //     'Ten.unique'=>'Tên chuyên mục đã tồn tại',
        // ]);
        // $chuyenmuc = new ChuyenMuc;
        // $chuyenmuc->Ten=$request->Ten;
        // $chuyenmuc->TenKhongDau=changeTitle($request->Ten);
        // echo changeTitle($request->Ten);
        // return redirect('admin/chuyenmuc/them)->with('thongbao','thêm thành công');
        echo $request->Ten;
    }

    public function getSua($id){
        $chuyenmuc=Chuyenmuc::find($id);
        return view('admin/chuyenmuc/sua',['chuyenmuc'=>$chuyenmuc]);
    }

    public function postSua(Request $request,$id){
        $chuyenmuc=ChuyenMuc::find($id);
        $this-> validate($request,
        [
            'Ten'=>'required|unique:ChuyenMuc,Ten|min:3|max:100'
        ],
        [
            'Ten.required'=>'Bạn nhập chuyên mục',
            'Ten.min'=>'Tên phải có độ dài hơn 6 kí tự',
            'Ten.max'=>'Tên phải có độ dài nhỏ hơn 100 kí tự',
            'Ten.unique'=>'Tên chuyên mục đã tồn tại',
        ]
        );

        $chuyenmuc->Ten=$request->Ten;
        $chuyenmuc->TenKhongDau=ChangeTitle($request->Ten);
        $chuyenmuc->save();
        return redirect('admin/chuyenmuc/sua/'.$id)->with('thongbao','sửa thành công');
    }


    public function getXoa($id){
        $chuyenmuc=Chuyenmuc::find($id);
        $chuyenmuc->delete();
        return redirect('admin/chuyenmuc/danhsach')->with('thongbao','Đã xóa thành công');
    }


}
