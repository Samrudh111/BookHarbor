@push('scripts')
  <script>
// Get the file input element
var imageInput = document.getElementById('image-input');

// Add an event listener to the file input
imageInput.addEventListener('change', function(event) {
    // Get the selected file
    var selectedFile = event.target.files[0];

    // Create a FileReader object
    var reader = new FileReader();

    // Set up the FileReader onload event
    reader.onload = function() {
        // Get the data URL of the loaded image
        var imageDataURL = reader.result;

        // Set the source of the image element to the data URL
        var previewImage = document.getElementById('preview-image');
        previewImage.src = imageDataURL;

        // Display the image
        previewImage.style.display = 'block';
    };

    // Read the selected file as a data URL
    reader.readAsDataURL(selectedFile);
});
</script>

<script>
    function capitalizeFirstLetter() {
  var input = document.getElementById("myInput");
  var inputValue = input.value;
  var capitalizedValue = inputValue.charAt(0).toUpperCase() + inputValue.slice(1);
  input.value = capitalizedValue;
}

</script>
@endpush
