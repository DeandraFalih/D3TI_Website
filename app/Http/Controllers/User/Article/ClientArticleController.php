<?php

namespace App\Http\Controllers\User\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\PostCategories;
use App\Models\Product;
use App\Models\ProductCategories;
use App\Models\PostComment;
use App\Models\Youtube;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Google\Client as Google_Client;
use Google\Service\YouTube as Google_Service_YouTube;

class ClientArticleController extends Controller
{
    public function showPostHomepage()
    {
        $data_post=Post::limit(6)
        ->orderBy('post_date', 'desc')
        ->where('post_status', '=', "Published")
        ->get();

        $client = new Google_Client();
        $client->setDeveloperKey("AIzaSyCxUaO4nAaVaBeMKhfXhk1EqBbElRX-xns");

        
        /**$youtube = new Google_Service_YouTube($client);
        $channelId = "UCInptCgqfeQfLF_FOL3CWgg";
        $channel = $youtube->channels->listChannels('contentDetails', array('id' => $channelId));
        $channelId = $channel['items'][0]['id'];

        $searchResponse = $youtube->search->listSearch('id,snippet', array(
            'channelId' => $channelId,
            'order' => 'date',
        ));

        foreach ($searchResponse['items'] as $item) {
            $videoId = $item['id']['videoId'];
            $title = $item['snippet']['title'];
            $description = $item['snippet']['description'];
            
            $videoExists = Youtube::where('youtube_video_id', $videoId)->exists();
            
            if (!$videoExists) {
                $youtubeVideo = new Youtube;
                $youtubeVideo->youtube_video_id = $videoId;
                $youtubeVideo->youtube_title = $title;
                $youtubeVideo->youtube_description = $description;
                $youtubeVideo->save();
            }
        }**/

        $data_youtube=Youtube::limit(5)
        ->orderBy('youtube_id', 'desc')
        ->get();

        return view('user/dashboard/dashboard', [
            'data_post' => $data_post,
            'data_youtube' => $data_youtube,
        ]);
    }

    public function showPostArticle($post_url, $post_link)
    {
        $data_post=Post::where('post_link', '=', $post_link)
        ->get();

        $recent_post=Post::limit(4)
        ->orderBy('post_date', 'desc')
        ->where('post_status', '=', "Published")
        ->get();

        return view('/user/article/postlayout', [
            'data_post' => $data_post,
            'recent_post' => $recent_post,
        ]);
    }

    public function showPostCategory($post_category)
    {
        $category = PostCategories::where('post_categories_url', $post_category)->first();
        $category_name = $category->post_categories_name;

        $paginate_post = Post::join('d3ti_post_categories_link', 'd3ti_post.post_id', '=', 'd3ti_post_categories_link.post_id')
            ->join('d3ti_post_categories', 'd3ti_post_categories_link.post_categories_id', '=', 'd3ti_post_categories.post_categories_id')
            ->where('d3ti_post_categories.post_categories_name', '=', $category_name)
            ->where('d3ti_post.post_status', '=', 'Published')
            ->orderBy('d3ti_post.post_date', 'desc')
            ->paginate(1);

        $recent_post = Post::limit(5)
            ->orderBy('post_date', 'desc')
            ->where('post_status', '=', "Published")
            ->get();

        return view('/user/list/allpostcategory', [
            'category_name' => $category_name,
            'data_post' => $paginate_post,
            'recent_post' => $recent_post,
        ]);
    }

    // public function showListEvent($event_list)
    public function showListEvent()
    {

        $paginate_event = Event::where('d3ti_event.event_status', '=', 'Published')
            ->orderBy('d3ti_event.event_date', 'desc')
            ->paginate(1);

        return view('/user/list/alleventlist', [
            'data_event' => $paginate_event,
        ]);
    }

    public function showProductCategory($product_category)
    {
        $category = ProductCategories::where('product_categories_url', $product_category)->first();
        $category_name = $category->product_categories_name;

        $paginate_product = Product::join('d3ti_product_categories_link', 'd3ti_product.product_id', '=', 'd3ti_product_categories_link.product_id')
            ->join('d3ti_product_categories', 'd3ti_product_categories_link.product_categories_id', '=', 'd3ti_product_categories.product_categories_id')
            ->where('d3ti_product_categories.product_categories_name', '=', $category_name)
            ->where('d3ti_product.product_status', '=', 'Published')
            ->orderBy('d3ti_product.product_date', 'desc')
            ->paginate(1);

        $recent_product = Product::limit(5)
            ->orderBy('product_date', 'desc')
            ->where('product_status', '=', "Published")
            ->get();

        return view('/user/list/allproductcategory', [
            'category_name' => $category_name,
            'data_product' => $paginate_product,
            'recent_product' => $recent_product,
        ]);
    }


    public function createCommentProcess(Request $request)
    {
        $this->validate($request, [
            'post_id' => 'required',
            'name' => 'required',
            'comment' => 'required',
            'email' => 'required',
        ]);

        $post = PostComment::create([
            'post_id' => $request->post_id,
            'post_comment_name' => $request->name,
            'post_comment_value' => $request->comment,
            'post_comment_email' => $request->email,
            'post_comment_status' => "Pending",
        ]);

        return back()->with('status', 'Thank you for your comment! It will be published after it has been reviewed.');
    }
}
