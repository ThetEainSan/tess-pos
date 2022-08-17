<div class=" container-web relative">
    <div class=" container">
        <div class="row">
            <div class=" header-top">
                <p class="contact_us_header col-md-4 col-xs-12 col-sm-3 clear-margin text-info" style="color: rgb(168, 49, 49)">
                    Be Safe. Please wear masks during your working hour.
                </p>
                <div class="menu-header-top text-right col-md-8 col-xs-12 col-sm-6 clear-padding">
                    <ul class="clear-margin">
                        
                        <li class="relative">
                            <a href="#">{{ Auth::user()->name }}</a>
                            <ul>
                                <li onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="relative" style="cursor: pointer">Logout</li>
                            </ul>                          
                        </li>                      
                    </ul>                   
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        <div class="row">
            <div class="clearfix header-content full-width relative">
                <div class="clearfix icon-menu-bar">
                    <i class="data-icon data-icon-arrows icon-arrows-hamburger-2 icon-pushmenu js-push-menu"></i>
                </div>
                <div class="clearfix img-fluid">
                    <a href="{{ route('home') }}">
                        <img alt="Logo" src="{{ asset('img/logo/tess-vertical.png') }}" height="90%" width="80%"/>
                    </a>
                    @php
                        $cart = App\Models\Cart::where('status','in')->first();
                    @endphp
                    @if ($cart != null)
                        <a href="{{ route('checkout') }}">
                            <button class="btn btn-warning">Checkout</button>
                        </a>
                    @else
                        <a href="{{ route('checkout') }}">
                            <button class="btn btn-warning" style="display: none;">Checkout</button>
                        </a>
                    @endif                   
                </div>
            </div>
        </div>
        
    </div>
</div>