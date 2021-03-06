@extends('app')

@section('title', '記事更新')

@include('nav')

@section('content')
    <div ccontainer>
      <div class="row">
        <div class="col-12">
          <div class="card mt-3">
            <div class="card-body pt-0">
              @include('error_card_list')
              <div class="card-text">
                <form action="{{ route('articles.update', ['article' => $article]) }}" method="POST">
                  @method('PATCH')
                  @include('articles.form')
                  <button type="submit" class="btn blue-gradiant btn-block">更新する</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection