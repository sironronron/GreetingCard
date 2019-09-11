@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- Home Welcome -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h1>No one has greeted you yet!</h1>
                    <a href="#" class="btn btn-default m-t-20">Greet Your Friend!</a>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <!-- List of Users -->
    <section class="section">
        <div class="container">
            <h4 class="m-b-30">List of Users</h4>
            <list-of-users></list-of-users>
        </div>
    </section>

@endsection
