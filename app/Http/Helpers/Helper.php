<?php
use Illuminate\Http\Request;
use App\Jobs\Mailjob;

class Helper {
    public static function Mail(Request $request)
    {
        Mailjob::dispatch($request);
    }
}
?>