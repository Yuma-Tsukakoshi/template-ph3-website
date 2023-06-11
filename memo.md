### @csrf
フォームを作成する際にセキュリティ対策⇒ワンタイムトークンが主


### 6-2-5  セッションを使って保存時のメッセージ表示
$request -> sesseion() -> flash('message','-確認文-');  
または、 return back() -> with('massage')  
PHPでいう、session_id がmessageとなって使われている  

### 6-3-2 バリデーションチェック
old関数 ⇒ バリデーションエラー前の値を残しておく  
エラー文の出力：<x-input-error> componentsファイルの中のエラー文


### ルートにgateをつけてアクセスを制限
AuthServiceProvider.phpに記入
設定するときはmiddlewareで（can:define名）でtestゲート記入
