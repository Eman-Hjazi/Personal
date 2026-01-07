<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use function Flasher\Prime\flash;

class DashboardController extends Controller
{
    function index()
    {
        return view('dashboard');
    }

    function messages()
    {
        $messages = Message::latest()->paginate(10);
        return view('dashboard.messages.index', compact('messages'));
    }

    function messages_show(Message $message)
    {
        return view('dashboard.messages.show', compact('message'));
    }

    function settings()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        return view('dashboard.settings', compact('settings'));
    }

    function settings_save(Request $request)
    {
        $settings = $request->except('_token', '_method');
        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        flash()->success('Settings updated successfully');
        return redirect()->back();
    }
}
