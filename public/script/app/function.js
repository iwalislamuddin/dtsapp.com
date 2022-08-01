function format(num){
    if (num>9999999) {
        num = num.toExponential(3);
    } else if (num>999) {
        num = Math.round(num);
        num = Intl.NumberFormat('en-ID').format(num);
    } else {
        num = Math.round(1000*num)/1000;
        if (num != parseInt(num, 10)) {
            num = num.toFixed(2);
        }
    }

    return num;
}

function numround(v, n) {
    return (Math.round(v*Math.pow(10,n))/Math.pow(10,n));
}

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

const trans = (string = null) => {
    siteLang = undefined ? 'en' : siteLang;

    var str = $.getJSON(baseurl + "/json/language.json",
        function () {}
        ).done(function(data){
            let dict = data[siteLang];
            str = dict[string];
            if (string in dict) {
                return (dict[string]);
            } else {
                return (`app.${string}`);
            };
        });

    return JSON.parse(str.responseText);
    
}