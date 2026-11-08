@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-pink-600">📖 ကျွန်ုပ်၏ ကိုယ်ပိုင်ဒိုင်ယာရီများ</h2>
        <a href="/diaries/create" class="btn bg-pink-500 hover:bg-pink-600 text-white rounded-lg">
            + မှတ်စုအသစ် ရေးမည်
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($diaries as $diary)
            <div class="card bg-pink-50 shadow-md border border-pink-100 rounded-2xl p-5">
                <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $diary->title }}</h3>
                <p class="text-gray-600 mb-4">{{ $diary->content }}</p>
                <span class="text-xs text-gray-400">{{ $diary->created_at->diffForHumans() }}</span>
            </div>
        @endforeach
    </div>
</div>
@endsection