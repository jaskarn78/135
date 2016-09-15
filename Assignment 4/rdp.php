<html>
<body>
<?php 
if(!function_exists("exp")){
  function expr(){
    term();
    while($token == "+" || $token == "-"){
        if($token == "+"){
            match("+");
            term();
        }
        if($token == "-"){
            match("-");
            term();
        }
    }
  }//end exp
}

if(!function_exists("term")){
  function term(){
    factor();
    while($token == "*" || $token == "/"){
        if($token == "*"){
            match("*");
            factor();
        }
        if($token == "/"){
            match("/");
            factor();
        }
    }
  }//end term
}

if(!function_exists("factor")){
  function factor(){
    if($token == "("){
        match("(");
        exp();
        if($token == ")")
            match(")");
    }
    else if($token == 0||1||2||3){
         if($token == 0)
            match(0);
         if($token == 1)
            match(1);
         if($token == 2)
            match(2);
         if($token == 3)
            match(3);
    }
    else
        error();
  }//end factor
}

if(!function_exists("match")){
  function match($expected){
    if($token == $expected)
        nextToken();
    else
        error();
  }//end match
}

if(!function_exists("next_Token")){
  function nextToken(){
    $next++;
    $token = $tokenStr[$next];
    if($token == "$");
        legal();
  }
}

if(!function_exists("error")){
  function error(){
    echo "Illegal token stream, try again";
  }
}

if(!function_exists("legal")){
  function legal(){
    echo "Legal token stream, congrats!";
  }
}

if(!function_exists('str_split')) {
  function str_split($string, $split_length = 1) {
    $array = explode("\r\n", chunk_split($string, $split_length));
    array_pop($array);
    return $array;
  }
}

$tokenStr = str_split($input);
$next = 0;
$token = $tokenStr[0];
exp();
?>
</body>
</html>