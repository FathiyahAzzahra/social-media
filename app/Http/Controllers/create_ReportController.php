<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Report;

class ReportController extends Controller
{
    public function store(Request $request, User $user)
    {
        $validated = $request->validate([
            'reason' => 'required',
        ]);

        $validated['reporter_id'] = auth()->id();
        $validated['user_id'] = $user->id;
        Report::create($validated);
        return redirect()->back();
    }

    public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->back();
    }
}
