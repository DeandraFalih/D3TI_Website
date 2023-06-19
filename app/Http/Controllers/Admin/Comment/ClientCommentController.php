<?php

namespace App\Http\Controllers\Admin\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class ClientCommentController extends Controller
{
    public function showPostComment()
    {
        $client = new Client([
            'headers' => [
                'Authorization' => 'Bearer ' . session('api_token'),
                'Accept' => 'application/json',
            ],
        ]);

        $response = $client->request('GET', 'http://localhost/d3ti/public/api/d3ti-admin/all_comment/post_comment');
        $statusCode = $response->getStatusCode();
        $body = $response->getBody();

        $data = json_decode($body);

        return view('admin/comment/postcomment', [
            'data_post_comment' => $data->data_post_comment,
        ]);
    }

    public function ApprovePostComment(Request $request, $post_comment_id)
    {
        $status = "Approved";

        $client = new Client([
            'headers' => [
                'Authorization' => 'Bearer ' . session('api_token'),
                'Accept' => 'application/json',
            ],
        ]);
        
        $response = $client->request('PUT', 'http://localhost/d3ti/public/api/d3ti-admin/all_comment/post_comment/process/'.$post_comment_id,
        [
            'json' => [
                'status' => $status,
            ]
        ]
        );

        return redirect('/d3ti-admin/all_comment/post_comment')->with('status', 'Comment has been approved.');
    }

    public function RejectPostComment(Request $request, $post_comment_id)
    {
        $status = "Rejected";

        $client = new Client([
            'headers' => [
                'Authorization' => 'Bearer ' . session('api_token'),
                'Accept' => 'application/json',
            ],
        ]);
        
        $response = $client->request('PUT', 'http://localhost/d3ti/public/api/d3ti-admin/all_comment/post_comment/process/'.$post_comment_id,
        [
            'json' => [
                'status' => $status,
            ]
        ]
        );

        return redirect('/d3ti-admin/all_comment/post_comment')->with('status', 'Comment has been Rejected.');
    }
}
