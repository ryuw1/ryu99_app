<html>
    <head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    </head>
    <body>
<script>
$(function() {
	$("#chkdel").click(function() {

    /// チェックされたvalue値を配列として取得
    var vals = $('input[name=chk_todo]:checked').map(function(){
      return $(this).val();
    }).get();
    console.log(vals);
    console.log(vals.length)

    if(vals.length == 0) {    
        alert('チェックされていません');
        return false;   //処理中断
    }

    var deleteConfirm = confirm('チェックをまとめて削除してよろしいですか？');
    if(deleteConfirm == true) {    
        $.ajaxSetup({
            headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),},
        });
        $.ajax({
        //POST通信
        type: "POST",
        //ここでデータの送信先URLを指定します。
        url: "/todo/del_multi",
        dataType: "text",
        data: {
            id: vals,
        },
        })
        // 成功
        .done(function (results){
            // alert('成功');

            // 通信成功時の処理
            console.log("results : " + results);        
            window.location.href = "/todo";     //削除後に画面を遷移

        })
        // 失敗
        .fail(function(jqXHR, textStatus, errorThrown){
            alert('失敗');
            console.log("ajax通信に失敗しました");
            console.log("jqXHR          : " + jqXHR.status); // HTTPステータスが取得
            console.log("textStatus     : " + textStatus);    // タイムアウト、パースエラー
            console.log("errorThrown    : " + errorThrown.message); // 例外情報
            console.log("URL            : " + url);        
        });
    }

      });
  });
</script>

<a  id="chkdel" href="javascript:void(0);" class="black">まとめて削除</a>
@foreach ($items as $item)
    <input type="checkbox" name="chk_todo" value="{{ $item->id }}">  {{ $item->title }}
@endforeach

    </body>
</html>