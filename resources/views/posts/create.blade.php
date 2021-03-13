@extends('layouts.app')

@section('content')
<form>
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Description</label>
      <textarea class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Create</button>
  </form>

@endsection