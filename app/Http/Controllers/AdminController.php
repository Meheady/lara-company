<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    private $id ;
    private $adminData ;
    protected $imageName;
    protected $directory;
    protected $imageUrl;
    protected $hashedPassword;

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function profile()
    {
        $this->id = Auth::user()->id;
        $this->adminData = User::find($this->id);
        return view('admin.body.profile',['admindata'=>$this->adminData]);

    }

    public function editProfile()
    {
        $this->id = Auth::user()->id;
        $this->adminData = User::find($this->id);
        return view('admin.body.edit-profile',['admindata'=>$this->adminData]);
    }


    public function getImageUrl($image)
    {
            $this->imageName  = $image->getClientOriginalName();
            $this->directory = 'profile-image/';
            $image->move($this->directory,$this->imageName);
            return $this->imageUrl = $this->directory.$this->imageName;
    }

    public function storeProfile(Request $request)
    {
        //$request->all();
        $this->id = Auth::user()->id;
        $this->adminData = User::find($this->id);
        $this->adminData->name = $request->name;
        $this->adminData->username = $request->username;
        $this->adminData->email = $request->email;
        $this->adminData->profile_image = $this->getImageUrl($request->file('image'));
        $this->adminData->save();

        return redirect()->route('admin.profile')->with('massage','Update Successful');
    }

    public function changePassword()
    {
        return view('admin.body.change-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([

            'oldpassword'=>'required',
            'newpassword'=>'required',
            'confirmpassword'=>'required|same:newpassword',
        ]);

        $this->hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $this->hashedPassword)){

            $this->id = Auth::user()->id;
            $this->adminData = User::find($this->id);
            $this->adminData->password = bcrypt($request->newpassword);
            $this->adminData->save();

            return redirect('/admin/profile')->with('massage','Password change Success');
        }


    }


}
