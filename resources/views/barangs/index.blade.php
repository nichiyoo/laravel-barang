@extends('layouts.main')

@section('title', 'List Barang')

@push('styles')
    <style>
        #gambarCard {
            width: 100%;
            aspect-ratio: 4/3;
            object-fit: cover;
            object-position: center;
        }
    </style>
@endpush

@section('content')
    <div class="container mt-5">
        @include('partials.flash')

        <h2 class="mb-1 fw-bold">Info Barang</h2>
        <p class="mb-4">Berikut adalah daftar barang yang tersedia.</p>

        <div class="mb-4 form-outline">
            <input type="search" id="form1" class="form-control" placeholder="Cari Barang Apa?" aria-label="Search" />
        </div>

        <div class="mb-4 row">
            @foreach ($barangs as $barang)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="py-2">
                        <div class="bg-white card">
                            <a href="{{ route('barangs.show', $barang->id) }}" class="text-decoration-none">
                                <img src="{{ $barang->gambar }}" class="card-img-top" alt="{{ $barang->name }}"
                                    id="gambarCard">

                            </a>
                            <div class="card-body">
                                <h5 class="mb-2 card-title fw-bold">{{ $barang->name }}</h5>

                                <div class="mb-3 d-flex flex-column">
                                    <span>Stock : {{ $barang->stok }}</span>
                                    <span>Harga Jual : Rp. {{ number_format($barang->harga_jual, 0, ',', '.') }}</span>
                                    <span>Harga Beli : Rp. {{ number_format($barang->harga_beli, 0, ',', '.') }}</span>
                                </div>

                                <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button class="rounded-2 btn btn-danger btn-sm" type="submit">DELETE</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mb-4">
            {{ $barangs->links() }}
        </div>
    </div>
@endsection
