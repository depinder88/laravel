<?php
namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\register;
use App\role;
use App\User;


class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		//return view('welcome');
        return view('front.register.index');
    }
   
   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::where('is_admin','N')->get();
        //echo "<pre>"; print_r($role);die;
        return view('front.register.create', compact('role'));
    }
    
    public function login()
    {
        return view('front.register.login');
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
            'name' => 'required',
            'lname' => 'required',
            'email' => 'required',
           
        ]);
		
        register::create($request->all());
        session()->flash('flash_message', 'User has been registered successfully...');
        return redirect('register');
    }

    /**
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
		
        return view('front.register.profile', compact('user'));
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
        $user->update($request->all());
        session()->flash('flash_message', 'Profile updated successfully...');
        return redirect('front/register/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id            
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        session()->flash('flash_message', 'Portfolio deleted successfully...');
        return redirect('admin/portfolio');
    }
}
