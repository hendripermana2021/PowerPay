@extends('layouts.admin')

@section('title', 'Power Pay | Tagihan')

@section('content')

    {{--  Content --}}
    <div class="container">
        <div class="mt-3 pb-4">

            {{-- button tambah tarif --}}
            <div class="flex md:flex-row flex-col-reverse gap-y-2 md:gap-y-0 md:justify-between items-center">

                <a type="button"
                    class="text-center text-white w-full md:w-48 bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-5 py-2.5 sm:mb-0 rounded-full"
                    href={{ url('/tagihan/create') }}>Tambah Tagihan</a>
            </div>

        </div>
    </div>
    <div class="my-4">
        <h2 class="text-2xl">Data Tagihan</h2>
        <hr>
    </div>

    {{-- Success Alert --}}
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-4" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.348 5.652a.5.5 0 0 0-.707-.707L10 7.293 6.36 3.652a.5.5 0 1 0-.707.707L9.293 8l-3.64 3.648a.5.5 0 0 0 .707.707L10 8.707l3.648 3.648a.5.5 0 0 0 .707-.707L10.707 9l3.641-3.648z" />
                </svg>
            </span>
        </div>
    @endif

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-yellow-400 px-10 ">
            <thead class="text-xs text-white uppercase bg-yellow-400 h-8">
                <tr align="center">
                    <th scope="col" rowspan="2">No</th>
                    <th scope="col" rowspan="2">Nama Pelanggan</th>
                    <th scope="col" rowspan="2">Email</th>
                    <th scope="col" rowspan="2">Nomor Meter</th>
                    <th scope="col" colspan="2">Meter (kWh)</th>
                    <th scope="col" rowspan="2">kWh Digunakan</th>
                    <th scope="col" rowspan="2">Periode Tagihan</th>
                    <th scope="col" rowspan="2">Status Pembayaran</th>
                    <th scope="col" rowspan="2">Tanggal Pembuatan Tagihan</th>
                    <th scope="col" rowspan="2">Aksi</th>
                </tr>
                <tr>
                    <th scope="col" class="text-center">Awal</th>
                    <th scope="col" class="text-center">Akhir</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tagihan as $key => $tghn)
                    <tr align="center" class="bg-white border-b text-gray-900">
                        <th>{{ $key + 1 }}</th>
                        <td>{{ $tghn->pelanggan->nama_pelanggan }}</td>
                        <td>{{ $tghn->pelanggan->email }}</td>
                        <td>{{ $tghn->pelanggan->nomor_kwh }}</td>
                        <td>{{ $tghn->meter_awal }}</td>
                        <td>{{ $tghn->meter_akhir }}</td>
                        <td>{{ $tghn->jumlah_meter }}</td>
                        <td>{{ date('F', mktime(0, 0, 0, $tghn->bulan, 1)) }} {{ $tghn->tahun }}</td>
                        <td>
                            @if ($tghn->status == 1)
                            <span class="inline-block bg-red-600 text-white rounded-full px-3 py-1 text-center text-sm font-semibold">Menunggu Pembayaran</span>
                            @endif

                        </td>
                        <td>{{ $tghn->created_at }}</td>
                        <td class="flex items-center justify-center">
                            <a href={{ url('/tarif/edit/' . $tghn->id) }} type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mx-2">Edit</a>
                            <a href={{ url('/tarif/delete/' . $tghn->id) }}
                                onclick="return confirm('Anda Yakin ingin Menghapus {{ $tghn->daya }} ?')" type="button"
                                class="ps-5 text-white bg-red-900 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center py-4 text-gray-500">Tidak ada data tagihan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
