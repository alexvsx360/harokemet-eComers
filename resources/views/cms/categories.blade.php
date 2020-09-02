@extends('cms.cms_master')

@section('welcome')

<div class="container">
  <div class="row ">
    <div class="col-12 mt-5 p-2 text-center">
      <h1>Categories</h1>
    </div>
  </div>

  @foreach($categories as $item)

  <div class="card mb-3" style="max-width: 800px; max-height: 400px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{asset('img/' .$item['cimage'])}}" class="card-img-top" alt="{{$item['ctitle']}} image">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$item['ctitle']}}</h5>
          <p class="card-text">{!! $item['carticle'] !!}</p>


          <div class="text-center card-body">
            <span style="font-size: 4em; ">
              <a href="#x" class="m-2 p-2 float-right" data-toggle="modal" data-target=".x{{$item['id']}}"><i
                  class="text-danger fas fa-trash-alt"></i></a>
            </span>
            <span style="font-size: 4em; ">
              <a href="{{ url('cms/categories/' . $item['id'] . '/edit')}}"
                class="m-2 p-2 float-right card-link text-success"><i class="fas fa-edit"></i></a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endforeach

  <form action="{{ url('cms/categories')}}" method="POST" novalidate="novalidate" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <div class="card mb-3" style="max-width: 800px;">
      <div class="row no-gutters">

        <div class="col-md-12">
          <div class="card-body">
            <div class="form-group">
              <label for="image">Category image</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="image" id="image" class="form-control">
                </div>
              </div>
              <small class="text-muted">Image format must be: .jpg, .jpeg, .png, .svg, .gif,</small>
              <span class="text-danger">{{$errors->first('image')}}</span>
            </div>

            <div class="form-group">
              <label for="ctitle">Category name</label>
              <input value="{{ old('ctitle')}}" type="text" name="ctitle" id="ctitle"
                class="original-text form-control">
              <small class="text-muted">min 2 chars, max 30 chars</small>
              <span class="text-danger">{{$errors->first('ctitle')}}</span>
            </div>

            <div class="form-group">
              <label for="carticle">Article</label>
              <input type="text" value="{{ old('carticle')}}" name="carticle" id="carticle" class="form-control ">
              <small class="text-muted">min 2 chars, max 30 chars </small>
              <span class="text-danger">{{$errors->first('carticle')}}</span>
            </div>
            <div class="form-group">
              <label for="curl">Category Url</label>
              <input value="{{ old('curl')}}" type="text" name="curl" id="curl" class="target-text form-control">
              <small class="text-muted">only small letters and - and numbers</small>
              <span class="text-danger">{{$errors->first('url')}}</span>
            </div>
            <p>
              <a href="{{ url('cms/categories')}}" class="btn float-right"><span style="font-size: 3em; "><i
                    class="text-danger far fa-times-circle"></i></span></a>
              <button name="submit" type="submit" class="float-left" style="border:none;"><span
                  style="font-size: 3.5em; "><i class="text-success far fa-check-circle"></i></span></button>
            </p>
  </form>
</div>

@foreach($categories as $item)
<!-- default-modal -->

<!-- modal -->
<div class="modal fade x{{$item['id']}}" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title">Delete -> {{$item['ctitle']}} ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><!-- / modal-header -->
      <div class="modal-body">
        <p>Deleting the category includs all the products in this category, are you shure??!!</p>
      </div><!-- / modal-body -->
      <div class="modal-footer ">

        <form action="{{ url('cms/categories/' . $item['id'])}}" method="POST">
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