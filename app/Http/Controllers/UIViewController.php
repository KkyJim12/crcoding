<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\News;
use App\Testimonial;
use App\Message;

class UIViewController extends Controller
{
    public function index() {

        // Portfolio
        $port = Portfolio::all();

        // News
        
        $news = News::orderBy('created_at','desc')->take('6')->get();

        // Testimonial
        $testimonial = Testimonial::all();

        return view('index',[
                                'port' => $port,
                                'news' => $news,
                                'testimonial' => $testimonial,
                            ]);
    }

    public function SendMessage(Request $request)   {

        $request->validate([
            'con_name' => 'required',
            'con_email' => 'required',
            'con_message' => 'required',
        ]);

        $message = new Message;
        $message->name = $request->get('con_name');
        $message->tel = $request->get('con_email');
        $message->message = $request->get('con_message');
        $message->save();

        return response(200);
    }
}
