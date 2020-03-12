@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                        <form action="{{ route('mainImage.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" name="img"> <br>
                                <input type="text" name="title" class="mt-2">
                            </div>

                            <input type="submit" value="Add image" class="btn btn-outline-success">
                        </form>

                        <form action="{{ route('aboutUs.store') }}" method="post" enctype=" multipart/form-data" class="mt-5">
                            @csrf
                            <div class="form-group">
                                <label>text about us</label>
                                <textarea class="form-control"rows="3" name="aboutUs"></textarea>
                                <input type="submit" value="Change text" class="btn btn-outline-success mt-2">
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
