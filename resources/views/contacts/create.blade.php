@extends('layouts.main')

@section('content')

    <div class="card">
        <div class="card-header">
            Add contact
        </div>
        <div class="card-body">
            @if (count($errors))
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {!! Form::open(['route' => 'contacts.store']) !!}
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-right">Name</label>
                            <div class="col-sm-8">
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="company" class="col-sm-4 col-form-label text-right">Company</label>
                            <div class="col-sm-8">
                                {!! Form::text('company', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-right">Email</label>
                            <div class="col-sm-8">
                                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-4 col-form-label text-right">Phone</label>
                            <div class="col-sm-8">
                                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-4 col-form-label text-right">Address</label>
                            <div class="col-sm-8">
                                {!! Form::text('address', null, ['class' => 'form-control', 'rows' => 2]) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="group" class="col col-form-label text-right">Group</label>
                            <div class="col">
                                {!! Form::select('group_id', App\Group::pluck('name', 'id'), null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col">
                                <a href="#" class="btn btn-light">Add group</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="http://placehold.it/100x100" alt="picture" class="img-thumbnail">
                        </div>
                        <br>
                        <label class="custom-file">
                            <input type="file" id="file2" class="custom-file-input">
                            <span class="custom-file-control"></span>
                        </label>
                    </div>
                </div>
                <br>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" value="Save">
                    <a href="#" class="btn btn-light">Cancel</a>
                </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection