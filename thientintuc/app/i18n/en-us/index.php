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
	'about' => array(
		'_' => 'Giới thiệu',
		'agpl3' => '<a href="https://www.gnu.org/licenses/agpl-3.0.html">AGPL 3</a>',
		'bugs_reports' => 'Các trang tin nổi bật',
		'credits' => 'Về RSS',
		'credits_content' => 'RSS là gì?<br>'
    . 'RSS là một cách đơn giản để bạn nhận thông báo khi có nội dung mới từ các trang web yêu thích.<br>'
    . 'Thay vì phải truy cập từng trang để kiểm tra, RSS sẽ tự động cập nhật và hiển thị tin mới cho bạn thông qua một ứng dụng đọc tin.<br>'
    . 'Không quảng cáo, không tin rác, không spam — bạn chỉ thấy đúng những gì bạn đã đăng ký.<br>'
    . 'RSS giúp bạn tiết kiệm thời gian, theo dõi nhiều nguồn tin cùng lúc,<br>'
    . 'và luôn nắm bắt thông tin mới một cách thuận tiện và lành mạnh.',
		'documentation' => 'Các công cụ khác',
		'freshrss_description' => 'ThiệnTinTức là một công cụ đọc và tổng hợp tin tức được phát triển dựa trên nền tảng FreshRSS, giúp bạn cập nhật nhanh chóng các thông tin mới nhất từ nhiều nguồn đáng tin cậy — đặc biệt là các hoạt động và thông báo từ Chùa Phúc Minh Theravāda.<br><br>'
    . 'Giao diện đơn giản, dễ sử dụng, ThiệnTinTức mang đến trải nghiệm đọc tin nhẹ nhàng, phù hợp với mọi đối tượng, giúp bạn có thể theo dõi tin tức an toàn mà không cần truy cập từng trang web riêng lẻ.<br><br>'
    . 'Tính năng nổi bật:<br>'
    . '- Tự động cập nhật tin tức từ các nguồn đã chọn<br>'
    . '- Hiển thị nội dung rõ ràng, dễ đọc trên mọi thiết bị<br>'
    . '- Tập trung vào các thông tin tu học hoặc các hoạt động văn hóa, cộng đồng<br><br>'
    . 'ThiệnTinTức hướng đến việc kết nối thông tin một cách thuận tiện và lành mạnh,<br>'
	. 'giúp bạn không bỏ lỡ những điều quan trọng đang diễn ra xung quanh.',
		'github' => '(Sao chép link vào mục "Thêm nguồn tin tức")<br>'
	. '<a href="https://rss.app/feeds/s6XwP8DyosQh7I30.xml">Ánh Sáng Chánh Pháp</a><br>'
    . '<a href="https://rss.app/feeds/aCBtMD6RZdvhFho3.xml">Việt Nam Yêu Kính Pháp</a><br>'
    . '<a href="https://nhandan.vn/rss/moi-truong-1296.rss">Bản Tin Thời Tiết</a><br>',
		'license' => 'Giấy phép',
		'project_website' => 'Trang chủ',
		'title' => 'Giới thiệu',
		'version' => 'Phiên bản',
	),
	'feed' => array(
		'empty' => 'Không có bài viết nào để hiển thị.',
		'rss_of' => 'Nguồn tin tức RSS của %s',
		'title' => 'Trang chính',
		'title_fav' => 'Yêu thích',
		'title_global' => 'Chế độ xem toàn cục',
	),
	'log' => array(
		'_' => 'Nhật ký',
		'clear' => 'Xoá nhật ký',
		'empty' => 'Tệp nhật ký trống',
		'title' => 'Nhật ký',
	),
	'menu' => array(
		'about' => 'Về ThiệnTinTức',
		'before_one_day' => 'Cũ hơn một ngày',
		'before_one_week' => 'Cũ hơn một tuần',
		'bookmark_query' => 'Đánh dấu yêu cầu tìm kiếm hiện tại',
		'favorites' => 'Yêu thích (%s)',
		'global_view' => 'Chế độ xem toàn cục',
		'important' => 'Nguồn tin đáng chú ý',
		'main_stream' => 'Trang chính',
		'mark_all_read' => 'Đánh dấu tất cả là đã đọc',
		'mark_cat_read' => 'Đánh dấu danh mục là đã đọc',
		'mark_feed_read' => 'Đánh dấu là đã đọc',
		'mark_selection_unread' => 'Đánh dấu mục đã chọn là chưa đọc',
		'newer_first' => 'Mới hơn trước',
		'non-starred' => 'Hiển thị mục không phải yêu thích',
		'normal_view' => 'Chế độ xem thông thường',
		'older_first' => 'Cũ hơn trước',
		'queries' => 'Yêu cầu tìm kiếm',
		'read' => 'Hiển thị mục đã đọc',
		'reader_view' => 'Chế độ đọc',
		'rss_view' => 'Nguồn tin tức RSS',
		'search_short' => 'Tìm kiếm',
		'starred' => 'Hiển thị mục yêu thích',
		'stats' => 'Thống kê',
		'subscription' => 'Quản lý đăng ký',
		'tags' => 'Danh mục của tôi',
		'unread' => 'Hiển thị mục chưa đọc',
	),
	'share' => 'Chia sẻ',
	'tag' => array(
		'related' => 'Thẻ bài viết',
	),
	'tos' => array(
		'title' => 'Điều khoản Dịch vụ',
	),
);
