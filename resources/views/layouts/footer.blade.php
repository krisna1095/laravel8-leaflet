</section>
@stack('script_maps')
<!-- Vendor -->
<script src="{{ asset('/template') }}/vendor/jquery/jquery.js"></script>
<script src="{{ asset('/template') }}/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="{{ asset('/template') }}/vendor/bootstrap/js/bootstrap.js"></script>
<script src="{{ asset('/template') }}/vendor/nanoscroller/nanoscroller.js"></script>
<script src="{{ asset('/template') }}/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="{{ asset('/template') }}/vendor/magnific-popup/magnific-popup.js"></script>
<script src="{{ asset('/template') }}/vendor/jquery-placeholder/jquery.placeholder.js"></script>

@stack('script')

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('/template') }}/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="{{ asset('/template') }}/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="{{ asset('/template') }}/javascripts/theme.init.js"></script>

@stack('last_script')

</body>

</html>