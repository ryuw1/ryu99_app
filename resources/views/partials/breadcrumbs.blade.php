@unless ($breadcrumbs->isEmpty())
<style>
    .breadcrumb {
        display: flex;
    }
    .breadcrumb-item {
        list-style: none;
        margin-left: 20px;
    }
</style>
    <ol class="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)

            @if (!is_null($breadcrumb->url) && !$loop->last)
                <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}　></a></li>
            @else
                <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
            @endif

        @endforeach
    </ol>

@endunless