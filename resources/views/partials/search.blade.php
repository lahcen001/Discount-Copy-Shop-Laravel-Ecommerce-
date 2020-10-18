{{-- <form action="{{ route('products.search') }}" class="d-flex mr-3">
    <div class="form-group mb-0 mr-1">
        <input type="text" name="q" class="form-control" value="{{ request()->q ?? '' }}">
    </div>
    <button type="submit" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>
</form> --}}

<form action="{{ route('products.search') }}" class="search">
    <div class="input-group w-100">
        <input type="text" name="q" class="form-control" placeholder="Search" value="{{ request()->q ?? '' }}">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
<i class="fa fa-search"></i>
</button>
        </div>
    </div>
</form>
