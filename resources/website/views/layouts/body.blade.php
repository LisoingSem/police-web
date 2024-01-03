@extends('website::app')
@section('body')

@include('website::layouts.header')
@include('website::layouts.navbar')
@include('website::components.text-runner')
@include('website::components.slider')
@include('website::components.advertisement')

<main class="container-lg max-w-screen-xl mx-auto grid md:grid-cols-4 grid-cols-1 md:gap-3">
      @include('website::layouts.sidebar')
      @yield('content')

      <content class="col-span-3 order-1 md:order-2" id="loadingContent">
            <div id="loadingIndicator">
                  <div class="sk-wave">
                        <div class="sk-rect sk-rect-1"></div>
                        <div class="sk-rect sk-rect-2"></div>
                        <div class="sk-rect sk-rect-3"></div>
                        <div class="sk-rect sk-rect-4"></div>
                        <div class="sk-rect sk-rect-5"></div>
                  </div>
                  <span>កំពុងទាញយកទិន្នន័យ...</span>
            </div>
      </content>
</main>
@include('website::layouts.footer')


@endsection