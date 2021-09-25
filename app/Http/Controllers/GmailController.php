<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class GmailController extends Controller
{
    public function gmail(){

    	return view('gmail');
    }

    public function send(Request $req){

		Mail::send('gmail',[
			'name'=>$req->get('name'),
			'email'=>$req->get('name'),
			'tel'=>$req->get('name'),
			'reason'=>$req->get('name'),
			'bmessage'=>$req->get('name'),
		],function($message){
			$message->from('ssekimuliandrew321@gmail.com');
			$message->to('ssekimuliandrew321@gmail.com','company')
			->subject('everything is done');
		});
		return back()->with('success','will cantact you');    	
    }
}
