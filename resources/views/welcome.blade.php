@extends('layout')

@section('title', 'Voting Page')

@section('content')
    {{route('admin.home')}}

    <form id="form1" class="form-horizontal">
        <section class="panel">
            <header class="panel-heading">

                <h2 class="panel-title">Vote</h2>

            </header>
            <div class="panel-body">
                <div class="form-group">
                    <span class="col-sm-3 control-label"> President: </span>
                    <div class="col-sm-8">
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                Olalere Adisa
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                sefura ishola
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                kikelomo agba
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <span class="col-sm-3 control-label"> Vice-President: </span>
                    <div class="col-sm-8">
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                Olalere Adisa
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                sefura ishola
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                kikelomo agba
                            </label>
                        </div>
                    </div>
                </div>


            </div>
            <footer class="panel-footer">
                <button class="btn btn-primary">Add Post </button>
            </footer>
        </section>
    </form>

@endsection