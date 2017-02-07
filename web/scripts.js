$(document).ready(function(){
    $("input.phone_input").each(function(){
        $(this).css('width', $(this).attr('maxlength')+('em'))
    });
// alert($("input[name=phone_number]").val());


    // setInterval(function(){
    //     var phone = $("input[name=phone_number]");
    //     console.log("tick");
    //     if(phone.val().length % 3 === 0 && phone.val().length < 7){
    //         phone.text(phone.val() + "-");
    //     }
    // },10)

    // $("input[name=phone_number]").change(function(){
        // var phone = $("input[name=phone_number]");
        // console.log("tick");
        // phoneNum = phone.val().split("")
        // for(var i = 0; i < 7; i++){
        //     if(i%3===0 && i < 7 && i > 0){
        //         if(i/3 > 1){
        //
        //             i++;
        //         }
        //         phoneNum.splice(i,0,"-");
        //         i++;
        //     };
        // }
        // phoneNum = phoneNum.join("");


        //
        // console.log(phoneNum);
        // $(this).val(phoneNum);
        // if(phone.val().length % 3 === 0 && phone.val().length < 7){
        //     phone.text(phone.text() + "-");
        // }
    // })

})
