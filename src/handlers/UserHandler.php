<?php
namespace src\handlers;

use src\models\User;

class UserHandler {
    
    public static function checkLogin() {
        if( !empty($_SESSION['token']) && isset($_SESSION['token']) ) {
            $token = $_SESSION['token'];

            $data = User::select()->where('user_token', $token)->one();

            if( empty($data) ) {
                $data = array();
            }

            if( count( $data ) > 0 ) {

                $loggedUser = new User();

                $loggedUser->id = $data['id'];
                $loggedUser->name = $data['user_name'];
                $loggedUser->userNumber = $data['user_number'];
                $loggedUser->avatar = $data['user_avatar'];

                return $loggedUser;
            }
        }
        
        return false;
    }

    public static function verifyLogin( $number, $pass ) {

        $user = User::select()
            ->where( 'user_number', $number )
        ->one();

        if( $user ) {
            if( password_verify( $pass, $user['user_pass'] ) ) {
                $token = md5( time().rand( 0, 9999 ).time() );

                User::update()
                    ->set( 'user_token', $token )
                    ->where( 'user_number', $number )
                ->execute();

                return $token;
            }
        }

        return false;
    }

    public static function userExists( $userNumber ) {
        $user = User::select()->where('user_number', $userNumber)->one();

        return $user ? true : false;
    }

    public static function addUser( $name, $userNumber, $pass ) {
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $token = md5( time().rand( 0, 9999 ).time() );

        User::insert([
            'user_name' => $name,
            'user_number' => $userNumber,
            'user_pass' => $hash,
            'user_token' => $token
        ])->execute();

        return $token; 
    }

}