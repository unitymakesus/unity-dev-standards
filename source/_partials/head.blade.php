<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>
  <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">
  <meta name="robots" content="noindex,nofollow">
  <link rel="icon" href="/assets/images/favicon.png">
  <link href="https://fonts.googleapis.com/css2?family=Chivo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
