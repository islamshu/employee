<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item"><a href="{{ route('generalinfo.index') }}"><i class="la la-cog"></i><span class="menu-title" data-i18n="nav.dash.main">الإعدادات العامة</span></a>  
        </li>
        <li class=" nav-item"><a href="{{ route('first_section') }}" ><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main"> القسم الأول</span></a>
        </li>
        <li class=" nav-item"><a href="{{ route('partners') }}" ><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main"> شركائنا </span></a>
        </li>
        <li class=" nav-item"><a href="{{ route('third_section') }}" ><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main"> القسم الثالث </span></a>
        </li>
        <li class=" nav-item"><a href="{{ route('programs.index') }}" ><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main"> برامجنا  </span></a>
        </li>
     
        <li class="nav-item ">
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
      </li>

      </ul>
    </div>
  </div>