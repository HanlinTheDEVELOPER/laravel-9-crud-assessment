@extends('Layout.app')

@section('body')
    <div class="w-screen px-20 py-3">
        <div class="w-full bg-green-500 py-2 text-center text-white text-3xl rounded mb-3">Employee List</div>
        <table class="table table-success table-striped rounded">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Job</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">Age</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->lastName }}</td>
                        <td>{{ $employee->job }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>{{ $employee->age }}</td>
                        <td>
                            <a class="btn btn-primary rounded" href={{ url('/update/' . $employee->id) }}>Edit</a>
                            <a class="btn btn-danger rounded" href={{ url('/delete/' . $employee->id) }}>Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn bg-green-500 text-white text-xl" href={{ url('/create') }}>Add Employee</a>
    </div>
@endsection
