<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Jinyoung</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">JY</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ @$active == 'slider' ? 'active' : '' }}"><a class="nav-link" href="{{ route('management.slider.index') }}"><i class="fas fa-sliders"></i><span>Slider</span></a></li>
            <li class="{{ @$active == 'vision_mission' ? 'active' : '' }}"><a class="nav-link" href="{{ route('management.vision-mission.index') }}"><i class="fas fa-eye"></i><span>Visi Misi</span></a></li>
            <li class="{{ @$active == 'history' ? 'active' : '' }}"><a class="nav-link" href="{{ route('management.history.index') }}"><i class="fas fa-stairs"></i><span>History</span></a></li>
            <li class="{{ @$active == 'product_process' ? 'active' : '' }}"><a class="nav-link" href="{{ route('management.product-process.index') }}"><i class="fas fa-bars-progress"></i><span>Product Process</span></a></li>
            <li class="{{ @$active == 'product' ? 'active' : '' }}"><a class="nav-link" href="{{ route('management.product.index') }}"><i class="fas fa-brands fa-product-hunt"></i><span>Produk</span></a></li>
            <li class="{{ @$active == 'question' ? 'active' : '' }}"><a class="nav-link" href="{{ route('management.question.index') }}"><i class="fas fa-question"></i><span>Pertanyaan</span></a></li>
            <li class="{{ @$active == 'contact' ? 'active' : '' }}"><a class="nav-link" href="{{ route('management.contact.index') }}"><i class="fas fa-address-book"></i><span>Kontak</span></a></li>
        </ul>

{{--        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">--}}
{{--            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">--}}
{{--                <i class="fas fa-rocket"></i> Documentation--}}
{{--            </a>--}}
{{--        </div>--}}
    </aside>
</div>
