@php
    use Illuminate\Support\Facades\Crypt;
@endphp
@extends('layouts.app')

@section('title', 'Data Table page')

@section('page-title', 'DataTable')

@section('content')
    <div class="px-3">
        <div class="mb-3 mt-1">
            <a href="/add_product" class="btn btn-success" style="font-size:20px">
                <i class="fa-solid fa-plus"></i>
                Add Product
            </a>
        </div>
        <table id="yajra-table" class="table table-striped">
            <thead class="text-center">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>price</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th class="actionhead">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($products)
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->status }}</td>

                            <td class="actionbuttons">
                                <a title="View" href="{{ url('/view_product/' . Crypt::encrypt($product->id)) }}"
                                    class="btn btn-primary"><i class="fa-regular fa-eye"></i></a>
                                <a title="Edit" href="{{ url('/edit_product/' . Crypt::encrypt($product->id)) }}" class=" btn
                                                btn-success"><i class="fa-solid fa-pen"></i></a>
                                <a title="Delete" href="{{ url('/delete_product/' . Crypt::encrypt($product->id)) }}" class=" btn
                                                btn-danger"><i class="fa-solid fa-xmark"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection

<script>
    $(document).ready(function () {
        $('#yajra-table')
    })
</script>