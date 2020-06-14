<footer class="main-footer">
    <nav class="nav-footer">
        <div class="footer-brand">
            Boolean
            <ul>
                <li><a href="{{ route('static-page.home') }}">Home</a></li>
                <li><a href="{{ route('static-page.faq') }}">Domande frequenti</a></li>
                <li><a href="{{ route('static-page.privacy') }}">Privacy</a></li>
            </ul>
        </div>
    </nav>
</footer>

{{-- <script src="{{ asset('js/app.js')}}"></script> --}}
@yield('scripts')
    
</body>
</html>