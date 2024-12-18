<?php

namespace App\Http\Controllers\admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminSettingController extends Controller
{
    public function index(){
        $settings = Setting::all();
        return view('admin.pages.setting.index',compact('settings'));
    }
    public function edit($setting){
        $setting = Setting::findorfail($setting);
        return view('admin.pages.setting.edit',['setting' => $setting]);
    }
    public function update($id,Request $request){
        $setting = Setting::findorfail($id);
        $setting->update($request->all());
        // $setting->site_name = $request->site_name;
        // $setting->site_logo = $request->site_logo;
        // $setting->facebook_link = $request->facebook_link;
        // $setting->twitter_link = $request->twitter_link;
        // $setting->youtube_link = $request->youtube_link;
        // $setting->github_link = $request->github_link;
        // $setting->address = $request->address;
        // $setting->phone = $request->phone;
        // $setting->about_title = $request->about_title;
        // $setting->about_content = $request->about_content;
        // $setting->save();
        return redirect()->route('admin.setting')->with('success', 'Setting Updated successfully.');
    }

}
