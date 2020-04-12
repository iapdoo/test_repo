<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SitSetting;

class SitSettingController extends Controller
{
    public function index(SitSetting $sitSetting){
        $sitSetting =$sitSetting->all();
        return view("admin.sitsetting.index" ,compact('sitSetting'));
    }
    public function store(Request $request,SitSetting $sitSetting ){

        foreach (array_except($request->toArray() ,['_token' ,'submit']) as $key => $req){
            $sitSettingupdated=$sitSetting->where('namesitteng' , $key)->get()[0];
            $sitSettingupdated->fill(['value' => $req])->save();

        }
        return redirect("/adminpanel/sitsetting")->withFlashMassage('تم التعديل بنجاح');

    }
}
