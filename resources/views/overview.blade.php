@extends('layouts.master')

@section('menu')
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
        <a href="{{ route('overview') }}" class="mdl-layout__tab is-active">Overview</a>
        <a href="{{ route('add') }}" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp mdl-color--accent" id="add">
            <i class="material-icons" role="presentation">add</i>
            <span class="visuallyhidden">Add</span>
        </a>
    </div>
@endsection

@section('content')
    @foreach($posts as $post)
    <div class="mdl-layout__tab-panel is-active" id="overview">
        <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <header  class=" mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone  mdl-color-text--white" style="background: url({{ $post->thumb }})  center center / cover #fff; width: 215px;">
                @if($post->thumb == "")
                     <img src="{{ asset('/images/image_loading.gif') }}" alt="">
                @endif
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card__supporting-text">
                    <h4>{{ $post->title }}</h4>
                    {{ $post->content }}
                </div>
                <div class="mdl-card__actions">
                    <a href="{{ route('view', $post->id) }}" class="mdl-button">Read more</a>
                </div>
            </div>
        </section>
    </div>
    @endforeach
@endsection