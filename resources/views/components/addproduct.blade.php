
<form class="productForm mt-5">
    <h1>Добавить новый продукт</h1>
    @csrf
    <div class="form-group w-50 ml-2">
        <input type="text" class="form-control  mb-3" name="title" placeholder="Название продукта: Iphone">
        <textarea class="form-control  mb-3" placeholder="Описание продукта: Изделие из стекла и метала"
                  name="description"></textarea>
        <input type="number" class="form-control  mb-3" name="price" placeholder="Цена: 999">
        <input type="number" class="form-control  mb-3" name="discountPercentage"
               placeholder="Процент скидки(необязательно): 5.2">
        <input type="number" class="form-control  mb-3" name="rating" placeholder="Рейтинг(небязательно): 8.5">
        <input type="number" class="form-control  mb-3" name="stock"
               placeholder="Товарный остаток (небязательно): 1111">
        <input type="text" class="form-control  mb-3" name="brand" placeholder="Бренд: apple">
        <input type="text" class="form-control  mb-3" name="category" placeholder="Категория: телефон">
        <label>url основного изображения</label>
        <input type="url" class="form-control  mb-3 image_url" name="thumbnail" value="{{old('thumbnail')}}"
               placeholder="https://cdn.dummyjson.com/product-images/1/thumbnail.jpg">
        <label>url дополнительных изображений</label>
        <input type="url" class="form-control  mb-3 image_url"
               placeholder="https://cdn.dummyjson.com/product-images/1/1.jpg">
        <input type="url" class="form-control  mb-3 image_url"
               placeholder="https://cdn.dummyjson.com/product-images/1/2.jpg">
        <input type="url" class="form-control  mb-3 image_url"
               placeholder="https://cdn.dummyjson.com/product-images/1/3.jpg">
        <button type="submit" class="btn btn-primary">Отправить продукт</button>
    </div>

</form>
