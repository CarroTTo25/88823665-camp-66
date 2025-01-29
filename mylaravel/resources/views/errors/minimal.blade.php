@extends('Layouts.default')

@section('content')
    @if ($__env->yieldContent('code') === '404')
        <section class="content">
            <div class="error-page text-center">
                <h2 class="headline text-warning">404</h2>
                <div class="error-content mt-4">
                    <h3>
                        <i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.
                    </h3>
                    <p>
                        We could not find the page you were looking for.<br>
                        Meanwhile, you may <a href="../../index.html" class="text-warning">return to dashboard</a>
                        or try using the search form below.
                    </p>
                    <form class="search-form mt-3">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" name="submit" class="btn btn-warning">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    @elseif ($__env->yieldContent('code') === '500')
        <section class="content">
            <div class="error-page text-center">
                <h2 class="headline text-danger">500</h2>
                <div class="error-content mt-4">
                    <h3>
                        <i class="fas fa-exclamation-triangle text-danger"></i> Oops! Something went wrong.
                    </h3>
                    <p>
                        We will work on fixing that right away.<br>
                        Meanwhile, you may <a href="../../index.html" class="text-danger">return to dashboard</a>
                        or try using the search form below.
                    </p>
                    <form class="search-form mt-3">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" name="submit" class="btn btn-danger">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    @endif

    @yield('code')
    @yield('message')
@endsection
