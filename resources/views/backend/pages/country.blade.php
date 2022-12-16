@extends("backend.layout.default")
@section('content')


<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-2">
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">{{ (@$pagetitle) ? $pagetitle : 'Country' }}</h5>
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
                    <th>COUNTRY NAME</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($continent as $continent)
                    <tr>
                    <td>{{ $continent['id'] }}</td>
                    <td>{{ $continent['continent'] }}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection