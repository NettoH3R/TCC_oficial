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

// Player Insert


function readMSC(input) {
    var audioElement = $('#msc_upload');
    var imgUp = $('#upMusic');
    var btn_play = $('#btn-play');
    var btn_pause = $('#btn-pause');

    // Play e Pause




    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            audioElement.attr('src', e.target.result);
            imgUp.attr('class', 'iconeUparArquiNone');
            btn_play.attr('class', 'btn-play-insert');

            btn_play.addEventListener('click', playMusica);


            function playMusica() {
                ;
                btn_play.attr('class', 'btn-pause-insert');
                btn_pause.attr('class', 'btn-play-insert');
            }
        }


        reader.readAsDataURL(input.files[0]);

    } else {
        audioElement.removeAttr('src');
        imgUp.attr('class', 'iconeUparArqui');
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