<?php

namespace App\Http\Controllers;

//import Model "Post"
use App\Models\Blog;

//return type View
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
//return type redirectResponse 
use Illuminate\Http\RedirectResponse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * index
     * 
     * @return View
     */

    public function index(): View
    {
        //get Posts
        $blog = blog::latest()->paginate(3);
        //render view with post 
        return view('blog.admin', compact('blog'));
    }
    public function create(): View
    {

        return view('blog.create');
    }


    public function home(): View
    {
        //get Posts
        $blog = blog::latest()->paginate();
        //render view with post
        return view('blog.home', compact('blog'));
    }
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:1',
            'content' => 'required|min:10',
            'example' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/blog', $image->hashName());
        $example = $request->file('example');
        $example->storeAs('public/blog', $example->hashName());

        //create post
        Blog::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content,
            'example' => $example->hashName()
        ]);

        //redirect to index
        return redirect()->route('blog.index')->with(['success' => 'Data
        Berhasil Disimpan!']);
    }
    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get post by ID
        $blog = Blog::findOrFail($id);

        //render view with post
        return view('blog.show', compact('blog'));
    }
    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $blog = Blog::findOrFail($id);

        //render view with post
        return view('blog.edit', compact('blog'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:0',
            'content'   => 'required|min:0',
            'example'     => 'image|mimes:jpeg,jpg,png|max:2048'
        ]);

        //get post by ID
        $blog = Blog::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('example')) {
            $image = $request->file('image');
            $image->storeAs('public/blog', $image->hashName());

            //delete old image
            Storage::delete('public/blog/' . $blog->image);
            //upload new image
            $example = $request->file('example');
            $example->storeAs('public/blog', $example->hashName());

            //delete old image
            Storage::delete('public/blog/' . $blog->example);

            //update post with new image
            $blog->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content,
                'example'     => $example->hashName()
            ]);
        }else if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/blog', $image->hashName());

            //delete old image
            Storage::delete('public/blog/' . $blog->image);

            //update post with new image
            $blog->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        } else {

            //update post without image
            $blog->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    /**
     * destroy
     *
     * @param  mixed $blog
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $blog = Blog::findOrFail($id);

        //delete image
        Storage::delete('public/blog/' . $blog->image);

        //delete post
        $blog->delete();

        //redirect to index
        return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $blog = DB::table('blogs')
            ->where('title', 'like', "%" . $search . "%")
            ->paginate();
        return view('blog.admin', compact('blog'));
    }
}
