window.onload = function () {

    const imageInput = document.querySelector("#profilePictureInput");
    let uploadedImage = "";

    imageInput.addEventListener("change", function() {
        console.log(imageInput.value);
        const reader = new FileReader();
        reader.addEventListener("load", function() {
            uploadedImage = reader.result;
            document.querySelector("#displayProfilePicture").src = `${uploadedImage}`;
        });
        reader.readAsDataURL(this.files[0]);
    });

}


