@extends('layouts.app')

@section('content')
    <div id="portfolio-work" class="portfolio-work section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <span class="heading-meta">Portfolio</span>
                    <h2 class="portfolio-heading animate-box" data-animate-effect="fadeInLeft">Recent Work</h2>
                </div>
            </div>
            <div class="row">
                @forelse($projects as $project)
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="project" style="background-image: url({{ 'images/projects/'.$project->subDomain.'/work-1.jpg' }});">
                            <div class="desc">
                                <div class="con">
                                    <h3><a href="{{ 'index/work/'.$project->subDomain }}">{{ $project->title }}</a></h3>
                                    <span>{{ $project->keyworks }}</span>
                                    <p class="icon">
                                        <span><a href="#"><i class="icon-share3"></i></a></span>
                                        <span><a href="{{ 'index/work/'.$project->subDomain }}"><i class="icon-eye"></i> 10</a></span>
                                        <span><a href="#"><i class="icon-heart"></i> 4</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No projects available!!</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
