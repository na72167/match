<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
      'id', //ユーザーID
      'email', //email
      'password', //パスワード
      'roll', //権限
      'report_flg', //通報確認用フラグ
      'created_at',  //ユーザーデータ作成時刻
      'updated_at', //最終更新日時
      'deleted_at' //ソフトデリートフラグ
    ];

    protected $table = 'Users';

    /**
     * リレーション関係 : id -> general_profs.user_id
     */
    public function general_prof()
    {
        return $this->hasOne('App\Http\Models\General_prof', 'user_id');
    }
}
