@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-2xl shadow-lg border border-pink-100">
    <h2 class="text-2xl font-bold text-pink-600 mb-6 text-center">✨ မှတ်စုအသစ် ဖန်တီးမည် ✨</h2>

    <form action="/diaries" method="POST">
        @csrf
        @extends('layouts.app')

@section('content')
<div style="background: linear-gradient(135deg, #f3e8ff, #fce7f3); min-height: 80vh; display: flex; justify-content: center; align-items: center; padding: 20px; font-family: 'Poppins', sans-serif;">
    
    <div style="background: #ffffff; padding: 30px; border-radius: 20px; box-shadow: 0 10px 25px rgba(216, 180, 254, 0.3); width: 100%; max-width: 500px; border: 2px solid #e9d5ff;">
        
        <h2 style="text-align: center; color: #7e22ce; margin-bottom: 25px; font-weight: 600;">✨ Create New Diary ✨</h2>

        <form action="/diaries" method="POST">
            @csrf
            
            <div style="margin-bottom: 20px;">
                <label style="display: block; color: #6b21a8; font-weight: 500; margin-bottom: 8px;">Title</label>
                <input type="text" name="title" placeholder="Enter your diary title..." required style="width: 100%; padding: 12px; border: 2px solid #f3e8ff; border-radius: 10px; outline: none; background: #faf5ff; font-size: 14px; box-sizing: border-box;">
            </div>

            <div style="margin-bottom: 25px;">
                <label style="display: block; color: #6b21a8; font-weight: 500; margin-bottom: 8px;">Content</label>
                <textarea name="content" rows="5" placeholder="Write down your thoughts and daily moments..." required style="width: 100%; padding: 12px; border: 2px solid #f3e8ff; border-radius: 10px; outline: none; background: #faf5ff; font-size: 14px; resize: none; box-sizing: border-box;"></textarea>
            </div>

            <div style="text-align: center;">
                <button type="submit" style="background: linear-gradient(135deg, #4ade80, #22c55e); color: white; border: none; padding: 12px 30px; font-size: 16px; font-weight: 600; border-radius: 25px; cursor: pointer; box-shadow: 0 4px 12px rgba(74, 222, 128, 0.4); transition: 0.3s;">
                    Save Diary
                </button>
            </div>

        </form>
    </div>

</div>
@endsection
        <!-- Title Input -->
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">ခေါင်းစဉ် (Title)</label>
            <input type="text" name="title" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400" placeholder="ခေါင်းစဉ် ရေးပါ..." required>
        </div>

        <!-- Content Textarea -->
        <div class="mb-6">
            <label class="block text-gray-700 font-semibold mb-2">အကြောင်းအရာ (Content)</label>
            <textarea name="content" rows="5" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400" placeholder="ဒီနေ့ရဲ့ ဖြစ်စဉ်လေးတွေကို ရေးပါ..." required></textarea>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="btn bg-pink-500 hover:bg-pink-600 text-white w-full rounded-lg">
                သိမ်းဆည်းမည် (Save)
            </button>
        </div>
    </form>
</div>
@endsection