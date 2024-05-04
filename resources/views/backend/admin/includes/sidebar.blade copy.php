<aside class="app-sidebar" id="sidebar">
    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
      <a href="{{ route('admin.dashboard') }}" class="header-logo">
        <img
          src="{{asset('contents/backend/admin')}}/assets/images/desktop-logo.png"
          alt="logo"
          class="desktop-logo"
        />
        <img
          src="{{asset('contents/backend/admin')}}/assets/images/toggle-logo.png"
          alt="logo"
          class="toggle-logo"
        />

      </a>
    </div>
    <!-- End::main-sidebar-header -->
    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll" data-simplebar="init">
      <div class="simplebar-wrapper" style="margin: -8px 0px -80px">
        <div class="simplebar-height-auto-observer-wrapper">
          <div class="simplebar-height-auto-observer"></div>
        </div>
        <div class="simplebar-mask">
          <div class="simplebar-offset" style="right: 0px; bottom: 0px">
            <div
              class="simplebar-content-wrapper"
              tabindex="0"
              role="region"
              aria-label="scrollable content"
              style="height: 100%; overflow: hidden scroll"
            >
              <div class="simplebar-content" style="padding: 8px 0px 80px">
                <!-- Start::nav -->
                <nav
                  class="main-menu-container nav nav-pills flex-column sub-open open active"
                >
                  <div class="slide-left active d-none" id="slide-left">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="#7b8191"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"
                      ></path>
                    </svg>
                  </div>
                  <ul
                    class="main-menu"
                    style="
                      display: block;
                      margin-left: 0px;
                      margin-right: 0px;
                    "
                  >

                    <!-- End::slide__category -->
                    <!-- Start::slide -->
                    <li class="slide active">
                        <a href="{{ route('admin.dashboard') }}" class="side-menu__item active">
                          <span class="side-menu__icon">
                            <i class="bx bx-desktop"></i>
                          </span>
                          <span class="side-menu__label">Dashboard</span>
                        </a>
                      </li>
                      <li class="slide active">
                        <a href="#" class="side-menu__item">
                            {{-- {{ route('admin.brand.index') }} --}}
                          <span class="side-menu__icon">
                            <i class="bx bx-desktop"></i>
                          </span>
                          <span class="side-menu__label">Brands</span>
                        </a>
                      </li>

                    {{-- <li class="slide has-sub">
                      <a href="javascript:void(0);" class="side-menu__item">
                        <span class="side-menu__icon">
                          <i class="bx bx-cube"></i>
                        </span>
                        <span class="side-menu__label">Brand</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                      </a>
                      <ul
                        class="slide-menu child1"
                        style="
                          position: relative;
                          left: 0px;
                          top: 0px;
                          margin: 0px;
                          transform: translate(136.25px, 642.5px);
                        "
                        data-popper-placement="top"
                        data-popper-reference-hidden=""
                        data-popper-escaped=""
                      >
                        <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Advanced Ui</a>
                        </li>
                        <li class="slide">
                          <a
                            href="accordions_collpase.html"
                            class="side-menu__item"
                            >Accordions &amp; Collapse</a
                          >
                        </li>
                        <li class="slide">
                          <a href="carousel.html" class="side-menu__item"
                            >Carousel</a
                          >
                        </li>
                        <li class="slide">
                          <a
                            href="draggable-cards.html"
                            class="side-menu__item"
                            >Draggable Cards</a
                          >
                        </li>
                        <li class="slide">
                          <a
                            href="modals_closes.html"
                            class="side-menu__item"
                            >Modals &amp; Closes</a
                          >
                        </li>
                        <li class="slide">
                          <a href="navbar.html" class="side-menu__item"
                            >Navbar</a
                          >
                        </li>
                        <li class="slide">
                          <a href="offcanvas.html" class="side-menu__item"
                            >Offcanvas</a
                          >
                        </li>
                        <li class="slide">
                          <a
                            href="placeholders.html"
                            class="side-menu__item"
                            >Placeholders</a
                          >
                        </li>
                        <li class="slide">
                          <a href="ratings.html" class="side-menu__item"
                            >Ratings</a
                          >
                        </li>
                        <li class="slide">
                          <a href="scrollspy.html" class="side-menu__item"
                            >Scrollspy</a
                          >
                        </li>
                        <li class="slide">
                          <a href="swiperjs.html" class="side-menu__item"
                            >Swiper JS</a
                          >
                        </li>
                      </ul>
                    </li> --}}


                    <!-- End::slide -->
                    <!-- Start::slide -->

                      <li class="slide active">
                        <a href="{{ route('companyProfile') }}" class="side-menu__item">
                          <span class="side-menu__icon">
                            <i class="bx bx-desktop"></i>
                          </span>
                          <span class="side-menu__label">companyProfile</span>
                        </a>
                      </li>


                    <!-- End::slide -->
                    <!-- Start::slide -->
                    <li class="slide has-sub">
                      <a href="javascript:void(0);" class="side-menu__item">
                        <span class="side-menu__icon">
                          <i class="bx bx-menu"></i>
                        </span>
                        <span class="side-menu__label">Nested Menu</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                      </a>
                      <ul
                        class="slide-menu child1"
                        style="
                          position: relative;
                          left: 0px;
                          top: 0px;
                          margin: 0px;
                          transform: translate(136.25px, 1128.75px);
                        "
                        data-popper-reference-hidden=""
                        data-popper-escaped=""
                        data-popper-placement="top"
                      >
                        <li class="slide side-menu__label1">
                          <a href="javascript:void(0)">Nested Menu</a>
                        </li>
                        <li class="slide">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >Nested-1</a
                          >
                        </li>
                        <li class="slide has-sub">
                          <a
                            href="javascript:void(0);"
                            class="side-menu__item"
                            >Nested-2
                            <i
                              class="fe fe-chevron-right side-menu__angle"
                            ></i
                          ></a>
                          <ul class="slide-menu child2">
                            <li class="slide">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Nested-2-1</a
                              >
                            </li>

                          </ul>
                        </li>
                      </ul>
                    </li>


                    <!-- End::slide -->
                  </ul>
                  <div class="slide-right d-none" id="slide-right">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      fill="#7b8191"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"
                      ></path>
                    </svg>
                  </div>
                </nav>
                <!-- End::nav -->
              </div>
            </div>
          </div>
        </div>
        <div
          class="simplebar-placeholder"
          style="width: auto; height: 1462px"
        ></div>
      </div>
      <div
        class="simplebar-track simplebar-horizontal"
        style="visibility: hidden"
      >
        <div
          class="simplebar-scrollbar"
          style="
            width: 0px;
            transform: translate3d(0px, 0px, 0px);
            display: none;
          "
        ></div>
      </div>
      <div
        class="simplebar-track simplebar-vertical"
        style="visibility: visible"
      >
        <div
          class="simplebar-scrollbar"
          style="
            height: 25px;
            transform: translate3d(0px, 0px, 0px);
            display: block;
          "
        ></div>
      </div>
    </div>
    <!-- End::main-sidebar -->
  </aside>
