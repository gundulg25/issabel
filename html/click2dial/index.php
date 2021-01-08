<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

        $msg = '';
 if (!empty( $_REQUEST['ext'])   && !empty( $_REQUEST['to']  ) )
{
        $num = $_REQUEST['to'];
        $ext = $_REQUEST['ext'];
        // $num = preg_replace( "/^\+7/", "8", $num );
        // $num = preg_replace( "/\D/", "", $num );
 
        if ( ! empty( $num ) )
        {
                $msg .= "Dialing $num\r\n";
                $timeout = 10;
                $asterisk_ip = "127.0.0.1";
                $socket = fsockopen($asterisk_ip,"5038", $errno, $errstr, $timeout);
                fputs($socket, "Action: Login\r\n");
                fputs($socket, "UserName: admin\r\n");
                fputs($socket, "Secret: irfan08041982\r\n\r\n");
                $wrets=fgets($socket,128);
                $msg .=  $wrets;
                fputs($socket, "Action: Originate\r\n" );
                fputs($socket, "Channel: SIP/$ext\r\n" );
                fputs($socket, "Context: from-internal\r\n" ); 
                // fputs($socket, "Application: Call\r\n" );
                fputs($socket, "Exten: $num\r\n" );
                fputs($socket, "Priority: 1\r\n" );
                fputs($socket, "Async: yes\r\n" );
                fputs($socket, "WaitTime: 30\r\n" );
                fputs($socket, "Callerid: Web Call Number\r\n\r\n" );
                // fputs($socket, "Action: Logoff\r\n\r\n");
                $wrets=fgets($socket,128);
                fputs($socket, "Action: Logoff\r\n\r\n");
                fclose($socket);

                 $msg .=  $wrets;
        }
        else
        {
                 $msg .=  "Unable to determine number from (" . $_REQUEST['ext'] . ")\r\n";
        }

        echo $msg;

}
else
{?>
        Please enter a number to dial.
<?php }?>