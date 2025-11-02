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
	'auth' => array(
		'allow_anonymous' => 'Cho phép đọc bài viết của người dùng mặc định một cách ẩn danh (%s)',
		'allow_anonymous_refresh' => 'Cho phép làm mới bài viết một cách ẩn danh',
		'api_enabled' => 'Cho phép truy cập <abbr>API</abbr> <small>(cần thiết cho ứng dụng di động)</small>',
		'form' => 'Mẫu web (truyền thống, yêu cầu JavaScript)',
		'http' => 'HTTP (dành cho người dùng nâng cao có HTTPS)',
		'none' => 'Không (nguy hiểm)',
		'title' => 'Xác thực',
		'token' => 'Mã xác thực chính',
		'token_help' => 'Cho phép truy cập vào tất cả các đầu ra RSS của người dùng cũng như làm mới nguồn tin tức mà không cần xác thực:',
		'type' => 'Phương thức xác thực',
		'unsafe_autologin' => 'Cho phép tự động đăng nhập không an toàn bằng cách sử dụng định dạng: ',
	),
	'check_install' => array(
		'cache' => array(
			'nok' => 'Kiểm tra quyền truy cập thư mục <em>./data/cache</em>. Máy chủ HTTP phải có quyền ghi.',
			'ok' => 'Quyền truy cập thư mục bộ nhớ đệm tốt.',
		),
		'categories' => array(
			'nok' => 'Bảng danh mục được cấu hình không đúng.',
			'ok' => 'Bảng danh mục ổn.',
		),
		'connection' => array(
			'nok' => 'Không thể thiết lập kết nối với cơ sở dữ liệu.',
			'ok' => 'Kết nối với cơ sở dữ liệu ổn.',
		),
		'ctype' => array(
			'nok' => 'Không tìm thấy thư viện cần thiết để kiểm tra loại ký tự (php-ctype).',
			'ok' => 'Bạn có thư viện cần thiết để kiểm tra loại ký tự (ctype).',
		),
		'curl' => array(
			'nok' => 'Không tìm thấy thư viện cURL (gói php-curl).',
			'ok' => 'Bạn có thư viện cURL.',
		),
		'data' => array(
			'nok' => 'Kiểm tra quyền truy cập thư mục <em>./data</em>. Máy chủ HTTP phải có quyền ghi.',
			'ok' => 'Quyền truy cập thư mục dữ liệu đã tốt.',
		),
		'database' => 'Cài đặt cơ sở dữ liệu',
		'dom' => array(
			'nok' => 'Không tìm thấy thư viện cần thiết để duyệt DOM (gói php-xml).',
			'ok' => 'Bạn có thư viện cần thiết để duyệt DOM.',
		),
		'entries' => array(
			'nok' => 'Bảng mục nhập được cấu hình không đúng.',
			'ok' => 'Bảng mục nhập ổn.',
		),
		'favicons' => array(
			'nok' => 'Kiểm tra quyền truy cập thư mục <em>./data/favicons</em>. Máy chủ HTTP phải có quyền ghi.',
			'ok' => 'Quyền truy cập thư mục biểu tượng đã tốt.',
		),
		'feeds' => array(
			'nok' => 'Bảng nguồn tin tức được cấu hình không đúng.',
			'ok' => 'Bảng nguồn tin tức ổn.',
		),
		'fileinfo' => array(
			'nok' => 'Không tìm thấy thư viện PHP fileinfo (gói fileinfo).',
			'ok' => 'Bạn có thư viện fileinfo.',
		),
		'files' => 'Cài đặt tập tin',
		'json' => array(
			'nok' => 'Không tìm thấy JSON (gói php-json).',
			'ok' => 'Bạn có tiện ích mở rộng JSON.',
		),
		'mbstring' => array(
			'nok' => 'Không tìm thấy thư viện mbstring được khuyến nghị cho Unicode.',
			'ok' => 'Bạn có thư viện mbstring được khuyến nghị cho Unicode.',
		),
		'pcre' => array(
			'nok' => 'Không tìm thấy thư viện cần thiết cho biểu thức chính quy (php-pcre).',
			'ok' => 'Bạn có thư viện cần thiết cho biểu thức chính quy (PCRE).',
		),
		'pdo' => array(
			'nok' => 'Không tìm thấy PDO hoặc một trong các trình điều khiển được hỗ trợ (pdo_mysql, pdo_sqlite, pdo_pgsql).',
			'ok' => 'Bạn có PDO và ít nhất một trong các trình điều khiển được hỗ trợ (pdo_mysql, pdo_sqlite, pdo_pgsql).',
		),
		'php' => array(
			'_' => 'Cài đặt PHP',
			'nok' => 'Phiên bản PHP của bạn là %s nhưng ThiệnTinTức yêu cầu phiên bản tối thiểu là %s.',
			'ok' => 'Phiên bản PHP của bạn (%s) tương thích với ThiệnTinTức.',
		),
		'tables' => array(
			'nok' => 'Có một hoặc nhiều bảng bị thiếu trong cơ sở dữ liệu.',
			'ok' => 'Các bảng thích hợp tồn tại trong cơ sở dữ liệu.',
		),
		'title' => 'Kiểm tra cài đặt',
		'tokens' => array(
			'nok' => 'Kiểm tra quyền truy cập thư mục <em>./data/tokens</em>. Máy chủ HTTP phải có quyền ghi.',
			'ok' => 'Quyền truy cập thư mục mã thông báo đã tốt.',
		),
		'users' => array(
			'nok' => 'Kiểm tra quyền truy cập thư mục <em>./data/users</em>. Máy chủ HTTP phải có quyền ghi.',
			'ok' => 'Quyền truy cập thư mục người dùng đã tốt.',
		),
		'zip' => array(
			'nok' => 'Không tìm thấy tiện ích mở rộng ZIP (gói php-zip).',
			'ok' => 'Bạn có tiện ích mở rộng ZIP.',
		),
	),
	'extensions' => array(
		'author' => 'Tác giả',
		'community' => 'Tiện ích mở rộng cộng đồng khả dụng',
		'description' => 'Mô tả',
		'disabled' => 'Đã tắt',
		'empty_list' => 'Không có tiện ích mở rộng nào được cài đặt',
		'enabled' => 'Đã bật',
		'latest' => 'Đã cài đặt',
		'name' => 'Tên',
		'no_configure_view' => 'Tiện ích mở rộng này không thể cấu hình.',
		'system' => array(
			'_' => 'Tiện ích mở rộng hệ thống',
			'no_rights' => 'Tiện ích mở rộng hệ thống (bạn không có quyền cần thiết)',
		),
		'title' => 'Tiện ích mở rộng',
		'update' => 'Có bản cập nhật',
		'user' => 'Tiện ích mở rộng người dùng',
		'version' => 'Phiên bản',
	),
	'stats' => array(
		'_' => 'Thống kê',
		'all_feeds' => 'Tất cả nguồn tin tức',
		'category' => 'Danh mục',
		'entry_count' => 'Số lượng mục nhập',
		'entry_per_category' => 'Mục nhập theo danh mục',
		'entry_per_day' => 'Mục nhập mỗi ngày (30 ngày gần nhất)',
		'entry_per_day_of_week' => 'Theo ngày trong tuần (trung bình: %.2f tin)',
		'entry_per_hour' => 'Theo giờ (trung bình: %.2f tin)',
		'entry_per_month' => 'Theo tháng (trung bình: %.2f tin)',
		'entry_repartition' => 'Phân bố mục nhập',
		'feed' => 'Nguồn tin tức',
		'feed_per_category' => 'Nguồn tin tức theo danh mục',
		'idle' => 'Nguồn tin tức không hoạt động',
		'main' => 'Thống kê chính',
		'main_stream' => 'Trang chính',
		'no_idle' => 'Không có nguồn tin tức nào không hoạt động!',
		'number_entries' => '%d bài viết',
		'percent_of_total' => '%% tổng cộng',
		'repartition' => 'Phân bố bài viết',
		'status_favorites' => 'Mục yêu thích',
		'status_read' => 'Đã đọc',
		'status_total' => 'Tổng cộng',
		'status_unread' => 'Chưa đọc',
		'title' => 'Thống kê',
		'top_feed' => 'Mười nguồn tin tức hàng đầu',
	),
	'system' => array(
		'_' => 'Cấu hình hệ thống',
		'auto-update-url' => 'URL máy chủ tự động cập nhật',
		'base-url' => array(
			'_' => 'URL cơ sở',
			'recommendation' => 'Đề xuất tự động: <kbd>%s</kbd>',
		),
		'cookie-duration' => array(
			'help' => 'theo giây',
			'number' => 'Thời gian giữ đăng nhập',
		),
		'force_email_validation' => 'Buộc xác thực địa chỉ email',
		'instance-name' => 'Tên phiên bản',
		'max-categories' => 'Số lượng danh mục tối đa cho mỗi người dùng',
		'max-feeds' => 'Số lượng nguồn tin tức tối đa cho mỗi người dùng',
		'registration' => array(
			'number' => 'Số lượng tài khoản tối đa',
			'select' => array(
				'label' => 'Mẫu đăng ký',
				'option' => array(
					'noform' => 'Đã tắt: Không có mẫu đăng ký',
					'nolimit' => 'Đã bật: Không giới hạn số lượng tài khoản',
					'setaccountsnumber' => 'Đặt số lượng tài khoản tối đa',
				),
			),
			'status' => array(
				'disabled' => 'Đã tắt mẫu',
				'enabled' => 'Đã bật mẫu',
			),
			'title' => 'Mẫu đăng ký người dùng',
		),
		'sensitive-parameter' => 'Tham số nhạy cảm. Chỉnh sửa thủ công trong <kbd>./data/config.php</kbd>',
		'tos' => array(
			'disabled' => 'chưa được cung cấp',
			'enabled' => '<a href="./?a=tos">đã được bật</a>',
			'help' => 'Cách <a href="https://freshrss.github.io/FreshRSS/en/admins/12_User_management.html#enable-terms-of-service-tos" target="_blank">bật Điều khoản Dịch vụ</a>',
		),
		'websub' => array(
			'help' => 'Về <a href="https://freshrss.github.io/FreshRSS/en/users/WebSub.html" target="_blank">WebSub</a>',
		),
	),
	'update' => array(
		'_' => 'Cập nhật ThiệnTinTức',
		'apply' => 'Bắt đầu cập nhật',
		'changelog' => 'Nhật ký thay đổi',
		'check' => 'Kiểm tra cập nhật mới',
		'copiedFromURL' => 'update.php đã được sao chép từ %s đến ./data',
		'current_version' => 'Phiên bản hiện tại đã cài đặt',
		'last' => 'Lần kiểm tra cuối',
		'loading' => 'Đang cập nhật…',
		'none' => 'Không có bản cập nhật nào',
		'releaseChannel' => array(
			'_' => 'Kênh phát hành',
			'edge' => 'Bản phát hành liên tục (“edge”)',
			'latest' => 'Bản phát hành ổn định (“latest”)',
		),
		'title' => 'Cập nhật ThiệnTinTức',
		'viaGit' => 'Cập nhật qua git và GitHub.com đã bắt đầu',
	),
	'user' => array(
		'admin' => 'Quản trị viên',
		'article_count' => 'Bài viết',
		'back_to_manage' => '← Quay lại danh sách người dùng',
		'create' => 'Tạo người dùng mới',
		'database_size' => 'Kích thước cơ sở dữ liệu',
		'email' => 'Địa chỉ email',
		'enabled' => 'Đã bật',
		'feed_count' => 'Nguồn tin tức',
		'is_admin' => 'Là quản trị viên',
		'language' => 'Ngôn ngữ',
		'last_user_activity' => 'Hoạt động gần nhất của người dùng',
		'list' => 'Danh sách người dùng',
		'number' => 'Có %d tài khoản được tạo',
		'numbers' => 'Có %d tài khoản được tạo',
		'password_form' => 'Mật khẩu<br /><small>(cho phương thức đăng nhập Mẫu web)</small>',
		'password_format' => 'Tối thiểu 7 ký tự',
		'title' => 'Quản lý người dùng',
		'username' => 'Tên người dùng',
	),
);
