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
	'access' => array(
		'denied' => 'Tài khoản của bạn đã được tạo',
		'not_found' => 'Bạn đang tìm kiếm một trang không tồn tại',
	),
	'admin' => array(
		'optimization_complete' => 'Tối ưu hóa hoàn tất',
	),
	'api' => array(
		'password' => array(
			'failed' => 'Không thể sửa đổi mật khẩu của bạn',
			'updated' => 'Mật khẩu của bạn đã được sửa đổi',
		),
	),
	'auth' => array(
		'login' => array(
			'invalid' => 'Đăng nhập không hợp lệ',
			'success' => 'Bạn đã kết nối',
		),
		'logout' => array(
			'success' => 'Bạn đã ngắt kết nối',
		),
	),
	'conf' => array(
		'error' => 'Đã xảy ra lỗi khi lưu cấu hình',
		'query_created' => 'Yêu cầu tìm kiếm “%s” đã được tạo.',
		'shortcuts_updated' => 'Phím tắt đã được cập nhật',
		'updated' => 'Cấu hình đã được cập nhật',
	),
	'extensions' => array(
		'already_enabled' => '%s đã được bật',
		'cannot_remove' => 'Không thể xoá %s',
		'disable' => array(
			'ko' => 'Không thể tắt %s. <a href="%s">Kiểm tra nhật ký ThiệnTinTức</a> để biết chi tiết.',
			'ok' => '%s hiện đã bị tắt',
		),
		'enable' => array(
			'ko' => 'Không thể bật %s. <a href="%s">Kiểm tra nhật ký ThiệnTinTức</a> để biết chi tiết.',
			'ok' => '%s hiện đã được bật',
		),
		'no_access' => 'Bạn không có quyền truy cập %s',
		'not_enabled' => '%s chưa được bật',
		'not_found' => '%s không tồn tại',
		'removed' => '%s đã được xoá',
	),
	'import_export' => array(
		'export_no_zip_extension' => 'Tiện ích mở rộng ZIP không có trên máy chủ của bạn. Vui lòng thử xuất tệp từng tệp một.',
		'feeds_imported' => 'Các nguồn tin tức của bạn đã được nhập. Nếu bạn đã hoàn tất việc nhập, bây giờ bạn có thể nhấp vào nút *Cập nhật nguồn tin tức*.',
		'feeds_imported_with_errors' => 'Các nguồn tin tức của bạn đã được nhập, nhưng đã xảy ra một số lỗi. Nếu bạn đã hoàn tất việc nhập, bây giờ bạn có thể nhấp vào nút *Cập nhật nguồn tin tức*.',
		'file_cannot_be_uploaded' => 'Không thể tải lên tệp!',
		'no_zip_extension' => 'Tiện ích mở rộng ZIP không có trên máy chủ của bạn.',
		'zip_error' => 'Đã xảy ra lỗi trong quá trình xử lý ZIP.',
	),
	'profile' => array(
		'error' => 'Không thể sửa đổi hồ sơ của bạn',
		'updated' => 'Hồ sơ của bạn đã được sửa đổi',
	),
	'sub' => array(
		'actualize' => 'Đang cập nhật',
		'articles' => array(
			'marked_read' => 'Các bài viết đã chọn đã được đánh dấu là đã đọc.',
			'marked_unread' => 'Các bài viết đã được đánh dấu là chưa đọc.',
		),
		'category' => array(
			'created' => 'Danh mục %s đã được tạo.',
			'deleted' => 'Danh mục đã bị xoá.',
			'emptied' => 'Danh mục đã được làm trống',
			'error' => 'Không thể cập nhật danh mục',
			'name_exists' => 'Tên danh mục đã tồn tại.',
			'no_id' => 'Bạn phải chỉ định ID của danh mục.',
			'no_name' => 'Tên danh mục không được để trống.',
			'not_delete_default' => 'Bạn không thể xoá danh mục mặc định!',
			'not_exist' => 'Danh mục không tồn tại!',
			'over_max' => 'Bạn đã đạt đến giới hạn danh mục của mình (%d)',
			'updated' => 'Danh mục đã được cập nhật.',
		),
		'feed' => array(
			'actualized' => '<em>%s</em> đã được cập nhật',
			'actualizeds' => 'Các nguồn tin tức RSS đã được cập nhật',
			'added' => 'Nguồn tin tức RSS <em>%s</em> đã được thêm',
			'already_subscribed' => 'Bạn đã đăng ký <em>%s</em>',
			'cache_cleared' => 'Bộ nhớ đệm <em>%s</em> đã được xoá',
			'deleted' => 'Nguồn tin tức đã bị xoá',
			'error' => 'Không thể cập nhật nguồn tin tức',
			'internal_problem' => 'Không thể thêm nguồn tin tức. <a href="%s">Kiểm tra nhật ký ThiệnTinTức</a> để biết chi tiết. Bạn có thể thử buộc thêm bằng cách nối thêm <code>#force_feed</code> vào URL.',
			'invalid_url' => 'URL <em>%s</em> không hợp lệ',
			'n_actualized' => '%d nguồn tin tức đã được cập nhật',
			'n_entries_deleted' => '%d bài viết đã bị xoá',
			'no_refresh' => 'Đã làm mới tất cả các nguồn tin',
			'not_added' => 'Không thể thêm <em>%s</em>',
			'not_found' => 'Không tìm thấy nguồn tin tức',
			'over_max' => 'Bạn đã đạt đến giới hạn nguồn tin tức của mình (%d)',
			'reloaded' => '<em>%s</em> đã được tải lại',
			'selector_preview' => array(
				'http_error' => 'Không thể tải nội dung trang web.',
				'no_entries' => 'Không có bài viết nào trong nguồn tin tức này. Bạn cần ít nhất một bài viết để tạo bản xem trước.',
				'no_feed' => 'Lỗi nội bộ (không tìm thấy nguồn tin tức).',
				'no_result' => 'Bộ chọn không khớp với bất cứ điều gì. Nội dung nguồn tin tức gốc sẽ được hiển thị thay thế.',
				'selector_empty' => 'Bộ chọn trống. Bạn cần xác định một bộ chọn để tạo bản xem trước.',
			),
			'updated' => 'Nguồn tin tức đã được cập nhật',
		),
		'purge_completed' => 'Xoá dữ liệu hoàn tất (%d bài viết đã bị xoá)',
	),
	'tag' => array(
		'created' => 'Danh mục “%s” đã được tạo.',
		'error' => 'Không thể cập nhật danh mục!',
		'name_exists' => 'Tên danh mục đã tồn tại.',
		'renamed' => 'Danh mục “%s” đã được đổi tên thành “%s”.',
		'updated' => 'Danh mục đã được cập nhật.',
	),
	'update' => array(
		'can_apply' => 'Có bản cập nhật ThiệnTinTức: <strong>Phiên bản %s</strong>.',
		'error' => 'Quá trình cập nhật đã gặp lỗi: %s',
		'file_is_nok' => 'Có bản cập nhật ThiệnTinTức (<strong>Phiên bản %s</strong>), nhưng kiểm tra quyền truy cập thư mục <em>%s</em>. Máy chủ HTTP phải có quyền ghi',
		'finished' => 'Cập nhật hoàn tất!',
		'none' => 'Không có bản cập nhật nào',
		'server_not_found' => 'Không tìm thấy máy chủ cập nhật. [%s]',
	),
	'user' => array(
		'created' => array(
			'_' => 'Người dùng %s đã được tạo',
			'error' => 'Không thể tạo người dùng %s',
		),
		'deleted' => array(
			'_' => 'Người dùng %s đã bị xoá',
			'error' => 'Không thể xoá người dùng %s',
		),
		'updated' => array(
			'_' => 'Người dùng %s đã được cập nhật',
			'error' => 'Người dùng %s chưa được cập nhật',
		),
	),
);
