@extends('layout.layout')

@section('content')



    <div class="card uper mt-5">
        <div class="card-header">
            Shto kategori
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif

            <form method="post" action="/category">
                @csrf
                <div class="form-group">
                    <label for="name">Emri i kategorisë:</label>
                    <input type="text" class="form-control" name="category_name" required/>
                </div>
                <div class="form-group">
                    <label for="name">Logo:</label>
                    <input type="text" class="form-control" name="logo" required/>
                </div>

                <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Shto</button>
            </form>
        </div>
    </div>

@endsection