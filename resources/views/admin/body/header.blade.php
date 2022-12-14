<header class="main-header bg-white d-flex justify-content-between p-2">
    <div class="header-toggle">
        <div class="menu-toggle mobile-menu-icon">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <i class="fa-solid fa-id-card mr-3 text-20 cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Todo"></i>
        <i class="fa-solid fa-comment-dots mr-3 text-20 cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat"></i>
        <i class="fa-solid fa-envelope mr-3 text-20 mobile-hide cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Inbox"></i>
        <i class="fa-solid fa-calendar-days mr-3 mobile-hide text-20 cursor-pointer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Calendar"></i>
    </div>
    <div class="header-part-right">
        <!-- Full screen toggle--><i class="fa-solid fa-arrows-up-down-left-right header-icon d-none d-sm-inline-block" data-fullscreen=""></i>
        <!-- Grid menu Dropdown-->
        <div class="dropdown dropleft"><i class="fa-solid fa-ellipsis text-muted header-icon" id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="menu-icon-grid">
                        <a href="/" target="blank">
                            <i class="fa-solid fa-house"></i> Home
                        </a>
                    
                        <a href="{{ route('user.logout')}}">
                            <i class="fa-solid fa-right-from-bracket"></i> Logout
                        </a>
                       
                    </div>
            </div>
        </div>
    </div>
</header>