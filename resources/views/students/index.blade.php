@extends('students.templates.master')

@section('content')
    <h2>CRUD DEMO</h2>
    <hr>
    <a class="waves-effect waves-light btn blue" href="">Create New</a>
    <div>
        <p class="card-panel teal lighten-2">Data added successfully</p>
    </div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Facebook</th>
                <th>Mobile</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($students as $student)
                <tr>
                    {{-- 使用 $loop->iteration 當前迴圈迭代數（從1開始） --}}
                    <td> {{ $loop->iteration }} </td>
                    <td> {{ $student->name }} </td>
                    <td> {{ $student->email }} </td>
                    <td> {{ $student->fb }} </td>
                    <td> {{ $student->mobile }} </td>
                    <td>
                        <a class="waves-effect waves-light btn" href="">Edit</a>
                        <a class="waves-effect waves-light btn red lighten-1" href="">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>
@endsection