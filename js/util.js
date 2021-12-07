$("document").ready(function(){
$("#red").click(function() { 

    $('body').css('background-color',' red');}) ; 

$("#green").bind("click",function(){

     $('body').css('background-color',' green')} ); 

$("#white").on("click",function() {

     $('body').css('background-color',' white')} ); 


    $("#a_plus").click(function() 
    {
        var t = $('p').css('font-size');
        t = parseInt(t); 
        t+=2;
        $('p').css('font-size',t+'px');
    });

   /* $("#a_plus").click(function() 
    var t=$('p'),s;
    for(i=0;i<t.length;i++)
    { 
        s=t.eq(i)
    }*/
    $("#a_moins").click(function() 
    {
        var t = $('p').css('font-size');
        t = parseInt(t); 
        t-=2;
        $('p').css('font-size', t+'px');
    });

    $("#a_raz").click(function() 
    {
        var t = $('p').css('font-size');
        t = parseInt(t); 
        t=12;
        $('p').css('font-size', t+'px');
    });

    $(".menu").css("background-color","red");
    $(".ssmenu").hide();

  /* $("#menu1_titre").click(function(){
    $("#menu1").slideToggle(600);
    });
    $("#menu2_titre").click(function(){
        $("#menu2").slideToggle(600);
        });
    $("#menu3_titre").click(function(){
        $("#menu3").slideToggle(600);
            });*/
    $(".menu").click(function()
    {
        $(this).next().slideToggle(600);
    }
        )
   
});