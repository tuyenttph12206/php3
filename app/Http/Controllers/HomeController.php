<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function thongtin()
    {
        return view('user.info');
    }
    public function showData(Request $request)
    {
        $name = $request->name;
        $birthday = $request->birthday;
        $gender = $request->gender;

        // [$name , $birthday ,$gender] = $request->all();
        return view('user.user-info', compact('name', 'birthday', 'gender'));
    }
    public function tinhToan(){
        return view('tinhtoan.info');
    }
    public function ketQua(Request $request){
        $soA=$request->soA;
        $soB=$request->soB;
        $soC=$request->soC;
        $tong=($soA*$soB)-$soC*$soC;
        return view('tinhtoan.show-ket-qua',compact('tong'));
    }
}
