<?php
/*
 * B-studio : Contents Management System
 * Copyright (c) BigBeat Inc. all rights reserved. (http://www.bigbeat.co.jp)
 *
 * Licensed under the GPL, LGPL and MPL Open Source licenses.
*/
	class B_CommonModule extends B_Module {
		function __construct($file_path) {
			parent::__construct($file_path);

			// HTMLヘッダー
			require_once(B_DOC_ROOT . B_CURRENT_ROOT . 'bs-module/common/config/html_header_config.php');
			$this->html_header_config = $html_header_config;
			$this->createHtmlHeader($html_header_config);
		}

		function showHtmlHeader() {
			echo $this->html_header->getHtml();

			$this->printDebugInfo();
		}

		function setTitle($title) {
			parent::setTitle(B_TITLE_PREFIX . $title);
		}
	}
