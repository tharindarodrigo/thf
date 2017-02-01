<?php

namespace App\Http\Controllers;

use App\Role;
use App\Seller;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class SellerSignUpController extends Controller
{
    //Get form views;

    public function getStep1()
    {
        return view("frontend.sellerSignUp.step1");
    }

    public function getStep2()
    {
        return view("frontend.sellerSignUp.step2");
    }

    public function getStep3()
    {
        return view("frontend.sellerSignUp.step3");
    }

    //save form data in sessions;

    public function setForm1Data(Request $request)
    {
        $form1Data = [
            'firstName' => $request->first_name,
            'lastName' => $request->last_name,
            'email' => $request->email,
            'phoneNumber' => $request->phone_number
        ];

        $request->session()->put('form1_data', $form1Data);


        return redirect()->route("form2");
    }

    public function setForm2Data(Request $request)
    {

        $form2Data = [
            'phone' => $request->phone,
            'seen_or_worn' => $request->seen_or_worn,
            'has_bank_account' => $request->has_bank_account,
            'has_styleseat_account' => $request->has_styleseat_account,
            'currently_do_hair' => $request->currently_do_hair
        ];

        $form1Data = session()->pull('form1_data');

        try{
            $role = Role::findOrFail(3);//Fetch Seller Role

        } catch (ModelNotFoundException $e){
            $request->session()->flash('global', ['danger', $e]);
            return redirect()->back();
        }

        $user = new User();
        $user->name = $form1Data['firstName'] . " " . $form1Data['lastName'];
        $user->email = $form1Data['email'];

        $user->save();

        $user->attachRole($role);

        //save seller;
        $seller = new Seller();

        $seller->id = $user->id;
        $seller->phone = $form2Data['phone'];
        $seller->used_THF_before = $form2Data['seen_or_worn'];
        $seller->has_bank_account = $form2Data['has_bank_account'];
        $seller->has_styleseat_account = $form2Data['has_styleseat_account'];
        $seller->currently_do_hair = $form2Data['currently_do_hair'];

        if ($seller->save()) {
            return redirect()->route('seller-sign-up-final');
            //Notification
        }

        //TODO: Errors come here
        return redirect()->back();

    }


}