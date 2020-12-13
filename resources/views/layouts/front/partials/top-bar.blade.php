<div id="topBar" class="dark">
    <div class="container">

        <!-- right -->
        <ul class="top-links list-inline pull-right">

            @guest
                <li class="hidden-xs"><a href="{{route('login')}}">ورود</a></li>
                <li class="hidden-xs"><a href="{{route('register')}}">ثبت نام</a></li>

            @else
                <li class="text-welcome hidden-xs">به مارکت خوش اومدی <strong>{{\Illuminate\Support\Facades\Auth::user()->first_name}}</strong></li>
                <li>
                    <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i
                            class="fa fa-user hidden-xs"></i> حساب من</a>
                    <ul class="dropdown-menu pull-right">
                        <li><a tabindex="-1" href="{{route('profile.dashboard')}}"><i class="fa fa-cog"></i>حساب کاربری</a></li>
                        <li><a tabindex="-1" href="{{route('profile.order.list')}}"><i class="fa fa-history"></i> تاریخپه سفارشات</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="#"><i class="fa fa-bookmark"></i> مورد علاقه های من</a></li>
                        <li><a tabindex="-1" href="#"><i class="fa fa-edit"></i> دیدگاه های من</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                    class="glyphicon glyphicon-off"></i> خروج</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </li>
            @endguest
        </ul>
    </div>
</div>
