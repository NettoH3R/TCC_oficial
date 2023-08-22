$('input').on('change', function () {
    $('body').toggleClass('blue');
});


const imagem = document.getElementById('imgcapa');
const cropper = new Cropper(imagem, function () {

})

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#file_upload')
                .attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function readMSC(input) {
    var audioElement = $('#msc_upload');
    var buttonplayer = $('#upMusic');

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            audioElement.attr('src', e.target.result);
            audioElement.attr('controls', true);
            buttonplayer.removeAttr('class')
        };

        reader.readAsDataURL(input.files[0]);
    } else {
        audioElement.removeAttr('src');
        audioElement.removeAttr('controls');
        buttonplayer.attr('class', 'iconeUparArqui')
    }
}


function changeColor() {
    const selectElement = document.getElementById("mySelect");
    const selectedOption = selectElement.options[selectElement.selectedIndex];

    if (selectedOption) {
        selectElement.classList.add("selected");
    } else {
        selectElement.classList.remove("selected");
    }
}