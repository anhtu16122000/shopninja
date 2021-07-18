function buildHTMLInfoClient(){
    var dataSend = {event:'buildInfo'};
    queryPOST_json('model/progress.php',dataSend,function(res){
        if(res.length>0){
            var HTML="";
            var index=0;
            res.forEach(element => {
                index++;
                HTML +='<div class="accordion-item">'+
                '<h2 class="accordion-header" id="panelsStayOpen-headingOne">'+
                '<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">'+
                    '<span class="info-title">'+element.title+'</span>'+
                '</button>'+
                '</h2>'+
                '<div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">'+
                '<div class="accordion-body"><pre class="description">'+element.description+'</pre><div class="row row-cols-1 row-cols-md-3 g-4">';
                

                    element.image.forEach(element =>{
                        if(element==""){
                            
                        }else{
                            HTML+='<a href="images/info/'+element+'" data-fancybox="group-'+index+'">  <img src="images/info/'+element+'" class="img-thumbnail" alt="..."> </a>';
                        }
                    
                    });
                
                HTML +='</div></div></div></div>';
            });
        
        
        }else{
        var HTML = "Chưa có thông báo nào"
        }
        $(".info-accordion").html(HTML);    
    });
}