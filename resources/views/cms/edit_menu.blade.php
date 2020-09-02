@extends('cms.cms_master')


@section('welcome')


<div class="">
    <h1>Edit Menu</h1>
</div>

<div class="row m-4 p-4">
    <div class="col-8">
        <div class="card">
            <h5 class="card-header">Edit {{$menu_item['link']}}</h5>
            <div class="card-body">
                <form action="{{ url('cms/menu/' . $menu_item['id'])}}" method="POST" novalidate="novalidate"
                    autocomplete="off">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="item_id" value="{{ $menu_item['id']}}">
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input value="{{$menu_item['link']}}" type="text" name="link" id="link"
                            class="form-control original-text">
                        <small class="text-muted">min 2 chars max 15 chars</small>
                        <span class="text-danger">{{$errors->first('link')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input value="{{$menu_item['mtitle']}}" type="text" name="title" id="title"
                            class="form-control">
                        <small class="text-muted">min 2 chars max 15 chars</small>
                        <span class="text-danger">{{$errors->first('link')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="url">Url</label>
                        <input value="{{$menu_item['murl']}}" type="text" name="url" id="url"
                            class="form-control target-text">
                        <small class="text-muted">only small letters and - and numbers</small>
                        <span class="text-danger">{{$errors->first('link')}}</span>
                    </div>
                    <a href="{{ url('cms/menu')}}" class="btn float-right"><span style="font-size: 3em; "><i
                                class="text-danger far fa-times-circle"></i></span></a>
                    <button name="submit" type="submit" class="float-left" style="border:none;"><span
                            style="font-size: 4em; "><i class="text-success far fa-check-circle"></i></span></button>
                </form>

            </div>
        </div>
    </div>
</div>





@endsection