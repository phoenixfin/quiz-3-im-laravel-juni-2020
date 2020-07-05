@extends('layouts.master')

@section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Article Details</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/article">Back</a></li>
                <li class="breadcrumb-item active">Article #{{ $article->id }}</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">{{ $article->title}}</h3><br>
            <h6 class="card-subtitle"><i>slug: {{ $article-> slug}}
              </i>
            </h6><br>
          </div>
          <div class="card-body">
            <h6 class="card-subtitle"><i>Created on: {{ $article-> date_created}}; <br>
              Modified on: {{ $article->date_modified }}
              </i>
            </h6><br>
            <p class="card-text">{{ $article-> content}}</p>
          </div>
          <!-- /.card-body -->

          <div class="card-footer border-bottom">
            <?php $tags = explode(',', $article-> tags); ?>
            @foreach($tags as $tag)
              <span class="btn btn-sm btn-info">{{ $tag }}</span>
            @endforeach
          </div>

          <!-- /.card-footer-->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>


@endsection
