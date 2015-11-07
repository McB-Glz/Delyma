<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//*** Welcome

// $app->get('/', ['as'   => 'welcome', function() use ($app)
// {
//     return view('landing');
// }]);

//*** End Welcome

$app->get('/', function () {
    return view('home');
});


$app->post('send-email', function () use ($app) {

  // if($app->request->Ajax()){

    $response = ['status' => 'error'];
    $response['message'] = 'No ha sido posible enviar tu mensaje, por favor intente de nuevo más tarde';

    $this->validate($app->request, [
        'name'       => 'required',
        'empresa'    => 'required',
        'tel'        => 'required|numeric|digits_between:8,13',
        'email'      => 'required|email',
        'asunto'     => 'required',
        'message'    => 'required',
    ]);

    $data['name'] = $app->request->input('name');
    $data['empresa'] = $app->request->input('empresa');
    $data['tel'] = $app->request->input('tel');
    $data['email'] = $app->request->input('email');
    $data['asunto'] = $app->request->input('asunto');
    $data['message'] = $app->request->input('message');
    $data['subject'] = 'ZYX.com | '.$data['asunto'].' | '.$data['email'];

    $data['message'] = '
DATOS DE CONTACTO

Nombre:
'.$data['name'].'

Empresa:
'.$data['empresa'].'

Teléfono:
'.$data['tel'].'

Email:
'.$data['email'].'

Asunto:
'.$data['asunto'].'

Mensaje:
'.$data['message'].'
    ';

    $mail = Mail::raw($data['message'], function ($message) use ($data) {
      $message->subject($data['subject']);
      //$message->from('no-reply@zyx.com', 'ZYX');
      $message->to(env('MAIL_TO'));
      $message->replyTo($data['email'], $data['name']);
    });

    if ($mail) {
        $response = ['status' => 'ok'];
        $response['message'] = '¡Gracias! Tu mensaje ha sido enviado correctamente.';
    }

    echo json_encode($response);
    die();
  // }

});