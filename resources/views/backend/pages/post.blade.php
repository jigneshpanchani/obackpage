@extends("backend.layout.default")
@section('content')

<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-2">
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5"><strong>{{ (@$pagetitle) ? $pagetitle : 'Posts' }}</strong></h5>
        </div>
    </div>
</div>



<div class="bg-white p-1 rounded">
    <div class="p-6 font-bold">
        <table id="myData" class="table table-hover table-custom dataTable no-footer text-4xl" role="grid">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                    <th>LOCATION</th>
                    <th>CONTACT EMAIL</th>
                    <th>CITY</th>
                    <th>CATEGORY</th>
                    <th>SUB CATEGORY</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                    <td>{{ $post['id'] }}</td>
                    <td>{{ $post['title'] }}</td>
                    <td>{!! $post['description'] !!}</td>
                    <td>{{ $post['location'] }}</td>
                    <td>{{ $post['contact_email'] }}</td>
                    <td>{{ $post['city_name'] }}</td>
                    <td>{{ $post['category'] }}</td>
                    <td>{{ $post['sub_category'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

