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


// $app->get('/send', function () {
//     return view('send');
// });


$app->post('send-email', function () use ($app) {

  // if($app->request->Ajax()){

    $response = ['status' => 'error'];
    $response['message'] = 'No ha sido posible enviar tu mensaje, por favor intente de nuevo más tarde';

    $this->validate($app->request, [
        'name'       => 'required',
        'email'      => 'required|email'
    ]);

    $data['name'] = $app->request->input('name');
    $data['email'] = $app->request->input('email');
    $data['message'] = $app->request->input('message');
    $data['subject'] = 'Contactp Web grupodelyma.com | '.$data['email'];

    $data['message'] = '
DATOS DE CONTACTO

Nombre Completo:
'.$data['name'].'

Email:
'.$data['email'].'

Mensaje:
'.$data['message'].'
    ';

    $mail = Mail::raw($data['message'], function ($message) use ($data) {
      $message->subject($data['subject']);
      $message->from('no-reply@grupodelyma.com', 'Grupo DELYMA');
      //$message->to(env('MAIL_TO'));
      $message->to('contacto@grupodelyma.com');
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