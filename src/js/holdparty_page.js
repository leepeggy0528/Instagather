$(function () {	

    //刪除單一行程
    $('body').on('click','.delect_place',function(){
        $(this).parents('.place').remove()
    });
    // 案+ 出現MODEL
    $('body').on('click','.add_place',function(){
        $('.modal-background').css('display','block')
        $('.external-modal input').val('')
    });

    //按下確定新增行程
    $('body').on('click','#model-submit-btn',function(){
        let newTime = $('#model-start-time-input').val()

        let newPlace = $('#model-place-input').val()

        let placeTemplate = `<li class="place"><p class="input_time">${newTime}</p><h2 class="place_view">${newPlace}</h2><span class="place_adress" style="display:none"></span><span class="delect_place">X</span></li>`

       $('.place_group_show .add_place').before(placeTemplate)

       //MODEL 消失
       $('.modal-background').css('display','none')
    });
    
    //按下取消【不】新增行程
    $('body').on('click','#model-cancel-btn',function(){
       //MODEL 消失
       $('.modal-background').css('display','none')
    });

    //day_list 點案頁籤 DAY1,DAY2...
    $('body').on('click','.day_list',function(){
        // 初始化
        $('.day_list').removeClass('day_list_active')
        $(this).addClass('day_list_active')

        $('.place_group').removeClass('place_group_show')

        let dayIndex = $("#day_lists .day_list").index(this)
        
        $(`.place_group:nth-of-type(${dayIndex+1})`).addClass('place_group_show')

        //更換顯示DAY
        $('#change_day').html(dayIndex+1)
    });

    //依共幾天新增daylist
    $('.party_totalday').on('change',function(){

            let partyTotalDay = $('.party_totalday').val()
            if( parseInt(partyTotalDay) <= 0 || parseInt(partyTotalDay) >5 ){
                $('.party_totalday').val(1)
                partyTotalDay='1';
                alert('天數請他媽的給我選五天以內')
            }

            // init
            let initDayLists = '<ul class="day_lists" id="day_lists"><li class="day_list day_list_active"><p>Day1</p></li></ul>'
            let party_day = '<p class="party_day">DAY<span id="change_day">1</span></p>'
            let initPlaceGroup ='<ul class="place_group place_group_show"><li class="add_place"><p>+</p></li></ul>'
            $('.detail').html(party_day+initPlaceGroup+initDayLists)



        for(let i=2; i<=partyTotalDay ;i++){
            let addNewDay = `<li class="day_list"><p>Day${i}</p></li>`
            $('#day_lists').append(addNewDay)

            let placeAllTemplate = `<ul class="place_group"><li class="add_place"><p>+</p></li></ul>`

            $('#day_lists').before(placeAllTemplate)
        }

    });






    //ajax準備格式
    $('#hold_party').click(function(){
        
        var json = {
            gro_id : 0,
            mem_id : 0,
            gro_name: '',
            detail : [
                {day:1,},
                {day:2,},
            ]
        }
        $.ajax({
            type:'POST',
            url : '/data.php', // 待定義
            data: json,
            success : function(data){

            },
            error : function(err){
                
            }
        })
    })
    
    //新增一整個行程DAY
    // $('.add_day').on('click',function(){
    //     //計算day list 有幾個標籤 
    //     let nowExistDayCount = $('#day_lists > li').length
    //     //移除現在關注的day_list class
    //     $('.day_list').removeClass('day_list_active')
        
    //     //已有標籤個數 = 下次新增的天數 
    //     let addNewDay = `<li class="day_list"><p>Day${nowExistDayCount}</p></li>`
    //     $('.add_day').before(addNewDay)
        
    //     //加上class 使其為關注中
    //     $(`#day_lists > li:nth-child(${nowExistDayCount})`).addClass('day_list_active')

    //     //更換顯示DAY
    //     $('#change_day').html(nowExistDayCount)

    //     //place_group模板
    //     let placeAllTemplate = `<ul class="place_group"><li class="add_place"><p>+</p></li><li class="delect_places">刪除</li></ul>`

    //     $('#day_lists').before(placeAllTemplate)

    //     $('.place_group').removeClass('place_group_show')

    //     $('#day_lists').prev().addClass('place_group_show')
    // });

    //刪除一整天行程
    // $('body').on('click','.delect_places',function(){
    //     let whatDay= $('.day_list_active').text().match(/[\d]+/)[0]
    //     let howManyDays = $('.day_list').length

    //     if(howManyDays != 1 && whatDay!=1){
    //         $(this).parent().remove()
    //         $(`.place_group:nth-of-type(${whatDay-1})`).addClass('place_group_show')
    //         $(`.day_list_active`).remove()
    //         $(`.day_list:nth-of-type(${whatDay-1})`).addClass('day_list_active')
    //         //更換顯示DAY
    //         $('#change_day').html(whatDay-1)     
    //     }
    //     if(howManyDays != 1 && whatDay==1){
    //         $(this).parent().remove()
    //         $(`.place_group:nth-of-type(${whatDay})`).addClass('place_group_show')
    //         $(`.day_list_active`).remove()
    //         $(`.day_list:nth-of-type(${whatDay})`).addClass('day_list_active')
    //         //更換顯示DAY
    //         $('#change_day').html(whatDay)  
    //     }
    //     // 調整將原本刪除的day 後面數字
    //     for(let a=1;a<howManyDays;a++){
    //         $(`.day_list:nth-of-type(${a})`).html(`<p>Day${a}</p>`)
    //     }
    // });


    //party_discribe 剩餘可輸入數字字數
    let textMax = 200;		
    $('#limit_words_count').html(textMax);
    $('#party_discribe').keyup(function(){
        let textLength = $(this).val().length;
        $('#limit_words_count').html(`${textMax-textLength}`);
    }); 


});





document.querySelector('#browse').onchange = function() {
    var preview = document.querySelector('#preview');
    [].forEach.call(this.files, function(file) {
      if (/image\/.*/.test(file.type)) {   // use any image format the browser can read
        var img = new Image;
        img.onload = remURL;               // to remove Object-URL after use
        // img.style.height = "100px";        // use style, "width" defaults to "auto"
        img.src = (URL || webkitURL).createObjectURL(file);
        var li=document.createElement("li");
         // add image to preview container
         preview.appendChild(li).appendChild(img); 
      }
    });
    
    function remURL() {(URL || webkitURL).revokeObjectURL(this.src)}
  };









// 抓child
// $(this).find('.XXX')       
//更改屬性值
//$('#testurl').attr("href",'https://www.w3school.com.cn/jquery/jquery_dom_add.asp')     


// var tempblock = '<li class="place"><p class="input_time">20:00</p><h2>你好嗎餐酒館</h2><span class="delect_place">X</span></li>'
// var time=$('#model-start-time-input').val()
//$('#add_place').before(tempblock.replace('20:00',time))