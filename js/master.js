function stepsBar(step) {
    var $progressDiv = $("#progressBar");
    var $progressBar = $progressDiv.progressStep({ activeColor: "yellow", "font-weight": "bold" });
    $progressBar.addStep("Select file");
    $progressBar.addStep("Insert email");
    $progressBar.addStep("Done");
    $progressBar.setCurrentStep(step);
    $progressBar.refreshLayout();
}

function cleanProgressBarHTML() {
    document.getElementById('progressBar').innerHTML = "";
}

$(document).ready(function readyDoc() {
    stepsBar(0);
});

$(document).on("change", '#customFile', function () {
    var i = $(this).prev('label').clone();
    var file = $('#customFile')[0].files[0].name;
    $(this).prev('label').text(file);
});

function step0(div0, div1) {
    cleanProgressBarHTML();

    var w = document.getElementById(div0);
    var x = document.getElementById(div1);
    if (x.style.display === "none") {
        stepsBar(1);
        console.log("Step 2")
        w.style.display = "none";
        x.style.display = "block";
    }
}
function step1(div1, div2) {
    cleanProgressBarHTML();

    var w = document.getElementById(div1);
    var x = document.getElementById(div2);
    if (x.style.display === "none") {
        stepsBar(2);
        console.log("Step 3")
        w.style.display = "none";
        x.style.display = "block";
    } else {
        stepsBar(0);
        console.log("Step 1")
        w.style.display = "block";
        x.style.display = "none";
    }
}
function step2(div1, div2) {
    cleanProgressBarHTML();
    
    var w = document.getElementById(div1);
    var x = document.getElementById(div2);
    if (x.style.display == "block") {
        stepsBar(1);
        console.log("Step 2")
        x.style.display = "none";
        w.style.display = "block";
    }
}