<?php

/******************************************************************************/
/* Each entry of that file can be associated with a comment to indicate its   */
/* state. When there is no comment, it means the entry is fully translated.   */
/* The recognized comments are (comment matching is case-insensitive):        */
/*   + TODO: the entry has never been translated.                             */
/*   + DIRTY: the entry has been translated but needs to be updated.          */
/*   + IGNORE: the entry does not need to be translated.                      */
/* When a comment is not recognized, it is discarded.                         */
/******************************************************************************/

return array(
	'api' => array(
		'documentation' => 'Sao chép URL sau để sử dụng trong công cụ bên ngoài.',
		'title' => 'API',
	),
	'bookmarklet' => array(
		'documentation' => 'Kéo nút này vào thanh dấu trang của bạn hoặc nhấp chuột phải và chọn “Đánh dấu liên kết này”. Sau đó nhấp vào nút “Đăng ký” trên bất kỳ trang nào bạn muốn đăng ký.',
		'label' => 'Đăng ký',
		'title' => 'Bookmarklet',
	),
	'category' => array(
		'_' => 'Danh mục',
		'add' => 'Thêm danh mục',
		'archiving' => 'Lưu trữ',
		'dynamic_opml' => array(
			'_' => 'OPML động',
			'help' => 'Cung cấp URL đến <a href="http://opml.org/" target="_blank">tệp OPML</a> để tự động điền nguồn tin tức vào danh mục này',
		),
		'empty' => 'Danh mục trống',
		'expand' => 'Mở rộng danh mục',
		'information' => 'Thông tin',
		'open' => 'Mở danh mục',
		'opml_url' => 'URL OPML',
		'position' => 'Vị trí hiển thị',
		'position_help' => 'Để kiểm soát thứ tự sắp xếp danh mục',
		'title' => 'Tiêu đề',
	),
	'feed' => array(
		'accept_cookies' => 'Chấp nhận cookie',
		'accept_cookies_help' => 'Cho phép máy chủ nguồn tin tức đặt cookie (chỉ lưu trong bộ nhớ trong suốt thời gian yêu cầu)',
		'add' => 'Thêm nguồn tin tức RSS',
		'advanced' => 'Nâng cao',
		'archiving' => 'Lưu trữ',
		'auth' => array(
			'configuration' => 'Đăng nhập',
			'help' => 'Cho phép truy cập vào các nguồn tin tức RSS được bảo vệ bằng HTTP',
			'http' => 'Xác thực HTTP',
			'password' => 'Mật khẩu HTTP',
			'username' => 'Tên người dùng HTTP',
		),
		'clear_cache' => 'Luôn xoá bộ nhớ đệm',
		'content_action' => array(
			'_' => 'Hành động nội dung khi tìm nạp nội dung bài viết',
			'append' => 'Thêm vào sau nội dung hiện có',
			'prepend' => 'Thêm vào trước nội dung hiện có',
			'replace' => 'Thay thế nội dung hiện có',
		),
		'css_cookie' => 'Sử dụng Cookie khi tìm nạp nội dung bài viết',
		'css_cookie_help' => 'Ví dụ: <kbd>foo=bar; gdpr_consent=true; cookie=value</kbd>',
		'css_help' => 'Truy xuất các nguồn tin tức RSS bị cắt ngắn (thận trọng, cần nhiều thời gian hơn!)',
		'css_path' => 'Bộ chọn CSS bài viết trên trang web gốc',
		'css_path_filter' => array(
			'_' => 'Bộ chọn CSS của các phần tử cần xoá',
			'help' => 'Bộ chọn CSS có thể là một danh sách như: <kbd>.footer, .aside</kbd>',
		),
		'description' => 'Mô tả',
		'empty' => 'Nguồn tin tức này trống. Vui lòng xác minh rằng nó vẫn được duy trì.',
		'error' => 'Nguồn tin tức này đã gặp sự cố. Vui lòng xác minh rằng nó luôn có thể truy cập được rồi cập nhật nó.',
		'export-as-opml' => array(
			'download' => 'Tải xuống',
			'help' => 'Tệp XML (tập hợp con dữ liệu. <a href="https://freshrss.github.io/FreshRSS/en/developers/OPML.html" target="_blank">Xem tài liệu</a>)',
			'label' => 'Xuất dưới dạng OPML',
		),
		'filteractions' => array(
			'_' => 'Hành động bộ lọc',
			'help' => 'Viết một bộ lọc tìm kiếm trên mỗi dòng. Toán tử <a href="https://freshrss.github.io/FreshRSS/en/users/10_filter.html#with-the-search-field" target="_blank">xem tài liệu</a>.',
		),
		'information' => 'Thông tin',
		'keep_min' => 'Số lượng bài viết tối thiểu để giữ',
		'kind' => array(
			'_' => 'Loại nguồn tin tức',
			'html_xpath' => array(
				'_' => 'HTML + XPath (Web scraping)',
				'feed_title' => array(
					'_' => 'tiêu đề nguồn tin tức',
					'help' => 'Ví dụ: <code>//title</code> hoặc chuỗi tĩnh: <code>"My custom feed"</code>',
				),
				'help' => '<dfn><a href="https://www.w3.org/TR/xpath-10/" target="_blank">XPath 1.0</a></dfn> là ngôn ngữ tìm kiếm tiêu chuẩn dành cho người dùng nâng cao, được ThiệnTinTức hỗ trợ để cho phép trích xuất dữ liệu web.',
				'item' => array(
					'_' => 'tìm <strong>mục</strong> tin tức<br /><small>(quan trọng nhất)</small>',
					'help' => 'Ví dụ: <code>//div[@class="news-item"]</code>',
				),
				'item_author' => array(
					'_' => 'tác giả mục',
					'help' => 'Cũng có thể là chuỗi tĩnh. Ví dụ: <code>"Anonymous"</code>',
				),
				'item_categories' => 'thẻ mục',
				'item_content' => array(
					'_' => 'nội dung mục',
					'help' => 'Ví dụ để lấy toàn bộ mục: <code>.</code>',
				),
				'item_thumbnail' => array(
					'_' => 'hình thu nhỏ mục',
					'help' => 'Ví dụ: <code>descendant::img/@src</code>',
				),
				'item_timeFormat' => array(
					'_' => 'Định dạng ngày/giờ tùy chỉnh',
					'help' => 'Tuỳ chọn. Một định dạng được hỗ trợ bởi <a href="https://php.net/datetime.createfromformat" target="_blank"><code>DateTime::createFromFormat()</code></a> như <code>d-m-Y H:i:s</code>',
				),
				'item_timestamp' => array(
					'_' => 'ngày mục',
					'help' => 'Kết quả sẽ được phân tích cú pháp bởi <a href="https://php.net/strtotime" target="_blank"><code>strtotime()</code></a>',
				),
				'item_title' => array(
					'_' => 'tiêu đề mục',
					'help' => 'Sử dụng đặc biệt <a href="https://developer.mozilla.org/docs/Web/XPath/Axes" target="_blank">trục XPath</a> <code>descendant::</code> như <code>descendant::h2</code>',
				),
				'item_uid' => array(
					'_' => 'ID duy nhất của mục',
					'help' => 'Tuỳ chọn. Ví dụ: <code>descendant::div/@data-uri</code>',
				),
				'item_uri' => array(
					'_' => 'liên kết mục (URL)',
					'help' => 'Ví dụ: <code>descendant::a/@href</code>',
				),
				'relative' => 'XPath (tương đối với mục) cho:',
				'xpath' => 'XPath cho:',
			),
			'json_dotnotation' => array(
				'_' => 'JSON (ký hiệu chấm)',
				'feed_title' => array(
					'_' => 'tiêu đề nguồn tin tức',
					'help' => 'Ví dụ: <code>meta.title</code> hoặc chuỗi tĩnh: <code>"My custom feed"</code>',
				),
				'help' => 'Ký hiệu chấm JSON sử dụng dấu chấm giữa các đối tượng và dấu ngoặc vuông cho mảng (ví dụ: <code>data.items[0].title</code>)',
				'item' => array(
					'_' => 'tìm <strong>mục</strong> tin tức<br /><small>(quan trọng nhất)</small>',
					'help' => 'Đường dẫn JSON đến mảng chứa các mục, ví dụ: <code>newsItems</code>',
				),
				'item_author' => 'tác giả mục',
				'item_categories' => 'thẻ mục',
				'item_content' => array(
					'_' => 'nội dung mục',
					'help' => 'Khoá chứa nội dung, ví dụ: <code>content</code>',
				),
				'item_thumbnail' => array(
					'_' => 'hình thu nhỏ mục',
					'help' => 'Ví dụ: <code>image</code>',
				),
				'item_timeFormat' => array(
					'_' => 'Định dạng ngày/giờ tùy chỉnh',
					'help' => 'Tuỳ chọn. Một định dạng được hỗ trợ bởi <a href="https://php.net/datetime.createfromformat" target="_blank"><code>DateTime::createFromFormat()</code></a> như <code>d-m-Y H:i:s</code>',
				),
				'item_timestamp' => array(
					'_' => 'ngày mục',
					'help' => 'Kết quả sẽ được phân tích cú pháp bởi <a href="https://php.net/strtotime" target="_blank"><code>strtotime()</code></a>',
				),
				'item_title' => 'tiêu đề mục',
				'item_uid' => 'ID duy nhất của mục',
				'item_uri' => array(
					'_' => 'liên kết mục (URL)',
					'help' => 'Ví dụ: <code>permalink</code>',
				),
				'json' => 'ký hiệu chấm cho:',
				'relative' => 'đường dẫn ký hiệu chấm (tương đối với mục) cho:',
			),
			'jsonfeed' => 'nguồn tin tức JSON',
			'rss' => 'RSS / Atom (mặc định)',
			'xml_xpath' => 'XML + XPath',
		),
		'maintenance' => array(
			'clear_cache' => 'Xoá bộ nhớ đệm',
			'clear_cache_help' => 'Xoá bộ nhớ đệm cho nguồn tin tức này.',
			'reload_articles' => 'Tải lại bài viết',
			'reload_articles_help' => 'Tải lại bấy nhiêu bài viết và tìm nạp nội dung hoàn chỉnh nếu bộ chọn được xác định.',
			'title' => 'Bảo trì',
		),
		'max_http_redir' => 'Số lần chuyển hướng HTTP tối đa',
		'max_http_redir_help' => 'Đặt thành 0 hoặc để trống để tắt, -1 để không giới hạn chuyển hướng',
		'method' => array(
			'_' => 'Phương thức HTTP',
		),
		'method_help' => 'Payload POST có hỗ trợ tự động cho <code>application/x-www-form-urlencoded</code> và <code>application/json</code>',
		'method_postparams' => 'Payload cho POST',
		'moved_category_deleted' => 'Khi bạn xoá một danh mục, các nguồn tin tức của nó sẽ tự động được phân loại dưới <em>%s</em>.',
		'mute' => array(
			'_' => 'tắt tiếng',
			'state_is_muted' => 'nguồn tin tức này đã bị tắt tiếng',
		),
		'no_selected' => 'Chưa chọn nguồn tin tức nào.',
		'number_entries' => '%d bài viết',
		'open_feed' => 'Mở nguồn tin tức %s',
		'priority' => array(
			'_' => 'Khả năng hiển thị',
			'archived' => 'Không hiển thị (đã lưu trữ)',
			'category' => 'Hiển thị trong danh mục của nó',
			'important' => 'Hiển thị trong các nguồn tin tức quan trọng',
			'main_stream' => 'Hiển thị trong trang chính',
		),
		'proxy' => 'Đặt proxy để tìm nạp nguồn tin tức này',
		'proxy_help' => 'Chọn một giao thức (ví dụ: SOCKS5) và nhập địa chỉ proxy (ví dụ: <kbd>127.0.0.1:1080</kbd> hoặc <kbd>username:password@127.0.0.1:1080</kbd>)',
		'selector_preview' => array(
			'show_raw' => 'Hiển thị mã nguồn',
			'show_rendered' => 'Hiển thị nội dung',
		),
		'show' => array(
			'all' => 'Hiển thị tất cả nguồn tin tức',
			'error' => 'Chỉ hiển thị nguồn tin tức bị lỗi',
		),
		'showing' => array(
			'error' => 'Chỉ hiển thị nguồn tin tức bị lỗi',
		),
		'ssl_verify' => 'Xác minh bảo mật SSL',
		'stats' => 'Thống kê',
		'think_to_add' => 'Bạn có thể thêm một số nguồn tin tức.',
		'timeout' => 'Thời gian chờ (giây)',
		'title' => 'Tiêu đề',
		'title_add' => 'Thêm nguồn tin tức RSS',
		'ttl' => 'Không tự động làm mới thường xuyên hơn',
		'url' => 'URL nguồn tin tức',
		'useragent' => 'Đặt user agent để tìm nạp nguồn tin tức này',
		'useragent_help' => 'Ví dụ: <kbd>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:86.0)</kbd>',
		'validator' => 'Kiểm tra tính hợp lệ của nguồn tin tức',
		'website' => 'URL trang web',
		'websub' => 'Thông báo tức thì với WebSub',
	),
	'import_export' => array(
		'export' => 'Xuất',
		'export_labelled' => 'Xuất các bài viết ở trong danh mục của bạn',
		'export_opml' => 'Xuất danh sách nguồn tin tức (OPML)',
		'export_starred' => 'Xuất mục yêu thích của bạn',
		'feed_list' => 'Danh sách %s bài viết',
		'file_to_import' => 'Tệp để nhập<br />(OPML, JSON hoặc ZIP)',
		'file_to_import_no_zip' => 'Tệp để nhập<br />(OPML hoặc JSON)',
		'import' => 'Nhập',
		'starred_list' => 'Danh sách bài viết yêu thích',
		'title' => 'Nhập / xuất',
	),
	'menu' => array(
		'add' => 'Thêm nguồn tin tức hoặc danh mục',
		'import_export' => 'Nhập / xuất',
		'label_management' => 'Quản lý danh mục',
		'stats' => array(
			'idle' => 'Nguồn tin tức không hoạt động',
			'main' => 'Thống kê chính',
			'repartition' => 'Phân bố bài viết',
		),
		'subscription_management' => 'Quản lý đăng ký',
		'subscription_tools' => 'Công cụ đăng ký',
	),
	'tag' => array(
		'auto_label' => 'Thêm danh mục này vào các bài viết mới',
		'name' => 'Tên',
		'new_name' => 'Tên mới',
		'old_name' => 'Tên cũ',
	),
	'title' => array(
		'_' => 'Quản lý đăng ký',
		'add' => 'Thêm nguồn tin tức hoặc danh mục',
		'add_category' => 'Thêm danh mục',
		'add_dynamic_opml' => 'Thêm OPML động',
		'add_feed' => 'Thêm nguồn tin tức',
		'add_label' => 'Thêm danh mục',
		'delete_label' => 'Xoá danh mục',
		'feed_management' => 'Quản lý nguồn tin tức RSS',
		'rename_label' => 'Đổi tên danh mục',
		'subscription_tools' => 'Công cụ đăng ký',
	),
);
