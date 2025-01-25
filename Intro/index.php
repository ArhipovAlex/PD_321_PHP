<?php
	$for="Introduction to PHP";
	define('NAME', 'value');
	//const PI=3.14;
	const PREFIX = 'OPTION';
	$int=1024;
$heredoc_string = <<<HEREDOC_STRING
            Heredoc-string (RAW-string) - это строка с форматированием
            Такие строки игнорируют Escape-последовательность и выводятся точно так же, как и задаются.
            Heredoc-строки часто используются для формирования разметки:
                <p>
			<code>
					$int;
                </code>
				</p>
HEREDOC_STRING;

$nowdoc_string = <<<'NOWDOC_STRING'
		Nowdoc-строка:
		!!!Не поддерживает интерполяцию
					<code>
					$int;
                </code>
NOWDOC_STRING;

$escape_sequences = <<<ESCAPE_SEQUENCES
<h3>Escape-последовательности:</h3>
<strong>Escape-последовательности</strong> &mdash; это символы, экранированные '\'.
<strong>Backslash ('\')</strong> &mdash; это символ отмены спецзначения другого символа:
<ul>
	<li><code>\"</code> &mdash; отменяет специальныое значение кавычек;</li>
	<li><code>\'</code> &mdash; отменяет специальныое значение кавычек;</li>
</ul>
Придает некоторым символам спецзначение
ESCAPE_SEQUENCES;


	require 'functions.php';
	require 'index.view.php'; //Так же как #include встраивает содержмое целевого файла в наш файл
	//Закрывающая метка в php файле необязательна

?>