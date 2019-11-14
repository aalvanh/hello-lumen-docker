<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Hello Message
     * 
     * @return response
     */
    public function hello () {

        // Response {status, message}
        return response()->json(['status' => true, 'message' => 'Hello Word']);

    }
}
