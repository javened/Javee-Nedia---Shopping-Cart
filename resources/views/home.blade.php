@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard - <a href="/cart/{{auth::user()->id}}">Cart</a></div>

                <div class="panel-body">
                    <div style="float: left;">
                        @for($i = 0; $i < count($products); $i++)
                        <div style="display: inline-block; margin: 10px 10px 10px 10px;">
                            <a href="/product/{{$products[$i]->id}}">{{$products[$i]->name}}</a>
                            <a href="/product/{{$products[$i]->id}}"><img style="margin-top: 50px;"height="20%" width="30%" src="{{$products[$i]->path}}"> </a>
                            <a href="/product/{{$products[$i]->id}}">{{$products[$i]->price}}</a>
                            <form method="POST" action="{{/addCart/{{auth::user()->id/{{products[$i]->price}}}}}}">
                                {{csrf_field()}}
                                <button name="id" value="{{$product[$i]->id}}">Add-To-Cart</button>
                            </form>
                        </div> 
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
