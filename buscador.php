<?php 

 $host    = "host=127.0.0.1";
 $port    = "port=5432";
 $dbname   = "dbname=foods";
 $credentials = "user=postgres password=alex";
 $conn = pg_connect( "$host $port $dbname $credentials" );

  if(!$conn){
   echo "Error : Unable to open database\n";
  } 


$a=$_GET['a'];

$ar=[];
$sql="select * from word where word like '%{$a}%'";
$rs=pg_query($conn,$sql);
while ($row=pg_fetch_assoc($rs)) {
    $ar[]=$row;
}
if(empty($ar)){
    $s="select * from word order by id desc";
$ret = pg_query($conn, $s);
if($rsf = pg_fetch_assoc($ret)){
  $id=$rsf['id']+1;
   
}else{
   $id=1;
}
$t=time();
    $si="insert into word(id,word,total,untimavisita) values('$id','$a',1,'$t')";
    
    $rsi=pg_query($conn,$si);
    echo 1;
}else{
    $at='';
    foreach ($ar as $key => $v) {
        $ti=$v['total']+1;
         $su="update word set total=$ti where id ={$v['id']}";
         pg_query($conn,$su);
         $at.='<li>'.$v['word'].'</li>';
    }
    
    echo $at;
}
 ?>

