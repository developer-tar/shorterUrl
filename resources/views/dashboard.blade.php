@extends('app')

@section('content')
   @include('header')
    @if(Auth::user()->status == "User")
    <div class="container">
    <h3>URL Shortener</h3>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
 
<form action="{{ route('url.shortner') }}" method="POST">
    @csrf
    <label for="original_url">Enter URL to Shorten:</label>
    <center><input type="text" id="original_url" name="original_url" required class="form-control" required></center>
    @if ($errors->has('original_url'))
       <span class="text-danger">{{ $errors->first('original_url') }}</span>
    @endif

    <button type="submit">Shorten URL</button>
</form>

</div>
@endif
@if(count($records)>0)
<div class="container mt-3">
            <h3>User creating url  listing</h3>

    <table>
        <thead>
            <tr>
                <th>Shortner url </th>
                <th>original url</th>
                <th>No of times hits the shortner url</th>
            </tr>
        </thead>
        <tbody>
                @foreach($records as $details)
                <tr>
                    <td><a href="url/{{$details->shortner_url}}">{{$details->shortner_url}}</a></td>
                    <td>{{$details->original_url}}</td>
                    <th>{{$details->hiturl_count}}</th>
                </tr>
                @endforeach         
        </tbody>
    </table>
</div>
@endif
@endsection