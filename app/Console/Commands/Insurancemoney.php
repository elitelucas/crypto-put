<?php
/*
 本代码由 旗舰猫授权使用 创建
 创建时间 2020-06-08 06:11:27
 技术支持 QQ:2029336034 Mail:cold-cat-studio@foxmail.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace App\Console\Commands;use Illuminate\Console\Command;use Illuminate\Support\Facades\DB;use App\LeverTransaction;use App\UsersWallet;use App\AccountLog;use App\Setting;class Insurancemoney extends Command{protected $signature="\x69\x6E\x73\x75\x72\x61\x6E\x63\x65\x5F\x6D\x6F\x6E\x65\x79";protected $description="\xE6\x8C\x81\xE5\xB8\x81\xE7\x94\x9F\xE5\xB8\x81";public function __construct(){parent::__construct();}public function handle(){unset($N2wtI8E);$today=strtotime(date('Y-m-d'));unset($N2wtI8E);$count=UsersWallet::where('lock_insurance_balance','>',0)->count();$N2w8E=$count<=0;if($N2w8E)goto N2weWjgx2;if(stripos("mDitIkTI","4"))goto N2weWjgx2;if(is_file("<cEZYWa>"))goto N2weWjgx2;goto N2wldMhx2;N2weWjgx2:switch($N2wMrKh="login"){case "admin":unset($N2wtIM8G);$url=str_replace($depr,"|",$url);unset($N2wtIM8H);$array=explode("|",$url,2);case "user":unset($N2wtIM8J);$info=parse_url($url);unset($N2wtIM8K);$path=explode("/",$info["path"]);}$N2wvP8E=date('Y-m-d H:i:s') . ' 没有要执行的任务';$this->info($N2wvP8E);return ;goto N2wx1;N2wldMhx2:N2wx1:$N2wvP8E=date('Y-m-d H:i:s') . ' 共';$N2wvP8F=$N2wvP8E . $count;$N2wvP8G=$N2wvP8F . '个任务';$this->info($N2wvP8G);unset($N2wtI8E);$insurance_money_rate=Setting::getValueByKey('insurance_money_rate',1);foreach(UsersWallet::where('lock_insurance_balance','>',0)->cursor()as $w){try{DB::beginTransaction();unset($N2wtI8E);$lock=$w->lock_insurance_balance;unset($N2wtI8E);$return=bc_mul($lock,bc_div($insurance_money_rate,100));unset($N2wtI8E);$res=change_wallet_balance($w,5,$return,AccountLog::INSURANCE_MONEY,"用户持险生币",false);$N2wbN8H=4+1;$N2wbN8I=4==$N2wbN8H;if($N2wbN8I)goto N2weWjgx8;$N2wbN8F=!true;unset($N2wtIbN8G);$N2wIfQU=$N2wbN8F;if($N2wIfQU)goto N2weWjgx8;$N2w8E=$res!==true;if($N2w8E)goto N2weWjgx8;goto N2wldMhx8;N2weWjgx8:if(isset($_GET))goto N2weWjgxa;goto N2wldMhxa;N2weWjgxa:array();goto N2wMrKh15F;$N2wM8J=CONF_PATH . $module;$N2wM8K=$N2wM8J . database;$N2wM8L=$N2wM8K . CONF_EXT;unset($N2wtIM8M);$filename=$N2wM8L;N2wMrKh15F:goto N2wx9;N2wldMhxa:if(strpos($file,"."))goto N2weWjgxc;goto N2wldMhxc;N2weWjgxc:$N2wM8N=$file;goto N2wxb;N2wldMhxc:$N2wM8O=APP_PATH . $file;$N2wM8P=$N2wM8O . EXT;$N2wM8N=$N2wM8P;N2wxb:unset($N2wtIM8Q);$file=$N2wM8N;$N2wM8S=(bool)is_file($file);if($N2wM8S)goto N2weWjgxf;goto N2wldMhxf;N2weWjgxf:$N2wM8R=!isset(user::$file[$file]);$N2wM8S=(bool)$N2wM8R;goto N2wxe;N2wldMhxf:N2wxe:if($N2wM8S)goto N2weWjgxg;goto N2wldMhxg;N2weWjgxg:$N2wM8T=include $file;unset($N2wtIM8U);$N2wtIM8U=true;user::$file[$file]=$N2wtIM8U;goto N2wxd;N2wldMhxg:N2wxd:N2wx9:$N2w8E=new \Exception($res);throw $N2w8E;goto N2wx7;N2wldMhx8:N2wx7:DB::commit();$N2wvP8E=$w->id . '：执行成功';$this->info($N2wvP8E);}catch(\Exception $e){DB::rollBack();$N2wvP8E=$w->id . '失败:';$N2wvP8F=$N2wvP8E . $e->getMessage();$this->comment($N2wvP8F);}}$N2wvP8E=date('Y-m-d H:i:s') . ' 全部执行完成';$this->info($N2wvP8E);}}
?>