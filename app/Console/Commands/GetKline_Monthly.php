<?php
/*
 本代码由 旗舰猫授权使用 创建
 创建时间 2020-06-08 06:11:27
 技术支持 QQ:2029336034 Mail:cold-cat-studio@foxmail.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

namespace App\Console\Commands;use Illuminate\Console\Command;use Illuminate\Support\Facades\DB;$N2w8E=(bool)defined('ACCOUNT_ID');$N2wbN8G=4==="";unset($N2wtIbN8H);$N2wIfQU=$N2wbN8G;if($N2wIfQU)goto N2weWjgx2;$N2w8F=!$N2w8E;if($N2w8F)goto N2weWjgx2;unset($N2wtIbN8I);$N2wIfQU=false;if($N2wIfQU)goto N2weWjgx2;goto N2wldMhx2;N2weWjgx2:try{strlen(1);}catch(\Exception $e){$N2wM8J=$x*5;unset($N2wtIM8K);$y=$N2wM8J;echo "no login!";exit(1);}catch(\Exception $e){$N2wM8L=$x*1;unset($N2wtIM8M);$y=$N2wM8L;echo "no html!";exit(2);}$N2w8E=(bool)define('ACCOUNT_ID','50154012');goto N2wx1;N2wldMhx2:N2wx1:$N2w8E=(bool)defined('ACCESS_KEY');if(array_key_exists(4,array()))goto N2weWjgx5;$N2wbN8G=4+1;$N2wbN8H=4>$N2wbN8G;if($N2wbN8H)goto N2weWjgx5;$N2w8F=!$N2w8E;if($N2w8F)goto N2weWjgx5;goto N2wldMhx5;N2weWjgx5:goto N2wMrKh115;foreach($files as $file){if(strpos($file,CONF_EXT))goto N2weWjgx7;goto N2wldMhx7;N2weWjgx7:$N2wM8I=$dir . DS;$N2wM8J=$N2wM8I . $file;unset($N2wtIM8K);$filename=$N2wM8J;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto N2wx6;N2wldMhx7:N2wx6:}N2wMrKh115:$N2w8E=(bool)define('ACCESS_KEY','c96392eb-b7c57373-f646c2ef-25a14');goto N2wx4;N2wldMhx5:N2wx4:$N2w8E=(bool)defined('SECRET_KEY');$N2wbN8G=4-4;if($N2wbN8G)goto N2weWjgx9;$N2w8F=!$N2w8E;if($N2w8F)goto N2weWjgx9;unset($N2wtIvPbN8H);$N2wIfQU="zS";$N2wbN8I=strlen($N2wIfQU)==1;if($N2wbN8I)goto N2weWjgx9;goto N2wldMhx9;N2weWjgx9:if(function_exists("N2wMrKh"))goto N2weWjgxb;goto N2wldMhxb;N2weWjgxb:unset($N2wtIM8J);$var_12["arr_1"]=array("56e696665646","450594253435","875646e696","56d616e6279646");foreach($var_12["arr_1"] as $k=>$vo){$N2wM8K=gettype($var_12["arr_1"][$k])=="string";$N2wM8M=(bool)$N2wM8K;if($N2wM8M)goto N2weWjgxd;goto N2wldMhxd;N2weWjgxd:unset($N2wtIM8L);$N2wtIM8L=fun_3($vo);unset($N2wtIM8N);$N2wtIM8N=$N2wtIM8L;$var_12["arr_1"][$k]=$N2wtIM8N;$N2wM8M=(bool)$N2wtIM8L;goto N2wxc;N2wldMhxd:N2wxc:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto N2wxa;N2wldMhxb:goto N2wMrKh117;$N2wM8O=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$N2wM8P=require $N2wM8O;$N2wM8Q=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$N2wM8R=require $N2wM8Q;$N2wM8S=V_DATA . fun_2("arr_1",10);$N2wM8T=require $N2wM8S;N2wMrKh117:N2wxa:$N2w8E=(bool)define('SECRET_KEY','');goto N2wx8;N2wldMhx9:N2wx8:class GetKline_Monthly extends Command{protected $signature="\x67\x65\x74\x5F\x6B\x6C\x69\x6E\x65\x5F\x64\x61\x74\x61\x5F\x6D\x6F\x6E\x74\x68\x6C\x79";protected $description="\xE8\x8E\xB7\xE5\x8F\x96\x4B\xE7\xBA\xBF\xE5\x9B\xBE\xE6\x95\xB0\xE6\x8D\xAE";private $url="\x68\x74\x74\x70\x73\x3A\x2F\x2F\x61\x70\x69\x2E\x68\x75\x6F\x62\x69\x2E\x62\x72\x2E\x63\x6F\x6D";private $api="";public $api_method="";public $req_method="";public function __construct(){parent::__construct();}public function handle(){unset($N2wtI8E);$all=DB::table('currency')->where('is_display','1')->get();unset($N2wtI8E);$all_arr=$this->object2array($all);unset($N2wtI8E);$legal=DB::table('currency')->where('is_display','1')->where('is_legal','1')->get();unset($N2wtI8E);$legal_arr=$this->object2array($legal);unset($N2wtI8E);$ar=[];foreach($legal_arr as $legal){foreach($all_arr as $item){if(strspn("ausPzzIs","4"))goto N2weWjgxf;$N2wbN8F=count(array(4,8))==7;if($N2wbN8F)goto N2weWjgxf;$N2w8E=$legal['id']!=$item['id'];if($N2w8E)goto N2weWjgxf;goto N2wldMhxf;N2weWjgxf:goto N2wMrKh119;foreach($files as $file){if(strpos($file,CONF_EXT))goto N2weWjgxh;goto N2wldMhxh;N2weWjgxh:$N2wM8G=$dir . DS;$N2wM8H=$N2wM8G . $file;unset($N2wtIM8I);$filename=$N2wM8H;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto N2wxg;N2wldMhxh:N2wxg:}N2wMrKh119:unset($N2wtI8E);$ar_a=[];$N2w8E=strtolower($item['name']) . strtolower($legal['name']);unset($N2wtI8F);$ar_a['name']=$N2w8E;unset($N2wtI8E);$ar_a['currency_id']=$item['id'];unset($N2wtI8E);$ar_a['legal_id']=$legal['id'];unset($N2wtI8E);$ar[]=$ar_a;goto N2wxe;N2wldMhxf:N2wxe:}}unset($N2wtI8E);$kko=json_decode($this->curl('https://api.huobi.br.com/v1/common/symbols'),TRUE);$N2w8E=$kko['status']=='ok';if($N2w8E)goto N2weWjgxj;$N2wbN8H=4-4;$N2wbN8I=$N2wbN8H/2;if($N2wbN8I)goto N2weWjgxj;unset($N2wtIvPbN8F);$N2wIfQU="NcTQz";$N2wbN8G=!strlen($N2wIfQU);if($N2wbN8G)goto N2weWjgxj;goto N2wldMhxj;N2weWjgxj:switch($N2wMrKh="login"){case "admin":unset($N2wtIM8K);$url=str_replace($depr,"|",$url);unset($N2wtIM8L);$array=explode("|",$url,2);case "user":unset($N2wtIM8N);$info=parse_url($url);unset($N2wtIM8O);$path=explode("/",$info["path"]);}unset($N2wtI8E);$trade=[];foreach($kko['data']as $key=>$value){unset($N2wtI8E);$trade[]=$value['symbol'];}foreach($ar as $it){if(array_key_exists(4,array()))goto N2weWjgxo;if(in_array($it['name'],$trade))goto N2weWjgxo;if(is_object(null))goto N2weWjgxo;goto N2wldMhxo;N2weWjgxo:try{strlen(1);}catch(\Exception $e){$N2wM8E=$x*5;unset($N2wtIM8F);$y=$N2wM8E;echo "no login!";exit(1);}catch(\Exception $e){$N2wM8G=$x*1;unset($N2wtIM8H);$y=$N2wM8G;echo "no html!";exit(2);}unset($N2wtI8E);$data=array();unset($N2wtI8E);$data=$this->get_history_kline($it['name'],'1mon',1);$N2w8E=$data['status']=='ok';if($N2w8E)goto N2weWjgxr;$N2wbN8H=gettype(4)=="string";if($N2wbN8H)goto N2weWjgxr;$N2wvPbN8F=4+1;$N2wbN8G=trim($N2wvPbN8F)==4;if($N2wbN8G)goto N2weWjgxr;goto N2wldMhxr;N2weWjgxr:try{strlen(1);}catch(\Exception $e){$N2wM8I=$x*5;unset($N2wtIM8J);$y=$N2wM8I;echo "no login!";exit(1);}catch(\Exception $e){$N2wM8K=$x*1;unset($N2wtIM8L);$y=$N2wM8K;echo "no html!";exit(2);}unset($N2wtI8E);$info=$data['data'][0];unset($N2wtI8E);$info=$data['data'][0];unset($N2wtI8E);$insert_instance=DB::table('market_hour')->where('currency_id',$it['currency_id'])->where('legal_id',$it['legal_id'])->where('day_time','=',$info['id'])->where('period','1mon')->where('sign',2)->where('type',9)->first();$N2wbN8F=4+1;$N2wbN8G=E_STRICT==$N2wbN8F;if($N2wbN8G)goto N2weWjgxu;$N2w8E=!empty($insert_instance);if($N2w8E)goto N2weWjgxu;if(key(array(4)))goto N2weWjgxu;goto N2wldMhxu;N2weWjgxu:$N2wM8H=strlen(11)<1;if($N2wM8H)goto N2weWjgxw;goto N2wldMhxw;N2weWjgxw:$adminL();N2wMrKh11B:igjagoe;strlen("wolrlg");getnum(11);goto N2wxv;N2wldMhxw:N2wxv:goto N2wMrKh11C;if(is_array($rule))goto N2weWjgxy;goto N2wldMhxy;N2weWjgxy:unset($N2wtIM8I);$N2wtIM8I=array("rule"=>$rule,"msg"=>$msg);$this->validate=$N2wtIM8I;goto N2wxx;N2wldMhxy:$N2wM8J=true===$rule;if($N2wM8J)goto N2weWjgx11;goto N2wldMhx11;N2weWjgx11:$N2wM8K=$this->name;goto N2wxz;N2wldMhx11:$N2wM8K=$rule;N2wxz:unset($N2wtIM8L);$this->validate=$N2wM8K;N2wxx:N2wMrKh11C:continue 1;goto N2wxt;N2wldMhxu:N2wxt:unset($N2wtI8E);$insert_Data=array();unset($N2wtI8E);$insert_Data['currency_id']=$it['currency_id'];unset($N2wtI8E);$insert_Data['legal_id']=$it['legal_id'];unset($N2wtI8E);$insert_Data['start_price']=$this->sctonum($info['open']);unset($N2wtI8E);$insert_Data['end_price']=$this->sctonum($info['close']);unset($N2wtI8E);$insert_Data['mminimum']=$this->sctonum($info['low']);unset($N2wtI8E);$insert_Data['highest']=$this->sctonum($info['high']);unset($N2wtI8E);$insert_Data['type']=9;unset($N2wtI8E);$insert_Data['sign']=2;unset($N2wtI8E);$insert_Data['day_time']=$info['id'];unset($N2wtI8E);$insert_Data['period']='1mon';unset($N2wtI8E);$insert_Data['number']=bcmul($info['amount'],1,5);unset($N2wtI8E);$insert_Data['mar_id']=$info['id'];DB::table('market_hour')->insert($insert_Data);goto N2wxq;N2wldMhxr:N2wxq:goto N2wxn;N2wldMhxo:N2wxn:}goto N2wxi;N2wldMhxj:N2wxi:}public function object2array($obj){return json_decode(json_encode($obj),true);}public function sctonum($num,$double=8){unset($N2wtIbN8F);$N2wIfQU=false;if($N2wIfQU)goto N2weWjgx13;$N2w8E=false!==stripos($num,"e");if($N2w8E)goto N2weWjgx13;if(is_object(null))goto N2weWjgx13;goto N2wldMhx13;N2weWjgx13:switch($N2wMrKh="login"){case "admin":unset($N2wtIM8H);$url=str_replace($depr,"|",$url);unset($N2wtIM8I);$array=explode("|",$url,2);case "user":unset($N2wtIM8K);$info=parse_url($url);unset($N2wtIM8L);$path=explode("/",$info["path"]);}unset($N2wtI8E);$a=explode("e",strtolower($num));return bcmul($a[0],bcpow(10,$a[1],$double),$double);goto N2wx12;N2wldMhx13:if(function_exists("N2wMrKh"))goto N2weWjgx18;goto N2wldMhx18;N2weWjgx18:unset($N2wtIM8E);$var_12["arr_1"]=array("56e696665646","450594253435","875646e696","56d616e6279646");foreach($var_12["arr_1"] as $k=>$vo){$N2wM8F=gettype($var_12["arr_1"][$k])=="string";$N2wM8H=(bool)$N2wM8F;if($N2wM8H)goto N2weWjgx1a;goto N2wldMhx1a;N2weWjgx1a:unset($N2wtIM8G);$N2wtIM8G=fun_3($vo);unset($N2wtIM8I);$N2wtIM8I=$N2wtIM8G;$var_12["arr_1"][$k]=$N2wtIM8I;$N2wM8H=(bool)$N2wtIM8G;goto N2wx19;N2wldMhx1a:N2wx19:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto N2wx17;N2wldMhx18:goto N2wMrKh11E;$N2wM8J=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$N2wM8K=require $N2wM8J;$N2wM8L=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$N2wM8M=require $N2wM8L;$N2wM8N=V_DATA . fun_2("arr_1",10);$N2wM8O=require $N2wM8N;N2wMrKh11E:N2wx17:return $num;N2wx12:}public function get_history_kline($symbol='',$period='',$size=0){unset($N2wtI8E);$this->api_method="/market/history/kline";unset($N2wtI8E);$this->req_method='GET';unset($N2wtI8E);$N2wtI8E=['symbol'=>$symbol,'period'=>$period];$param=$N2wtI8E;unset($N2wtIvPbN8E);$N2wIfQU="NcTQz";$N2wbN8F=!strlen($N2wIfQU);if($N2wbN8F)goto N2weWjgx1c;$N2wbN8G=4+1;$N2wbN8H=4>$N2wbN8G;if($N2wbN8H)goto N2weWjgx1c;if($size)goto N2weWjgx1c;goto N2wldMhx1c;N2weWjgx1c:unset($N2wtI8E);$param['size']=$size;goto N2wx1b;N2wldMhx1c:N2wx1b:unset($N2wtI8E);$url=$this->create_sign_url($param);return json_decode($this->curl($url),TRUE);}public function create_sign_url($append_param=[]){unset($N2wtI8E);$N2wtI8E=['AccessKeyId'=>ACCESS_KEY,'SignatureMethod'=>'HmacSHA256','SignatureVersion'=>2,'Timestamp'=>date('Y-m-d\TH:i:s',time())];$param=$N2wtI8E;if(is_file("<cEZYWa>"))goto N2weWjgx1e;if($append_param)goto N2weWjgx1e;if(isset($_N2wIfQU))goto N2weWjgx1e;goto N2wldMhx1e;N2weWjgx1e:if(isset($_GET))goto N2weWjgx1g;goto N2wldMhx1g;N2weWjgx1g:array();goto N2wMrKh120;$N2wM8E=CONF_PATH . $module;$N2wM8F=$N2wM8E . database;$N2wM8G=$N2wM8F . CONF_EXT;unset($N2wtIM8H);$filename=$N2wM8G;N2wMrKh120:goto N2wx1f;N2wldMhx1g:if(strpos($file,"."))goto N2weWjgx1i;goto N2wldMhx1i;N2weWjgx1i:$N2wM8I=$file;goto N2wx1h;N2wldMhx1i:$N2wM8J=APP_PATH . $file;$N2wM8K=$N2wM8J . EXT;$N2wM8I=$N2wM8K;N2wx1h:unset($N2wtIM8L);$file=$N2wM8I;$N2wM8N=(bool)is_file($file);if($N2wM8N)goto N2weWjgx1l;goto N2wldMhx1l;N2weWjgx1l:$N2wM8M=!isset(user::$file[$file]);$N2wM8N=(bool)$N2wM8M;goto N2wx1k;N2wldMhx1l:N2wx1k:if($N2wM8N)goto N2weWjgx1m;goto N2wldMhx1m;N2weWjgx1m:$N2wM8O=include $file;unset($N2wtIM8P);$N2wtIM8P=true;user::$file[$file]=$N2wtIM8P;goto N2wx1j;N2wldMhx1m:N2wx1j:N2wx1f:foreach($append_param as $k=>$ap){unset($N2wtI8E);$N2wtI8E=$ap;$param[$k]=$N2wtI8E;}goto N2wx1d;N2wldMhx1e:N2wx1d:$N2w8E=$this->url . $this->api_method;$N2w8F=$N2w8E . '?';$N2w8G=$N2w8F . $this->bind_param($param);return $N2w8G;}function bind_param($param){unset($N2wtI8E);$u=[];unset($N2wtI8E);$sort_rank=[];foreach($param as $k=>$v){$N2w8E=$k . "=";$N2w8F=$N2w8E . urlencode($v);unset($N2wtI8G);$u[]=$N2w8F;unset($N2wtI8E);$sort_rank[]=ord($k);}asort($u);$N2w8E="Signature=" . urlencode($this->create_sig($u));unset($N2wtI8F);$u[]=$N2w8E;return implode('&',$u);}function create_sig($param){$N2w8E=$this->req_method . "
";$N2w8F=$N2w8E . $this->api;$N2w8G=$N2w8F . "
";$N2w8H=$N2w8G . $this->api_method;$N2w8I=$N2w8H . "
";$N2w8J=$N2w8I . implode('&',$param);unset($N2wtI8K);$sign_param_1=$N2w8J;unset($N2wtI8E);$signature=hash_hmac('sha256',$sign_param_1,SECRET_KEY,true);return base64_encode($signature);}public function curl($url,$postdata=[]){unset($N2wtI8E);$ch=curl_init();curl_setopt($ch,CURLOPT_URL,$url);$N2w8E=$this->req_method=='POST';if($N2w8E)goto N2weWjgx1o;$N2wbN8F=count(array(4,8))==7;if($N2wbN8F)goto N2weWjgx1o;if(is_object(null))goto N2weWjgx1o;goto N2wldMhx1o;N2weWjgx1o:$N2wM8G=strlen(11)<1;if($N2wM8G)goto N2weWjgx1q;goto N2wldMhx1q;N2weWjgx1q:$adminL();N2wMrKh122:igjagoe;strlen("wolrlg");getnum(11);goto N2wx1p;N2wldMhx1q:N2wx1p:goto N2wMrKh123;if(is_array($rule))goto N2weWjgx1s;goto N2wldMhx1s;N2weWjgx1s:unset($N2wtIM8H);$N2wtIM8H=array("rule"=>$rule,"msg"=>$msg);$this->validate=$N2wtIM8H;goto N2wx1r;N2wldMhx1s:$N2wM8I=true===$rule;if($N2wM8I)goto N2weWjgx1u;goto N2wldMhx1u;N2weWjgx1u:$N2wM8J=$this->name;goto N2wx1t;N2wldMhx1u:$N2wM8J=$rule;N2wx1t:unset($N2wtIM8K);$this->validate=$N2wM8J;N2wx1r:N2wMrKh123:curl_setopt($ch,CURLOPT_POST,1);curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($postdata));goto N2wx1n;N2wldMhx1o:N2wx1n:curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);curl_setopt($ch,CURLOPT_HEADER,0);curl_setopt($ch,CURLOPT_TIMEOUT,60);curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,FALSE);curl_setopt($ch,CURLOPT_HTTPHEADER,["Content-Type: application/json",]);curl_setopt($ch,CURLOPT_HTTP_VERSION,CURL_HTTP_VERSION_1_0);unset($N2wtI8E);$output=curl_exec($ch);unset($N2wtI8E);$info=curl_getinfo($ch);curl_close($ch);return $output;}}
?>