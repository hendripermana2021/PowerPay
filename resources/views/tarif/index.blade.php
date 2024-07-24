@extends('layouts.admin')

@section('title', 'Power Pay | Tarif')

@section('content')


<!-- {{--  Content --}} -->
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
                        placeholder="     Cari">
                </div>
                <a type="button"
                    class="flex items-center text-center text-white w-full md:w-48 bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-1 py-2 sm:mb-0 rounded-full"
                    href="{{ route('tarif/create') }}"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14m-7 7V5" />
                    </svg>
                    Tambah Tarif</a>
            </div>

        </div>
        <div class="col">
            <h2 class="text-2xl my-3 font-bold">DATA TARIF</h2>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-yellow-400 px-10 ">
                <thead class="text-xs text-white uppercase bg-yellow-400 h-8">
                    <tr align="center">
                        <th scope="col">No</th>
                        <th scope="col">Daya</th>
                        <th scope="col">Tarif</th>
                        <th scope="col">Terakhir Di update</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($data as $index => $tarif)
                    <tr align="center">
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $tarif->daya }}</td>
                        <td>{{ $tarif->tarifperkwh }}</td>
                        <td>{{ $tarif->updated_at->format('d-m-Y H:i') }}</td>
                        <td>
                            <a href="" class="text-blue-500 hover:underline">Edit</a>
                            <form action="" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data tarif yang tersedia.</td>
                    </tr>
                @endforelse
            </tbody>
            </table>
        </div>
    </div>
@endsection