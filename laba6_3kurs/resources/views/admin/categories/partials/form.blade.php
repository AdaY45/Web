<label for="">Назва</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категорії" value="{{$category->title ?? ''}}">

<label for="">Батьківська категорія</label>
<select class="form-control" name="parent_id">
    <option value="0">Без батьківської категорії</option>
    @include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<label for="">Контент</label>
<input type="text" class="form-control" name="content" placeholder="Контент" value="{{$category->content ?? ''}}">

<label for="">Alias</label>
<input class="form-control" type="number" id="aliasOf" name="aliasOf" min="1">

<label for="">Тип категорії</label>
<input type="text" class="form-control" name="entity" placeholder="Контент" value="{{$entity ?? ''}}">

@if ($entity == "brands")
    @foreach ($field_brands as $brand)
        <label for="">{{$brand->caption}}</label> 
        <input type="{{$brand->type}}" class="form-control" name="{{$brand->field}}" value=" ">
    @endforeach
@elseif ($entity == "makeup")
    @foreach ($field_makeup as $makeup)
        <label for="">{{$makeup->caption}}</label> 
        <input type="{{$makeup->type}}" class="form-control" name="{{$makeup->field}}" value=" ">
    @endforeach
@elseif ($entity == "care")
    @foreach ($field_care as $care)
        <label for="">{{$care->caption}}</label> 
        <input type="{{$care->type}}" class="form-control" name="{{$care->field}}" value=" ">
    @endforeach
@elseif ($entity == "hair")
    @foreach ($field_hair as $hair)
        <label for="">{{$hair->caption}}</label> 
        <input type="{{$hair->type}}" class="form-control" name="{{$hair->field}}" value=" ">
    @endforeach
@endif

<input type="submit" value="Зберегти" class="savebtn">