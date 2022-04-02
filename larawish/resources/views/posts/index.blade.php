
@extends('wishlist')

@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Wensenlijst</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Naam</th>
            <th>Beschrijving</th>
            <th>Foto</th>
            <th>Prijs</th>
            <th>Link</th>
            <th width="280px">Acties</th>
        </tr>
        @foreach ($data as $key => $value)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ \Str::limit($value->description, 100) }}</td>
                <td>{{ $value->image}}</td>
                <td>{{ $value->price }}</td>
                <td>{{ $value->link }}</td>
                <td>
                    <form action="{{ route('posts.destroy',$value->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('posts.show',$value->id) }}">Bekijken</a>
                        <a class="btn btn-primary" href="{{ route('posts.edit',$value->id) }}">Bewerken</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Verwijderen</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $data->links() !!}
@endsection
