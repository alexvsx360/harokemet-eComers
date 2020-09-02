@extends('cms.cms_master')


@section('welcome')


<div class="col-12 mt-5 p-2 text-center">
    <h1>Content</h1>
</div>
<div class=" row">
    @foreach($contents as $item)
    <div class="m-2 p-2 col-4">
        <div class="card">
            <h5 class="card-header">Title: {{ $item['ctitle1']}}</h5>
            <div class="card-body">


                <p class="card-text">Created at: {{ $item['created_at']}}</p>
                <p class="card-text">Updated at: {{ $item['updated_at']}}</p>
                <div class="card-body ">

                    <span style="font-size: 4em; ">
                        <a href="#x" class="m-2 p-2 float-right" data-toggle="modal" data-target=".x{{$item['id']}}"><i
                                class="text-danger fas fa-trash-alt"></i></a>
                    </span>
                    <span style="font-size: 4em; ">
                        <a href="{{ url('cms/content/' . $item['id'] . '/edit')}}"
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
                <form action="{{ url('cms/content')}}" method="POST" novalidate="novalidate" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="menu-id">Manu link</label>
                                <select name="menu_id" id="menu-id" class="form-control">
                                    <option value="">Choose Menu Link...</option>
                                    @foreach($menus as $item)
                                    <option @if(old('menu_id'))==$item['id'] selected="selected" @endif
                                        value="{{ $item['id']}}">{{ $item['link']}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->first('menu_id')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="ctitle1">Title 1</label>
                                <input value="{{old('ctitle1')}}" type="text" name="ctitle1" id="ctitle1"
                                    class="form-control ">
                                <small class="text-muted"> max 50 chars</small>
                                <span class="text-danger">{{$errors->first('ctitle1')}}</span>
                            </div>

                            <div class="form-group">
                                <label for="carticle1">Article 1</label>
                                <textarea cols="30" rows="10" name="carticle1" id="coarticle1"
                                    class="form-control ">{{old('carticle1')}}</textarea>

                                <span class="text-danger">{{$errors->first('carticle1')}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="ctitle2">Title 2</label>
                                <input value="{{old('ctitle2')}}" type="text" name="ctitle2" id="ctitle2"
                                    class="form-control ">
                                <small class="text-muted"> max 50 chars</small>
                                <span class="text-danger">{{$errors->first('ctitle2')}}</span>
                            </div>

                            <div class="form-group">
                                <label for="carticle2">Article 2</label>
                                <textarea cols="30" rows="10" name="carticle2" id="coarticle2"
                                    class="form-control ">{{old('carticle2')}}</textarea>

                                <span class="text-danger">{{$errors->first('carticle2')}}</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="ctitle3">Title 3</label>
                                <input value="{{old('ctitle3')}}" type="text" name="ctitle3" id="ctitle3"
                                    class="form-control ">
                                <small class="text-muted"> max 30 chars</small>
                                <span class="text-danger">{{$errors->first('ctitle3')}}</span>
                            </div>

                            <div class="form-group">
                                <label for="carticle3">Article 3</label>
                                <textarea cols="30" rows="10" name="carticle3" id="coarticle3"
                                    class="form-control ">{{old('carticle3')}}</textarea>

                                <span class="text-danger">{{$errors->first('carticle3')}}</span>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('cms/content')}}" class="btn float-right"><span style="font-size: 3em; "><i
                                class="text-danger far fa-times-circle"></i></span></a>
                    <button name="submit" type="submit" class="float-left" style="border:none;"><span
                            style="font-size: 4em; "><i class="text-success far fa-check-circle"></i></span></button>
                </form>

            </div>
        </div>
    </div>
</div>



@foreach($contents as $item)
<!-- default-modal -->

<!-- modal -->
<div class="modal fade x{{$item['id']}}" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title">Delete -> {{$item['ctitle1']}} ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><!-- / modal-header -->
            <div class="modal-body">
                <p>Deleting the content will be parmenent with no option to reverse!!</p>
            </div><!-- / modal-body -->
            <div class="modal-footer ">

                <form action="{{ url('cms/content/' . $item['id'])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="button" class=" btn btn-danger" data-dismiss="modal">Close</button>
                    <button name="submit" type="submit" class=" btn btn-success " style="border:none;">Delete</button>
                </form>

            </div><!-- / modal-footer -->
        </div><!-- / modal-content -->
    </div><!-- / modal-dialog -->
</div><!-- / modal -->
<!-- / default-modal -->
@endforeach



@endsection