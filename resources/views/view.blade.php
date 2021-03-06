@extends('layouts.master')

@section('menu')
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
        <a href="{{ route('overview') }}" class="mdl-layout__tab is-active"><i class="material-icons" style="font-size: 24px;">arrow_back</i></a>
    </div>
@endsection

@section('content')
    <div class="mdl-layout__tab-panel is-active" id="overview">
        <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col-desktop">
                <div class="mdl-card__supporting-text" style="background: url({{ $post->original_image }})  center center / cover; height: 300px;">

                </div>
                <div class="mdl-card__supporting-text">
                    <h4>{{ $post->title }}</h4>
                        {{ $post->content }}
                </div>
                <a href="{{ route('delete', $post->id) }}" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" style="width: 60px; margin: 20px;">delete</a>

            </div>
        </section>
    </div>
@endsection

