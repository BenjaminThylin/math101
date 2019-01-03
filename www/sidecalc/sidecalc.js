
function insert(num) {
    var oldval = $(".textview").val() || 0;
    $(".textview").val(oldval + num);
}

function equal() {
    var exp = $(".textview").val()
    if (exp) {
        $(".textview").val(eval(exp))
    }
}

function clean() {
    $(".textview").val("")
}

function back() {
    var exp = $(".textview").val();
    $(".textview").val(exp.substring(0, exp.length-1));
}

function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
}

// var copyTextareaBtn = $('.js-textareacopybtn');

$('.ctc').click(function(){
    var copyTextarea = $('.textview');
    copyTextarea.focus();
    copyTextarea.select();

    try {
        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';
        console.log('Copying text command was ' + msg);
    } catch (err) {
        console.log('Oops, unable to copy');
    }
});

