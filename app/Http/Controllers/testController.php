<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    class FacebookController extends Controller
{
    public function index()
    {
        return view('facebook_post');
    }

    public function postMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000', 
        ]);

        $pageId = '424614947411412'; 
        $accessToken = 'EAAOtZBQZBuHC8BO6MW4S3ZCAIm6P9Hw4C3IgA3HLOAm3aZAYjHOOoaKIbBhKbeCXe1vlzHZAgg05ljO6WnyePpYl0IlnITH9sqMZCPOX625YhjXFNjoLzEVdIpH4GlsXHpk5X9nkhP7cgUsVUZCWkunAb2E6smGkMVO2jYuVuj11620LyFwUaBtwpdSZBq7UHw0B8R2jtimFk8faEUWt67OfohXF';  
        $message = $request->input('message');

        $response = Http::post("https://graph.facebook.com/{$pageId}/feed", [
            'message' => $message,
            'access_token' => $accessToken
        ]);

        if ($response->successful()) {
            return redirect()->back()->with('success', 'Post successfully created.');
        } else {
            return redirect()->back()->with('error', 'Failed to create post.');
        }
    }
}
