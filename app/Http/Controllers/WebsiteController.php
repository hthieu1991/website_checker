<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WebsiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $website = DB::table('website')->get();

        return view('websitelist', array('website' => $website));

    }

    public function add_new(Request $request)
    {
        $message = "";
        $form_data = $request->all();
        $website_name = $form_data["website_name"];
        $website_url = $form_data["website_url"];
        $current_time = Carbon::now()->format('Y-m-d H:i:s');

        $website_data = DB::table('website')
            ->where('url', '=', $website_url)
            ->first();

        if (is_null($website_data)) {
            DB::table('website')->insert([
                 ['name' => $website_name, 'url' => $website_url, 'created_at' => $current_time, 'updated_at' => $current_time]
            ]);
            $message = "Sucess";
        }else{
            $message = "Fail!";
        }
        
        return redirect('websitelist');
    }
}
