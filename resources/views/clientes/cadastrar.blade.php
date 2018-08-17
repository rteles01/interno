@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-body">--}}


            <div class="card">
                <h5 class="card-header">Cadastro de clientes</h5>
                <div class="card-body">
                    <h5 class="card-title">Cadastrar novo cliente</h5>
                    {{--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
                    {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email principal (Este email será MASTER)</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label for="exampleInputFile">File input</label>--}}
                            {{--<input type="file" id="exampleInputFile">--}}
                            {{--<p class="help-block">Example block-level help text here.</p>--}}
                        {{--</div>--}}
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Termos de adesão ao serviço
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>

            </div>




                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection
