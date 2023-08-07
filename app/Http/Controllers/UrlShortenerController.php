<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserUrl;
use App\Models\HitUrl;
use Auth;
use Str;

class UrlShortenerController extends Controller
{
    public function saveDetails(Request $request)
    {
        $request->validate([
            'original_url' => 'required',
        ]);
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['shortner_url'] = Str::random(8);
        $userurl = UserUrl::create($data);
        if ($userurl->id)
            return redirect('url/'.$data['shortner_url']);
        return redirect('dashboard')->with('falied', 'Something went wrong');
    }
    public function hitUrls($name=null)
    {
        $record = UserUrl::where('shortner_url',$name)->select('original_url','id')->first();
        $data['user_url_id']=$record->id;
        $data['user_id']=auth::id();
        HitUrl::create($data);
        
        return view('hitsurl')->with('record',$record);
    }
}