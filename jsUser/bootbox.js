//=================BOOTBOX=====================
function bootboxerror(message,title,callback){
    bootbox.confirm({
        message:message,
        title:"<img src='images/icons/icon_naruto.png' width='35px' height='35px'></img> <span style='color:red;'>"+title+"</span>",
        backdrop: true,
        callback: callback
    });
}
function bootboxalert(message,title,callback){
    bootbox.confirm({
        message:message,
        title:"<img src='images/icons/icon_naruto.png' width='35px' height='35px'></img> <span style='color:green;'>"+title+"</span>",
        backdrop: true,
        callback: callback
    });
}
function bootboxwarning(message,title,callback){
    bootbox.confirm({
        message:message,
        title:"<img src='images/icons/icon_naruto.png' width='35px' height='35px'></img> <span style='color:rgb(124, 148, 16);'>"+title+"</span>",
        backdrop: true,
        callback: callback
    });
}
function makeid(n=10) {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  for (var i = 0; i < n; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}
