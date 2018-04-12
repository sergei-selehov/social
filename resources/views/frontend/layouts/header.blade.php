<!-- Header -->
<header id="header">
    <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index-register.html"><img src="images/logo.png" alt="logo" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main-menu">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span><img src="images/down-arrow.png" alt="" /></span></a>
                        <ul class="dropdown-menu newsfeed-home">
                            <li><a href="index.html">Landing Page 1</a></li>
                            <li><a href="index-register.html">Landing Page 2</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsfeed <span><img src="images/down-arrow.png" alt="" /></span></a>
                        <ul class="dropdown-menu newsfeed-home">
                            <li><a href="newsfeed.html">Newsfeed</a></li>
                            <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                            <li><a href="newsfeed-friends.html">My friends</a></li>
                            <li><a href="newsfeed-messages.html">Chatroom</a></li>
                            <li><a href="newsfeed-images.html">Images</a></li>
                            <li><a href="newsfeed-videos.html">Videos</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline <span><img src="images/down-arrow.png" alt="" /></span></a>
                        <ul class="dropdown-menu login">
                            <li><a href="timeline.html">Timeline</a></li>
                            <li><a href="timeline-about.html">Timeline About</a></li>
                            <li><a href="timeline-album.html">Timeline Album</a></li>
                            <li><a href="timeline-friends.html">Timeline Friends</a></li>
                            <li><a href="edit-profile-basic.html">Edit: Basic Info</a></li>
                            <li><a href="edit-profile-work-edu.html">Edit: Work</a></li>
                            <li><a href="edit-profile-interests.html">Edit: Interests</a></li>
                            <li><a href="edit-profile-settings.html">Account Settings</a></li>
                            <li><a href="edit-profile-password.html">Change Password</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Pages <span><img src="images/down-arrow.png" alt="" /></span></a>
                        <ul class="dropdown-menu page-list">
                            <li><a href="index.html">Landing Page 1</a></li>
                            <li><a href="index-register.html">Landing Page 2</a></li>
                            <li><a href="newsfeed.html">Newsfeed</a></li>
                            <li><a href="newsfeed-people-nearby.html">Poeple Nearly</a></li>
                            <li><a href="newsfeed-friends.html">My friends</a></li>
                            <li><a href="newsfeed-messages.html">Chatroom</a></li>
                            <li><a href="newsfeed-images.html">Images</a></li>
                            <li><a href="newsfeed-videos.html">Videos</a></li>
                            <li><a href="timeline.html">Timeline</a></li>
                            <li><a href="timeline-about.html">Timeline About</a></li>
                            <li><a href="timeline-album.html">Timeline Album</a></li>
                            <li><a href="timeline-friends.html">Timeline Friends</a></li>
                            <li><a href="edit-profile-basic.html">Edit Profile</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="contact.html">Contact</a></li>
                    @guest
                        <li class="dropdown"><a href="{{ route('login') }}">Login</a></li>
                        <li class="dropdown"><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                <li class="dropdown"><a href="/profile">My Profile</a></li>
                                <li class="dropdown"><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">Logout</a>
                                </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>
<!--Header End-->