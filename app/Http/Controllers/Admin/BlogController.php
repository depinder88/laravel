<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Blog;
use App\User;
use Redirect;


class BlogController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        //echo "<pre>";print_r($blog);die;
        
        return view('admin.blog.index', compact('blog'));
    }
   
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request            
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);
        Blog::create($request->all());
        
        session()->flash('flash_message', 'Post created successfully...');
        return redirect('admin/blog');
    }

    /**
	'buckets' => 'required',
            'items' => 'required',
            'projects' => 'required',
			
     * Display the specified resource.
     *
     * @param int $id            
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id            
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $blog = Blog::find($id);
        
       return view('admin.blog.create', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request            
     * @param int $id            
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
       // print($request);die;
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);
        $blog->update($request->all());
        session()->flash('flash_message', 'Blog updated successfully...');
        return redirect('admin/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id            
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        session()->flash('flash_message', 'blog deleted successfully...');
        return redirect('admin/blog');
    }
}
