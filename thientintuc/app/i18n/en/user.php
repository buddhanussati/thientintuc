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
	'email' => array(
		'feedback' => array(
			'invalid' => 'Địa chỉ email này không hợp lệ.',
			'required' => 'Cần có địa chỉ email.',
		),
		'validation' => array(
			'change_email' => 'Bạn có thể thay đổi địa chỉ email của mình <a href="%s">trên trang hồ sơ</a>.',
			'email_sent_to' => 'Chúng tôi đã gửi email đến <strong>%s</strong>. Vui lòng làm theo hướng dẫn trong email để xác thực địa chỉ của bạn.',
			'feedback' => array(
				'email_failed' => 'Chúng tôi không thể gửi email cho bạn do lỗi cấu hình máy chủ.',
				'email_sent' => 'Một email đã được gửi đến địa chỉ của bạn.',
				'error' => 'Xác thực địa chỉ email đã thất bại.',
				'ok' => 'Địa chỉ email này đã được xác thực.',
				'unnecessary' => 'Địa chỉ email này đã được xác thực rồi.',
				'wrong_token' => 'Địa chỉ email này không thể được xác thực do mã thông báo không đúng.',
			),
			'need_to' => 'Bạn cần xác thực địa chỉ email của mình trước khi có thể sử dụng %s.',
			'resend_email' => 'Gửi lại email',
			'title' => 'Xác thực địa chỉ email',
		),
	),
	'mailer' => array(
		'email_need_validation' => array(
			'body' => 'Bạn vừa đăng ký trên %s, nhưng bạn vẫn cần xác thực địa chỉ email của mình. Để làm điều đó, chỉ cần làm theo liên kết:',
			'title' => 'Bạn cần xác thực tài khoản của mình',
			'welcome' => 'Chào mừng %s,',
		),
	),
	'password' => array(
		'invalid' => 'Mật khẩu không hợp lệ.',
	),
	'tos' => array(
		'feedback' => array(
			'invalid' => 'Bạn phải chấp nhận Điều khoản Dịch vụ để có thể đăng ký.',
		),
	),
	'username' => array(
		'invalid' => 'Tên người dùng này không hợp lệ.',
		'taken' => 'Tên người dùng này, %s, đã có người dùng.',
	),
);
