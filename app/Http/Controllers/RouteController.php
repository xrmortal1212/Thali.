<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        return view('welcome'); 
    }


     public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function template()
    {
        return view('template');
    }
    public function ctemplate(){
        return view('ctemplate');
    }
    public function signin(){
        return view('signin');
    }
    public function signup(){
        return view('signup');
    }
    public function main(){
        return view('main');
    }
       public function profile(){
        return view('profile');
    }
    public function m_about(){
        return view('m-about');
    }
    public function m_contact(){
        return view('m-contact');
    }
     public function content(){
        return view('content');
    }
    public function showTemplate($id)
{
    // API call
    $apiUrl = "https://sheet2api.com/v1/a9HEzsdORWec/templatesdb";
    $data = json_decode(file_get_contents($apiUrl), true);

    // ID ke basis par template find karo
    $template = collect($data)->firstWhere("id", $id);

    if (!$template) {
        abort(404, "Template not found");
    }

    // content.blade.php ko data pass karo
    return view("content", compact("template"));
}

}
