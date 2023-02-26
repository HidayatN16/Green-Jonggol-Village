function displayPreviewImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            document.getElementById('previewImage').setAttribute('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}