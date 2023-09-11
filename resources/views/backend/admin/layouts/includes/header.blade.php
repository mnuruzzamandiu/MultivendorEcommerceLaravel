<header class="app-header">
    <!-- Start::main-header-container -->
    <div class="main-header-container container-fluid">
      <!-- Start::header-content-left -->
      <div class="header-content-left">
        <!-- Start::header-element -->
        <div class="header-element">
          <div class="horizontal-logo">
            <a href="index.html" class="header-logo">
              <img
                src="{{asset('contents/backend/admin')}}/assets/images/brand-logos/desktop-logo.png"
                alt="logo"
                class="desktop-logo"
              />
              <img
                src="{{asset('contents/backend/admin')}}/assets/images/brand-logos/toggle-logo.png"
                alt="logo"
                class="toggle-logo"
              />
              <img
                src="{{asset('contents/backend/admin')}}/assets/images/brand-logos/desktop-dark.png"
                alt="logo"
                class="desktop-dark"
              />
              <img
                src="{{asset('contents/backend/admin')}}/assets/images/brand-logos/toggle-dark.png"
                alt="logo"
                class="toggle-dark"
              />
            </a>
          </div>
        </div>
        <!-- End::header-element -->
        <!-- Start::header-element -->
        <div class="header-element">
          <!-- Start::header-link -->
          <a
            aria-label="anchor"
            href="javascript:void(0);"
            class="sidemenu-toggle header-link"
            data-bs-toggle="sidebar"
          >
            <span class="open-toggle me-2">
              <i class="bx bx-menu header-link-icon"></i>
            </span>
          </a>
          <div class="main-header-center d-none d-lg-block header-link">

            <div id="headersearch" class="header-search">
              <div class="p-3">
                <div class="">
                  <p class="fw-semibold text-muted mb-2 fs-13">
                    Recent Searches
                  </p>
                  <div class="ps-2">
                    <a href="javascript:void(0)" class="search-tags"
                      ><i class="fe fe-search me-2"></i>People<span></span
                    ></a>
                    <a href="javascript:void(0)" class="search-tags"
                      ><i class="fe fe-search me-2"></i>Pages<span></span
                    ></a>
                    <a href="javascript:void(0)" class="search-tags"
                      ><i class="fe fe-search me-2"></i>Articles<span></span
                    ></a>
                  </div>
                </div>
                <div class="mt-3">
                  <p class="fw-semibold text-muted mb-2 fs-13">
                    Apps and pages
                  </p>
                  <ul class="ps-2">
                    <li
                      class="p-1 d-flex align-items-center text-muted mb-2 search-app"
                    >
                      <a href="full-calendar.html"
                        ><span
                          ><i
                            class="bx bx-calendar me-2 fs-14 bg-primary-transparent p-2 rounded-circle"
                          ></i
                          >Calendar</span
                        ></a
                      >
                    </li>
                    <li
                      class="p-1 d-flex align-items-center text-muted mb-2 search-app"
                    >
                      <a href="mail.html"
                        ><span
                          ><i
                            class="bx bx-envelope me-2 fs-14 bg-primary-transparent p-2 rounded-circle"
                          ></i
                          >Mail</span
                        ></a
                      >
                    </li>
                    <li
                      class="p-1 d-flex align-items-center text-muted mb-2 search-app"
                    >
                      <a href="buttons.html"
                        ><span
                          ><i
                            class="bx bx-dice-1 me-2 fs-14 bg-primary-transparent p-2 rounded-circle"
                          ></i
                          >Buttons</span
                        ></a
                      >
                    </li>
                  </ul>
                </div>
                <div class="mt-3">
                  <p class="fw-semibold text-muted mb-2 fs-13">Links</p>
                  <ul class="ps-2">
                    <li
                      class="p-1 align-items-center text-muted mb-1 search-app"
                    >
                      <a href="javascript:void(0)" class="text-primary"
                        ><u>http://spruko/spruko.com</u></a
                      >
                    </li>
                    <li
                      class="p-1 align-items-center text-muted mb-1 search-app"
                    >
                      <a href="javascript:void(0)" class="text-primary"
                        ><u>http://spruko/spruko.com</u></a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <div class="py-3 border-top px-0">
                <div class="text-center">
                  <a
                    href="javascript:void(0)"
                    class="text-primary text-decoration-underline fs-15"
                    >View all</a
                  >
                </div>
              </div>
            </div>
          </div>
          <!-- End::header-link -->
        </div>
        <!-- End::header-element -->
        <!-- Start::header-element -->
        <div class="header-element header-search d-lg-none d-block">
          <!-- Start::header-link -->
          <a
            aria-label="anchor"
            href="javascript:void(0);"
            class="header-link"
            data-bs-toggle="modal"
            data-bs-target="#searchModal"
          >
            <i class="bx bx-search-alt-2 header-link-icon"></i>
          </a>
          <!-- End::header-link -->
        </div>
        <!-- End::header-element -->
      </div>
      <!-- End::header-content-left -->
      <!-- Start::header-content-right -->
      <div class="header-content-right">
        <!-- Start::header-element -->
        <div class="header-element country-selector">
          <!-- Start::header-link|dropdown-toggle -->
          <a
            aria-label="anchor"
            href="javascript:void(0);"
            class="header-link dropdown-toggle"
            data-bs-toggle="dropdown"
            data-bs-auto-close="outside"
          >
            <i class="bx bx-globe header-link-icon"></i>
          </a>
          <!-- End::header-link|dropdown-toggle -->
          <ul
            class="main-header-dropdown dropdown-menu border-0"
            data-popper-placement="none"
          >
            <li>
              <a
                class="dropdown-item d-flex align-items-center"
                href="javascript:void(0);"
              >
                <span class="avatar avatar-xs lh-1 me-2">
                  <img src="{{asset('contents/backend/admin')}}/assets/images/flags/us_flag.jpg" alt="img" />
                </span>
                English
              </a>
            </li>
            <li>
              <a
                class="dropdown-item d-flex align-items-center"
                href="javascript:void(0);"
              >
                <span class="avatar avatar-xs lh-1 me-2">
                  <img
                    src="{{asset('contents/backend/admin')}}/assets/images/flags/spain_flag.jpg"
                    alt="img"
                  />
                </span>
                Spanish
              </a>
            </li>
            <li>
              <a
                class="dropdown-item d-flex align-items-center"
                href="javascript:void(0);"
              >
                <span class="avatar avatar-xs lh-1 me-2">
                  <img
                    src="{{asset('contents/backend/admin')}}/assets/images/flags/french_flag.jpg"
                    alt="img"
                  />
                </span>
                French
              </a>
            </li>
            <li>
              <a
                class="dropdown-item d-flex align-items-center"
                href="javascript:void(0);"
              >
                <span class="avatar avatar-xs lh-1 me-2">
                  <img
                    src="{{asset('contents/backend/admin')}}/assets/images/flags/germany_flag.jpg"
                    alt="img"
                  />
                </span>
                German
              </a>
            </li>
            <li>
              <a
                class="dropdown-item d-flex align-items-center"
                href="javascript:void(0);"
              >
                <span class="avatar avatar-xs lh-1 me-2">
                  <img
                    src="{{asset('contents/backend/admin')}}/assets/images/flags/italy_flag.jpg"
                    alt="img"
                  />
                </span>
                Italian
              </a>
            </li>
            <li>
              <a
                class="dropdown-item d-flex align-items-center"
                href="javascript:void(0);"
              >
                <span class="avatar avatar-xs lh-1 me-2">
                  <img
                    src="{{asset('contents/backend/admin')}}/assets/images/flags/russia_flag.jpg"
                    alt="img"
                  />
                </span>
                Russian
              </a>
            </li>
          </ul>
        </div>
        <!-- End::header-element -->


        <!-- Start::header-element -->
        <div class="header-element notifications-dropdown">
          <!-- Start::header-link|dropdown-toggle -->
          <a
            href="javascript:void(0);"
            class="header-link dropdown-toggle"
            data-bs-toggle="dropdown"
            data-bs-auto-close="outside"
            id="messageDropdown"
            aria-expanded="false"
          >
            <i
              class="bx bx-bell bx-flip-horizontal header-link-icon ionicon"
            ></i>
            <span
              class="badge bg-info rounded-pill header-icon-badge pulse pulse-secondary"
              id="notification-icon-badge"
              >3</span
            >
          </a>
          <!-- End::header-link|dropdown-toggle -->
          <!-- Start::main-header-dropdown -->
          <div
            class="main-header-dropdown dropdown-menu border-0 dropdown-menu-end"
            data-popper-placement="none"
          >
            <div class="p-3">
              <div
                class="d-flex align-items-center justify-content-between"
              >
                <p class="mb-0 fs-17 fw-semibold">Notifications</p>
                <span
                  class="badge bg-secondary-transparent"
                  id="notifiation-data"
                  >5 Unread</span
                >
              </div>
            </div>
            <div class="dropdown-divider"></div>
            <ul
              class="list-unstyled mb-0"
              id="header-notification-scroll"
              data-simplebar="init"
            >
              <div class="simplebar-wrapper" style="margin: 0px">
                <div class="simplebar-height-auto-observer-wrapper">
                  <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                  <div
                    class="simplebar-offset"
                    style="right: 0px; bottom: 0px"
                  >
                    <div
                      class="simplebar-content-wrapper"
                      tabindex="0"
                      role="region"
                      aria-label="scrollable content"
                      style="height: auto; overflow: hidden scroll"
                    >
                      <div class="simplebar-content" style="padding: 0px">
                        <li class="dropdown-item">
                          <div class="d-flex align-items-start">
                            <div class="pe-2">
                              <span
                                class="avatar avatar-md bg-secondary-transparent rounded-2"
                              >
                                <img
                                  src="{{asset('contents/backend/admin')}}/assets/images/faces/2.jpg"
                                  alt=""
                                />
                              </span>
                            </div>
                            <div
                              class="flex-grow-1 d-flex justify-content-between"
                            >
                              <div>
                                <p class="mb-0 fw-semibold">
                                  <a href="notifications.html"
                                    >Olivia James</a
                                  >
                                </p>
                                <span class="fs-12 text-muted fw-normal"
                                  >Congratulate for New template start</span
                                >
                              </div>
                              <div class="min-w-fit-content ms-2 text-end">
                                <a
                                  aria-label="anchor"
                                  href="javascript:void(0);"
                                  class="min-w-fit-content text-muted me-1 dropdown-item-close1"
                                  ><i class="ti ti-x fs-14"></i
                                ></a>
                                <p class="mb-0 text-muted fs-11">
                                  2 min ago
                                </p>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropdown-item">
                          <div class="d-flex align-items-start">
                            <div class="pe-2">
                              <span
                                class="avatar avatar-md bg-warning-transparent rounded-2"
                                ><i class="bx bx-pyramid fs-18"></i
                              ></span>
                            </div>
                            <div
                              class="flex-grow-1 d-flex justify-content-between"
                            >
                              <div>
                                <p class="mb-0 fw-semibold">
                                  <a href="notifications.html"
                                    >Order Placed
                                    <span class="text-warning"
                                      >ID: #1116773</span
                                    ></a
                                  >
                                </p>
                                <span
                                  class="fs-12 text-muted fw-normal header-notification-text"
                                  >Order Placed Successfully</span
                                >
                              </div>
                              <div class="min-w-fit-content ms-2 text-end">
                                <a
                                  aria-label="anchor"
                                  href="javascript:void(0);"
                                  class="min-w-fit-content text-muted me-1 dropdown-item-close1"
                                  ><i class="ti ti-x fs-14"></i
                                ></a>
                                <p class="mb-0 text-muted fs-11">
                                  5 min ago
                                </p>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropdown-item">
                          <div class="d-flex align-items-start">
                            <div class="pe-2">
                              <span
                                class="avatar avatar-md bg-secondary-transparent rounded-2"
                              >
                                <img
                                  src="{{asset('contents/backend/admin')}}/assets/images/faces/8.jpg"
                                  alt=""
                                />
                              </span>
                            </div>
                            <div
                              class="flex-grow-1 d-flex justify-content-between"
                            >
                              <div>
                                <p class="mb-0 fw-semibold">
                                  <a href="notifications.html"
                                    >Elizabeth Lewis</a
                                  >
                                </p>
                                <span class="fs-12 text-muted fw-normal"
                                  >added new schedule realease date</span
                                >
                              </div>
                              <div class="min-w-fit-content ms-2 text-end">
                                <a
                                  aria-label="anchor"
                                  href="javascript:void(0);"
                                  class="min-w-fit-content text-muted me-1 dropdown-item-close1"
                                  ><i class="ti ti-x fs-14"></i
                                ></a>
                                <p class="mb-0 text-muted fs-11">
                                  10 min ago
                                </p>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropdown-item">
                          <div class="d-flex align-items-start">
                            <div class="pe-2">
                              <span
                                class="avatar avatar-md bg-primary-transparent rounded-2"
                                ><i class="bx bx-pulse fs-18"></i
                              ></span>
                            </div>
                            <div
                              class="flex-grow-1 d-flex justify-content-between"
                            >
                              <div>
                                <p class="mb-0 fw-semibold">
                                  <a href="notifications.html"
                                    >Your Order Has Been Shipped</a
                                  >
                                </p>
                                <span
                                  class="fs-12 text-muted fw-normal header-notification-text"
                                  >Order No: 123456 Has Shipped To Your
                                  Delivery Address</span
                                >
                              </div>
                              <div class="min-w-fit-content ms-2 text-end">
                                <a
                                  aria-label="anchor"
                                  href="javascript:void(0);"
                                  class="min-w-fit-content text-muted me-1 dropdown-item-close1"
                                  ><i class="ti ti-x fs-14"></i
                                ></a>
                                <p class="mb-0 text-muted fs-11">
                                  12 min ago
                                </p>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="dropdown-item">
                          <div class="d-flex align-items-start">
                            <div class="pe-2">
                              <span
                                class="avatar avatar-md bg-pink-transparent rounded-2"
                                ><i class="bx bx-badge-check"></i
                              ></span>
                            </div>
                            <div
                              class="flex-grow-1 d-flex justify-content-between"
                            >
                              <div>
                                <p class="mb-0 fw-semibold">
                                  <a href="notifications.html"
                                    >Account Has Been Verified</a
                                  >
                                </p>
                                <span
                                  class="fs-12 text-muted fw-normal header-notification-text"
                                  >Your Account Has Been Verified
                                  Sucessfully</span
                                >
                              </div>
                              <div class="min-w-fit-content ms-2 text-end">
                                <a
                                  aria-label="anchor"
                                  href="javascript:void(0);"
                                  class="min-w-fit-content text-muted me-1 dropdown-item-close1"
                                  ><i class="ti ti-x fs-14"></i
                                ></a>
                                <p class="mb-0 text-muted fs-11">
                                  20 min ago
                                </p>
                              </div>
                            </div>
                          </div>
                        </li>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="simplebar-placeholder"
                  style="width: auto; height: 350px"
                ></div>
              </div>
              <div
                class="simplebar-track simplebar-horizontal"
                style="visibility: hidden"
              >
                <div
                  class="simplebar-scrollbar"
                  style="width: 0px; display: none"
                ></div>
              </div>
              <div
                class="simplebar-track simplebar-vertical"
                style="visibility: visible"
              >
                <div
                  class="simplebar-scrollbar"
                  style="
                    height: 326px;
                    display: block;
                    transform: translate3d(0px, 0px, 0px);
                  "
                ></div>
              </div>
            </ul>
            <div class="p-3 empty-header-item1 border-top">
              <div class="d-grid">
                <a href="notifications.html" class="btn btn-primary"
                  >View All</a
                >
              </div>
            </div>
            <div class="p-5 empty-item1 d-none">
              <div class="text-center">
                <span
                  class="avatar avatar-xl avatar-rounded bg-secondary-transparent"
                >
                  <i class="bx bx-bell-off bx-tada fs-2"></i>
                </span>
                <h6 class="fw-semibold mt-3">No New Notifications</h6>
              </div>
            </div>
          </div>
          <!-- End::main-header-dropdown -->
        </div>

        <!-- Start::header-element -->
        <div class="header-element">
          <!-- Start::header-link|dropdown-toggle -->
          <a
            href="javascript:void(0);"
            class="header-link dropdown-toggle"
            id="mainHeaderProfile"
            data-bs-toggle="dropdown"
            data-bs-auto-close="outside"
            aria-expanded="false"
          >
            <div class="d-flex align-items-center">
              <div class="d-sm-flex wd-100p">
                <div class="avatar avatar-sm">
                  <img
                    alt="avatar"
                    class="rounded-circle"
                    src="{{asset('contents/backend/admin')}}/assets/images/1.jpg"
                  />
                </div>
                <div class="ms-2 my-auto d-none d-xl-flex">
                  <h6
                    class="font-weight-semibold mb-0 fs-13 user-name d-sm-block d-none"
                  >
                   {{Auth::user()->name}}
                  </h6>
                </div>
              </div>
            </div>
          </a>
          <!-- End::header-link|dropdown-toggle -->
          <ul
            class="dropdown-menu border-0 main-header-dropdown overflow-hidden header-profile-dropdown"
            aria-labelledby="mainHeaderProfile"
          >
            <li>
              <a class="dropdown-item border-bottom" href="{{ route('admin.profile') }}"
                ><i class="fs-13 me-2 bx bx-user"></i>Profile</a
              >
            </li>
            <li>
              <a class="dropdown-item border-bottom" href="{{ route('admin.change_password') }}"
                ><i class="fs-13 me-2 bx bx-comment"></i>Change Password</a
              >
            </li>
            <li>
              <a
                class="dropdown-item border-bottom"
                href="mail-settings.html"
                ><i class="fs-13 me-2 bx bx-cog"></i>Settings</a
              >
            </li>
            <li>
              <a class="dropdown-item border-bottom" href="faq's.html"
                ><i class="fs-13 me-2 bx bx-help-circle"></i>Help</a
              >
            </li>
            <li>
              <a class="dropdown-item" href="{{ route('admin.logout') }}"
                ><i class="fs-13 me-2 bx bx-arrow-to-right"></i>Log Out</a
              >
            </li>
          </ul>
        </div>
        <!-- End::header-element -->
        <!-- Start::header-element -->
      </div>
      <!-- End::header-content-right -->
    </div>
    <!-- End::main-header-container -->
  </header>
