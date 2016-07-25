@if(count($errors)>0)
    <div class="row">
        <div class="col-md-6">
            <ul>
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif