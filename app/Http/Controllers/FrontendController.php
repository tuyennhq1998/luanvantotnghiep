<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{
    public function getIndex(){
    	$menu=DB::table('hang')->get();
    	$product=DB::table('sanpham')->get();
    	$viewproduct=DB::table('sanpham')->orderBy('view')->where('view','>',0)->get();
    	return view('frontend.index',compact('menu','product','viewproduct'));
    }
    public function getCategory($id){
    	$menu=DB::table('hang')->get();
    	$product=DB::table('sanpham')->where('idhang',$id)->get();
    	return view('frontend.danhmuc',compact('menu','product'));
    }  
    public function getSanpham($id){
    	$menu=DB::table('hang')->get();
    	$product=DB::table('sanpham')->where('id',$id)->first();
    	$productlienquan=DB::table('sanpham')->where('idhang',$product->idhang)->limit(5)->get();
    	
    	return view('frontend.product',compact('menu','product','productlienquan'));
    }
}
