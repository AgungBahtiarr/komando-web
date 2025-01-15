@extends('layouts.app')

@section('title', 'Surat Masuk')

@section('content')
    @if (session('success'))
        <div class="alert alert-success shadow-lg mb-4">
            <div>
                <i class="fas fa-check-circle"></i>
                <span>{{ session('success') }}</span>
            </div>
        </div>
    @endif

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Surat Masuk</h1>
        <button class="btn btn-primary" onclick="createLetter.showModal()">
            <i class="fas fa-plus mr-2"></i>Tambah Surat Masuk
        </button>
        @include('letter.create')
    </div>

    <div class="bg-base-100 p-4 rounded-lg shadow mb-6">
        <div class="flex gap-4 flex-wrap">
            <div class="form-control">
                <input type="text" placeholder="Cari surat..." class="input input-bordered w-full max-w-xs" />
            </div>
            <div class="form-control">
                <select class="select select-bordered">
                    <option disabled selected>Pilih Klasifikasi</option>
                    <option>Rahasia (R)</option>
                    <option>Biasa (B)</option>
                    <option>Penting (P)</option>
                </select>
            </div>
            <div class="form-control">
                <select class="select select-bordered">
                    <option disabled selected>Status Disposisi</option>
                    <option>Belum Disposisi</option>
                    <option>Sudah Disposisi</option>
                </select>
            </div>
            <div class="form-control">
                <input type="date" class="input input-bordered" />
            </div>
        </div>
    </div>

    <!-- Tabel Surat Masuk -->
    <div class="card bg-base-100 shadow-md">
        <div class="card-body">
            <div class="overflow-x-auto">
                <table class="table table-zebra w-full">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>No Surat</th>
                            <th>Perihal</th>
                            <th>Dari Instansi</th>
                            <th>Klasifikasi</th>
                            <th>File</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($letters as $letter)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $letter->rec_date }}</td>
                                <td>{{ $letter->number }}</td>
                                <td>{{ $letter->subject }}</td>
                                <td>{{ $letter->sender }}</td>
                                <td><span class="badge badge-warning">{{ $letter->classification }}</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-ghost">
                                        <i class="fas fa-file-pdf text-red-500"></i>
                                    </a>
                                </td>
                                <td>
                                    <div class="flex gap-2">
                                        <button class="btn btn-sm btn-success" onclick="modalDisposisi.showModal()">

                                            <i class="fas fa-paper-plane"></i>
                                        </button>
                                        <button class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-error">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        @include('disposition.create')
                                    </div>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-4">
                <div class="btn-group">
                    <button class="btn btn-sm">«</button>
                    <button class="btn btn-sm">1</button>
                    <button class="btn btn-sm btn-active">2</button>
                    <button class="btn btn-sm">3</button>
                    <button class="btn btn-sm">»</button>
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- <tr>
    <td>2</td>
    <td>2023-10-19</td>
    <td>002/SM/X/2023</td>
    <td>Terdakwa</td>
    <td>Sponsorify</td>
    <td><span class="badge badge-info">B</span></td>
    <td><span class="badge badge-success">Sudah Disposisi</span></td>
    <td>
        <a href="#" class="btn btn-sm btn-ghost">
            <i class="fas fa-file-pdf text-red-500"></i>
        </a>
    </td>
    <td>
        <div class="flex gap-2">
            <button class="btn btn-sm btn-success" disabled>
                <i class="fas fa-paper-plane"></i>
            </button>
            <button class="btn btn-sm btn-info">
                <i class="fas fa-eye"></i>
            </button>
            <button class="btn btn-sm btn-warning">
                <i class="fas fa-edit"></i>
            </button>
            <button class="btn btn-sm btn-error">
                <i class="fas fa-trash"></i>
            </button>
        </div>
    </td>
</tr> --}}
