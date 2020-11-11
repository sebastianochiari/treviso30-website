<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

@if(Request::is('posts/*'))

    <title>Dashboard</title>

@else

    <title>@yield('title')</title>

@endif

<meta name="description" content="@yield('metadata')">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;900&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@800&display=swap" rel="stylesheet">

<!-- FontAwesome -->
<script src="https://kit.fontawesome.com/782fba089f.js" crossorigin="anonymous"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

@yield('stylesheets')

<script type="text/javascript">
    var _iub = _iub || [];
    _iub.csConfiguration = {"gdprAppliesGlobally":false,"countryDetection":true,"consentOnContinuedBrowsing":false,"lang":"it","siteId":2040720,"cookiePolicyId":93666445,"cookiePolicyUrl":"https://www.iubenda.com/privacy-policy/93666445", "banner":{ "acceptButtonDisplay":true,"acceptButtonColor":"#0073CE","acceptButtonCaptionColor":"white","rejectButtonColor":"#0073CE","rejectButtonCaptionColor":"white","position":"float-top-center","textColor":"black","backgroundColor":"white" }};
</script>
<script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
