<?php

class StudentService
{
    public static function getAllStudents()
    {
        $url = API_BASE_URL . '/students';
        $response = file_get_contents($url);

        return json_decode($response, true);
    }


    public static function addStudent($prenom, $age)
{
    $url = API_BASE_URL . '/students';

    $data = [
        'prenom' => $prenom, // L'API attend 'name'
        'age' => $age
    ];

    $options = [
        'http' => [
            'header'  => "Content-Type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data)
        ]
    ];

    $context = stream_context_create($options);

    file_get_contents($url, false, $context);
}

}

