@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Result') }}</div>

                <div class="card-body">
                        <div class="form-group row mb-0">
						@for ($i = 0; $i < sizeof($result); $i++)
                            <div class="col-md-8 offset-md-4">
								<label>{{ $result[$i] }}</label>
                            </div>
						@endfor
                        </div>
						<div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <a class="btn btn-link" href="{{ url('/') }}">
                                    {{ __('Kembali') }}
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
