@extends($template->hintpath.'::templates.' . $template->slug . '.layouts.base')

@section('title')
    {{ $page->title }}
@endsection

@section('meta')

@endsection

@section('css')

@endsection

@section('scripts')

@endsection

@section('content')

            <div class="breadcrumb-style-two gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="breadcrumb-content">
                                <h2 class="page-cat">{{ $page->title }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
	<br>
    @if($pageblocks !== null)
        @foreach($pageblocks as $pageblock)
            {!! $pageblock['body'] !!}
        @endforeach
    @endif
@endsection