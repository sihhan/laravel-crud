@extends('students.templates.master')

@section('content')
    
    <h2>CRUD DEMO</h2>
    <hr>
    <a class="waves-effect waves-light btn blue" href="{{ url('/') }}">Read Data</a>

    <div class="row">

        <form action="" method="post" class="col s12">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s6">
                    <input id="name" name="student" type="text" class="validate">
                    <label for="name">Name</label>
                </div>

                <div class="input-field col s6">
                    <input id="email" name="email" type="text" class="validate">
                    <label for="email">Email</label>
                </div>

                <div class="input-field col s6">
                    <input id="facebook" name="facebook" type="text" class="validate">
                    <label for="facebook">Facebook</label>
                </div>

                <div class="input-field col s6">
                    <input id="mobile" name="mobile" type="text" class="validate">
                    <label for="mobile">Mobile</label>
                </div>
            </div>

            <button type="submit" class="btn waves-effect waves-light">Submint</button>

        </form>
    </div>
@endsection