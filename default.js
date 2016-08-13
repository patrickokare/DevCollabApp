


$(document).ready(function(){



    var code = $(".codemirror-textarea")[0];



    var editor = CodeMirror.fromTextArea(code,{
        mode: "htmlmixed",
        theme: "night",
        tabSize: 10,
        lineNumbers: true,
        firstLineNumber:1,
        extraKeys:{"Ctrl-Space": "autocomplete"}
    });

    $("#preview-form").save(function(e){
        var value = editor.getValue();
        if(value.length== 0){
            alert("missing comment!");
        }
    });
});

//Rememeber to chamge .save to .submit(function(e)