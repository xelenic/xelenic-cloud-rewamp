@extends('backend.project.components.layout')
@section('project_content')

    @push('breadcrumb')
        <li class="breadcrumb-item"><a href="#" style="text-decoration: unset;">Create Bucket Server</a></li></li>
    @endpush
    <div class="tab-content" id="myTabContent">
        @include('backend.project.bucket_server.tab')
    </div>

@endsection



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.min.js"></script>

