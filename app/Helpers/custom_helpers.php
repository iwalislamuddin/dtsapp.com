
<?php

function trans(string $str, array $param = null)
{
    if ($param) {
        return lang('app.' . $str, $param);
    } else {
        return lang('app.' . $str);
    }
}


?>