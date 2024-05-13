@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Daftar </h3>
                
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Gambar</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($artikels as $artikel)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset('/storage/artikels/' . $artikel->gambar) }}" class="rounded" style="width: 150px">
                                </td>
                                <td>{{ $artikel->judul }}</td>
                                <td>{{ $artikel->deskripsi }}</td>
                                </form>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data artikel belum Tersedia.
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $artikels->links() }}
                </div>
            </div>
        </div>
    </div>
    @endsection