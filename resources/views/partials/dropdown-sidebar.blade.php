<div class="">
    <div class="main-menu-header">
        <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
        <div class="user-details">
            <span>John Doe</span>
            <div id="more-details">UX Designer<i class="fa fa-chevron-down m-l-5"></i></div>
        </div>
    </div>
    <div class="collapse" id="nav-user-link">
        <ul class="list-unstyled">
            <li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
            <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
            <li class="list-group-item">
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" style="border: none; background: none; color: inherit; padding: 0; font: inherit; cursor: pointer;">
                        <i class="feather icon-log-out m-r-5"></i>Logout
                    </button>
                </form>
            </li>
            
        </ul>
    </div>
</div>