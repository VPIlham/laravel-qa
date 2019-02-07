@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Questions</div>

                <div class="card-body">
                    @foreach ($questions as $quest)
                      <div class="media">
                          <div class="media-body">
                            <h3 class="mt-0">{{ $quest->title }}</h3>
                            {{ str_limit($quest->body,250) }}
                          </div>
                      </div>    
                    @endforeach
                    <div class="mx-auto">
                        {{ $questions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
