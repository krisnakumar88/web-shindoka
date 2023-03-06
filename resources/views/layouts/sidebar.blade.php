<div class="main-sidebar main-sidebar-sticky side-menu">
    <div class="sidemenu-logo">
        <a class="main-logo" href="/pages/index">
            <img src="{{ asset('/file/shindoka-logo.png') }}" width="50" height="50"
                class="header-brand-img desktop-logo" alt="logo">
            <img src="{{ asset('/file/shindoka-logo.png') }}" width="50" height="50"
                class="header-brand-img icon-logo" alt="logo">
            <img src="{{ asset('/file/shindoka-logo.png') }}" width="50" height="50"
                class="header-brand-img desktop-logo theme-logo" alt="logo">
            <img src="{{ asset('/file/shindoka-logo.png') }}" width="50" height="50"
                class="header-brand-img icon-logo theme-logo" alt="logo">
        </a>
    </div>
    <div class="main-sidebar-body">
        <ul class="nav">
            @can('isSuperadmin')
                <li class="nav-header"><span class="nav-label">Menu Utama</span></li>
                <li class="nav-item">
                    <a class="nav-link" href="/"><span class="shape1"></span><span class="shape2"></span><i
                            class="fa fa-clipboard sidemenu-icon"></i><span class="sidemenu-label">Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengda.index') }}"><span class="shape1"></span><span
                            class="shape2"></span><i class="fa fa-city sidemenu-icon"></i><span class="sidemenu-label">Pengurus
                            Daerah</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pengcab.index') }}"><span class="shape1"></span><span
                            class="shape2"></span><i class="fa fa-layer-group sidemenu-icon"></i><span class="sidemenu-label">Pengurus
                            Cabang</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dojo.index') }}"><span class="shape1"></span><span
                            class="shape2"></span><i class="fa fa-home sidemenu-icon"></i><span
                            class="sidemenu-label">Dojo</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('anggota.index') }}"><span class="shape1"></span><span class="shape2"></span><i
                            class="fa fa-users sidemenu-icon"></i><span class="sidemenu-label">Anggota</span></a>
                </li>


                <li class="nav-header"><span class="nav-label">Akses</span></li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('superadmin.index') }}"><span class="shape1"></span><span class="shape2"></span><i
                            class="fa fa-user-tie sidemenu-icon"></i><span class="sidemenu-label">Superadmin</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.index') }}"><span class="shape1"></span><span class="shape2"></span><i
                            class="fa fa-user sidemenu-icon"></i><span class="sidemenu-label">Admin</span></a>
                </li>
                
            @elsecan('isAdmin')
                <li class="nav-header"><span class="nav-label">Menu Utama</span></li>
                <li class="nav-item">
                    <a class="nav-link" href="/"><span class="shape1"></span><span class="shape2"></span><i
                            class="ti-home sidemenu-icon"></i><span class="sidemenu-label">Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('anggota.index') }}"><span class="shape1"></span><span class="shape2"></span><i
                            class="fa fa-users sidemenu-icon"></i><span class="sidemenu-label">Anggota</span></a>
                </li>

            @else
            <li class="nav-header"><span class="nav-label">Menu Utama</span></li>
                <li class="nav-item">
                    <a class="nav-link" href="/"><span class="shape1"></span><span class="shape2"></span><i
                            class="ti-home sidemenu-icon"></i><span class="sidemenu-label">Dashboard</span></a>
                </li>
            @endcan



            {{-- <li class="nav-item">
                <a class="nav-link" href="/pages/index"><span class="shape1"></span><span
                        class="shape2"></span><i class="ti-home sidemenu-icon"></i><span
                        class="sidemenu-label"></span></a>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                        class="shape2"></span><i class="ti-layout sidemenu-icon"></i><span
                        class="sidemenu-label">Layouts</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link with-sub" href="#"></span><span
                                class="sidemenu-label">Horizontal</span><i
                                class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/horizontallight">Light</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/horizontaldark">Dark</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/horizontal-light-boxed">Light-Boxed</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/horizontal-dark-boxed">Dark-Boxed</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link with-sub" href="#"></span><span
                                class="sidemenu-label">Horizontal-Centerlogo</span><i
                                class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/horizontal-light-centerlogo">Light</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/horizontal-dark-centerlogo">Dark</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link"
                                    href="/pages/horizontal-light-center-logo-boxed">Light-Boxed</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link"
                                    href="/pages/horizontal-dark-center-logo-boxed">Dark-Boxed</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link with-sub" href="#"></span><span
                                class="sidemenu-label">Sidemenu-Icon</span><i
                                class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/sidemenu-light">Light</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/sidemenu-dark">Dark</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/sidemenu-light-boxed">Light-Boxed</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/sidemenu-dark-boxed">Dark-Boxed</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link with-sub" href="#"></span><span
                                class="sidemenu-label">Sidemenu-Closed</span><i
                                class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/sidemenu-light-closed">Light</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/sidemenu-dark-closed">Dark</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link"
                                    href="/pages/sidemenu-light-closed-boxed">Light-Boxed</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link"
                                    href="/pages/sidemenu-dark-closed-boxed">Dark-Boxed</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link with-sub" href="#"></span><span
                                class="sidemenu-label">Sidemenu-Toggle</span><i
                                class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/sidemenu-toggle-light-sidebar">Light</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link"
                                    href="/pages/sidemenu-toggle-light-sidebar-dark">Dark</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link"
                                    href="/pages/sidemenu-toggle-light-sidebar-boxed">Light-Boxed</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link"
                                    href="/pages/sidemenu-toggle-light-sidebar-dark-boxed">Dark-Boxed</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link with-sub" href="#"></span><span
                                class="sidemenu-label">Sidemenu-Icontext</span><i
                                class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/sidemenu-icontext">Light</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/sidemenu-icontext-dark">Dark</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/sidemenu-icontext-boxed">Light-Boxed</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link"
                                    href="/pages/sidemenu-icontext-dark-boxed">Dark-Boxed</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link with-sub" href="#"></span><span
                                class="sidemenu-label">Sidemenu-Iconoverlay</span><i
                                class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/sidemenu-light-icon-overlay">Light</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link"
                                    href="/pages/sidemenu-light-icon-overlay-dark">Dark</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link"
                                    href="/pages/sidemenu-light-icon-overlay-boxed">Light-Boxed</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link"
                                    href="/pages/sidemenu-light-icon-overlay-dark-boxed">Dark-Boxed</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link with-sub" href="#"></span><span
                                class="sidemenu-label">Menu-hoversubmenu</span><i
                                class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/sidemenu-hoversubmenu">Light</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/sidemenu-hoversubmenu-dark">Dark</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link"
                                    href="/pages/sidemenu-hoversubmenu-boxed">Light-Boxed</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link"
                                    href="/pages/sidemenu-hoversubmenu-dark-boxed">Dark-Boxed</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link with-sub" href="#"></span><span
                                class="sidemenu-label">Menu-hoversubmenu-1</span><i
                                class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="/pages/sidemenu-hoversubmenu-style-1">Light</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link"
                                    href="/pages/sidemenu-hoversubmenu-style-1-dark">Dark</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link"
                                    href="/pages/sidemenu-hoversubmenu-style-1-boxed">Light-Boxed</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link"
                                    href="/pages/sidemenu-hoversubmenu-style-1-dark-boxed">Dark-Boxed</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                        class="shape2"></span><i class="ti-wallet sidemenu-icon"></i><span
                        class="sidemenu-label">Crypto Currencies</span><i
                        class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/crypto-dashbaord">Dashboard</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/crypto-market">Marketcap</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/crypto-currency-exchange">Currency exchange</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/crypto-buy-sell">Buy & Sell</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/crypto-wallet">Wallet</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/crypto-transcations">Transcations</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                        class="shape2"></span><i class="ti-shopping-cart-full sidemenu-icon"></i><span
                        class="sidemenu-label">E-Commerce</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/ecommerce-dashboard">Dashboard</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/ecommerce-products">Products</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/ecommerce-product-details">Product Details</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/ecommerce-cart">Cart</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/ecommerce-checkout">Checkout</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/ecommerce-orders">Orders</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/ecommerce-account">Account</a>
                    </li>
                </ul>
            </li>
            <li class="nav-header"><span class="nav-label">Applications</span></li>
            <li class="nav-item">
                <a class="nav-link" href="/pages/widgets"><span class="shape1"></span><span
                        class="shape2"></span><i class="ti-server sidemenu-icon"></i><span
                        class="sidemenu-label">Widgets</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                        class="shape2"></span><i class="ti-email sidemenu-icon"></i><span
                        class="sidemenu-label">Mail</span><span
                        class="badge badge-warning side-badge">2</span></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/mail-inbox">Mail-Inbox</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/viewmail">View-Mail</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                        class="shape2"></span><i class="ti-write sidemenu-icon"></i><span
                        class="sidemenu-label">Apps</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/chat">Chat</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/cards">Cards</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/calendar">Calendar</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/contacts">Contacts</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                        class="shape2"></span><i class="ti-face-smile sidemenu-icon"></i><span
                        class="sidemenu-label">Icons</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/icons1">Font Awesome</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/icons2">Material Design Icons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/icons3">Simple Line Icons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/icons4">Feather Icons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/icons5">Ionic Icons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/icons6">Flag Icons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/icons7">Pe7 Icons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/icons8">Themify Icons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/icons9">Typicons Icons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/icons10">Weather Icons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/icons11">Material Icons</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                        class="shape2"></span><i class="ti-map-alt sidemenu-icon"></i><span
                        class="sidemenu-label">Maps</span><span
                        class="badge badge-secondary side-badge">2</span></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/map-mapel">Mapel Maps</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/map-vector">Vector Maps</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                        class="shape2"></span><i class="ti-agenda sidemenu-icon"></i><span
                        class="sidemenu-label">Tables</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/table-basic">Basic Tables</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/table-data">Data Tables</a>
                    </li>
                </ul>
            </li>
            <li class="nav-header"><span class="nav-label">Components</span></li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                        class="shape2"></span><i class="ti-package sidemenu-icon"></i><span
                        class="sidemenu-label">Elements</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/alerts">Alerts</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/avatar">Avatar</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/breadcrumbs">Breadcrumbs</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/buttons">Buttons</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/badge">Badge</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/dropdown">Dropdown</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/thumbnails">Thumbnails</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/list-group">List Group</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/navigation">Navigation</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/pagination">Pagination</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/popover">Popover</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/progress">Progress</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/spinners">Spinners</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/media-object">Media Object</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/typography">Typography</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/tooltip">Tooltip</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/toast">Toast</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/tags">Tags</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                        class="shape2"></span><i class="ti-briefcase sidemenu-icon"></i><span
                        class="sidemenu-label">Advanced UI</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/accordion">Accordion</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/carousel">Carousel</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/collapse">Collapse</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/modals">Modals</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/timeline">Timeline</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/draggablecard">Draggable-Cards</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/sweet-alert">Sweet Alert</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/rating">Ratings</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/search">Search</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/userlist">Userlist</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/blog">Blog</a>
                    </li>
                </ul>
            </li>
            <li class="nav-header"><span class="nav-label">Forms &amp; Charts</span></li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                        class="shape2"></span><i class="ti-receipt sidemenu-icon"></i><span
                        class="sidemenu-label">Forms</span><span
                        class="badge badge-info side-badge">6</span></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/form-elements">Form Elements</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/form-advanced">Advanced Forms</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/form-layouts">Form Layouts</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/form-validation">Form Validation</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/form-wizards">Form Wizards</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/form-editor">WYSIWYG Editor</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                        class="shape2"></span><i class="ti-bar-chart-alt sidemenu-icon"></i><span
                        class="sidemenu-label">Charts</span><span
                        class="badge badge-danger side-badge">5</span></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/chart-morris">Morris Charts</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/chart-flot">Flot Charts</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/chart-chartjs">ChartJS</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/chart-spark-peity">Sparkline &amp; Peity</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/chart-echart">Echart</a>
                    </li>
                </ul>
            </li>
            <li class="nav-header"><span class="nav-label">Other Pages</span></li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                        class="shape2"></span><i class="ti-palette sidemenu-icon"></i><span
                        class="sidemenu-label ">Pages</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/profile">Profile</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/invoice">Invoice</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/pricing">Pricing</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/gallery">Gallery</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/faq">Faqs</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/success-message">Success Message</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/danger-message">Danger Message</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/warning-message">Warning Message</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/empty">Empty Page</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                        class="shape2"></span><i class="ti-shield sidemenu-icon"></i><span
                        class="sidemenu-label">Utilities</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/background">Background</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/border">Border</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/display">Display</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/flex">Flex</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/height">Height</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/margin">Margin</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/padding">Padding</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/position">Position</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/width">Width</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/extras">Extras</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                        class="shape2"></span><i class="ti-lock sidemenu-icon"></i><span
                        class="sidemenu-label">Custom Pages</span><i
                        class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/signin">Sign In</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/signup">Sign Up</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/forgot">Forgot Password</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/reset">Reset Password</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/lockscreen">Lockscreen</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/underconstruction">UnderConstruction</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/error-404">404 Error</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="/pages/error-500">500 Error</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><span class="shape1"></span><span
                        class="shape2"></span><i class="ti-menu sidemenu-icon"></i><span
                        class="sidemenu-label">Submenu</span><i class="angle fe fe-chevron-right"></i></a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a class="nav-sub-link" href="#">Submenu-01</a>
                    </li>
                    <li class="nav-sub-item">
                        <a class="nav-sub-link with-sub" href="#"></span><span
                                class="sidemenu-label">Submenu-02</span><i
                                class="angle fe fe-chevron-right"></i></a>
                        <ul class="nav-sub">
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="#">Level-01</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link with-sub" href="#"></span><span
                                        class="sidemenu-label">level-02</span><i
                                        class="angle fe fe-chevron-right"></i></a>
                                <ul class="nav-sub">
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="#">Submenu-01</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="#">Submenu-02</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li> --}}
        </ul>
    </div>
</div>
