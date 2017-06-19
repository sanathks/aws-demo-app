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
                <form action="">
                <div class="mdl-card__supporting-text">
                    <h4>Write a post</h4>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label demo-field">
                            <input class="mdl-textfield__input" type="text" id="heading">
                            <label class="mdl-textfield__label" for="heading">Heading</label>
                        </div>
                         <br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label demo-field">
                            <input class="mdl-textfield__input" type="text" id="summary">
                            <label class="mdl-textfield__label" for="summary">Summary</label>
                        </div>
                     <br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label demo-field">
                            <textarea class="mdl-textfield__input" id="content">

                            </textarea>
                            <label class="mdl-textfield__label" for="content">Content</label>
                        </div>
                </div>
                <div class="mdl-card__actions">
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                        Save
                    </button>
                    <input type="reset" class="mdl-button mdl-js-button mdl-button--raised" value="Clear" style="margin-left: 10px;">
                </div>
                </form>
            </div>
        </section>
    </div>
@endsection