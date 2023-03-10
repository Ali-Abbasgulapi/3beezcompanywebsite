<?php

namespace App\Http\Controllers;
use App\Models\msg;
use Illuminate\Http\Request;
use app\Models\threebeez;
class threebeezcontroller extends Controller
{
    function index(){

    return view('index');
}
    function about(){

    return view('about');
}
    function blogs(){

    return view('blog');
}
    function contact(){

    return view('contact');
}
    function savemsg(request $request){
        msg::create($request->all());

    return redirect('contact');
}
    function detail(){

    return view('detail');
}
    function feature(){

    return view('feature');
}
    function price(){

    return view('price');
}
    function quote(){

    return view('quote');
}
    function service(){

    return view('service');
}
    function team(){

    return view('team');
}
    function testimonial(){

    return view('testimonial');
}
}

