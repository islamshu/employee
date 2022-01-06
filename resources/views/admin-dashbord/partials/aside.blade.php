<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        @if(auth()->user()->type == 'admin')
        <li class=" nav-item"><a href="{{ route('generalinfo.index') }}"><i class="la la-cog"></i><span class="menu-title" data-i18n="nav.dash.main">الإعدادات العامة</span></a>
         
        </li>
        
        <li class=" nav-item"><a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main"> الموظفين</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('employees.index') }}" data-i18n="nav.dash.ecommerce">جميع الموظفين</a>
            </li>
            <li ><a class="menu-item" href="{{ route('employees.create') }}" data-i18n="nav.dash.crypto">اضف جديد</a>
            </li>
          </ul>
        </li>
        @endif
        <li class=" nav-item"><a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main"> العملاء</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('clients.index') }}" data-i18n="nav.dash.ecommerce">جميع العملاء</a>
            </li>
            <li ><a class="menu-item" href="{{ route('clients.create') }}" data-i18n="nav.dash.crypto">اضف جديد</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main"> بيانات تواصل مع العملاء</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('communication.index') }}" data-i18n="nav.dash.ecommerce">جميع البيانات</a>
            </li>
            <li ><a class="menu-item" href="{{ route('communication.create') }}" data-i18n="nav.dash.crypto">اضف جديد</a>
            </li>
          </ul>
        </li>
        {{-- <li class=" nav-item"><a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main"> السلايدر</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('sliders.index') }}" data-i18n="nav.dash.ecommerce">جميع السلايدرات</a>
            </li>
            <li ><a class="menu-item" href="{{ route('sliders.create') }}" data-i18n="nav.dash.crypto">اضف جديد</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="{{ route('firstsection.index') }}"><i class="la la-cog"></i><span class="menu-title" data-i18n="nav.dash.main">مزايانا </span></a>
        </li>
        <li class=" nav-item"><a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main"> خدماتنا</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('services.index') }}" data-i18n="nav.dash.ecommerce">جميع الخدمات</a>
            </li>
            <li ><a class="menu-item" href="{{ route('services.create') }}" data-i18n="nav.dash.crypto">اضف جديد</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main"> الخادمات</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('workers.index') }}" data-i18n="nav.dash.ecommerce">جميع الخادمات</a>
            </li>
            <li ><a class="menu-item" href="{{ route('workers.create') }}" data-i18n="nav.dash.crypto">اضف جديد</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="index.html"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main"> خطوات كيفية العمل</span></a>
          <ul class="menu-content">
            <li><a class="menu-item" href="{{ route('how_its_work.index') }}" data-i18n="nav.dash.ecommerce">جميع الخطوات</a>
            </li>
            <li ><a class="menu-item" href="{{ route('how_its_work.create') }}" data-i18n="nav.dash.crypto">اضف جديد</a>
            </li>
          </ul>
        </li>
        <li class=" nav-item"><a href="{{ route('pages.index') }}"><i class="la la-cog"></i><span class="menu-title" data-i18n="nav.dash.main">الصفحات </span></a>
        </li>
        <li class=" nav-item"><a href="{{ route('messageletter.index') }}"><i class="la la-cog"></i><span class="menu-title" data-i18n="nav.dash.main">طلبات الرسائل </span></a>
        </li> --}}
        {{-- <li class="nav-item ">
          <a class="menu-item" href="#" data-i18n="nav.menu_levels.second_level_child.main">
              <i class="la la-thumb-tack"></i>
              <span class="menu-title" data-i18n="nav.page_layouts.main">الترجمة</span>
          </a>

      <ul class="menu-content" style="">
          <li class="is-shown"><a class="menu-item" href="{{ route('show_translate','ar') }}" data-i18n="nav.menu_levels.second_level_child.third_level">ترجمة الخاصة باللغة العربية  </a>
          </li>
          <li class="is-shown"><a class="menu-item" href="{{ route('show_translate','en') }}" data-i18n="nav.menu_levels.second_level_child.third_level">الترجمة الخاصة باللغة الانجليزية </a>
          </li>
        </ul>
      </li> --}}
    
      </ul>
    </div>
  </div>