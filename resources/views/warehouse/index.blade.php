@extends('layout.layout')



@section('content')


    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card shadow mb-5">
                <div class="card-header border-0">

                    <div class="row justify-content-between">
                        <div class="col-8">
                            <h3 class="mb-0">Produkte në magazinë &nbsp;&nbsp;<a href="/products/create"> <button class="btn btn-outline-primary btn-sm" type="submit"><i class="fas fa-plus"></i> Shto produkt</button></a>
                            </h3>
                        </div>
                        <div class="col-3 text-right">
                            Pamja: &nbsp;
                            <div data-toggle="tooltip" data-placement="top" title="Grid" class="btn btn-primary btn-sm"><i class="fas fa-th-large"></i></div>
                            <div class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Tabelë"><i class="far fa-list-alt"></i></div>

                        </div>
                    </div>


                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Emri</th>
                            <th scope="col">Gjendje</th>
                            <th scope="col">Kategoria</th>
                            <th scope="col">Çmimi</th>
                            <th scope="col">Sasia</th>
                            <th scope="col">Barkodi</th>
                            <th scope="col">Modifiko</th>
                            <th scope="col">Fshi</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->product_name }}</td>
                                <td><i class='far fa-check-circle {{ $product->quantity > 0 ? 'text-green':'text-red'}}'></i>
                                </td>

                                <td><i class="{{ $product->category->logo }}"></i> {{ $product->category->category_name }}</td>
                                <td>{{ $product->price }} Lekë</td>

                                <td>{{ $product->quantity }} {{ $product->unit }}</td>
                                <td>{{ $product->barcode }}</td>

                                <td><a href="/products/{{ $product->id }}/edit" class="btn btn-primary"><i class="far fa-edit"></i> Modifiko</a>
                                </td>
                                <td>
                                    <form action="/products/{{ $product->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt"></i> Fshi</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


    <div class="uper">

        <table class="">

            <tbody>

            </tbody>
        </table>
    </div>


@endsection
