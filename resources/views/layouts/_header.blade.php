<title>{{ config('app.name', 'نظام التحفيظ') }}</title>
<meta charset="utf-8" />
<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
<!--begin::Fonts-->
{{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> --}}
{{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" /> --}}
<!--end::Fonts-->
<!--begin::Vendor Stylesheets(used by this page)-->
<link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
<!--end::Vendor Stylesheets-->
<!--begin::Global Stylesheets Bundle(used by all pages)-->
<link href="{{ asset('assets/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

<!--end::Global Stylesheets Bundle-->
<meta name="csrf-token" content="{{ csrf_token() }}" />

</head>
@stack('css')
