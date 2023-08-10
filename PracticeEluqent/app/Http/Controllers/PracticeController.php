<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
//    public function Practice (Request $request) {
//        return User::with('Profile')->get();
//    }
//
//
//    public function Practice (Request $request) {
//        return Profile::with('User')->get();
//    }
//
//
//
//    public function Practice (Request $request) {
//        return User::with('Post')->get();
//    }
//
//
//    public function Practice (Request $request) {
//        return Post::with('User')->get();
//    }
//
//
//
//    public function Practice (Request $request) {
//        return Post::with('Tag')->get();
//    }



    public function Practice (Request $request) {
        return Tag::with('Post')->get();
    }


}
