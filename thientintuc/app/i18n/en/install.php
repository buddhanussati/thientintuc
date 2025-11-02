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
	'action' => array(
		'finish' => 'Hoàn tất cài đặt',
		'fix_errors_before' => 'Vui lòng khắc phục tất cả lỗi trước khi tiếp tục bước tiếp theo.',
		'keep_install' => 'Giữ lại cấu hình trước đó',
		'next_step' => 'Đi đến bước tiếp theo',
		'reinstall' => 'Cài đặt lại ThiệnTinTức',
	),
	'auth' => array(
		'form' => 'Mẫu web (truyền thống, yêu cầu JavaScript)',
		'http' => 'HTTP (dành cho người dùng nâng cao với HTTPS)',
		'none' => 'Không (nguy hiểm)',
		'password_form' => 'Mật khẩu<br /><small>(cho phương thức đăng nhập Mẫu web)</small>',
		'password_format' => 'Tối thiểu 7 ký tự',
		'type' => 'Phương thức xác thực',
	),
	'bdd' => array(
		'_' => 'Cơ sở dữ liệu',
		'conf' => array(
			'_' => 'Cấu hình cơ sở dữ liệu',
			'ko' => 'Xác minh cấu hình cơ sở dữ liệu của bạn.',
			'ok' => 'Cấu hình cơ sở dữ liệu đã được lưu.',
		),
		'host' => 'Máy chủ (Host)',
		'password' => 'Mật khẩu cơ sở dữ liệu',
		'prefix' => 'Tiền tố bảng',
		'type' => 'Loại cơ sở dữ liệu',
		'username' => 'Tên người dùng cơ sở dữ liệu',
	),
	'check' => array(
		'_' => 'Kiểm tra',
		'already_installed' => 'Chúng tôi đã phát hiện ThiệnTinTức đã được cài đặt!',
		'cache' => array(
			'nok' => 'Kiểm tra quyền trên thư mục <em>%1$s</em> cho người dùng <em>%2$s</em>. Máy chủ HTTP phải có quyền ghi.',
			'ok' => 'Quyền trên thư mục bộ nhớ đệm tốt.',
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
			'nok' => 'Kiểm tra quyền trên thư mục <em>%1$s</em> cho người dùng <em>%2$s</em>. Máy chủ HTTP phải có quyền ghi.',
			'ok' => 'Quyền trên thư mục dữ liệu tốt.',
		),
		'dom' => array(
			'nok' => 'Không tìm thấy thư viện cần thiết để duyệt DOM.',
			'ok' => 'Bạn có thư viện cần thiết để duyệt DOM.',
		),
		'favicons' => array(
			'nok' => 'Kiểm tra quyền trên thư mục <em>%1$s</em> cho người dùng <em>%2$s</em>. Máy chủ HTTP phải có quyền ghi.',
			'ok' => 'Quyền trên thư mục favicons tốt.',
		),
		'fileinfo' => array(
			'nok' => 'Không tìm thấy thư viện PHP fileinfo (gói fileinfo).',
			'ok' => 'Bạn có thư viện fileinfo.',
		),
		'json' => array(
			'nok' => 'Không tìm thấy thư viện được khuyến nghị để phân tích cú pháp JSON.',
			'ok' => 'Bạn có thư viện được khuyến nghị để phân tích cú pháp JSON.',
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
			'nok' => 'Phiên bản PHP của bạn là %s, nhưng ThiệnTinTức yêu cầu ít nhất phiên bản %s.',
			'ok' => 'Phiên bản PHP của bạn, %s, tương thích với ThiệnTinTức.',
		),
		'reload' => 'Kiểm tra lại',
		'tmp' => array(
			'nok' => 'Kiểm tra quyền trên thư mục <em>%1$s</em> cho người dùng <em>%2$s</em>. Máy chủ HTTP phải có quyền ghi.',
			'ok' => 'Quyền trên thư mục tạm thời tốt.',
		),
		'unknown_process_username' => 'không xác định',
		'users' => array(
			'nok' => 'Kiểm tra quyền trên thư mục <em>%1$s</em> cho người dùng <em>%2$s</em>. Máy chủ HTTP phải có quyền ghi.',
			'ok' => 'Quyền trên thư mục người dùng tốt.',
		),
		'xml' => array(
			'nok' => 'Không tìm thấy thư viện cần thiết để phân tích cú pháp XML.',
			'ok' => 'Bạn có thư viện cần thiết để phân tích cú pháp XML.',
		),
	),
	'conf' => array(
		'_' => 'Cấu hình chung',
		'ok' => 'Cấu hình chung đã được lưu.',
	),
	'congratulations' => 'Chúc mừng!',
	'default_user' => array(
		'_' => 'Tên người dùng mặc định',
		'max_char' => 'tối đa 16 ký tự chữ và số',
	),
	'fix_errors_before' => 'Vui lòng khắc phục lỗi trước khi tiếp tục bước tiếp theo.',
	'javascript_is_better' => 'ThiệnTinTức dễ hơn khi bật JavaScript',
	'js' => array(
		'confirm_reinstall' => 'Bạn sẽ mất cấu hình trước đó khi cài đặt lại ThiệnTinTức. Bạn có chắc chắn muốn tiếp tục?',
	),
	'language' => array(
		'_' => 'Ngôn ngữ',
		'choose' => 'Chọn ngôn ngữ cho ThiệnTinTức',
		'defined' => 'Ngôn ngữ đã được xác định.',
	),
	'missing_applied_migrations' => 'Đã xảy ra lỗi; bạn nên tự tạo một tệp trống <em>%s</em>.',
	'ok' => 'Quá trình cài đặt đã thành công.',
	'session' => array(
		'nok' => 'Máy chủ web dường như được cấu hình sai cho cookie cần thiết cho phiên PHP!',
	),
	'step' => 'bước %d',
	'steps' => 'Các bước',
	'this_is_the_end' => 'Kết thúc',
	'title' => 'Cài đặt · ThiệnTinTức',
);
