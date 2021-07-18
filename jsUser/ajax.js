
    function queryGET_json(url,dataSend,callback){
        $.ajax({
            type:'GET',
            url: url,
            data: dataSend,
            dataType:'JSON',
            success:callback,
            async:true
        });
    }
    function queryPOST_json(url,dataSend,callback){
        $.ajax({
            type:'POST',
            url: url,
            data: dataSend,
            dataType:'JSON',
            success:callback,
            async:true
        });
    }
    function queryGET_text(url,data,callback){
        $.ajax({
            type:'GET',
            url: url,
            data: data,
            dataType: "TEXT",
            success:callback,       
            async:true
        });
    }
    function queryPOST_text(url,data,callback){
        $.ajax({
            type:'POST',
            url: url,
            data: data,
            dataType: "TEXT",
            success:callback,
            async:true
        });
    }