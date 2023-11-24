<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment =new Comment();
        // $comment = new Comment();

        $comment->comment = $request->comment;

        $comment->user()->associate($request->user());

        $ad = Ad::find($request->ad_id);

        $ad->comments()->save($comment);

        return back();
    }

    public function replyStore(Request $request)
    {
        $reply = new Comment();

        $reply->comment = $request->get('comment');

        $reply->user()->associate($request->user());

        $reply->parent_id = $request->get('comment_id');
        // dd($reply->parent_id);

        $ad = Ad::find($request->get('ad_id'));

        $ad->comments()->save($reply);

        return back();

    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
        if ($comment) {
        // dd($comment);

            $comment->delete();
            return back();
        }
        else {
            return redirect()->route('404');

        }

    }


}
