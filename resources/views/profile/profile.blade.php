@extends('profile.layout')

@section('noidung')

<h3>hhhhhhhhhhhhh</h3>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="err1">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  </form>
</div>
</div>
@endsection
