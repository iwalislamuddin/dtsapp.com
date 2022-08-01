/**
 * 
 * classes:
 *      uniload     : uniform distributed load
 *      uniload1    : partially distributed load
 *      pload1      : single point load
 *      pload2      : double point laod
 * 
 */


// run function on document ready
$( document ).ready(function() {

    updateRange();
    hitung(1);
});

function validate(){
    if (isNaN($("#inputLength").val())) {
        alert ("Wrong input1");
        return false;
    }
    if (isNaN($("#inputUniformLoad").val())) {
        alert ("Wrong input2");
        return false;
    }
    if (isNaN($("#inputPointLoad1").val())) {
        alert ("Wrong input3");
        return false;
    }
    if (isNaN($("#inputDistanceQ").val())) {
        alert ("Wrong input4");
        return false;
    }
    if (isNaN($("#inputDistanceP1").val())) {
        alert ("Wrong input5");
        return false;
    }
    if (isNaN($("#inputDistanceX").val())) {
        alert ("Wrong input6");
        return false;
    }
    if (isNaN($("#inputElasticity").val())) {
        alert ("Wrong input7");
        return false;
    }
    if (isNaN($("#inputInertia").val())) {
        alert ("Wrong input8");
        return false;
    }

    return true;
}

// ********************************* FUNCTION HITUNG ************************ //
function hitung(type=null){
    var validation = validate();
    if (!validation) {
        return false;
    }

    var l = Number($('#inputLength').val());
    if ($('#inputUniformLoad').length ) {
        var q = Number($('#inputUniformLoad').val());
    }
    if ($('#inputPointLoad1').length ) {
        var p1 = Number($('#inputPointLoad1').val());
    }
    if ($('#inputPointLoad2').length ) {
        var p2 = Number($('#inputPointLoad2').val());
    }
    if ($('#inputDistanceX').length ) {
        var x = Number($('#inputDistanceX').val());
    }
    if ($('#inputDistanceQ').is(":visible")) {
        var a = Number($('#inputDistanceQ').val());
    } 
    if ($('#inputLength1').is(":visible")) {
        var l1 = Number($('#inputLength1').val());
    } 
    if ($('#inputDistanceP1').is(":visible")) {
        var a = Number($('#inputDistanceP1').val());
    }
    if ($('#inputDistanceP2:visible')){
        var b = Number($('#inputDistanceP2'))
    }
    
    switch(type){

        case "2":
            var Ra = (0.5*q/l)*a*(2*l-a);
            var Rb = (0.5*q/l)*a*a;
            var Va = Ra;
            var Vb = -Rb;
            var Mmax = Ra*Ra/(2*q);
            var distMmax = Ra/q;
            var Ymax = 0;
            if (x<=a) {
                var Mx = Ra*x - 0.5*q*x*x;
                var Vx = Ra - q*x;
                var Yx = (q*x/(24*l)) * ((a*a*(2*l-a)*(2*l-a)) - (2*a*x*x*(2*l-a)) + (l*x*x*x));
            } else {
                var Mx = Rb*(l-x);
                var Vx = Ra - q*a;
                var Yx = (q*a*a*(l-x)/(24*l)) * (4*x*l - 2*x*x - a*a);
            }

            // find distance for max displacement
            var c = 0;
            var dx = 0;
            var dx0 = 0;
            var delta = 0.001;
            var getMax = true;
            var distYmax = 0;
            do {
                c += delta;
                if (c<=a) {
                    dx = (q*c/(24*l)) * ((a*a*(2*l-a)*(2*l-a)) - (2*a*c*c*(2*l-a)) + (l*c*c*c));
                } else {
                    dx = (q*a*a*(l-c)/(24*l)) * (4*c*l - 2*c*c - a*a);
                }

                if (dx0>=dx) {
                    getMax = false;
                    Ymax = dx0;
                    distYmax = c;
                } else {
                    dx0 = dx;                    
                }
            } while (getMax);
        break;
        
        case "3":
            var W = q*l/2;
            var Ra = W/3;
            var Rb = 2*W/3;
            var Va = Ra;
            var Vb = -Rb;
            var Vx = (W/3) - (W*x*x/(l*l));
            var Mmax = 0.1283*W*l;
            var distMmax = 0.57735*l;
            var Ymax = 0.01304*W*l*l*l;
            var distYmax = 0.51933*l;
            
            var Mx = (W*x/(3*l*l))*(l*l - x*x);
            var Yx = (W*x/(180*l*l))*(3*x*x*x*x - 10*l*l*x*x + 7*l*l*l*l);
        break;

        case "4":
            var W = 0.5*q*l;
            var Ra = 0.5*W;
            var Rb = 0.5*W;
            var Va = Ra;
            var Vb = -Rb;
            var Mmax = W*l/6;
            var Ymax = W*l*l*l/60;
            var distMmax = 0.5*l;
            var distYmax = 0.5*l;
            
            let qx = 2*q*x/l;
            if (x<=a) {
                var Vx = Ra - 0.5*qx*x;
                var Mx = Ra*x - 0.5*qx*x*(x/3);
                var Yx = (W*x/(480*l*l))*Math.pow(5*l*l-4*x*x,2);
            } else {
                let z = l-x;
                var Vx = Rb - 0.5*qx*z;
                var Mx = Rb*z - 0.5*qx*z*(z/3);
                var Yx = (W*z/(480*l*l))*Math.pow(5*l*l-4*z*z,2);
            }
        break;

        case "5":
            var b = l-a;
            var Ra = p1*b/l;
            var Rb = p1*a/l;
            var Va = Ra;
            var Vb = -Rb;
            var Mmax = Ra*a;
            var distMmax = a;

            var A = Math.max(a,b);
            var B = Math.min(a,b);
            var Ymax = p1*A*B*(A+2*B)*Math.sqrt(3*A*(A+2*B))/(27*l);
            if (a>b) {
                var distYmax = Math.sqrt(A*(A+2*B)/3);
            } else {
                var distYmax = l - Math.sqrt(A*(A+2*B)/3);
            }

            if (x<=a) {
                var Mx = Ra*x;
                var Vx = Ra;
                var Yx = p1*b*x*(l*l-b*b-x*x)/(6*l);
            } else {
                var Mx = Ra*x-p1*(x-a);
                var Vx = Ra-p1;
                var Yx = p1*a*(l-x)*(2*l*x-x*x-a*a)/(6*l);
            }
        break;
        case "11":
            var Ra = q*l;
            var Rb = 0;
            var Va = Ra;
            var Vb = 0;
            var Mmax = q*l*l/2;
            var Ymax = q*l*l*l*l/8;
            var distMmax = l;
            var distYmax = 0;
            var Mx = q*x*x/2;
            var Vx = q*x;
            var Yx = (q/24)*(x*x*x*x-4*l*l*l*x+3*l*l*l*l);
        break;
        case "12":
            let b1 = l-a;
            var Ra = p1;
            var Rb = 0;
            var Va = Ra;
            var Vb = 0;
            var Mmax = p1*b1;
            var Ymax = p1*b1*b1*(3*l-b1)/6;
            var distMmax = l;
            var distYmax = 0;
            if (x<a) {
                var Mx = 0;
                var Vx = 0;
                var Yx = p1*b1*b1*(3*l-3*x-b1)/6;
            } else {
                var Mx = p1*(x-a);
                var Vx = -p1;
                var Yx = p1*(l-x)*(l-x)*(3*b1-l+x)/6;
            }
        break;
        case "21":
            var x1 = x-l
            var Ra = q*(l*l-l1*l1)/(2*l);
            var Rb = q*(l+l1)*(l+l1)/(2*l);
            var Va = Ra;
            var Vb = q*(l*l+l1*l1)/(2*l);
            var Vb2 = q*l1;
            var Mmax = (q/(8*l*l))*(l+l1)*(l+l1)*(l-l1)*(l-l1);
            var distMmax = (l/2)*(1-(l1*l1)/(l*l));
            var Mmax2 = q*l1*l1/2;
            var Ymax2 = q*l1*(4*l*l1*l1-l*l*l+3*l1*l1*l1)/24;
            
            if (x<l) {
                var Mx = q*x*(l*l-l1*l1-x*l)/(2*l);
                var Vx = Ra-q*x;
                var Yx = q*x*(l*l*l*l-2*l*l*x*x+l*x*x*x-2*l1*l1*l*l+2*l1*l1*x*x)/(24*l);
            } else {
                var Mx = q*(l1-x1)*(l1-x1)/2;
                var Vx = q*(l1-x1);
                var Yx = q*x1*(4*l1*l1*l-l*l*l+6*l1*l1*x1-4*l1*x1*x1+x1*x1*x1)/24;
            }
            // find Ymax & distYmax
            var c = 0;
            var c1;
            var dx = 0;
            var dx0 = 0;
            var delta = 0.001;
            var getMax = true;
            var distYmax = 0;
            var Ymax = 0;
            do {
                c += delta;
                if (c<l){
                    dx = q*c*(l*l*l*l-2*l*l*c*c+l*c*c*c-2*l1*l1*l*l+2*l1*l1*c*c)/(24*l);
                } else {
                    c1 = l-c;
                    dx = q*c1*(4*l1*l1*l-l*l*l+6*l1*l1*c1-4*l1*c1*c1+c1*c1*c1)/24;
                }

                if(dx0>dx){
                    getMax = false;
                    Ymax = dx0;
                    distYmax = c;
                    Ymax = dx0;
                } else {
                    dx0 = dx;
                }

            } while(getMax);
        break;

        case "22":
            var b = l-a;
            var x1 = x-l;
            var Ra = p1*b/l;
            var Rb = p1*a/l;
            var Va = Ra;
            var Vb = -Rb;
            var Mmax = p1*a*b/l;
            var distMmax = a;
            var Ymax = 0;
            var distYmax = 0;
            var Yx;
            var Mx;
            var Vx;

            if (a>b) {
                Ymax = p1*a*b*(a+2*b)*Math.sqrt(3*a*(a+2*b))/(27*l);
                distYmax = Math.sqrt(a*(a+2*b)/3)
            } else {
                Ymax = p1*a*b*(2*a+b)*Math.sqrt(3*b*(2*a+b))/(27*l);
                distYmax = Math.sqrt(a*(2*a+b)/3)
            }
            
            if (x<a) {
                Yx = p1*b*x*(l*l-b*b-x*x)/(6*l)
                Vx = Ra;
                Mx = Ra*x;
            } else if (x>l) {
                Yx = p1*a*b*x1*(l+a)/(6*l);
                Vx = 0;
                Mx = 0;
            } else {
                Yx = p1*a*(l-x)*(2*l*x-x*x-a*a)/(6*l);
                Vx = Ra - p1;
                Mx = Ra*x - p1*(x-l);
            }
        break;

        case "31":
            var Ra = 0.5*q*l;
            var Rb = 0.5*q*l;
            var Va = Ra;
            var Vb = -Rb;
            var Mmax = q*l*l/24;
            var distMmax = 0.5*l;
            var Ymax = q*l*l*l*l/(384);
            var distYmax = 0.5*l;
            
            var Mx = q*(6*l*x-l*l-6*x*x)/12;
            var Vx = q*(0.5*l-x);
            var Yx = q*x*x*(l-x)*(l-x)/24; 
            break;
            
        case "32":
            var Ra = 0.5*p1;
            var Rb = 0.5*p1;
            var Va = Ra;
            var Vb = -Rb;
            var Mmax = p1*l/8;
            var distMmax = 0.5*l;
            var Ymax = p1*l*l*l/(192);
            var distYmax = 0.5*l;
            
            var Mx = q*(6*l*x-l*l-6*x*x)/12;
            var Vx = q*(0.5*l-x);
            var Yx = q*x*x*(l-x)*(l-x)/24; 
            break;


        default:
            var Ra = 0.5*q*l;
            var Rb = 0.5*q*l;
            var Va = 0.5*q*l;
            var Vb = -0.5*q*l;
            var Mmax = q*l*l/8;
            var Mx = Ra*x - 0.5*q*x*x;
            var Vx = Ra - q*x;
            var Yx = (q*x/24)*(l*l*l-2*l*x*x+x*x*x);
            var Ymax = (5*q/384)*(l*l*l*l);
            var distYmax = 0.5*l;
            var distMmax = 0.5*l;
        break;
    }

    if ($(".radioEI:checked").val() == 2){
        let E = $("#inputElasticity").val();
        let I = $("#inputInertia").val();
        let EI = E*I;
        Ymax = 1e9*Ymax/EI;
        Yx = 1e9*Yx/EI;
    }

    $("#resultRa").html(Ra.toFixed(2));
    $("#resultRb").html(Rb.toFixed(2));
    $("#resultVa").html(Va.toFixed(2));
    $("#resultVb").html(Vb.toFixed(2));
    $("#resultMmax").html(Mmax.toFixed(2));
    $("#distMmax").html(distMmax.toFixed(2));
    $("#resultMx").html(Mx.toFixed(2));
    $("#resultVx").html(Vx.toFixed(2));
    
    $("#resultYx").html(Yx.toFixed(2));
    $("#resultYmax").html(Ymax.toFixed(2));
    $("#distYmax").html(distYmax.toFixed(2));

    // for overhang beam
    if (type=='21') {
        $("#resultVb1").html(Vb2.toFixed(2));
        $("#resultVb2").html(Vb2.toFixed(2));
        $("#resultMmax2").html(Mmax2.toFixed(2));
        $("#resultYmax2").html(Ymax2.toFixed(2));
    }

}

// *********************** change Beam Type (dropdown)
function changeType(){
    var imagePath = baseurl + "/images/";
    var imageNum = $("#inputBeamFormulaType").val();
    var imageFileName;
    
    switch(imageNum) {
        case "2":
            imageFileName = "beam-02.jpg";  
            label = "Simple Beam - Partially Distributed Load";
            if (siteLang === 'id') label = "Balok Sederhana - Beban Merata Sebagian";
            $(".uniload").show();
            $(".uniload1").show();
            $(".pload1").hide();
            $(".overhang").hide();
            $(".no-cantilever").show();
            $(".shearVb2").hide();
            $(".fixed").hide();
            break;
        case "3":
            imageFileName = "beam-03.jpg";  
            label = "Simple Beam - Increasing Distributed Load";
            if (siteLang === 'id') label = "Balok Sederhana - Beban Merata Segitiga";
            $(".uniload").show();
            $(".uniload1").hide();
            $(".pload1").hide();
            $(".overhang").hide();
            $(".no-cantilever").show();
            $(".shearVb2").hide();
            $(".fixed").hide();
        break;
        case "4":
            imageFileName = "beam-04.jpg";  
            label = "Simple Beam - Increasing Distributed Load to Mid Span";
            if (siteLang === 'id') label = "Balok Sederhana - Beban Segitiga di Tengah Bentang";
            $(".uniload").show();
            $(".uniload1").hide();
            $(".pload1").hide();
            $(".shearVb2").hide();
            $(".overhang").hide();
            $(".no-cantilever").show();
            $(".fixed").hide();
        break;
        case "5":
            imageFileName = "beam-05.jpg";  
            label = "Simple Beam - Single Concentrated Load at Any Point";
            if (siteLang === 'id') label = "Balok Sederhana - Beban Terpusat";
            $(".uniload").hide();
            $(".uniload1").hide();
            $(".pload1").show();
            $(".shearVb2").hide();
            $(".overhang").hide();
            $(".no-cantilever").show();
            $(".fixed").hide();
            break;
        case "11":
            imageFileName = "beam-11.jpg";  
            label = "Cantilever Beam - Uniformly Distributed Load";
            if (siteLang === 'id') label = "Balok Kantilever - Beban Merata";
            $(".uniload").show();
            $(".uniload1").hide();
            $(".pload1").hide();
            $(".shearVb2").hide();
            $(".no-cantilever").hide();
            $(".overhang").hide();
        break;
        case "12":
            imageFileName = "beam-12.jpg";  
            label = "Cantilever Beam - Concentrated Load";
            if (siteLang === 'id') label = "Balok Kantilever - Beban Terpusat";
            $(".uniload").hide();
            $(".uniload1").hide();
            $(".pload1").show();
            $(".shearVb2").hide();
            $(".no-cantilever").hide();
            $(".overhang").hide();
            $(".fixed").hide();
            break;
        case "21":
            imageFileName = "beam-21.jpg";  
            label = "Overhang Beam - Uniformly Distributed Load";
            if (siteLang === 'id') label = "Balok Menjorok - Beban Merata";
            $(".uniload").show();
            $(".uniload1").hide();
            $(".pload1").hide();
            $(".shearVb2").show();
            $(".no-cantilever").show();
            $(".overhang").show();
            $(".fixed").hide();
            break;
        case "22":
            imageFileName = "beam-22.jpg";  
            label = "Overhang Beam - Concentrated Load at Any Point";
            if (siteLang === 'id') label = "Balok menjorok - Beban Terpusat";
            $(".uniload").hide();
            $(".uniload1").hide();
            $(".pload1").show();
            $(".shearVb2").hide();
            $(".no-cantilever").show();
            $(".overhang").show();
            $(".fixed").hide();
            break;
        case "31":
            imageFileName = "beam-31.jpg";  
            label = "Fixed End Beam - Unifromly Distributed Load";
            if (siteLang === 'id') label = "Balok Tumpuan Jepit - Beban Merata";
            $(".uniload").show();
            $(".uniload1").hide();
            $(".pload1").hide();
            $(".shearVb2").hide();
            $(".no-cantilever").show();
            $(".overhang").hide();
            $(".fixed").show();
            break;
        case "32":
            imageFileName = "beam-32.jpg";  
            label = "Fixed End Beam - Concentrated Load at Any Point Load";
            if (siteLang === 'id') label = "Balok Tumpuan Jepit - Beban terpusat";
            $(".uniload").hide();
            $(".uniload1").hide();
            $(".pload1").show();
            $(".shearVb2").hide();
            $(".no-cantilever").show();
            $(".overhang").hide();
            $(".fixed").show();
            break;
        default:
            imageFileName = "beam-01.jpg";  
            label = "Simple Beam - Uniformly Distributed Load";
            if (siteLang === 'id') label = "Balok Sederhana - Beban Merata";
            $(".uniload").show();
            $(".uniload1").hide();
            $(".pload1").hide();
            $(".shearVb2").hide();
            $(".overhang").hide();
            $(".no-cantilever").show();
            $(".fixed").hide();
            break;
    }
    
    updateRange(imageNum);
    $("#imageBeamFormulas").attr("src", imagePath + imageFileName);
    $("#labelBeamFormulaType").text(label);
    
    hitung(imageNum);
}

// *********************** slider control : distance for Q, uniload2
$(document).on('input change', '#rangeDistanceQ', function() {
    $('#inputDistanceQ').val( $(this).val() );
    hitung($("#inputBeamFormulaType").val());
});

$("#inputDistanceQ").on("input", function(){
    if ($(this).val() > $("#inputLength").val()) {
        $(this).val($("#inputLength").val());
    } else if ($(this).val() < 0) {
        $(this).val(0);
    }  

    $("#rangeDistanceQ").val($(this).val());
    hitung($("#inputBeamFormulaType").val());
});

// *********************** slider control : distance for P1,pload1
$(document).on('input change', '#rangeDistanceP1', function() {
    $('#inputDistanceP1').val( $(this).val() );
    hitung($("#inputBeamFormulaType").val());
});

$("#inputDistanceP1").on("input", function(){
    if ($(this).val() > $("#inputLength").val()) {
        $(this).val($("#inputLength").val());
    } else if ($(this).val() < 0) {
        $(this).val(0);
    }  

    $("#rangeDistanceP1").val($(this).val());
    hitung($("#inputBeamFormulaType").val());
});

// *********************** slider control : distance for X
$(document).on('input change', '#rangeDistanceX', function() {
    $('#inputDistanceX').val( $(this).val() );
    hitung($("#inputBeamFormulaType").val());
});

$("#inputDistanceX").on("input", function(){
    if ($(this).val() > $("#inputLength").val()) {
        $(this).val($("#inputLength").val());
    } else if ($(this).val() < 0) {
        $(this).val(0);
    }   
    
    $("#rangeDistanceX").val($(this).val());
    hitung($("#inputBeamFormulaType").val());
});


// *********************** update maximum range of sliders
function updateRange(type=null){
    var length = Number($("#inputLength").val());

    switch(type) {
        case "2":
        case "4":
            $("#rangeDistanceQ").attr("max", length);
            $("#rangeDistanceQ").attr("step", 0.01);    
        break;
        case "5":
        case "12":
        case "22":
        case "32":
            $("#rangeDistanceP1").attr("max", length);
            $("#rangeDistanceP1").attr("step", 0.01);    
        break;
        case "21":
            length = length + Number($("#inputLength1").val());
        break;
        default:
            $("#rangeDistanceQ").attr("max", length);
            $("#rangeDistanceQ").attr("step", 0.01);    
        break;
    }

    if (type=="22"){
        length = length + Number($("#inputLength1").val());
    }

    $("#rangeDistanceX").attr("max", length);
    $("#rangeDistanceX").attr("step", 0.01);    
}

// *********************** radio check EI control
$(".radioEI").click(function(){
    if ($(".radioEI:checked").val() == 2) {
        $("#eiInput").show();
        $(".eiConst").hide();
        $(".eiUnit").html(`mm`);
    } else {
        $("#eiInput").hide();
        $(".eiConst").show();
        $(".eiUnit").html(`m/EI<sup>(*)</sup>`);
    }
    hitung($("#inputBeamFormulaType").val());
});


// *********************** input text change control
// kalau input L diubah
$("#inputLength").on("input", function(){
    updateRange($("#inputBeamFormulaType").val());
    hitung($("#inputBeamFormulaType").val());
});

// kalau input L1 diubah
$("#inputLength1").on("input", function(){
    updateRange($("#inputBeamFormulaType").val());
    hitung($("#inputBeamFormulaType").val());
});

// kalau nilai Q diubah
$("#inputUniformLoad").on("input", function(){
    hitung($("#inputBeamFormulaType").val());
});
// kalau Inertia diubah
$("#inputInertia").on("input", function(){
    hitung($("#inputBeamFormulaType").val());
});

// kalau modulus elastisitas diubah 
$("#inputElasticity").on("input", function(){
    hitung($("#inputBeamFormulaType").val());
});

// kalau point load diubah
$("#inputPointLoad1").on("input", function(){
    hitung($("#inputBeamFormulaType").val());
});