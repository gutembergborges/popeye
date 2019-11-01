<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <title>{{ config('app.name') }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
    crossorigin="anonymous">

  <!-- SAME BOOTSTRAP OF APP -->
  <link rel="stylesheet" href="{{ mix('app/css/app.css') }}">
  {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
  <link rel="stylesheet" href="{{ mix('site/css/base.css') }}">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{ mix('site/css/site.css') }}">
</head>
