<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="{{ route('admin.dashboard') }}" class="header-logo">
            <img src="{{ asset('backend/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
            <img src="{{ asset('backend/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="toggle-logo">
            <img src="{{ asset('backend/assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark">
            <img src="{{ asset('backend/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="toggle-dark">
            <img src="{{ asset('backend/assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-white">
            <img src="{{ asset('backend/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="toggle-white">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">MENU</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="{{ route('admin.dashboard') }}" class="side-menu__item">
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <span class="side-menu__label">Template Section</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">Section</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('admin.slider.index') }}" class="side-menu__item">Slider</a>
                        </li>
                        <li class="slide">
                            <a href="{{ route('admin.cta.index') }}" class="side-menu__item">CTA</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <span class="side-menu__label">Product</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">Product</a>
                        </li>
                        <li class="slide has-sub">
                            <li class="slide">
                                <a href="{{ route('admin.category.index') }}" class="side-menu__item">Category</a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('admin.sub-category.index') }}" class="side-menu__item">SubCategory</a>
                            </li>
                            <li class="slide">
                                <a href="{{ route('admin.product.index') }}" class="side-menu__item">Product</a>
                            </li>
                        </li>

                    </ul>
                </li>
                <!-- End::slide -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="javascript:void(0);" class="side-menu__item">
                        <span class="side-menu__label">Forms</span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu child1">
                        <li class="slide side-menu__label1">
                            <a href="javascript:void(0);">Forms</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Form Elements
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="form_inputs.html" class="side-menu__item">Inputs</a>
                                </li>
                                <li class="slide">
                                    <a href="form_check_radios.html" class="side-menu__item">Checks &amp; Radios</a>
                                </li>
                                <li class="slide">
                                    <a href="form_input_group.html" class="side-menu__item">Input Group</a>
                                </li>
                                <li class="slide">
                                    <a href="form_select.html" class="side-menu__item">Form Select</a>
                                </li>
                                <li class="slide">
                                    <a href="form_range.html" class="side-menu__item">Range Slider</a>
                                </li>
                                <li class="slide">
                                    <a href="form_input_masks.html" class="side-menu__item">Input Masks</a>
                                </li>
                                <li class="slide">
                                    <a href="form_file_uploads.html" class="side-menu__item">File Uploads</a>
                                </li>
                                <li class="slide">
                                    <a href="form_dateTime_pickers.html" class="side-menu__item">Date,Time Picker</a>
                                </li>
                                <li class="slide">
                                    <a href="form_color_pickers.html" class="side-menu__item">Color Pickers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="floating_labels.html" class="side-menu__item">Floating Labels</a>
                        </li>
                        <li class="slide">
                            <a href="form_layout.html" class="side-menu__item">Form Layouts</a>
                        </li>
                        <li class="slide has-sub">
                            <a href="javascript:void(0);" class="side-menu__item">Form Editors
                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                            <ul class="slide-menu child2">
                                <li class="slide">
                                    <a href="quill_editor.html" class="side-menu__item">Quill Editor</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="form_validation.html" class="side-menu__item">Validation</a>
                        </li>
                        <li class="slide">
                            <a href="form_select2.html" class="side-menu__item">Select2</a>
                        </li>
                    </ul>
                </li>
                <!-- End::slide -->

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
