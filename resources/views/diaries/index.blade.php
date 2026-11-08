@extends('layouts.app')

@section('content')
<div style="background: linear-gradient(135deg, #ffffff, #fff1f2); padding: 25px; border-radius: 20px; margin-bottom: 25px; box-shadow: 0 8px 20px rgba(244, 114, 182, 0.2); border: 2.5px solid #fbcfe8; position: relative; transition: transform 0.2s ease;">
    
    <div style="max-width: 800px; margin: 0 auto;">
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
            <h2 style="color: #7e22ce; font-weight: 600; margin: 0;">✨ My Diary List ✨</h2>
            <a href="/diaries/create" style="background: linear-gradient(135deg, #4ade80, #22c55e); color: white; padding: 10px 20px; text-decoration: none; border-radius: 20px; font-weight: 600; box-shadow: 0 4px 12px rgba(74, 222, 128, 0.4);">+ New Diary</a>
        </div>

        @foreach($diaries as $diary)
            <div style="background: #ffffff; padding: 20px; border-radius: 15px; margin-bottom: 20px; box-shadow: 0 5px 15px rgba(216, 180, 254, 0.3); border: 2px solid #e9d5ff; position: relative;">
                <h3 style="color: #6b21a8; margin-top: 0; margin-bottom: 10px;">{{ $diary->title }}</h3>
                <p style="color: #4b5563; line-height: 1.6; margin-bottom: 10px;">{{ $diary->content }}</p>
                <small style="color: #9ca3af;">Created at: {{ $diary->created_at->format('d M Y, h:i A') }}</small>

                <!-- Delete Form -->
               <!-- Diary တစ်ခုချင်းစီအတွက် Delete Form -->
<form id="delete-form-{{ $diary->id }}" action="/diaries/{{ $diary->id }}" method="POST" style="position: absolute; top: 20px; right: 20px;">
    @csrf
    @method('DELETE')
    <button type="button" onclick="confirmDelete('{{ $diary->id }}')" style="background: #f472b6; color: white; border: none; padding: 6px 14px; border-radius: 12px; cursor: pointer; font-weight: 600; box-shadow: 0 3px 8px rgba(244, 114, 182, 0.4);">🐰 Delete</button>
</form>
            </div>
        @endforeach

        @if($diaries->count() == 0)
            <p style="text-align: center; color: #9ca3af; font-size: 16px;">No diaries found. Create your first diary!</p>
        @endif

    </div>

</div>
<script>
function confirmDelete(id) {
    Swal.fire({
        title: '🐰 Are you sure want to delete?',
        text: "ဒီ Diary လေးကို ဖျက်လိုက်ရင် ပြန်ယူလို့မရတော့ဘူးနော်!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#f472b6',
        cancelButtonColor: '#cbd5e1',
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        background: '#fdf4f8',
        customClass: {
            popup: 'rounded-2xl'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + id).submit();
        }
    })
}
</script>
@endsection