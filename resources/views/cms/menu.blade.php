@extends('cms.cms_master')


@section('welcome')


<div class="col-12 mt-5 p-2 text-center">
    <h1>Menus</h1>
</div>
<div class=" row">
    @foreach($menus as $item)


    <div class="m-2 p-2 col-4">
        <div class="card">
            <h5 class="card-header">Link: {{ $item['link']}}</h5>
            <div class="card-body">
                <p class="card-text">Url: {{ $item['murl']}}</p>
                <p class="card-text">Title: {{ $item['mtitle']}}</p>
                <p class="card-text">Created at: {{ $item['created_at']}}</p>
                <p class="card-text">Updated at: {{ $item['updated_at']}}</p>
                <div class="card-body ">



                    <span style="font-size: 4em; ">
                        <a href="#x" class="m-2 p-2 float-right" data-toggle="modal" data-target=".x{{$item['id']}}"><i
                                class="text-danger fas fa-trash-alt"></i></a>
                    </span>
                    <span style="font-size: 4em; ">
                        <a href="{{ url('cms/menu/' . $item['id'] . '/edit')}}"
                            class="m-2 p-2 float-right card-link text-success"><i class="fas fa-edit"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    @endforeach
</div>
<div class="row ">
    <div class="m-2 p-2 col-9">
        <div class="card">
            <h5 class="card-header">Creat new</h5>
            <div class="card-body">
                <form action="{{ url('cms/menu')}}" method="POST" novalidate="novalidate" autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input value="{{old('link')}}" type="text" name="link" id="link"
                            class="form-control original-text">
                        <small class="text-muted">min 2 chars max 15 chars</small>
                        <span class="text-danger">{{$errors->first('link')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input value="{{old('title')}}" type="text" name="title" id="title" class="form-control">
                        <small class="text-muted">min 2 chars max 15 chars</small>
                        <span class="text-danger">{{$errors->first('link')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="url">Url</label>
                        <input value="{{old('url')}}" type="text" name="url" id="url" class="form-control target-text">
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

</main>
@foreach($menus as $item)
<!-- default-modal -->

<!-- modal -->
<div class="modal fade x{{$item['id']}}" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title">Delete -> {{$item['mtitle']}} ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><!-- / modal-header -->
            <div class="modal-body">
                <p>Deleting the menu delites all the contant in this menu, are you shure??!!</p>
            </div><!-- / modal-body -->
            <div class="modal-footer ">

                <form action="{{ url('cms/menu/' . $item['id'])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="button" class=" btn btn-danger" data-dismiss="modal">Close</button>
                    <button name="submit" type="submit" class="   btn btn-success " style="border:none;">Delete</button>
                </form>

            </div><!-- / modal-footer -->
        </div><!-- / modal-content -->
    </div><!-- / modal-dialog -->
</div><!-- / modal -->
<!-- / default-modal -->
@endforeach


@endsection