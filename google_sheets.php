<?php
	// データ取得 ※key=にAPI_KEYを追加して実行する
	$url = 'https://sheets.googleapis.com/v4/spreadsheets/11BCnspCt2Mut3nhc4WMY6CYTd0zF9C3eCzsk1AEpKLM/values/A1:E6?key=';
	mb_language('Japanese');
	$result = json_decode(mb_convert_encoding(file_get_contents($url), "utf8", "auto"));

	$string = '';
	foreach($result->values as $value) {
		foreach ($value as $data) {
			$string .= "'" . $data . "',";
		}
		$string .= "\n";
	}
	echo $string;
?>