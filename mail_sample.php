<?php get_header() ?>
<?php
    //セッションを開始する
    session_start();
    //POSTされたhidden要素のトークンを取得
    $ticket = isset($_POST['ticket']) ? $_POST['ticket'] : '';
    //セッションに格納されたトークンを取得
    $save   = isset($_SESSION['ticket']) ? $_SESSION['ticket'] : '';
    //セッションに格納されたトークンを破棄
    unset($_SESSION['ticket']);

    //ポストされたワンタイムチケットとセッション変数から取得したワンタイムチケットが同じ場合、正常にポストされたとみなして処理を行う。
    if ($ticket === $save) {
        $comp_title = "送信完了";
        $comp_message = "お問い合わせ頂きありがとうございます。<br />ご入力頂いたメールアドレスに確認メールを送信しましたのでご確認ください。<br />このページは15秒後にトップページへ自動遷移いたします。";

        $contact_work = $_POST['contact_work'];
        $contact_tel = $_POST['contact_tel'];
        $contact_gmail = $_POST['contact_gmail'];
        $contact_company = $_POST['contact_company'];
        $contact_teacher = $_POST['contact_techer'];
        $contact_message = $_POST['contact_radio'];

        $admin_mail = "pan@swimmy.co"; //info@reqrea.co.jp

        $add_header ="From:".$admin_mail."\n";
        $add_header .= "Reply-to:".$admin_mail."\n";
        $add_header .= "X-Mailer: PHP/". phpversion();
        //自動返信メール本文
        $messageuser = $contact_name." 様" ."\n";
        $messageuser .= "この度はお問い合わせ頂き誠にありがとうございます。\n\n";
        $messageuser .= "下記内容でお問い合わせを受け付けました。\n\n\n";
        $messageuser .= "担当者より追ってご連絡させて頂きます。\n\n\n";
        $messageuser .= "-----------------------------------------------------------------------------\n\n";
        $messageuser .= "メッセージ本文:\n\n";
        $messageuser .= '【業種】'."\n".$contact_work."\n\n";
        $messageuser .= '【電話番号】'."\n".$contact_tel."\n\n";
        $messageuser .= '【メールアドレス】'."\n".$contact_gmail."\n\n";
        $messageuser .= '【担当者名】'."\n".$contact_teacher."\n\n";
        $messageuser .= '【会社名】'."\n".$contact_company."\n\n";
        $messageuser .= '【自社サイト有無】'."\n".$contact_radio."\n\n";
        $messageuser .= "-----------------------------------------------------------------------------\n\n\n";
        $messageuser .= "このメールは株式会社リクリエのお問い合わせフォームから送信されました。\n";
        //管理者確認用メール本文
        $messageadmin = "お問い合わせフォームより下記の内容でお問い合わせがありました。\n\n\n";
        $messageadmin .= "＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n\n";
        $messageadmin .= '【業種】'."\n".$contact_work."\n\n";
        $messageadmin .= '【電話番号】'."\n".$contact_tel."\n\n";
        $messageadmin .= '【メールアドレス】'."\n".$contact_gmail."\n\n";
        $messageadmin .= '【担当者名】'."\n".$contact_tel."\n\n";
        $messageadmin .= '【会社名】'."\n".$contact_company."\n\n";
        $messageadmin .= '【自社サイト有無】'."\n".$contact_radio."\n\n";
        $messageadmin .= "＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n\n";

        mail("$contact_mail", "Shopifyお問い合わせに関して", "$contact_name","$messageuser", "$add_header");
        //管理者確認用メール送信設定
        $titleadmin .= "お問い合わせフォームよりお問い合わせがありました【".$contact_name."】";
        $mail_status = mail($admin_mail,$titleadmin,$messageadmin,$add_header);
    }
?>
