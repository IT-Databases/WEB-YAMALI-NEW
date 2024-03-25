@extends('layouts.main')
@section('main')
    <div class="container py-20 px-10 lg:px-20 flex flex-col justify-center h-fit detail-berita">
        <div class="container h-96 text-center rounded-lg overflow-hidden">
            <img src={{ asset('/storage/' . $berita->gambar) }} class="h-full w-full object-cover" />
        </div>
        <h1 class=" text-xl lg:text-2xl font-bold text-black text-center mb-10 mt-10"> {{ $berita->judul }}</h1>
        <p class="text-md lg:text-xl text-primary font-bold">{{ $berita->created_at->translatedFormat('l, j F Y') }}</p>
        <div class="container w-full my-5 text-justify flex flex-col justify-start gap-3">
            {!! html_entity_decode($berita->berita) !!}
        </div>

        <p>{{ 'Author : ' . $berita->author }}</p>
        <div class="flex gap-1">
            <p>Sumber :</p><a class="text-blue-500 hover:underline" href={{ $berita->sumber }}>Sumber
                Berita</a>
        </div>
    </div>
@endsection
