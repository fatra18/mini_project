@php
$current_path = '/'.request()->path();

// dd($current_path);

$dashboard = [
    'title' =>'Dashboard',
    'icon' => 'bi bi-person-fill',
    'url' =>'/admin/dashboard',
];

$users = [
    'title' =>'Users',
    'url' =>'#',
    'icon' => 'bi bi-person-fill',
    'childrens'=> [
        [
            'title'=> 'List User',
            'url' =>'/admin/users'
        ],
        [
            'title'=>'Create User',
            'url' =>'/admin/users/create'
        ],
    
    ]
];

$category = [
    'title' =>'Category',
    'url' =>'#',
    'icon' => 'bi bi-person-fill',
    'childrens'=>[
        [
            'title'=> 'List User',
            'url' =>'/admin/category'
        ],
        [
            'title'=>'Create User',
            'url' =>'/admin/category/create'
        ],
    
    ]
];

$article = [
    'title' =>'Article',
    'url' =>'admin/article*',
    'icon' =>'bi bi-person-fill',
    'childrens'=>[
        [
            'title'=> 'List Article',
            'url' =>'/admin/articles'
        ],
        [
            'title'=>'Create Article',
            'url' =>'/admin/articles/create'
        ],
    
    ]
];


$menus = [$dashboard,$users,$category,$article];




@endphp

<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="index.html"><img src="/dist/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                @foreach ($menus as $index => $menu)
                    @if (isset($menu['childrens']))
                    @php
                        $isActive = false;

                        foreach ($menu['childrens'] as $child) {
                            if($child['url'] == $current_path)
                            {
                                $isActive = true;
                            }
                        }
                    @endphp
                    
                        {{-- <li class="sidebar-item has-sub {{ $current_path == $menu['url'] ? 'active' : '' }}"> --}}
                        <li class="sidebar-item has-sub {{$isActive ? 'active' : '' }}">
                            <a href="{{ $menu['url'] }}" class='sidebar-link'>
                                <i class="{{ $menu['icon']  }}"></i>
                                <span>{{ $menu['title'] }}</span>
                            </a>
                            <ul class="submenu {{ $isActive ? 'active' : '' }}">
                                @foreach ($menu['childrens'] as $item)
                                    <li class="submenu-item">
                                        <a href="{{ $item['url'] }}">{{ $item['title'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="sidebar-item{{ $current_path == $menu['url'] ? 'active' : ''}}">
                            <a href="{{ $menu['url'] }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>{{ $menu['title'] }}</span>
                            </a>
                        </li>
                    

                    @endif
                @endforeach



              
               

                {{-- <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Components</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="component-alert.html">Alert</a>
                        </li>
                        
                    </ul>
                </li> --}}

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>