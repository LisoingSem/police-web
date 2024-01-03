@extends('website::layouts.body')
@include('website::components.meta', [
'title' => '',
])

@section('content')
<content class="col-span-3 order-1 md:order-2 " style="display: none" id="loadedContent">
      @include('website::pages.arrested.content')
</content>
@endsection