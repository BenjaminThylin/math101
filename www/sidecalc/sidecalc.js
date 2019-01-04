var hist = [];
var histIndex = hist.lenght+1;

$(".textview").ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
        equal();
      event.preventDefault();
      return false;
    };
  });
});

function insert(num) {
    var oldval = $(".textview").val() || 0;
    $(".textview").val(oldval + num);
    $(".textview").focus();
};

function addhist(exp) {
    hist.push(exp);
    console.log(hist);
    
};

function equal() {
    var exp = $(".textview").val()
    if (exp) {
        $(".textview").val(eval(exp));
    }
    addhist(exp);
    $(".textview").focus();
    histIndex = hist.length-1;
    // e.preventDefault();
    addOptions(exp);
};

function addOptions(exp) {
    $('#histdrop').prepend($('<option>', {
        value: exp,
        text: exp
    }));
};

$('select').on('change', function() {
    $(".textview").val( this.value );
  });

$(document).keydown(function (e) {
    if (e.keyCode == 38 && $(".textview").is(":focus")) {
        --histIndex;
        $(".textview").val(hist[histIndex]);
    }
});

$(document).keydown(function (e) {
    if (e.keyCode == 40 && $(".textview").is(":focus")) {
        $(".textview").val(hist[histIndex]);
        histIndex++;
    }
});

function clean() {
    $(".textview").val("");
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