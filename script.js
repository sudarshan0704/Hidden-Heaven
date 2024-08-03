//search  bar auto fill by clicking button
var search=document.getElementById("search1")
function autofill(id){
    search.valu=""
    var placename=document.getElementById(id).value

    search.value=placename
}

