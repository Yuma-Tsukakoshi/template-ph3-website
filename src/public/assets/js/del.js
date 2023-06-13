$(function(){
  $(".btn-dell").click(function(){
    console.log("aaa");
    if(confirm("本当に削除しますか？")){
        //そのままsubmit（削除）
    }else{
        //cancel
        return false;
    }
  });
});
