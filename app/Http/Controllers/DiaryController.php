<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;

class DiaryController extends Controller
{
    public function index()
    {
        $diaries = Diary::all();
        return view('diaries.index', compact('diaries'));
    }

    public function create()
    {
        return view('diaries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Diary::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect('/diaries');
    }


public function destroy(Diary $diary)
    {
        // Diary ကို Database မှ ဖျက်ပစ်ခြင်း
        $diary->delete();

        return redirect('/diaries');
    }
}