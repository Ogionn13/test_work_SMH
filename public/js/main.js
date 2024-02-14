
$(document).ready(function() {
    $('.upload__iphone').on('click', function () {
        console.log('dd3d')
        $.get('/api/product/upload/iphone')
            .then(function (data) {
                console.log(data);
            })
            .catch(function (error) {
                console.error(error);
            });

    })

    $('.productForm').submit(function(event) {
        event.preventDefault();

        let imageUrls = [];

        $(this).find('.image_url').each(function() {
            let value = $(this).val().trim();
            if (value !== '') {
                imageUrls.push(value);
            }
        });

        let formData = new FormData($(this)[0]);
        imageUrls.forEach(function(url) {
            formData.append('images[]', url);
        });
        console.log(formData)
        $.post({
            url: '/api/product',
            data: formData,
            contentType: false,
            processData: false
        })
            .then(function(response) {
                console.log(response)
            })
            .catch(function(error) {
                console.error(error);
            });
    });
});

