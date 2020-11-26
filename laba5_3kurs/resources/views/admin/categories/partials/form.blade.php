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

<input type="submit" value="Зберегти" class="savebtn">