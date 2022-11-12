// ========サインアップ=========
//サインアップ時のバリテーション関係
export const SIGNUP_NUM = {
  SIGNUP_EMAIL_MAXLEN: 20,
  SIGNUP_EMAIL_MINLEN: 4,
  SIGNUP_PASSWORD_MAXLEN: 20,
  SIGNUP_PASSWORD_MINLEN: 6,
  SES_LIMIT: 604800
};

export const SIGNUP_NAME = {
  SIGNUP: "signUp"
};

export const SIGNUP_BUTTON = {
  REGISTER_BUTTON: '登録する',
  REGISTERING_BUTTON: '登録中です...'
};

//========ユーザー認証時のエラーメッセージ========

export const EmailFormErrMsg = {
  emailErrMsgEmpty: 'メールアドレスを入力してください',
  emailErrMsgEmailFormat: 'メールアドレスの形式が正しくありません',
  emailErrMsgHalfNumAlp: '半角英数で入力してください',
  emailErrMsgMaxLen: 'メールアドレスは20文字以内にしてください',
  emailErrMsgMinLen: 'メールアドレスは4文字以上にしてください',
  emailErrMsgEmailDup: 'メールアドレスが重複しています',
};


export const PasswordFormErrMsg = {
  passwordErrMsgEmpty: 'パスワードを入力してください',
  passwordErrMsgHalfNumAlp: 'パスワードは半角英数字で入力してください',
  passwordErrMsgMaxLen: 'パスワードは20文字以内で入力してください',
  passwordErrMsgMinLen: 'パスワードは6文字以上入力してください',
  passwordErrMsgPassMatch: '確認用パスワードと一致しません',
};


export const CommonErrMsg = {
  commonErrMsg: '接続エラーが発生しました。時間を置いたのち再度送信して下さい',
};

// ========ログイン=========
//ログイン時のバリテーション関係
export const LOGIN_NUM = {
  LOGIN_EMAIL_MAXLEN: 20,
  LOGIN_EMAIL_MINLEN: 4,
  LOGIN_PASSWORD_MAXLEN: 20,
  LOGIN_PASSWORD_MINLEN: 6,
  SES_LIMIT: 604800
};

export const LOGIN_NAME = {
  LOGIN: "login"
};
