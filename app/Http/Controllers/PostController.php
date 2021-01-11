<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
        public function search(Request $request)
    {
        $seek = $request->search;
        $posts = Post::with('tags')->where('title', 'LIKE',  "%{$seek}%")->orWhere('text', 'LIKE', "%{$seek}%")->paginate(10);
        if(empty($posts[0]) OR $posts[0] == '[]'){
            $taged = Tags::with('posts')->where('title', 'LIKE', "%{$seek}%")->paginate(10);

            if(!empty($taged[0])){
                return view('search')->with('taged', $taged)->with('seek', $seek);
            } else{
                $red = redirect('posts')->with('danger', 'С таким запросом ничего не найдено!');
                return $red;
            }

        } elseif(!empty($posts[0]) OR $posts[0] != '[]'){
            return view('search')->with('posts', $posts)->with('seek', $seek);
        } else{
            $red = 'С таким запросом ничего не найдено!';
            return $red;
        }
    }
        public function user($id)
    {
        $user = User::find($id);
        $posts = Post::with('users')->where('user_id', $id)->paginate(5);
        if(!empty($posts[0]) OR $posts[0] != '[]'){
            return view('view.user')->with('user', $user)->with('posts', $posts);
        } else{
            return view('view.user')->with('user', $user);
        }
    }
}
