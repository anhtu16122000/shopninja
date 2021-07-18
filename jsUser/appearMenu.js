function appearTable(Class){
    disappearTable();
    $('.'+Class).removeClass('hidden');
}

function disappearTable(){
    $('.formmypost').addClass('hidden');
    $('.formupdate').addClass('hidden');
    $('.formdangky').addClass('hidden');
    $('.formdangnhap').addClass('hidden');
    $('.formmypost').addClass('hidden');
    $('.formdangbai').addClass('hidden');
    $('.formtrangchu').addClass('hidden');
    $('.forminfo').addClass('hidden');
}