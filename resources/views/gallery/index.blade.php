@extends ('layouts.master')

@section('content')
    <h1>Photo Gallery</h1>

    @foreach($photos as $photo)
        <img src="images/user_uploaded/{{$photo->photo}}">
        <h2>{{$photo->title}}</h2>
        <p>{{$photo->description}}</p>

    @endforeach
    <a href="{{ route('gallery.add_photo') }}" class="btn btn-success">Foto Toevoegen</a>
@endsection