<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SellerAccountController extends Controller
{
    private $view = 'frontend.account.';

    public function editAccount()
    {
        $user = Auth::user();
        return view($this->view . 'account', compact('user'));
    }

    public function updateAccount(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->first_name . ' ' . $request->last_name;
        $user->dob = $request->dob;

        $user->seller->phone = $request->phone;
        $user->seller->phone = $request->phone;
    }

    public function editCommissionInfo()
    {
        return view($this->view . 'commission');
    }

    public function editSocialInfo()
    {
        return view($this->view . 'social');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function changePassword()
    {
        return view($this->view . 'password');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'password'=> 'required|min:6',
            'password_again'=> 'required|matches:password',
            'old_password' => 'required'
        ]);

        $user = Auth::user();

        $user->password= bcrypt($request->password);

        if ($user->save()) {
            $request->session()->flash('global', ['success', 'Successfully updated']);
            return redirect()->back();
        }

        $request->session()->flash('global', ['danger', 'There was a problem updating']);


    }

}
