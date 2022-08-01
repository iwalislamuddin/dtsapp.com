// perhitungan geometri

// run function on document ready
$( document ).ready(function() {
    refresh();
    calculate();
});

function changeType(){
    var imagePath = baseurl + "/images/";
    var imageNum = $("#inputGeometryType").val();
    var imageFileName;

    var d = [
        {type: "rec", imgName: "geo-rectangle.jpg", label: "Rectangle"},
        {type: "cir", imgName: "geo-circle.jpg", label: "Circle"},
        {type: "scir", imgName: "geo-semicircle.jpg", label: "Semi Circle"},
        {type: "qcir", imgName: "geo-quartercircle.jpg", label: "Quarter Circle"},
        {type: "hcir", imgName: "geo-hollowcircle.jpg", label: "Hollow Circle"},
        {type: "tri", imgName: "geo-triangle.jpg", label: "Triangle"},
        {type: "hex", imgName: "geo-hexagon.jpg", label: "Hexagon"},
        {type: "par", imgName: "geo-parabolic.jpg", label: "Parabolic Curve"},
        {type: "ell", imgName: "geo-ellipse.jpg", label: "Ellipse"},
        {type: "tra", imgName: "geo-trapezoid.jpg", label: "Trapezoid"},
    ];

    $.each(d, function(i, v){
        if(imageNum==v.type){
            imageFileName = v.imgName;
            label = v.label;
        }
    });

    refresh(imageNum);

    $("#imageGeometry").attr("src", imagePath + imageFileName);
    $("#labelGeometryType").text(label);
    calculate(imageNum);
}

function refresh(type=null){
    if (type==null) {
        type = "rec";
    }
    var all_input = $('.input');
    all_input.hide();
    all_input.each(function(){
        if(type == $(this).attr("id")) {
            $(this).show();
        }
    });
}

// ****************************************************************** //
// **************************** CALCULATION ************************* //
// ****************************************************************** //
function calculate(type="rec"){
    const pi = Math.PI;
    var inputText = $(":input[type=text]:visible");
    var val = [];
    var res;

    $.each(inputText, function(i, v){
        // VALIDATION
        if (isNaN(v.value)){
            v.focus();
            v.select();
            alert('Wrong Input');
            return;
        }
        // if valid, store input value to array val
        val.push(Number(v.value));
    })

    switch (type){
        case "rec":
            var b = val[0];
            var h = val[1];
            var x1 = 0.5*b;
            var y1 = 0.5*h;
            var area = b*h;
            var ix = b*h*h*h/12;
            var iy = b*b*b*h/12;
            res = [
                {resId: "resultArea", v: b*h},
                {resId: "resultX1", v: 0.5*b},
                {resId: "resultX2", v: 0.5*b},
                {resId: "resultY1", v: 0.5*h},
                {resId: "resultY2", v: 0.5*h},
                {resId: "resultIx", v: b*h*h*h/12},
                {resId: "resultIy", v: b*b*b*h/12},
                {resId: "resultRx", v: Math.sqrt(ix/area)},
                {resId: "resultRy", v: Math.sqrt(iy/area)},
                {resId: "resultSx", v: ix/y1},
                {resId: "resultSy", v: iy/x1},
            ];
        break;
        case "tri":
            var b = val[0];
            var h = val[1];
            var area = b*h/2;
            var x1 = 2*b/3;
            var x2 = 1*b/3;
            var y1 = 2*h/3;
            var y2 = 1*h/3;
            var ix = b*h*h*h/36;
            var iy = b*b*b*h/36;
            res = [
                {resId: "resultArea", v: area},
                {resId: "resultX1", v: x1},
                {resId: "resultX2", v: x2},
                {resId: "resultY1", v: y1},
                {resId: "resultY2", v: y2},
                {resId: "resultIx", v: ix},
                {resId: "resultIy", v: iy},
                {resId: "resultSx1", v: ix/y1},
                {resId: "resultSx2", v: ix/y2},
                {resId: "resultSy1", v: iy/x1},
                {resId: "resultSy2", v: iy/x2},
            ];
        break;
        case "cir":
            var d = val[1];
            var r = val[0];
            var area = 0.25*Math.PI*d*d;
            var x1 = r;
            var y1 = r;
            var ix = Math.PI*r*r*r*r/4;
            var iy = ix;
            res = [
                {resId: "resultArea", v: area},
                {resId: "resultIx", v: ix},
                {resId: "resultIy", v: iy},
                {resId: "resultSx", v: ix/y1},
                {resId: "resultSy", v: iy/x1},
            ];
        break;
        case "scir":
            var d = val[1];
            var r = val[0];
            var area = 0.5*0.25*pi*d*d;
            var x1 = r;
            var x2 = r;
            var y2 = 4*r/(3*pi);
            var y1 = r - y2;
            var ix1 = pi*r*r*r*r/8;
            var iy = ix1;
            var ix = (pi/8 - 8/(9*pi))*r*r*r*r;
            // var rx = Math.sqrt(ix/area);
            // var ry = Math.sqrt(iy/area);
            res = [
                {resId: "resultArea", v: area},
                {resId: "resultX1", v: x1},
                {resId: "resultX2", v: x2},
                {resId: "resultY1", v: y1},
                {resId: "resultY2", v: y2},
                {resId: "resultIx", v: ix},
                {resId: "resultIy", v: iy},
                {resId: "resultIx1", v: ix1},
                {resId: "resultSx1", v: ix1/y1},
                {resId: "resultSx2", v: ix1/y2},
                {resId: "resultSy", v: iy/x1},
                // {resId: "resultRx", v: rx},
                // {resId: "resultRy", v: ry},
            ];
        break;
        case "qcir":
            var r = val[0];
            var area = 0.25*pi*r*r;
            var x2 = 4*r/(3*pi);
            var x1 = r-x2;
            var y2 = 4*r/(3*pi);
            var y1 = r - y2;
            var ix1 = pi*r*r*r*r/8;
            var iy1 = ix1;
            var ix = (pi/16 - 4/(9*pi))*r*r*r*r;
            var iy = ix;
            // var rx = Math.sqrt(ix/area);
            // var ry = Math.sqrt(iy/area);
            res = [
                {resId: "resultArea", v: area},
                {resId: "resultX1", v: x1},
                {resId: "resultX2", v: x2},
                {resId: "resultY1", v: y1},
                {resId: "resultY2", v: y2},
                {resId: "resultIx", v: ix},
                {resId: "resultIy", v: iy},
                {resId: "resultIx1", v: ix1},
                {resId: "resultIy1", v: iy1},
                {resId: "resultSx1", v: ix/y1},
                {resId: "resultSx2", v: ix/y2},
                {resId: "resultSy1", v: iy/x1},
                {resId: "resultSy2", v: iy/x2},
                // {resId: "resultRx", v: rx},
                // {resId: "resultRy", v: ry},
            ];
        break;
        case "ell":
            var a = 0.5*val[0];
            var b = 0.5*val[1];
            var area = pi*a*b;
            var x1 = a;
            var x2 = x1;
            var y1 = b;
            var y2 = y1;
            var ix = pi*a*b*b*b/4;
            var iy = pi*a*a*a*b/4;
            res = [
                {resId: "resultArea", v: area},
                {resId: "resultX1", v: x1},
                {resId: "resultX2", v: x2},
                {resId: "resultY1", v: y1},
                {resId: "resultY2", v: y2},
                {resId: "resultIx", v: ix},
                {resId: "resultIy", v: iy},
                {resId: "resultSx", v: ix/y1},
                {resId: "resultSy", v: iy/x1},
            ];    
        break;
        case "hcir":
            var od = val[0];
            var id = val[1];
            var t = val[2];
            var area = pi*(od*od-id*id)/4;
            var ix = pi*(od*od*od*od-id*id*id*id)/64;
            var iy = ix;
            var sx = 2*ix/od;
            res = [
                {resId: "resultArea", v: area},
                {resId: "resultIx", v: ix},
                {resId: "resultSx", v: sx},
            ]; 
        break;
        // ******************************************************** HOLD
        case "par": 
            var b = val[0];
            var h = val[1];
            var area = 2*b*h/3;
            var x1 = 0.5*b;
            var x2 = x1;
            var y2 = 0.4*h;
            var y1 = h - y2;
            var ix = b*h*h*h*8/175;
            var iy = b*b*b*h*1/30;
            var sx1 = ix/y1;
            var sx2 = ix/y2;
            var sy = iy/x1;
            res = [
                {resId: "resultArea", v: area},
                {resId: "resultX1", v: x1},
                {resId: "resultX2", v: x2},
                {resId: "resultY1", v: y1},
                {resId: "resultY2", v: y2},
                {resId: "resultIx", v: ix},
                {resId: "resultIy", v: iy},
                {resId: "resultSx1", v: sx1},
                {resId: "resultSx2", v: sx2},
                {resId: "resultSy", v: sy},
            ]; 
        break;
        case "hex":
            var a = val[0];
            var h = val[1];
            var b = val[2];
            var area = 1.5*a*a*1.732;
            var x1 = a;
            var x2 = a;
            var y1 = 0.5*h;
            var y2 = 0.5*h;
            var ix = 5*a*a*a*a*1.732/16;
            var iy = ix;
            var sx = ix/y1;
            var sy = iy/x1;
            res = [
                {resId: "resultArea",   v: area},
                {resId: "resultX1",     v: x1},
                {resId: "resultX2",     v: x2},
                {resId: "resultY1",     v: y1},
                {resId: "resultY2",     v: y2},
                {resId: "resultIx",     v: ix},
                {resId: "resultIy",     v: iy},
                {resId: "resultSx",     v: sx},
                {resId: "resultSy",     v: sy},
            ]
        break;
        case "tra": 
            var b = val[0];
            var h = val[1];
            var m = val[2];
            var n = val[3];
            var p = b-m-n;
            var area = 0.5*h*(b+m);
            var x2 = (3*m*m+2*n*n+p*p+6*m*n+3*n*p+3*m*p)/(3*(b+m));
            var x1 = b-x2;
            var y2 = h*(2*m+b)/(3*(m+b));
            var y1 = h - y2;
            var ix = h*h*h*(m*m+4*m*b+b*b)/(36*(m+b));
            var iy0 = [
                h*n*n*n/36,
                h*m*m*m/12,
                h*p*p*p/36
            ];
            var ax0 = [
                (0.5*h*n)*Math.pow(x2-(2*n/3),2),
                (h*m)*Math.pow(x2-(n+0.5*m),2),
                (0.5*h*p)*Math.pow(x2-(n+m+(p/3)),2)
            ]
            var iy = ax0.reduce((t,n)=>t+n) + iy0.reduce((t,n)=>t+n);
            var sx1 = ix/y1;
            var sx2 = ix/y2;
            var sy1 = iy/x1;
            var sy2 = iy/x2;
            res = [
                {resId: "resultArea", v: area},
                {resId: "resultX1", v: x1},
                {resId: "resultX2", v: x2},
                {resId: "resultY1", v: y1},
                {resId: "resultY2", v: y2},
                {resId: "resultIx", v: ix},
                {resId: "resultIy", v: iy},
                {resId: "resultSx1", v: sx1},
                {resId: "resultSx2", v: sx2},
                {resId: "resultSy1", v: sy1},
                {resId: "resultSy2", v: sy2},
            ]; 
        break;

    }

    res.push({resId: "resultRx", v: Math.sqrt(ix/area)});
    res.push({resId: "resultRy", v: Math.sqrt(iy/area)});
    
    // hide all result
    $(".result").parent().parent().hide();
    $(".result").parent().hide();

    // show selected result
    $.each(res, function(i,v){
        g = $("#"+v.resId);
        g.parent().parent().show();
        g.parent().show();
        g.html(format(v.v));
    })

}


// ***************** INPUT CHANGE CONTROLS ********************** //
// next version:
// 1. change control for trapezoid
// 
// ************************************************************** //
$(".inputVar1:visible").on("input", function(){
    var type = $("#inputGeometryType").val();
    if (type=="cir"){
        $(".inputVar2:visible").val(2*$(this).val());
    }
    if (type=="hcir"){
        var od = $(this).val();
        var id = $(".inputVar2:visible");
        var t = $(".inputVar3:visible");
        var t0 = t.val();
        t.val(Math.min(0.5*od,t0));
        id.val(od-2*t.val());
    }
    if (type=="hex"){
        var a = Number($(this).val());
        var inp_b = $(".inputVar3:visible");
        var inp_h = $(".inputVar2:visible");

        inp_b.val(2*a);
        inp_h.val(numround(1.732051*a,3));
    }
    calculate(type);
});

$(".inputVar2:visible").on("input", function(){
    var type = $("#inputGeometryType").val();
    if (type=="cir"){
        $(".inputVar1:visible").val(0.5*$(this).val());
    }
    if (type=="hcir"){
        var od = Number($(".inputVar1:visible").val());
        var t = ($(".inputVar3:visible"));
        var id0 = Number($(this).val());
        
        if (od < id0){
            $(this).val(od);
        } else {
            // do nothing
        }
        var n = numround((od-$(this).val())/2,5);
        t.val(n);
    }
    if (type=="hex"){
        var h = Number($(this).val());
        var inp_a = $(".inputVar1:visible");
        var inp_b = $(".inputVar3:visible");

        inp_a.val(numround(h/0.8660255,3));
        inp_b.val(numround(h/1.732051,3));
    }
    calculate(type);
});

$(".inputVar3:visible").on("input", function(){
    var type = $("#inputGeometryType").val();
    if (type=="hcir"){
        var od = $(".inputVar1:visible").val();
        var id = $(".inputVar2:visible");
        var t0 = $(this).val();
        if (od < id.val()) {
            // id is bigger
            id.val(od);
        } else {
            n = numround(od-2*t0,5);
            id.val(n);
        }
        if (t0>0.5*od) {
            $(this).val(0.5*od);
            id.val(0);
        }
    }
    if (type=="hex"){
        var b = Number($(this).val());
        var inp_a = $(".inputVar1:visible");
        var inp_h = $(".inputVar2:visible");

        inp_a.val(0.5*b);
        inp_h.val(numround(0.8660255*b,3));
    }
    calculate(type);
});

$(".inputVar4:visible").on("input", function(){
    var type = $("#inputGeometryType").val();
    calculate(type);
});
