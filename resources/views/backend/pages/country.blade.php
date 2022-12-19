@extends("backend.layout.default")
@section('content')


<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-2">
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5"><strong>{{ (@$pagetitle) ? $pagetitle : 'Country' }}</strong></h5>
        </div>
    </div>
</div>

<div class="bg-white p-1 rounded">
    <div class="p-6 font-bold">
        <table id="myData" class="table table-hover table-custom dataTable no-footer" role="grid">
            <thead>
                <tr>
                    <th><strong>ID</strong></th>
                    <th><strong>COUNTRY NAME</strong></th>
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