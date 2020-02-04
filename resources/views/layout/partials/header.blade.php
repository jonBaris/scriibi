<nav class="row nav-header pt-2 pb-2" id="main-nav">
    <div class="d-none d-sm-block col-sm-1 col-md-2"></div>
    <!-- Navbar content -->
    <div class="d-inline-block col-12 col-sm-10 col-md-8 pt-2 pb-2">
        <ul class="nav-header-menu">
            <li><a class="nav-logo" href="/"><img class="logo" src="https://www.scriibi.com/wp-content/uploads/2018/04/scriibi-logo-tight-e1525256307991.png" alt="Scriibi Logo" /></a></li>
            <li><a href="/">HOME</a></li>
            <li><a href="/assessment-list">ASSESSMENT</a></li>
            <li><a href="https://writing.scriibi.com/search-lessons/">LESSONS</a></li>

            @if (Route::has('login'))
                @auth
                <li class="float-right"><a href="{{ route('logout') }}">LOG OUT</a></li>
                @else
                <li class="float-right"><a href="{{ route('logout') }}">LOG IN</a></li>
                @endauth
            @endif
        </ul>
    </div>
    <!-- /navbar content -->
    <div class="d-none d-sm-block col-sm-1 col-md-2"></div>
</nav>
<div class="row error-container" id="error-pop-up">
    <div class="d-none d-sm-block col-sm-1 col-md-2"></div>
    <div class="d-none d-sm-block col-sm-10 col-md-8">
        <div class="error-content pl-3 pr-3">
            <span><strong>Error in submitting form:</strong></span>
            <button type="button" id="error-close" class="error-close"><strong>X</strong></button>
            <ul>
                <li>who the hell name humphrey lmao</li>
                <li>imagine being named humphrey bruh get outta here with that s word</li>
                <li>A man has fallen into the river in LEGO&trade; City!</li>
            </ul>
        </div>
    </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2"></div>
</div>
