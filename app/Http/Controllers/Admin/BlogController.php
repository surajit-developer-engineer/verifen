<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Blog Listing
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->get();

        return view('pages.admin.blog.index')
            ->with([
                'blogs' => $blogs
            ]);
    }

    /**
     * Blog Add Page
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function add()
    {
        return view('pages.admin.blog.add');
    }

    /**
     * Blog Store
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function insert(Request $request)
    {
        $request->validate([
            'created_by' => 'required|string',
            'created_date' => 'required|date_format:Y-m-d',
            'title' => 'required|string',
            'content' => 'required|string',
            'status' => 'required|boolean',
            'is_featured_article' => 'required|boolean',
        ]);

        $insertBlog = new Blog();
        $insertBlog->created_by = $request->input('created_by');
        $insertBlog->created_date = $request->input('created_date');
        $insertBlog->title = $request->input('title');
        $insertBlog->content = $request->input('content');
        $insertBlog->status = $request->input('status');
        $insertBlog->is_featured_article = $request->input('is_featured_article');
        $insertBlog->save();

        return redirect()->route('admin.blog')->with([
            "message" => [
                "result" => "success",
                "msg" => "Blog Added Successfully."
            ]
        ]);
    }

    /**
     * Blog Edit Page
     * @param int $id
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit($id)
    {
        $blog = Blog::find($id);

        return view('pages.admin.blog.edit')
            ->with([
                'blog' => $blog
            ]);
    }

    /**
     * Blog Update
     * @param int $id
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'created_by' => 'required|string',
            'created_date' => 'required|date_format:Y-m-d',
            'title' => 'required|string',
            'content' => 'required|string',
            'status' => 'required|boolean',
            'is_featured_article' => 'required|boolean',
        ]);

        $updateBlog = Blog::find($id);
        if ($updateBlog) {
            $updateBlog->created_by = $request->input('created_by');
            $updateBlog->created_date = $request->input('created_date');
            $updateBlog->title = $request->input('title');
            $updateBlog->content = $request->input('content');
            $updateBlog->status = $request->input('status');
            $updateBlog->is_featured_article = $request->input('is_featured_article');
            $updateBlog->save();

            return redirect()->route('admin.blog')->with([
                "message" => [
                    "result" => "success",
                    "msg" => "Blog Updated Successfully."
                ]
            ]);
        } else {
            return redirect()->back()->with([
                "message" => [
                    "result" => "error",
                    "msg" => "Unable To Update Blog."
                ]
            ]);
        }
    }

    /**
     * Blog Delete
     * @param int $id
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function delete($id)
    {
        $blog = Blog::find($id);
        if ($blog) {
            $blog->delete();

            return redirect()->route('admin.blog')->with([
                "message" => [
                    "result" => "success",
                    "msg" => "Blog Deleted Successfully."
                ]
            ]);
        } else {
            return redirect()->route('admin.blog')->with([
                "message" => [
                    "result" => "error",
                    "msg" => "Unable To Delete Blog."
                ]
            ]);
        }
    }
}
