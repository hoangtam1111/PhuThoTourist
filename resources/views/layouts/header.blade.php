<header>
    <ul class="nav justify-content-center align-items-center">
        <li class="nav-item ms-4 me-4">
            <a class="nav-link  active" href="{{ route('home') }}">TRANG CHỦ</a>
        </li>
        <li class="nav-item ms-4 me-4">
            <a class="nav-link " href="{{ route('post') }}">BÀI VIẾT</a>
        </li>
        <li class="nav-item ms-4 me-4">
            <a class="nav-link " href="{{ route('home') }}"><img src="{{ asset('image/logo/logo.png') }}" width="100px"
                    alt=""></a>
        </li>
        <li class="nav-item ms-4 me-4">
            <a class="nav-link " href="{{ route('document') }}">TÀI LIỆU</a>
        </li>
        <li class="nav-item ms-4 me-4">
            <a class="nav-link " href="{{ route('recruitments') }}">TUYỂN DỤNG</a>
        </li>
    </ul>
    <div class="mobile d-none">
        <ul class="d-flex justify-content-between align-items-center p-0">
            <li class="nav-item ms-4 me-4">
                <a class="nav-link " href="{{ route('home') }}"><img src="{{ asset('image/logo/logo.png') }}" width="50px"
                        alt=""></a>
            </li>
            <li class="nav-item ms-4 me-4">
                <div class="toggle" id="toggle">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
            </li>
        </ul>
    </div>
    <div class="fullscreen-nav" id="fullscreenNav">
        <button id="closeNav" class="close-btn">×</button>
        <div class="nav-content">
            <a href="{{ route('home') }}" class="nav-item">TRANG CHỦ</a>
            <a href="{{  route('post')  }}" class="nav-item">BÀI VIẾT</a>
            <a href="{{ route('document') }}" class="nav-item">TÀI LIỆU</a>
            <a href="{{ route('recruitments') }}" class="nav-item">TUYỂN DỤNG</a>
        </div>
    </div>
</header>
<script>
    document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('toggle');
    const closeNav = document.getElementById('closeNav');
    const fullscreenNav = document.getElementById('fullscreenNav');

    menuToggle.addEventListener('click', () => {
        fullscreenNav.classList.add('active');
    });

    closeNav.addEventListener('click', () => {
        fullscreenNav.classList.remove('active');
    });
});
</script>
