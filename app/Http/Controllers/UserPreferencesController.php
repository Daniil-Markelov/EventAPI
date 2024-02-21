<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserPreferencesController extends Controller
{
    public function store(Request $request)
    {
        $user = $request->user();
        $user->preferences = $request->input('preferences');
        $user->save();

        return response()->json(['message' => 'Preferences saved successfully']);
    }

    public function show(Request $request)
    {
        $user = $request->user();
        $preferences = $user->preferences;

        return response()->json(['preferences' => $preferences]);
    }
}
