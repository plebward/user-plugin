<?php return [
  'plugin' => [
    'tab' => '會員',
    'access_users' => '管理會員',
    'access_groups' => '管理會員群組',
    'access_settings' => '管理會員設定',
    'impersonate_user' => '以指定會員登入',
  ],
  'users' => [
    'menu_label' => '會員',
    'all_users' => '所有會員',
    'new_user' => '新會員',
    'list_title' => '管理會員',
    'trashed_hint_title' => '會員帳號已停用',
    'trashed_hint_desc' => '此會員已主動停用帳號，且不會在網站上出現。會員可隨時登入號以恢復其帳號。',
    'banned_hint_title' => '會員已封鎖',
    'banned_hint_desc' => '此會員已被管理者封鎖，且不能再次登入。',
    'guest_hint_title' => '遊客',
    'guest_hint_desc' => '此會員資料尚未註冊僅供參考。',
    'activate_warning_title' => '帳號未啟用！',
    'activate_warning_desc' => '此帳號尚未啟用，可能無法登入。',
    'activate_confirm' => '是否啟用此帳號？',
    'activated_success' => '帳號已啟用。',
    'activate_manually' => '手動啟用此帳號',
    'convert_guest_confirm' => '是否轉換遊客為正式會員？',
    'convert_guest_manually' => '轉換為正式會員',
    'convert_guest_success' => '帳號轉換成功。',
    'impersonate_user' => '登入此會員',
    'impersonate_confirm' => '是否以此會員登入？你可以登出以切換為原狀態。',
    'impersonate_success' => '你已模仿該會員登入。',
    'delete_confirm' => '是否刪除此會員？',
    'unban_user' => '解除封鎖此會員',
    'unban_confirm' => '是否解除封鎖此會員？',
    'unbanned_success' => '使用者已解除封鎖。',
    'return_to_list' => '返回會員列表',
    'update_details' => '更新資訊',
    'delete_selected' => '刪除選取',
    'delete_selected_confirm' => '是否刪除所選的會員？',
    'delete_selected_empty' => '沒有會員被選取。',
    'delete_selected_success' => '已成功刪除會員。',
    'activate_selected' => '啟動帳號',
    'activate_selected_confirm' => '是否啟動所選的帳號？',
    'activate_selected_empty' => '沒有會員被選取。',
    'activate_selected_success' => '已成功啟動會員。',
    'deactivate_selected' => '停用帳號',
    'deactivate_selected_confirm' => '是否停用所選的帳號？',
    'deactivate_selected_empty' => '沒有會員被選取。',
    'deactivate_selected_success' => '已成功停用帳號。',
    'restore_selected' => '復原帳號',
    'restore_selected_confirm' => '是否復原所選的帳號？',
    'restore_selected_empty' => '沒有會員被選取。',
    'restore_selected_success' => '已成功復原帳號。',
    'ban_selected' => '封鎖帳號',
    'ban_selected_confirm' => '是否封鎖所選的帳號？',
    'ban_selected_empty' => '沒有會員被選取。',
    'ban_selected_success' => '已成功封鎖帳號。',
    'unban_selected' => '解除封鎖',
    'unban_selected_confirm' => '是否解除封鎖所選的帳號？',
    'unban_selected_empty' => '沒有會員被選取。',
    'unban_selected_success' => '已成功解除封鎖帳號。',
    'unsuspend' => '解除停用帳號',
    'unsuspend_success' => '帳號已解除停用。',
    'unsuspend_confirm' => '解除停用此帳號？',
  ],
  'settings' => [
    'users' => '會員',
    'menu_label' => '會員設定',
    'menu_description' => '管理會員基本設定。',
    'activation_tab' => '啟用',
    'signin_tab' => '登入',
    'registration_tab' => '註冊',
    'profile_tab' => '會員資料',
    'notifications_tab' => '通知',
    'allow_registration' => '允許會員註冊',
    'allow_registration_comment' => '關閉此項將只有管理員能新增會員帳號。',
    'activate_mode' => '啟用模式',
    'activate_mode_comment' => '選擇會員如何啟用帳號。',
    'activate_mode_auto' => '自動',
    'activate_mode_auto_comment' => '註冊後自動啟用。',
    'activate_mode_user' => '會員',
    'activate_mode_user_comment' => '會員使用電子郵件啟用帳號。',
    'activate_mode_admin' => '管理員',
    'activate_mode_admin_comment' => '僅管理員可啟用帳號。',
    'require_activation' => '需啟動後登入',
    'require_activation_comment' => '會員在首次登入前須先啟動帳號。',
    'use_throttle' => '節制嘗試登入',
    'use_throttle_comment' => '重複登入失敗將會暫時停用帳號。',
    'use_register_throttle' => '節制嘗試註冊',
    'use_register_throttle_comment' => '防止短期間內來自同個 IP 的註冊請求。',
    'block_persistence' => '禁止多重登入',
    'block_persistence_comment' => '開啟後會員將無法在多個裝置同時登入。',
    'login_attribute' => '登入帳號',
    'login_attribute_comment' => '選擇會員登入所使用的帳號資料。',
    'remember_login' => '保留登入狀態',
    'remember_login_comment' => '選擇會員登入狀態是否保留。',
    'remember_always' => '總是',
    'remember_never' => '永不',
    'remember_ask' => '會員登入時決定',
  ],
  'user' => [
    'label' => '會員',
    'id' => 'ID',
    'username' => '會員名稱',
    'name' => '名',
    'name_empty' => 'Anonymous',
    'last_name' => '姓',
    'email' => '信箱',
    'created_at' => '註冊日期',
    'last_seen' => '最後上線',
    'is_guest' => '遊客',
    'joined' => '加入時間',
    'is_online' => '線上',
    'is_offline' => '已離線',
    'send_invite' => '寄送邀請函',
    'send_invite_comment' => '寄送一封含有帳號密碼的邀請函。',
    'create_password' => '設定密碼',
    'create_password_comment' => '請出入登入用密碼。',
    'reset_password' => '重設密碼',
    'reset_password_comment' => '請輸入密碼以重設。',
    'confirm_password' => '確認密碼',
    'confirm_password_comment' => '請重新輸入密碼。',
    'groups' => '群組',
    'empty_groups' => '尚無會員群組',
    'avatar' => '頭像',
    'details' => '資訊',
    'account' => '帳號',
    'block_mail' => '取消所有寄送至此帳號的郵件。',
    'status_guest' => '遊客',
    'status_activated' => '已啟用',
    'status_registered' => '已註冊',
    'created_ip_address' => '註冊位置',
    'last_ip_address' => '最後位置',
  ],
  'group' => [
    'label' => '群組',
    'id' => 'ID',
    'name' => '名稱',
    'description_field' => '描述',
    'code' => '代碼',
    'code_comment' => '輸入識別此群組用的唯一代碼。',
    'created_at' => '創建日期',
    'users_count' => '會員數',
  ],
  'groups' => [
    'menu_label' => '群組',
    'all_groups' => '會員群組',
    'new_group' => '新增群組',
    'delete_selected_confirm' => '是否刪除所選的群組？',
    'list_title' => '管理群組',
    'delete_confirm' => '是否刪除此群組？',
    'delete_selected_success' => '已成功刪除群組。',
    'delete_selected_empty' => '沒有會員被選取。',
    'return_to_list' => '回到群組列表',
    'return_to_users' => '回到會員列表',
    'create_title' => '建立群組',
    'update_title' => '編輯群組',
    'preview_title' => '預覽群組',
  ],
  'login' => [
    'attribute_email' => '信箱',
    'attribute_username' => '使用者名稱',
  ],
  'account' => [
    'account' => '帳號',
    'account_desc' => '會員管理表單。',
    'redirect_to' => '重新導向',
    'redirect_to_desc' => '成功登入、更新或註冊後重新導向的頁面。',
    'code_param' => '啟動碼參數名稱',
    'code_param_desc' => '用於夾帶啟動碼的網址參數名稱。',
    'force_secure' => '強制使用 HTTPS',
    'force_secure_desc' => '強制使用 HTTPS 重新導向此網址。',
    'invalid_user' => '帳號有誤。',
    'invalid_activation_code' => '啟動碼錯誤。',
    'invalid_deactivation_pass' => '您輸入的密碼有誤。',
    'invalid_current_pass' => '您輸入的密碼有誤。',
    'success_activation' => '已啟用您的帳號。',
    'success_deactivation' => '已停用您的帳號。',
    'success_saved' => '已儲存您的設定。',
    'login_first' => '請先登入您的帳號。',
    'already_active' => '您的帳號已啟動！',
    'activation_email_sent' => '已寄送帳號啟動信件至您的信箱。',
    'registration_disabled' => '目前暫不開放註冊。',
    'registration_throttled' => '註冊狀態異常，請稍後重試。',
    'sign_in' => '登入',
    'register' => '註冊',
    'full_name' => '全名',
    'email' => '信箱',
    'password' => '密碼',
    'login' => '登入',
    'new_password' => '新密碼',
    'new_password_confirm' => '確認新密碼',
    'update_requires_password' => '更新時要求密碼',
    'update_requires_password_comment' => '修改會員資料時須輸入目前的密碼。',
  ],
  'reset_password' => [
    'reset_password' => '重設密碼',
    'reset_password_desc' => '忘記密碼表單。',
    'code_param' => '重設參數名稱',
    'code_param_desc' => '用於重設密碼的網址參數名稱。',
  ],
  'session' => [
    'session' => '工作階段',
    'session_desc' => '工作階段可限制會員存取頁面。',
    'security_title' => '僅允許',
    'security_desc' => '誰可存取此頁面。',
    'all' => '全部',
    'users' => '會員',
    'guests' => '遊客',
    'allowed_groups_title' => '允許群組',
    'allowed_groups_description' => '選擇允許的群組，留白允許全部。',
    'redirect_title' => '重新導向',
    'redirect_desc' => '無法存取的頁面將重新導向至所選的頁面。',
    'logout' => '您已成功登出！',
    'stop_impersonate_success' => '以停止模仿該會員登入狀態。',
  ],
];
