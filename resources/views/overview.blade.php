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
    <div class="mdl-layout__tab-panel is-active" id="overview">
        <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
                <i class="material-icons">play_circle_filled</i>
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                <div class="mdl-card__supporting-text">
                    <h4>Features</h4>
                    Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.
                </div>
                <div class="mdl-card__actions">
                    <a href="#" class="mdl-button">Read our features</a>
                </div>
            </div>
        </section>
    </div>
@endsection