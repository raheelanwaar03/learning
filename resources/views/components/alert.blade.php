@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('message'))
<div class="alert alert-success media" role="alert">
    <i class="tio-done mt-1 mr-2"></i>
    <div class="media-body" role="alert">
        {{ session('message') }}
    </div>
</div>
@endif