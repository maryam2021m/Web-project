<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme position-relative">
    <div class="app-brand demo">
        <a href="{{ route('staff.dashboard') }}" class="app-brand-link">
            <img src="/assets/img/favicon/fixLogo.png" class="w-25" alt="">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">LMS</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item{{ $active == "dashboard" ? " active" : '' }}">
            <a href="/staff/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">داشبورد</div>
            </a>
        </li>
        <li class="menu-item{{ $active == "guestbook" || $active == "guestbook_hist" ? " active" : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-book-content"></i>
                <div data-i18n="Layouts">دفترچه ویزیت</div>
            </a>
            
            <ul class="menu-sub">
                <li class="menu-item{{ $active == "guestbook" ? " active" : '' }}">
                    <a href="{{ route('guestbook.create') }}" class="menu-link">
                        <div data-i18n="Without menu">افزودن ویزیت</div>
                    </a>
                </li>
                <li class="menu-item{{ $active == "guestbook_hist" ? " active" : '' }}">
                    <a href="{{ route('guestbook.history') }}" class="menu-link">
                        <div data-i18n="Without menu">تاریخچه</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item{{ $active == "loans" || $active == "inventories_list" ? " active" : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-book-content"></i>
                <div data-i18n="Layouts">فهرست</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item{{ $active == "inventories_list" ? " active" : '' }}">
                    <a href="{{ route('inventories.list') }}" class="menu-link">
                        <div data-i18n="Without menu">لیست فهرست</div>
                    </a>
                </li>
                <li class="menu-item{{ $active == "loans" ? " active" : '' }}">
                    <a href="{{ route("loans.history") }}" class="menu-link">
                        <div data-i18n="Without menu">وام</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item{{ $active == "lab_info" ? " active" : '' }}">
            <a href="{{ route('lab.info') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">اطلاعیه ها</div>
            </a>
        </li>
        <li class="menu-item{{ $active == "feedback" ? " active" : '' }}">
            <a href="{{ route('feedback.create') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-message-dots"></i>
                <div data-i18n="Analytics">پیشنهادات و بازخورد</div>
            </a>
        </li>
    </ul>
</aside>
