<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    /**
     * Hello Message with Name
     * 
     * @method get
     * @param name
     * @return response
     */
    public function getHello ( $name ) {

        // Write response message
        $message = "Hello " . $name;

        // Response {status, message}
        return response()->json(['status' => true, 'message' => $message]);

    }

    /**
     * Hello Message with Name
     * 
     * @method post
     * @param request
     * @return response
     */
    public function postHello (Request $request) {

        // Get input body
        $this->params   = $request->input();

        // Write response message
        $message = "Hello " . $this->params["name"];

        // Response {status, message}
        return response()->json(['status' => true, 'message' => $message]);

    }
}
