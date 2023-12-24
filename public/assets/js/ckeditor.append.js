function createNewEditor(targetElement) {
    var element = document.createElement("textarea");

    $(element)
        .addClass(".ckeditor")
        .appendTo(targetElement)
        .attr('name', 'value[]');
    $("#main-container").append('<input type="hidden" value="chapterContent" name="key[]"><button class="btn btn-danger delete-editor mt-3"> <i class="fas fa-trash"></i> </button>    <hr> ');

    return CKEDITOR.replace(element);
}

$(document).ready(function () {
    $(".ckeditor").each(function (_, ckeditor) {
    });

    $(".chapter-video").each(function (_, chapterVideo) {
        var chapterVideoInput = $(chapterVideo).find(".file-input");
        var chapterFileUploadName = $(chapterVideo).find(".upload-file-name");
        $(chapterVideoInput).on("change", function (e) {
            var filesLength = e.target.files.length;
            if (filesLength) {
                $(chapterFileUploadName)
                    .find("span")
                    .text(e.target.files[0].name);
            }
        });
    });
    $(".add-chapter-para").each(function (_, addParaBtn) {
        var addTo = $(addParaBtn).data("add-to");
        $(addParaBtn).on("click", function () {
            createNewEditor(addTo);
        });
    });

    $(".delete-editor").on("click", function () {
        var editorsList = Object.keys(CKEDITOR.instances);
        var editorElement = $(".editor");
        editorsList.forEach(function (_, i) {
            if (i === editorsList.length - 1) {
                CKEDITOR.instances[editorsList[i]].destroy();
                $(editorElement[i]).remove();
            }

            console.log($('.ckeditor'));

        });
    });

});