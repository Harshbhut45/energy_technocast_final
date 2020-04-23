@extends('layouts.admin')

@php($title = 'Products')
@push('title', yieldTitle($title))

@section('breadcrumb-title', $title)

@section('breadcrumb-link')
    <li class="breadcrumb-item active" aria-current="page">
        <a href="{{ route('home') }}">Products</a>
    </li>
@endsection

@section('breadcrumb-btn')
    <a class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5" href="{{ route('products.create') }}"><i data-feather="plus" class="wd-10 mg-r-5"></i>Create Product</a>
@endsection

@section('breadcrumb')
    @include('components.breadcrumb')
@endsection

@push('content-class', 'content-fixed')
@push('container-class', 'container-fluid')

@section('content')
<div class="card">
    <div class="card-body">
      <div class="bs-example container-fluid" data-example-id="striped-table">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>@sortablelink('id', 'ID')</th>
              <th>@sortablelink('name', 'Name')</th>
              <th>Image</th>
              <th>Category</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
            <tr @if($product->deleted_at != null) style="opacity: 0.5" @endif>
              <td>{{ $product->id }}</td>
              <td>{{ $product->name }}</td>
              <td>
                <img src="{{ $product->image_full_path }}" style="max-height: 64px;">
              </td>
              <td>{{ $product->category->name }}</td>
              <td>{{ $product->status }}</td>
              <td>
                <a href="{{ route('products.edit', ['id' => $product->id ]) }}"><i data-feather="edit-2" width="18" height="18"></i></a>
                
                @if($product->deleted_at != null)
                <a href="{{ route('products.delete',['id'=> $product->id, 'restore' => true ]) }}">
                  <i data-feather="rotate-ccw" width="18" height="18" stroke="green"></i>
                </a>
                @else
                <a href="{{ route('products.delete',['id'=> $product->id ]) }}">
                  <i data-feather="trash" width="18" height="18" stroke="red"></i>
                </a>
                @endif
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
<div class="mt-4">
    {!! $products->appends(\Request::except('page'))->render() !!}
</div>
@endsection

