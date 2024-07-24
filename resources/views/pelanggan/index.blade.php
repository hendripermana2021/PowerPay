@extends('layouts.admin')

@section('title', 'Power Pay | Pelanggan')

@section('content')

    {{--  Content --}}
    <div class="container">
        <div class="mt-3 pb-4">
            <label for="table-search" class="sr-only">Search</label>

            {{-- button tambah tarif --}}
            <div class="flex md:flex-row flex-col-reverse gap-y-2 md:gap-y-0 md:justify-between items-center">
                <div class="relative w-full">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="table-search"
                        class="block pt-2 w-full md:w-auto ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Cari">
                </div>
                <a type="button"
                    class="text-center text-white w-full md:w-48 bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-5 py-2.5 sm:mb-0 rounded-full"
                    href={{ url('/pelanggan/create') }}>Tambah Pelanggan</a>
            </div>

            </div>

        </div>
        <div class="col">
            <h2 class="mt-2"> Data Pelanggan</h2>
            <hr>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-yellow-400 px-10 ">
                <thead class="text-xs text-white uppercase bg-yellow-400 h-8">
                    <tr align="center">
                        <th scope="col">No</th>
                        <th scope="col">ID Pelanggan</th>
                        <th scope="col">Nama Pelanggan</th>
                        <th scope="col">Email</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nomor KWH</th>
                        
                        <th scope="col">Tarif kwh</th>
                        <th scope="col">Tgl dibuat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pelanggan as $u)
                        <tr align="center" class="bg-white border-b text-gray-900">
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $u->id_pelanggan }}</td>
                            <td>{{ $u->nama_pelanggan }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->alamat }}</td>
                            <td>{{ $u->nomor_kwh }}</td>
                            
                            <td>{{ $u->id_tarif }}</td>
                            <td>{{ $u->created_at }}</td>
                            <td class="flex items-center justify-center">
                            <a href={{url('/tarif/edit/'.$u->id)}} type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">Edit</a>
                            <a href={{url('/tarif/delete/'.$u->id)}} onclick="return confirm('Anda Yakin ingin Menghapus {{$u->daya}} ?')" type="button" class="ps-5 text-white bg-red-900 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">delete</a>
                            </td>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
@endsection