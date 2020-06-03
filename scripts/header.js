function getLocation(){
    return window.location.pathname;
}

function changeActive(){
    var id = getLocation().substring(1,6);
    if(id == "compa")
        id = id+"ny";
    else if(id == "stude")
        id = id+"nt";
    else if(id == "conta")
        id = id+"ct";
    $('#'+id).addClass('active');
}

$(document).ready(function(){
    changeActive();
});

