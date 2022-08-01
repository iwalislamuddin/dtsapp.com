// ********************************* List of Codes & Shapes ************
const dataCodeShape_en = [
    {
        name : "American AISC",
        value : "aisc",
        shapes : [
            { val : "wf", name : "Wide Flange" },
            { val : "angle", name : "Angle" },
        ]
    },
    {
        name : "Australian AS",
        value : "as",
        shapes : [
            { val : "ub", name : "Universal Beam (UB)" },
            { val : "uc", name : "Universal Column (UC)" },
            { val : "wb", name : "Wide Beam (WB)" },
            { val : "wc", name : "Wide Column (WC)" },
            { val : "channel", name : "Channel (PFC)" },
            { val : "angle", name : "Angle (A)" },
        ]
    },
    {
        name : "Japanese JIS",
        value : "jis",
        shapes : [
            { val : "wf", name : "Wide Flange (H)" },
            { val : "unp", name : "UNP Channel" },
            { val : "angle", name : "Equal Angle (L)" },
            { val : "chs", name : "Circular Hollow Section (CHS)" },
            { val : "pipe", name : "Pipe (PIP)" },
        ]
    },

];

const dataCodeShape_id = [
    {
        name : "Amerika (AISC)",
        value : "aisc",
        shapes : [
            { val : "wf", name : "Wide Flange" },
            { val : "angle", name : "Siku" },
        ]
    },
    {
        name : "Australia (AS)",
        value : "as",
        shapes : [
            { val : "ub", name : "Balok Universal UB" },
            { val : "uc", name : "Kolom Universal UC" },
            { val : "wb", name : "Balok Lebar WB" },
            { val : "wc", name : "Kolom Lebar WC" },
            { val : "channel", name : "Profil Kanal (PFC)" },
            { val : "angle", name : "Siku (A)" },
        ]
    },
    {
        name : "Jepang (JIS)",
        value : "jis",
        shapes : [
            { val : "wf", name : "Wide Flange (H)" },
            { val : "unp", name : "Kanal UNP" },
            { val : "angle", name : "Siku (L)" },
            { val : "chs", name : "Lingkaran Berongga/Hollow (CHS)" },
            { val : "pipe", name : "Pipa (PIP)" },
        ]
    },

];


// ********************************* Functions: Main Function  *******************
const updateTable = (code, shape) => {
    fileName = code + "-shape-" + shape + ".json";

    // clear table
    tableSteel.empty();

    // get data from json file
    $.getJSON(baseurl + "/json/" + fileName,
        function (data) {
            var dataWF = data[Object.keys(data)[0]];
            // get table headings (field names)
            var colFields = Object.keys(dataWF[0]);
            

            // create table heading
            var htmlColFields = '';
            $.each(colFields, function (i, val) { 
                htmlColFields += `<th scope="col">${val}</th>\n`;
            });
            var thead_row = $("<tr></tr>").html(htmlColFields);
            var thead = $("<thead></thead>",{
                id: "thead", 
                class: "thead-dark" 
                // style: "position: sticky; top: 0px; z-index: 2;"
            }).html(thead_row);
            
            // create table body
            tableSteel.html(thead);
            $("#thead").after($(`<tbody id="tbody"></tbody>`));

            // fill table row with data
            var htmlRowValue;
            var tbody_row;
            $.each(dataWF, function (i, val) { 
                htmlRowValue = '';
                $.each(val, function(j, val2){
                    if (j === Object.keys(val)[0]) {
                        htmlRowValue += `<th>${val2}</th>\n`;
                    } else {
                        htmlRowValue += `<td>${val2}</td>\n`;
                    }
                })
                tbody_row = $("<tr></tr>").html(htmlRowValue);
                $("#tbody").append(tbody_row);
            });


            // console.log(dataWF);
        }
    )
    .fail(function() {
        errorMsg = $("<div></div>",{class: "mt-4 text-center"}).html("Table is not available at this time");
        tableSteel.html(errorMsg);
    });
}

// ********************************* Functions: Codes & Shape Input Select ********
const generateListCode = () => {
    codeInput.empty();
    var options = '';
    var dataCodeShape = siteLang === 'en' ? dataCodeShape_en : dataCodeShape_id;
    $.each(dataCodeShape, function(i, val){
        options += `<option value="${val.value}">${val.name}</option>\n`;
        shapes[val.value] = val.shapes;
    });
    codeInput.html(options);
}

const updateListShape = (code) => {
    shapeInput.empty();
    var options = '';
    $.each(shapes[code], function (index, values) { 
        options += `<option value="${values.val}">${values.name}</option>\n`;
    });
    shapeInput.html(options);
}


// ********************************* MAIN SCRIPT ********
const codeInput = $("#inputSteelCode");
const shapeInput = $("#inputSteelShape");
const tableSteel = $("#tableSteelProfile");
var fileName;
var shapes = {};

generateListCode();
var code = codeInput.val();

updateListShape(code);
var shape = shapeInput.val();

updateTable(code, shape);

// ********************************* DOM Event Controllers ********
codeInput.on("change", function(){
    code = $(this).val();
    updateListShape(code);
    shape = shapeInput.val();
    updateTable(code, shape)
})

shapeInput.on("change", function(){
    shape = $(this).val();
    updateTable(code, shape)
})
