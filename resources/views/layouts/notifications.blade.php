@if (count($errors) > 0)
<div class="error">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


@if(Session::has('message'))
{{ Session::get('message') }}

@endif