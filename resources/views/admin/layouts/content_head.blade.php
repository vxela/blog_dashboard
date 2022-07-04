<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
    <i class="bi bi-justify fs-3"></i>
    </a>
</header>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>
                    @isset($title)
                        {{$title}}
                    @endisset
                </h3>
                <p class="text-subtitle text-muted">
                    @isset($subtitle)
                        {{$subtitle}}
                    @endisset
                </p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="/blank">blank</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>