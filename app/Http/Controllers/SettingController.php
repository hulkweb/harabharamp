<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.settings', ['settings' => Setting::all()]);
    }
    public function add()
    {
        return view('admin.setting_add', ['settings' => Setting::all()]);
    }
    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('admin.setting_edit', ['setting' => $setting]);
    }
    public function store()
    {
        Setting::create(request()->all());
        return back()->with('success', 'Setting Created Success Fully');
    }
    public function update()
    {
        $id = request('id');
        $setting = Setting::find($id);
        $setting->property = request('property');
        $setting->value = request('value');
        $setting->save();
        return back()->with('success', 'Setting Updated Success Fully');
    }
    public function delete($id)
    {
        $setting = Setting::find($id);
        $setting->delete();
        return back()->with('success', 'Setting Updated Success Fully');
    }
}
