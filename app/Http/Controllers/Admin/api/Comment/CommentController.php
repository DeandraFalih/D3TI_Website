<?php

namespace App\Http\Controllers\Admin\api\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostComment;
use App\Http\Resources\FormatPostResource;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    public function showPostComment()
    {
        $data_post_comment = DB::table('d3ti_post_comment')
            ->join('d3ti_post', 'd3ti_post_comment.post_id', '=', 'd3ti_post.post_id')
            ->select('d3ti_post_comment.*', 'd3ti_post.post_title')
            ->get();

        return [
            'data_post_comment' => $data_post_comment,
        ];
    }

    public function managePostCommentStatus(Request $request, $post_comment_id)
    {
        $db_post_comment = PostComment::findOrFail($post_comment_id);
        
        $data = [
            'post_comment_status' => $request->status,
        ];

        //Update the data
        $db_post_comment->update($data);
    }
}
