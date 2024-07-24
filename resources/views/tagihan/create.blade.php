@extends('layouts.admin')

@section('title', 'Power Pay | Tambah Tagihan')

@section('content')

{{-- Content --}}
<div class="container">
    <div class="col">
        <h2 class="text-3xl">Tambah Tagihan</h2>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <form action="/tagihan/store" method="POST" enctype="multipart/form-data" class="max-w-sm mx-auto">
                        @csrf

                        <div class="form-group row mb-5">
                            <label for="id_pelanggan" class="block mb-2 text-sm font-medium text-gray-900">Nama Pelanggan</label>
                            <select id="id_pelanggan" name="id_pelanggan"
                                class="select2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected hidden>Pilih Pelanggan</option>
                                @foreach ($pelanggan as $plgn)
                                    <option value="{{ $plgn->id }}">{{ $plgn->nama_pelanggan }} ({{ $plgn->tarif->daya }} VA)</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group row mb-5">
                            <label for="bulan" class="block mb-2 text-sm font-medium text-gray-900">Bulan</label>
                            <select id="bulan" name="bulan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected hidden>Pilih Bulan</option>
                                @foreach (range(1, 12) as $month)
                                    <option value="{{ $month }}">{{ date('F', mktime(0, 0, 0, $month, 1)) }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group row mb-5">
                            <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900">Tahun</label>
                            <select id="tahun" name="tahun"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" selected hidden>Pilih Tahun</option>
                                @foreach (range(date('Y') - 10, date('Y')) as $year)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group row mb-5">
                            <label for="meter_awal" class="block mb-2 text-sm font-medium text-gray-900">Meter Awal</label>
                            <input type="number" step="0.01" id="meter_awal" name="meter_awal"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan meter awal" required>
                        </div>

                        <div class="form-group row mb-5">
                            <label for="meter_akhir" class="block mb-2 text-sm font-medium text-gray-900">Meter Akhir</label>
                            <input type="number" step="0.01" id="meter_akhir" name="meter_akhir"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan meter akhir" required>
                        </div>

                        <div class="form-group row mb-5">
                            <label for="jumlah_meter" class="block mb-2 text-sm font-medium text-gray-900">Jumlah Meter</label>
                            <input type="number" id="jumlah_meter" name="jumlah_meter"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan jumlah meter" required>
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Select2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/css/select2.min.css" rel="stylesheet" />

<!-- Include Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('#id_pelanggan').select2({
            placeholder: 'Pilih Pelanggan',
            width: 'resolve'
        });
    });
</script>
@endpush
