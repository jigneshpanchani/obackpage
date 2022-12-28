@extends("backend.layout.default")
@section('content')

<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-2">
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5"><strong>{{ (@$pagetitle) ? $pagetitle : 'Users' }}</strong></h5>
        </div>
        {{-- <button class="adddivision btn btn-primary font-weight-bolder btn-sm justify-end">Add Division</button> --}}
    </div>
</div>

<div class="bg-white p-1 rounded">
    <div class="p-6 font-bold">
        <table id="myData" class="table table-hover table-custom dataTable no-footer text-4xl" role="grid">
            <thead>
                <tr>
                    <th><strong>ID</strong></th>
                    <th><strong>NAME</strong></th>
                    <th><strong>EMAIL</strong></th>
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

