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

### choiceのresourceメソッド使った感想
めっちゃ大事！ メソッド内では使われないけど、メソッドの引数に入れることで、引き渡している（ちなみに、$question_id 入れないと正しく編集されないし削除もされない⇒別の設問に影響出る） ⇒ 引数の入れる手順とかルールが存在するかも！？
    public function update($question_id, $id,Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'max:250',
        ]);

        // $choices = Choice::create($validated);
        $choices = Choice::find($id);
        // $choices->question_id=$request->$question_id->id;
        $choices->name = $request->input('name');
        $choices->valid = $request->input('valid');

        //DBに保存
        $choices->save();

        return redirect()->route('auth.quiz1');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($question_id,$id)
    {
        //
        $choices = Choice::find($id);

        $choices->delete();

        return redirect()->route('auth.quiz1');
    }

## Filesystem.phpからファイルの保存先決める
