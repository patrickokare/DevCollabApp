

$(document).ready(function(){
    var script_js = {
        init: function(){
            var code = document.getElementById("ed-ta");
            var output = document.getElementById("op-iframe");
            var editor = CodeMirror.fromTextArea(
                code,
                {
                    lineNumbers: true,
                    mode: "text/html",
                    extraKeys: {
                        "Ctrl-Space": "autocomplete"
                    },
                    indentUnit: 2
                }
            );
            var btnrun = $("#btn-run");
            btnrun.on("click", function(){
                var v = editor.getValue();
                output.contentDocument.write(v);
                output.contentDocument.close();
            });
        }
    };
    script_js.init();
});
