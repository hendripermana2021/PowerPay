@extends('layouts.admin')

@section('title', 'Power Pay | Tambah Pelanggan')

@section('content')

{{--  Content --}}
<div class="container">
    <div class="col">
    <h2 class="text-3xl"> Tambah Pelanggan</h2>
    <hr>
    </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-body">
                        <form action="/pelanggan/create" method="POST" enctype="multipart/form-data" class="max-w-sm mx-auto">
                            @csrf

                            <div class="form-group row mb-5">
                                <label for="daya" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="nama_pelanggan" placeholder="Masukkan Nama">
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label for="daya" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="email" placeholder="Masukkan Email">
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label for="daya" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="alamat" placeholder="Masukkan Alamat">
                                </div>
                            </div>

                            {{-- <div class="form-group row mb-5">
                                <label for="daya" class="block mb-2 text-sm font-medium text-gray-900">Daya</label>
                                <div class="col-sm-10">
                                    <input type="text" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="id_tarif" placeholder="Masukkan Daya">
                                </div>
                            </div> --}}

                            <div class="form-group row mb-5">
                                <label for="daya" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Daya</label>
                                <select id="daya" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="id_tarif" placeholder="Masukan Daya">
                                    <option value="">Pilih Daya</option>
                                    @foreach($tarif as $u)
                                        <option value="{{ $u->id }}">{{ $u->daya }} ({{ $u->tarifperkwh }} VA)</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection