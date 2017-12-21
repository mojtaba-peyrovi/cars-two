<div class="row">
    <section class="header">
        <header class="header-wrapper">
            <div class="header-top">
                <div class="row">
                    <div class="col-md-3 col-xs-12 col-sm-2">
                        <div class="logo">
                            <a title="Steellex" href="{{ route('home') }}">
                                <img src="{{ URL::asset('/img/main-logo.png') }}" alt="Steellex">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-5">
                    <div class="location">

                            <p>8901 Marmora Road <br>
                            Glasgow, DO4 89GR.</p>
                        </div>

                    </div>
                    <div class="col-md-2 col-sm-4">
                        <div class="phone">
                            <p>Call us!</p>
                            <strong>1-800-987-654</strong>
                        </div>
                    </div>

                </div>
            </div>
            <div class="main-nav-bar">
                    <div class="navbar">
                        <div class="navbar-header navbar-right pull-left">
                            <!-- offcanvas-trigger-effects -->
                            <div id="offcanvas-trigger-effects" class="offcanvas">
                                <button type="button" class="navbar-toggle visible-xs" data-toggle="offcanvas"
                                        data-target=".navbar-collapse" data-placement="left" data-effect="offcanvas-effect">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                            <!-- offcanvas-trigger-effects -->
                        </div>

                        <!-- navbar-collapse -->
                        <nav role="navigation" class="collapse navbar-collapse navbar main-nav">
                            <ul class="nav navbar-nav navbar-left">
                              <li><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                              <li><a href="{{ route('create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add a Car</a></li>
                              <li class="dropdown"><a href="service.html">Services</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="tanks.html">Tanks</a></li>
                                        <li><a href="stacks.html">Stacks</a></li>
                                        <li><a href="duct.html">Ducting</a></li>
                                        <li><a href="pipe.html">Pipe</a></li>
                                        <li><a href="angle.html">Steel Angels</a></li>
                                        <li><a href="beam.html">Steel Beams</a></li>
                                    </ul>
                                </li>

                              <li><a href="contact.html"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contact Us</a></li>
                              <li><a href="{{ route('cars') }}"><i class="fa fa-car" aria-hidden="true"></i> Cars</a></li>
                              <li><a href="{{ route('login') }}"><i class="fa fa-key" aria-hidden="true"></i> Login</a></li>




                            </ul>
                            <!-- /navbar-nav -->

                            <div class="navbar-right">
                                <div class="header-search">
                                    <form>
                                       <input type="search" name="search" placeholder="Search">
                                       <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>

                                </div>
                            </div>
                        </nav>
                        <!-- /navbar-collapse -->
                    </div>
                    <!-- /navbar -->
            </div>
            <!-- .main-nav-bar -->
        </header>
    </section>
    <!--End .header -->
</div>
