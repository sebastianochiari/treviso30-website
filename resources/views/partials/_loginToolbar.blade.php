<div id="LoggedInToolbar">

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <div class="float-left">
                Ciao {{ Auth::user()->name }}
            </div>
            <div class="float-right">
                <ul class="navbar-nav">
                    <li class="m-1" style="text-align: right">
                        <a href="/posts/create">
                            <button class="btn btn-dark btn-sm">
                                area riservata
                            </button>
                        </a>
                    </li>
                    <li class="m-1" style="text-align: right">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-dark btn-sm">
                                {{ __('logout') }}
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>
