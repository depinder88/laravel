<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Blog;
use App\User;
use Redirect;


class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        //echo "<pre>";print_r($blog);die;
        
        return view('admin.user.index', compact('user'));
    }
   
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
        User::create($request->all());
        
        session()->flash('flash_message', 'Post created successfully...');
        return redirect('admin/user');
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
       $user = User::find($id);
        
       return view('admin.user.create', compact('user'));
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
        $user = User::find($id);
       // print($request);die;
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
        ]);
        $user->update($request->all());
        session()->flash('flash_message', 'User updated successfully...');
        return redirect('admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id            
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        session()->flash('flash_message', 'User deleted successfully...');
        return redirect('admin/user');
    }
}
