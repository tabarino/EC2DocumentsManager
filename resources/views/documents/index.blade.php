@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Documents</h1>
                <br><br>
                <ul class="list-group">
                    @foreach ($documents as $document)
                        <li class="list-group-item">
                            <a href="/documents/{{ $document->id }}">
                                {{ $document->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
