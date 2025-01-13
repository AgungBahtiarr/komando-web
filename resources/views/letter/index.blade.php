@extends('layouts.app')

@section('title', 'Surat')

@section('content')
    <!-- Surat Masuk -->
    <div class="card bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Surat Masuk</h2>
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Perihal</th>
                            <th>Dari Instansi</th>
                            <th>Klasifikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2023-10-20</td>
                            <td>Revisi</td>
                            <td>Poliwangi B.E-ka</td>
                            <td>R</td>
                        </tr>
                        <tr>
                            <td>2023-10-19</td>
                            <td>Terdakwa</td>
                            <td>Sponsorify</td>
                            <td>B</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

