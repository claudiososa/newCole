@extends('layouts.app')

@section('formLogin')
  @include('auth.formLogin')
@endsection

@section('mainNavigation')
  @include('navigations.main')
@endsection

@section('sliderPrincipal')
  @include('sliders.portada')
@endsection

@section('section')
  @include('sections.portada')
@endsection


@section('content')


@endsection
