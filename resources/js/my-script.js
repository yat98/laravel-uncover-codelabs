$('input[type="file"]').on('change', function () {
    let filenames = [];
    let files = document.getElementById('profile_picture').files;

    for (let i in files) {
        if (files.hasOwnProperty(i)) {
            filenames.push(files[i].name);
        }
    }

    $(this).next('.custom-file-label').addClass("selected")
        .html(filenames.join(', '));
});

$('.pilihan-background-profil').click(function(){
    let nomorGambar = this.children[0].innerHTML;
    $('#background_picture').val(nomorGambar);
})