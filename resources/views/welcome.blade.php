@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                <form action="{{route('change')}}" method="get">
                    <div class="form-group">
                        <label for="">Base currency</label><br>
                        <input type="text" name="number" value="{{ Request::input('number', Request::old('number')) }}"
                               class="form-control" style="width:50%;height:27px; float:left">
                        <select class="form-control" name="change-from" id="" style="float: left; width: 20%">
                            <option value="1" {{(Request::input('change-from')==1) ? 'selected' : ''}}>USD</option>
                            <option value="1.22" {{(Request::input('change-from')==1.22) ? 'selected' : ''}}>EUR
                            </option>
                            <option value="1.13" {{(Request::input('change-from')==1.13) ? 'selected' : ''}}>GBP
                            </option>
                        </select>
                    </div>
                    @if($errors->first('number'))
                        <div class=" form-group alert-danger custom-alert" style="    width: 70%; margin-top: 35px;">
                            <ul>
                                <li>{{ $errors->first('number') }}</li>
                            </ul>
                        </div>
                    @endif
                    <div class="form-group" style="margin-top: 35px;">
                        <label for="">Change to </label>
                        <select class="form-control" name="change-to" id="" style="width: 20%">
                            <option value="USD" {{(Request::input('change-to')=='USD') ? 'selected' : ''}}>USD</option>
                            <option value="EUR" {{(Request::input('change-to')=='EUR') ? 'selected' : ''}}>EUR</option>
                            <option value="GBP" {{(Request::input('change-to')=='GBP') ? 'selected' : ''}}>GBP</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary change">Change</button>
                    </div>
                </form>
                @if(isset($currency))
                    <div class="form group result">
                        <?=  $currency  ?>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection