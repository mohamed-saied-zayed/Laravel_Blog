<?php
namespace App\Http\Controllers;
use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Reply;
use App\Models\Comment;
use App\Models\Message;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $count_posts = Post::count();
        $count_comments = Comment::count();
        $count_replies = Reply::count();
        $count_tags = Tag::count();
        $count_users = User::count();
        $count_messages = Message::count();
        return view("admin.pages.home.index",compact("count_posts", "count_comments", "count_replies", "count_tags", "count_users", "count_messages"));
    }
}
