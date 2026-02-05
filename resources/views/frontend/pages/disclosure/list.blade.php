@extends('frontend.layouts.master')
@php
    $slug = $branchDisclosure->slug;
    $seo = [
        'sunbeam-academy-durgakund' => [
            'title' => 'Mandatory Public Disclosure | Sunbeam Academy Durgakund',
            'description' => 'Browse information on Sunbeam Academy Durgakund at Sunbeam Academy Varanasi, covering academics, activities, facilities, and student development.'
        ],

        'sunbeam-academy-samneghat' => [
            'title' => 'Mandatory Public Disclosure | Sunbeam Academy Samneghat',
            'description' => 'Check official updates for Sunbeam Academy Samneghat at Sunbeam Academy Varanasi, covering academics, activities, facilities, and student development.'
        ],

        'sunbeam-academy-sarainandan' => [
            'title' => 'Sunbeam Academy Sarainandan | Mandatory Public Disclosure ',
            'description' => 'Access complete details of Sunbeam Academy Sarainandan at Sunbeam Academy Varanasi, covering academics, activities, facilities, and student development.'
        ],
    ];

    $metaTitle = $seo[$slug]['title']
        ?? ('Disclosure - ' . $branchDisclosure->name);

    $metaDescription = $seo[$slug]['description']
        ?? 'Let a child become an independent learner who is morally strong and environmentally aware.';
@endphp
@section('title', $metaTitle)
@section('description', $metaDescription)
<!-- @section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective') -->
@section('main-content')

<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h1 class="breadcrumb-title">{{ $branchDisclosure->name }} - Disclosure</h1>
    </div>
</div>
<!-- breadcrumb end -->
<!-- about area -->
<div class="disclosure-list pt-50 pb-30">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="pr-card">
                    @if(isset($branchDisclosure) && $branchDisclosure->disclosures->count() > 0)
                    <h2 class="card-ttle">CBSE Disclosure</h2>
                    <div class="card-desc-bx">
                        <ul>
                            @foreach($branchDisclosure->disclosures as $disclosure)
                            <li class="view-report">
                                <a href="{{ $disclosure->file ? asset('upload/disclosure/'.$disclosure->file) : '#' }}"
                                    @if($disclosure->file) download="{{ $disclosure->title }}" @endif>
                                    {{ $disclosure->title }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @else
                    <p>No disclosures available for this branch.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection