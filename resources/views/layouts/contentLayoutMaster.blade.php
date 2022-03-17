<!DOCTYPE html>
{{-- {!! Helper::applClasses() !!} --}}
<html lang="en">
@php
// $site = \App\Models\site_settings::findorfail(1);
@endphp


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo/favicon.ico')}}">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism.min.css" integrity="sha512-tN7Ec6zAFaVSG3TpNAKtk4DOHNpSwKHxxrsiw4GHKESGPs5njn/0sMCUMl2svV4wo4BK/rCP7juYz+zx+l6oeQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-coy.min.css" integrity="sha512-CKzEMG9cS0+lcH4wtn/UnxnmxkaTFrviChikDEk1MAWICCSN59sDWIF0Q5oDgdG9lxVrvbENSV1FtjLiBnMx7Q==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.24.1/themes/prism-dark.min.css" integrity="sha512-Njdz7T/p6Ud1FiTMqH87bzDxaZBsVNebOWmacBjMdgWyeIhUSFU4V52oGwo3sT+ud+lyIE98sS291/zxBfozKw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

{{-- {!! JsonLd::generate() !!} --}}
  {{-- Include core + vendor Styles --}}
  @include('panels/styles')

</head>



{{-- @isset($configData["mainLayoutType"])
@extends((( $configData["mainLayoutType"] === 'horizontal') ? 'layouts.horizontalLayoutMaster' :
'layouts.verticalLayoutMaster' ))
@endisset --}}

@extends('layouts.horizontalLayoutMaster')
