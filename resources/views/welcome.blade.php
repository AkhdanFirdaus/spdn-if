@extends('layouts.app')

@section('content')
<div class="container mx-auto my-5 grid grid-cols-2 gap-4">
    <div class="shadow bg-amber-200 p-5">
        <h1 class="text-lg">Lorem ipsum dolor sit amet.</h1>
        <div class="my-5"></div>
        <form action="">
            <div class="flex flex-row space-x-2">
                <input type="text" class="px-3 py-2 shadow-sm" placeholder="Cari Mahasiswa">
                <button type="submit" class="px-3 py-2 border-amber-500 border-2 rounded">Cari</button>
            </div>
        </form>
    </div>
    <div class="shadow bg-amber-200 p-3">
        <div class="detail"></div>
    </div>
</div>
@endsection