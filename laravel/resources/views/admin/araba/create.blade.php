@extends("layouts.admin")
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(session("status"))
                        <div class="alert alert-primary" role="alert">
                            {{session("status")}}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Araba Ekle</h4>
                            <p class="category">Araba Oluşturunuz</p>
                        </div>
                        <div class="card-content">
                            <form enctype="multipart/form-data" action="{{route("admin.araba.create.post")}}" method="POST">
                                {{csrf_field()}}

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Araba Adı</label>
                                            <input type="text" name="name" class="form-control">
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <select name="markaid" class="form-control" id="">
                                                @foreach($marka as $key => $value)
                                                    <option value="{{$value['id']}}">{{$value['name']}}</option>
                                                @endforeach
                                            </select>
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <select name="kategoriid" class="form-control" id="">
                                                @foreach($kategori as $key => $value)
                                                    <option value="{{$value['id']}}">{{$value['name']}}</option>
                                                @endforeach
                                            </select>
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <select name="saticiid" class="form-control" id="">
                                                @foreach($satici as $key => $value)
                                                    <option value="{{$value['id']}}">{{$value['name']}}</option>
                                                @endforeach
                                            </select>
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <input type="file" name="image" style="opacity: 1; position: inherit" >
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Fiyat</label>
                                            <input type="text" name="fiyat" class="form-control">
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Açıklama</label>
                                            <textarea name="aciklama" id="" cols="30" rows="10"
                                                      class="form-control"></textarea>
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Araba Ekle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
