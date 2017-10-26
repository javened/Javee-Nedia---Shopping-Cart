@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard - <a href="/cart/{{auth::user()->id}}">Cart</a></div>

                <div class="panel-body">
                    <div style="float: left;">
                        <div style="display: inline-block; margin: 10px 10px 10px 10px;">
{{$products[$i]->name}}
<img src="{{$products[$i]->path}}">
{{$products[$i]->price}}
                            <form method="POST" action="{{/addCart/{{auth::user()->id/{{products->price}}}}}}">
                                {{csrf_field()}}
                                <button name="id" value="{{$product->id}}">Add-To-Cart</button>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
