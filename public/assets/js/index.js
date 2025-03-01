//step js form
$(document).ready(() => {
    //toastr
    toastr.options = {
        closeButton: true,
        debug: false,
        newestOnTop: true,
        progressBar: true,
        positionClass: "toast-top-right",
        preventDuplicates: false,
        onclick: null,
        showDuration: "300",
        hideDuration: "500",
        timeOut: "4000",
        extendedTimeOut: "1000",
        showEasing: "swing",
        hideEasing: "linear",
        showMethod: "fadeIn",
        hideMethod: "fadeOut",
    };

    //multistep form
    let form = $("#example-form");
    $("#finish").click(() => {
        console.log("clickde");
    });

    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            confirm: {
                equalTo: "#password",
            },
        },
    });

    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function (event, currentIndex, newIndex) {
            // Allow previous step without validation
            if (newIndex < currentIndex) {
                return true;
            }

            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function (event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function (event, currentIndex) {
            toastr.success("Form is successfully submited", "Confirmed");
            document.getElementById("myButton").click();
        },
    });

    //internationl telephone
    const inputPhone = document.getElementById("phone");

    window.intlTelInput(inputPhone, {
        initialCountry: "bd",
        separateDialCode: true,
        loadUtils: () =>
            import(
                "https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.1/build/js/utils.js"
            ),
    });

    //envet information
    $.ajax({
        url: "https://bdapis.com/api/v1.1/districts",
        method: "GET",
        success: (res) => {
            const places = res.data.map((places) => places.district);

            $("#eventVenue").autocomplete({
                source: places,
            });
        },
        error: (err) => {
            alert("Place does not load", err);
        },
    });

    //text editor
    tinymce.init({
        selector: "#eventDesc",
        plugins: [
            // Core editing features
            "anchor",
            "autolink",
            "charmap",
            "codesample",
            "emoticons",
            "image",
            "link",
            "lists",
            "media",
            "searchreplace",
            "table",
            "visualblocks",
            "wordcount",
            // Your account includes a free trial of TinyMCE premium features
            // Try the most popular premium features until Feb 13, 2025:
            "checklist",
            "mediaembed",
            "casechange",
            "export",
            "formatpainter",
            "pageembed",
            "a11ychecker",
            "tinymcespellchecker",
            "permanentpen",
            "powerpaste",
            "advtable",
            "advcode",
            "editimage",
            "advtemplate",
            "ai",
            "mentions",
            "tinycomments",
            "tableofcontents",
            "footnotes",
            "mergetags",
            "autocorrect",
            "typography",
            "inlinecss",
            "markdown",
            "importword",
            "exportword",
            "exportpdf",
        ],
        toolbar:
            "undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat",
    });
});
