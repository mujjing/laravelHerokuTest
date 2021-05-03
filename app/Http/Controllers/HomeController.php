<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function second()
    {
        return view('second');
    }

    public function mail()
    {
        // $details = [
        //     'title' => '릴리즈 테스트',
        //     'body' => '메일도 가는지 테스트 얄루'
        // ];
        // Mail::to('jhiosdevelop@gmail.com')->send(new TestMail($details));
        return view('emails.TestMail');
    }
}
