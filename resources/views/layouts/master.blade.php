<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@include('partials.head')

<body>
<div id="app">
    <div class="main-wrapper">
    @include('partials.header')
    
     @include('partials.sidebar')
    
    

    <!-- Main Content -->
            <div class="main-content col-sm-12">
                @yield('content')
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                &copy; {{now()->year}}
                    <div class="bullet"></div>
                    {{-- getAppSetting()->footer_text --}}
                </div>
                <div class="footer-right">
                    1.0.0
                </div>
            </footer>
        </div>
    </div>

    @include('partials.footer')


    <div class="modal fade" tabindex="-1" role="dialog" id="productiveModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="btn-modal-save" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>