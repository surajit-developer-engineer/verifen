<div class="msg-div">
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <ul>
                    <li>{{ Str::title($error) }}</li>
            @endforeach
            </ul>
        </div>
    @endif
</div>
