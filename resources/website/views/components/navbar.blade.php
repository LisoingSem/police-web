<?php
$route_name = request()->route()->getName();
$route_name = explode('.', $route_name);
$route_prefix = $route_name[0];
?>

<ul class="lg:grid lg:grid-cols-7 nav-master">
      <li @class(['active'=> !!Request::is('/'),
            ])><a href="{{ route('homepage') }}"><i class="fa-solid fa-house"></i>
                  @lang('website.navbar.home')</a></li>
      <li id="open-menu" @class(['active'=> !!Request::is('about-us/*'),
            ])><a href="#"><i class="fa-solid fa-circle-info"></i> @lang('website.navbar.about-us.name') <i
                        class="fa-solid fa-caret-down change-direction"></i></a>
            <ul class="drop-menu">
                  <li @class(['active'=> !!Request::is('about-us/leader'),])><a href="{{ route('about.leader') }}"><i class="fa-regular fa-circle-dot"></i>
                              @lang('website.navbar.about-us.leader')</a>
                  </li>
                  <li @class(['active'=> !!Request::is('about-us/structure'),])><a href="{{ route('about.structure') }}"><i class="fa-regular fa-circle-dot"></i>
                              @lang('website.navbar.about-us.structure')</a></li>
            </ul>
      </li>
      <li @class(['active'=> !!Request::is('contact'),])><a href="{{ route('contact') }}"><i class="fa-solid fa-phone"></i> @lang('website.navbar.contact')</a></li>
      <li @class(['active'=> !!Request::is('law'),])><a href="{{ route('law') }}"><i class="fa-solid fa-scale-balanced"></i> @lang('website.navbar.law')</a></li>
      <li @class(['active'=> !!Request::is('arrested'),])><a href="{{ route('arrested') }}"><i class="fa-solid fa-handcuffs"></i> @lang('website.navbar.arreste')</a></li>
      <li @class(['active'=> !!Request::is('career'),])><a href="{{route('career')}}"><i class="fa-solid fa-briefcase"></i> @lang('website.navbar.job')</a></li>
      <li @class(['active'=> !!Request::is('download'),])><a href="{{route('download')}}"><i class="fa-solid fa-cloud-arrow-down"></i> @lang('website.navbar.download')</a></li>
</ul>