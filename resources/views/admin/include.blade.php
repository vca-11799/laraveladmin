<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="A fully responsive admin theme which can be used to build CRM, CMS,ERP etc." name="description" />
<meta content="Techzaa" name="author" />

<!-- App favicon -->
<link rel="shortcut icon" href="{{asset('images/asquarex-logo.png')}}">

<!-- Theme Config Js -->
<script src="{{asset('js/config.js')}}"></script>

<!-- App css -->
<link href="{{asset('css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

<!-- Icons css -->
<link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Daterangepicker css -->
<link rel="stylesheet" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">

<!-- Vector Map css -->
<link rel="stylesheet" href="{{asset('vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}">


<script>
    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
            let alert = document.getElementById('alert-success');
            if (alert) {
                alert.style.transition = 'opacity 0.5s ease';
                alert.style.opacity = '0'; // Fade out
                setTimeout(() => alert.remove(), 500); // Remove after fade out completes
            }
        }, 1000); // 5000 milliseconds = 5 seconds
    });
</script>