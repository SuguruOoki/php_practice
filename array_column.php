<?php
$sample = [];
$sample.push(
        {"key": "就職活動状況を教えてください", "value": "【新卒】2020卒"},
        {"key": "フリガナ", "value": "OKI SUGURU"},
        {"key": "出身地", "value": "宮城県"},
        {"key": "現在の所属", "value": "高校生"},
        {"key": "知人と回答頂いた方は、お名前を全角フルネーム、スペースをあけずにご記載ください。（例：木村太郎）", "value": "SUGURU OKI"},
        {"key": "TechTrainについてご不明点、ご質問があればご自由に記載ください。", "value": "aasfsadf"},
        {"key": "開発団体やコミュニティに所属されている方は団体名とリンクをお教えください。", "value": null}
);

echo array_column($sample, "就職活動状況を教えてください");
