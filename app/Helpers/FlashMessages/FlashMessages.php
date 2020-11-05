<?php


namespace App\Helpers\FlashMessages;



/**
 * @method static FlashMessages success(string $message)
 * @method static FlashMessages warning(string $message)
 * @method static FlashMessages info(string $message)
 * @method static FlashMessages primary(string $message)
 * @method static FlashMessages error(string $message)
 *
 *
 */

class FlashMessages
{

    public $messages;


    /**
     * @param string $message
     * @param string $level
     */

    public static function message(string $message, string $level = "info")
    {
        $message = ['level' => $level, 'message' => $message];
        session()->flash('flashMessage', $message);
    }

    public static function __callStatic($method , $message){

        $allowed_method = [
            'success',
            'warning',
            'info',
            'primary',
            'error',
        ];
        if(in_array($method , $allowed_method)){
            self::message($message[0] , $method );
            return;
        }

        throw new NotFoundFlashMessageMethodException('the ' . $method . ' not Found in FlashMessage');
    }


}
