<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacySettingsController extends Controller
{
    public function index()
    {
        $settings = auth()->user()->privacySettings;
        return view('privacy.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'public_profile' => 'required|boolean',
            'allow_messages' => 'required|boolean',
        ]);

        auth()->user()->privacySettings()->update($validated);
        return redirect()->route('privacy-settings.index');
    }
}
