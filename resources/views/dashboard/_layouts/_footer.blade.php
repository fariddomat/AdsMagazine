<footer class="footer footer-static footer-dark navbar-border navbar-shadow">
    <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span
            class="float-md-left d-block d-md-inline-block">2023 &copy; Copyright <a class="text-bold-800 grey darken-2"
                href="" target="_blank">Ads</a></span>

    </div>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="{{ asset('admin/theme-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{ asset('admin/theme-assets/vendors/js/charts/chartist.min.js') }}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN CHAMELEON  JS-->
<script src="{{ asset('admin/theme-assets/js/core/app-menu-lite.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/theme-assets/js/core/app-lite.js') }}" type="text/javascript"></script>
<!-- END CHAMELEON  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{ asset('admin/theme-assets/js/scripts/pages/dashboard-lite.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->


<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']]
            ],
            placeholder: 'Type Your Post here',
            tabsize: 2,
            height: 100,
            focus: true
        });

        $('#summernote2').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']]
            ],
            placeholder: 'Type Your Post here',
            tabsize: 2,
            height: 100,
            focus: true
        });

        $('#summernote3').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']]
            ],
            placeholder: 'Type Your Post here',
            tabsize: 2,
            height: 100,
            focus: true
        });

        $('#summernote4').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']]
            ],
            placeholder: 'Type Your Post here',
            tabsize: 2,
            height: 100,
            focus: true
        });

        $('#summernote5').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']]
            ],
            placeholder: 'Type Your Post here',
            tabsize: 2,
            height: 100,
            focus: true
        });

        $('#summernote6').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']]
            ],
            placeholder: 'Type Your Post here',
            tabsize: 2,
            height: 100,
            focus: true
        });
    });
</script>


@stack('scripts')
