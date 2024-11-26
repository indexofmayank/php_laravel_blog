<style>
    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow: hidden;
    }
    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;

    }
</style>

<div class="container">
    <header class="border-botton lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="link-secondary" href="#">Subscribe</a>
            </div>
            <div class="col-4 text-center">
                <a class="text-body-emphasis text-decoration-none" href="/">Large</a>
            </div>
            <div class="col-4 d-flex align-items-center justify-content-end">
                <a class="text-decoration-none text-body-emphasis"><i class="bi bi-search"></i>
                </a>
                <a class="btn btn-sm btn-outline-secondary mx-1" href="/register">Sign up</a>
                <a class="btn btn-sm btn-outline-secondary mx-1" href="/login">Log in</a>

            </div>
        </div>

    </header>
    <div class="nav-scroller py-1 mb-3 border-bottom">
        <nav class="nav nav-underline justify-content-between">
            <a class="nav-item nav-link link-body-emphasis active" href="#">World</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">U.S.</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Technology</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Design</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Culture</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Business</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Politics</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Opinion</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Science</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Health</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Style</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Travel</a>
        </nav>
    </div>
