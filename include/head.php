<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="p36G1xEn0kWhIEv8ZVs2svtzVENdPWyXCensO8jn">
<link rel="icon" type="image/png" href="https://mytravel.bookingcore.co/uploads/mytravel/general/favicon.png" />

<title>Home Page</title>
<meta name="description" content="" />

<meta property="og:url" content="https://mytravel.bookingcore.co" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Home Page" />
<meta property="og:description" content="" />
<meta property="og:image" content="" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Home Page">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="">
<link rel="canonical" href="https://mytravel.bookingcore.co" />
<link href="style/css/themify-icons.css" rel="stylesheet">
<link href="libs/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="libs/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="libs/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href=libs/icofont/icofont.min.css" rel="stylesheet">
<link href="libs/select2/css/select2.min.css" rel="stylesheet">

<link href="themes/mytravel/libs/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="themes/mytravel/libs/slick/slick.css" rel="stylesheet">
<link href="themes/mytravel/libs/custombox/custombox.min.css" rel="stylesheet">

<link href="themes/mytravel/dist/frontend/css/notification.css" rel="newest stylesheet">
<link href="themes/mytravel/dist/frontend/css/app.css?_ver=2.2.0" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://mytravel.bookingcore.co/libs/daterange/daterangepicker.css">
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Rubik:300,400,500,700,900&display=swap" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Franklin:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

<link rel="stylesheet"
    href="https://mytravel.bookingcore.co/themes/mytravel/libs/bootstrap-select/dist/css/bootstrap-select.min.css">
<link href="libs/ion_rangeslider/css/ion.rangeSlider.css" rel="stylesheet">




<script>
    var bookingCore = {
        url: 'https://mytravel.bookingcore.co',
        url_root: 'https://mytravel.bookingcore.co',
        admin_url: 'https://mytravel.bookingcore.co/admin',
        booking_decimals: 0,
        thousand_separator: '.',
        decimal_separator: ',',
        currency_position: 'left',
        currency_symbol: '$',
        currency_rate: '1',
        date_format: 'MM/DD/YYYY',
        map_provider: 'gmap',
        map_gmap_key: '',
        map_options: {
            map_lat_default: '',
            map_lng_default: '',
            map_clustering: 'on',
            map_fit_bounds: 'on',
        },
        routes: {
            login: 'https://mytravel.bookingcore.co/login',
            register: 'https://mytravel.bookingcore.co/register',
            checkout: 'https://mytravel.bookingcore.co/booking/doCheckout'
        },
        currentUser: 18,
        isAdmin: 0,
        rtl: false,
        markAsRead: 'https://mytravel.bookingcore.co/notify/markAsRead',
        markAllAsRead: 'https://mytravel.bookingcore.co/notify/markAllAsRead',
        loadNotify: 'https://mytravel.bookingcore.co/notify/notifications',
        pusher_api_key: '',
        pusher_cluster: '',
        language: 'en',
        module: {}
    };
    bookingCore.media = {
        groups: { "default": { "ext": ["jpg", "jpeg", "png", "gif", "bmp", "docx"], "mime": ["image\/png", "image\/jpeg", "image\/gif", "image\/bmp", "application\/vnd.openxmlformats-officedocument.wordprocessingml.document"], "max_size": 20000000, "max_width": 4000, "max_height": 4000 }, "image": { "ext": ["jpg", "jpeg", "png", "gif", "bmp"], "mime": ["image\/png", "image\/jpeg", "image\/gif", "image\/bmp"], "max_size": 20000000, "max_width": 4000, "max_height": 4000 } },
    }
    bookingCore.module.hotel = 'https://mytravel.bookingcore.co/hotel';
    bookingCore.module.space = 'https://mytravel.bookingcore.co/space';
    bookingCore.module.car = 'https://mytravel.bookingcore.co/car';
    bookingCore.module.event = 'https://mytravel.bookingcore.co/event';
    bookingCore.module.tour = 'https://mytravel.bookingcore.co/tour';
    bookingCore.module.flight = 'https://mytravel.bookingcore.co/flight';
    bookingCore.module.boat = 'https://mytravel.bookingcore.co/boat';
    var i18n = {
        warning: "Warning",
        success: "Success",
        confirm_delete: "Do you want to delete?",
        confirm: "Confirm",
        cancel: "Cancel",
    };
    var daterangepickerLocale = {
        "applyLabel": "Apply",
        "cancelLabel": "Cancel",
        "fromLabel": "From",
        "toLabel": "To",
        "customRangeLabel": "Custom",
        "weekLabel": "W",
        "first_day_of_week": 1,
        "daysOfWeek": [
            "Su",
            "Mo",
            "Tu",
            "We",
            "Th",
            "Fr",
            "Sa"
        ],
        "monthNames": [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
        ],
    };
    window.currentUrl = 'https://mytravel.bookingcore.co';
</script>
<!-- Styles -->

<link href="https://mytravel.bookingcore.co/custom-css" rel="stylesheet">
<link href="https://mytravel.bookingcore.co/libs/carousel-2/owl.carousel.css" rel="stylesheet">