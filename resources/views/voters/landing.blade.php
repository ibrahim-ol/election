@extends('layout')

@section('title', 'Voting Page')

@section('content')
    {{route('admin.home')}}

    <form action="{{url('vote')}}" method="POST" class="form-horizontal">
        {{csrf_field()}}
        <section class="panel">
            <header class="panel-heading">

                <h2 class="panel-title">Vote</h2>

            </header>
            <div class="panel-body">
                @foreach($posts as $post)

                    @if(count($post->candidates) > 0)
                        <div class="form-group">
                            <span class="col-sm-3 control-label"> {{ucfirst($post->title)}}: </span>
                            <div class="col-sm-8">
                                @foreach($post->candidates as $candidate )
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="can[{{ $post->id }}][]" id="post_{{$post->id}}" value="{{$candidate->id}}" checked="">
                                        {{$candidate->name. " - ".$candidate->matric_no }}
                                    </label>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    @endif

                @endforeach
            </div>

            <footer class="panel-footer">
                <button class="btn btn-primary">Vote </button>
            </footer>
        </section>
    </form>

@endsection