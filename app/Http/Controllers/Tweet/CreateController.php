<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;
use App\Http\Requests\Tweet\CreateRequest;

class CreateController extends Controller
{
    public function b(CreateRequest $request){
        $tweets = new Tweet;
        $tweets->content =$request->tweet();
        $tweets->save();
        return redirect()->route('tweet.index');
    }
}