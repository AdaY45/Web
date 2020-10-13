<label for="">Назва</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категорії" value="{{$category->title ?? ''}}" required>

<label for="">Батьківська категорія</label>
<select class="form-control" name="parent_id">
    <option value="0">Без батьківської категорії</option>
    @include('admin.categories.partials.categories', ['categories' => $categories])
</select>

<input type="submit" value="Зберегти" class="savebtn">