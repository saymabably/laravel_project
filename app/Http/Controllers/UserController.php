<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use DB;


class UserController extends Controller
{
	public function createUser(){
		return view ('admin.user.createUser');
	}
	
public function storeUser(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);
        /*  return $request->all();
        $user = new User();
       $user->name = $request->name;        
	   $user->email = $request->email;
        $user->password = $request->password;
       $user->save();
        return 'Category info save successfully';
       User::create( $request->all() );
       return 'Category info save successfully'; 
 */
          DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
           
			
        ]);
        //return redirect()->back(); 
        return redirect('/user/add')->with('message', 'User info save successfully');
}


     public function manageUser() {
//        $users=User::all();
//        $users=User::simplePaginate(10);
        $users=User::paginate(10);
        return view('admin.user.manageUser', ['users'=>$users]);
    }
	public function deleteUser($id) {
        $user = User::find($id);
        $user->delete();
        return redirect('/user/manage')->with('message', 'User info  is deleted successfully');
    }

}
