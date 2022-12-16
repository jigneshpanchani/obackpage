@extends("backend.layout.default")
@section('content')

<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-2">
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">{{ (@$pagetitle) ? $pagetitle : 'Users' }}</h5>
        </div>
        {{-- <button class="adddivision btn btn-primary font-weight-bolder btn-sm justify-end">Add Division</button> --}}
    </div>
</div>

<div class="bg-white p-1 rounded">
    <div class="p-6">
        <table id="myData" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection