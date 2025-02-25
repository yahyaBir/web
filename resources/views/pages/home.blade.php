@extends('layouts.app')

@section('title', 'Arşen Prosess - Süperkritik Ekstraktör Çözümleri')

@section('description', 'Süperkritik ekstraktör çözümleri ile endüstriyel ekstraksiyon sistemleri. Yüksek verimli ve hızlı ekstraksiyon teknolojileri.')

@section('content')
    @include('sections.hero')
    @include('sections.capabilities')
    @include('sections.features')
    @include('sections.products')
    @include('sections.video')
    @include('sections.text-content')
    @include('sections.references')
    @include('sections.faq')
@endsection

@push('styles')
    <!-- Sayfa özel stilleri buraya -->
@endpush

@push('scripts')
    <!-- Sayfa özel scriptleri buraya -->
@endpush 