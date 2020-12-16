@extends('admin.layouts.app_admin')

@section('title','admin | category | create | lovely')

@section('content')

@component('admin.components.breadcrumb')
    @slot('title')Тип категорії @endslot
    @slot('parent') Головна @endslot
    @slot('active') Категорії @endslot
@endcomponent

<form class="creation_form" method="Get" action="{{route('admin.category.create')}}" >
    {{ csrf_field() }}
    <label for="">Вкажіть тип категорії</label>
    <select class="form-control" name="entity">
        <option value="{{null}}">Нова</option>
        @foreach($entities as $entity)
            <option value="{{$entity->entity}}">{{$entity->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="Вибрати" class="savebtn">

</form>

@endsection