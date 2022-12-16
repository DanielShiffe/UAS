@extends('layouts.app')
@section('content')


<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th><th>Id Gudang</th><th>Id Produk</th><th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <a href="{{ url('/cetakpdf') }}" title="Print stok"><button class="btn btn-warning btn-sm"><i class="fa fa-print" aria-hidden="true"></i> Print</button></a>
        @foreach($stok_produk as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->id_gudang }}</td><td>{{ $item->id_produk }}</td><td>{{ $item->stok }}</td>
            </tr>
        @endforeach
        </tbody>
        
    </table>
</div>

@endsection