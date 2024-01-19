<?php
use Illuminate\Http\Request;

 class Helper{
    public static function Mail(Request $request):void
    {
        Mail::to($request->email)->send(new \App\Mail\AuthMail());
    }
 }
?>