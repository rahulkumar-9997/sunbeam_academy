@extends('frontend.layouts.master')
@section('title', 'Disclosure - ' . $branchDisclosure->name)
@section('description', 'Let a child become an independent learner who is morally strong and environmentally aware.')
@section('keywords', 'Sunbeam Academy, Samneghat Varanasi, Experienced Teachers, Global Perspective,Technology Perspective')
@section('main-content')

<div class="site-breadcrumb bread-head" style="background: url({{ asset('fronted/assets/sunbeam-img/breadcrumb/banner-1.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">{{ $branchDisclosure->name }} - Disclosure</h2>
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