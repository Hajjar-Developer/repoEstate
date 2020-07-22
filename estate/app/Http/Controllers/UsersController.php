<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Es;
use App\Http\Requests\AddUserRequestAdmin;
use DataTables;
use RealRashid\SweetAlert\Facades\Alert;

class UsersController extends Controller
{
    public function welcometoUser()
    {
        return view('welcome');
    }
    public function index(){
    	
    	return view('admin.user.index');
    }

    public function create(){
    	return view('admin.user.add');
    }
 


   public function store(AddUserRequestAdmin $request,User $user){
//dd($request);
        $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        alert()->success('succesfull Add','will disappear after few seconds.');
    	 return redirect('/adminpannel/users')->withFlashMessage('succesfull Add');
    }

    public function edit($id)
    {
            $user = User::find( $id );
    		return view('admin.user.edit',compact('user','id'));
    }

public function update($id , User $userUpdated ,Request $request ){
	    $userUpdated=$user->find( $id );
	    $userUpdated->fill()($request->all())->save();
	    return Redirect::back()->withFlashMessage('succesfull Update');

}

public function destroy($id){
if($id != 1){
      $user = User::find($id)->delete();
      Es::where('user_id',$id)->delete();
       return redirect('/adminpannel/users')->withFlashMessage('succesfull Delete');
   }
    return redirect('/adminpannel/users')->withFlashMessage('you cannot Delete Admin number 1');
}


public function anyData(User $user)
    {

     
      $users = $user->all();

        return DataTables::of($users)

            ->editColumn('name', function ($model) {
                return '<a href="'.url('/adminpanel/users/' . $model->id . '/edit').'">'.$model->name.'</a>';
            })
            ->editColumn('admin', function ($model) {
                return $model->admin == 0 ? '<span class="badge badge-info">' . 'user' . '</span>' : '<span class="badge badge-warning">' . 'adminstrator' . '</span>';
            })
 

        /*    ->editColumn('mybu', function ($model) {
                return '<a href="'.url('/adminpanel/users/' . $model->id).'"> <span class="btn btn-danger btn-circle"> <i class="fa fa-link"></i> </span> </a>';
            })*/
            
            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/adminpanel/users/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                if($model->id != 1){
                    $all .= '<a href="' . url('/adminpanel/users/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
                }
                return $all;
            })
            ->make(true);

    }


}
