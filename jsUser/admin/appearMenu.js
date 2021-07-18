function appearTable(Class){
    disappearTable();
    $('.'+Class).removeClass('hidden');
}

function disappearTable(){
    $('.formmypost').addClass('hidden');
    $('.formnonpost').addClass('hidden');
    $(".formaddinfo").addClass('hidden');
}