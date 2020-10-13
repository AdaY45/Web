@extends('admin.layouts.app_admin')

@section('title','admin | categories | lovely')

@section('content')

@component('admin.components.breadcrumb')
    @slot('title') Список категорій @endslot
    @slot('parent') Головна @endslot
    @slot('active') Категорії @endslot
@endcomponent

<div class="btn">
    <a href="/admin/category/create" class="adminBtn create">Створити категорію</a>
</div>
<div class="filter-btn">
    <a href="{{route('admin.category.show', 0)}}">Всі</a>
    <a href="{{route('admin.category.show', 1)}}">Бренди</a>
    <a href="{{route('admin.category.show', 2)}}">Макіяж</a>
    <a href="{{route('admin.category.show', 3)}}">Догляд</a>
    <a href="{{route('admin.category.show', 4)}}">Волосся</a>
</div>
<div class="filter-sort">
    <a href="{{route('admin.category.show', -1)}}">По порядку</a>
    <a href="{{route('admin.category.show', 0)}}">За датою створення</a>
    <a href="{{route('admin.category.show', -2)}}">За датою оновлення</a>
</div>
<table class="categories_table" cellpadding="0" cellspacing="0">
<thead>
    <th class="name">Назва</th>
    <th class="name action">Публікація</th>
    <th class="action">Дія</th>
</thead>
<tbody>
    @forelse ($categories as $category)
    <tr>
        <td>{{$category->title}}</td>
        <td>{{$category->created_at}}</td>
        <td class="category_edit">
            <a href="{{route('admin.category.edit', $category)}}">Редагувати</a>
        </td>
    </tr>
    @empty
    <tr>
        <td>Дані відсутні</td>
        <td></td>
        <td></td>
    </tr>
    @endforelse
</tbody>

</table>

@endsection