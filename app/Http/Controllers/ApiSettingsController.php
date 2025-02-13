<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ApiList;
use Illuminate\Http\Request;

class ApiSettingsController extends Controller
{
    //
    public function get_data()
    {
        $datas = ApiList::get();
        return $datas;
    }
    public function ApiActivation()
    {
        $datas = ApiList::get();
        return view('front.api-activation', compact('datas'));
    }
    public function change_status(Request $request)
    {
        $status = $request->status;
        // file_put_contents('test.txt',$request->type." ".$request->id);
        if ($status == 1) {
            $api_list = ApiList::where('id', $request->id)->first();
            if ($api_list->type == 'International') {
                ApiList::where('id', $request->id)->where('type', 'International')->update(['status' => 1]);
                ApiList::where('id', '!=', $request->id)->where('type', 'International')->update(['status' => 0]);
            } else {
                ApiList::where('id', $request->id)->where('type', 'Domestic')->update(['status' => 1]);
                ApiList::where('id', '!=', $request->id)->where('type', 'Domestic')->update(['status' => 0]);
            }
        }

        return true;

        // file_put_contents('test.txt',$request->type." ".$request->id." ".$request->status);
    }
    public function update_euro_rate(Request $request)
    {
        ApiList::where('type', 'Bangladesh')->update(['euro_rate_per_hundred_bdt' => $request->value]);
    }
}
