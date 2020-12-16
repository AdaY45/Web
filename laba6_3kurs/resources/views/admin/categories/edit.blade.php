@extends('admin.layouts.app_admin')

@section('title','admin | category | create | lovely')

@section('content')

@component('admin.components.breadcrumb')
    @slot('title') Редагування категорії @endslot
    @slot('parent') Головна @endslot
    @slot('active') Категорії @endslot
@endcomponent

<form class="creation_form" method="POST" action="{{ action('App\Http\Controllers\Admin\CategoryController@update',$category) }}" >
    <input type="hidden" name="_method" value="put">
    {{ csrf_field() }}
    @include('admin.categories.partials.form')
</form>

@endsection