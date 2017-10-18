@extends('layouts.main')

@section('content')

    <div class="contacts">
        @foreach($contacts as $contact)
            <div class="row contact">
                <div class="col-md-2">
                    <img src="http://placehold.it/100x100" alt="profile-image" class="img-thumbnail">
                </div>
                <div class="col-md-8">
                    <h3>{{ $contact->name }}</h3>
                    <p><strong>{{ $contact->company }}</strong></p>
                    <p>{{ $contact->email }}</p>
                </div>
                <div class="col-md-2">
                    <a href="#" class="btn btn-light">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </div>
            </div>
        @endforeach
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>

@endsection