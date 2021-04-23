<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Pool;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Response;

class DealController extends Controller
{
    public function submit(Request $req, Response $response, Client $client)
    {
$tok = $req->input('access_token');
$id = $req->input('id');
$dn = $req->input('Deal_Name');
$da = $req->input('Amount');
$cn = $req->input('Contact_Name');
        //dd($req->input('Contact_Name'));
        $data = array(
            
                'data' => array(

                    [
                        'Owner' => [
                            'name' => 'maxim.sikach',
                            'id' => '4863854000000306001',
                            'email' => 'maxim.sikach@gmail.com'
                        ],
                        'Description' => null,
                        '$currency_symbol' => '$',
                        'Campaign_Source' => null,
                        '$review_process' =>
                        [
                            'approve' => false,
                            'reject' => false,
                            'resubmit' => false
                        ],
                        '$followers' => null,
                        'Closing_Date' => '2021-04-22',
                        'Last_Activity_Time' => '2021-04-20T12=>33=>15-07=>00',
                        'Modified_By' =>
                        [
                            'name' => 'maxim.sikach',
                            'id' => '4863854000000306001',
                            'email' => 'maxim.sikach@gmail.com'
                        ],
                        '$review' => null,
                        'Lead_Conversion_Time' => null,
                        '$state' => 'save',
                        '$process_flow' => false,
                        'Deal_Name' => $dn,
                        'Expected_Revenue' => null,
                        'Overall_Sales_Duration' => 2,
                        'Stage' => 'Closed Lost',
                        'Account_Name' => [
                            'name' => 'MAXI (Sample)',
                            'id' => '4863854000000329097'
                        ],
                        'id' => $id,
                        '$approved' => true,
                        '$approval' => [
                            'delegate' => false,
                            'approve' => false,
                            'reject' => false,
                            'resubmit' => false
                        ],
                        'Modified_Time' => '2021-04-21T12=>33=>14-07=>00',
                        'Created_Time' => '2021-04-21T12=>33=>14-07=>00',
                        'Amount' => $da,
                        '$followed' => false,
                        'Probability' => 0,
                        'Next_Step' => null,
                        '$editable' => true,
                        '$orchestration' => false,
                        'Contact_Name' => [
                            'name' => $cn,
                            'id' => '4863854000000329193'
                        ],
                        'Sales_Cycle_Duration' => 2,
                        'Type' => 'Existing Business',
                        '$in_merge' => false,
                        'Lead_Source' => null,
                        'Created_By' => [
                            'name' => 'maxim.sikach',
                            'id' => '4863854000000306001',
                            'email' => 'maxim.sikach@gmail.com'
                        ],
                        'Tag' => [],
                        '$approval_state' => 'approved'
                    ]
                )
            
        );
        $data2 = "123";
        $data1 = json_encode($data); //dd($data1);
        $token = $tok;
        $client = new Client(['base_uri' => 'https://www.zohoapis.com']);

        $response = $client->request(
            'POST',
            'crm/v2/Deals',

            [
                'headers' =>
                [
                    'Accept'        => 'application/json',
                    'Authorization' => 'Bearer ' . $token,
                    "Content-Type"  => "application/json",
                ],
                'body' => $data1,
            ]

        )->getBody()->getContents();

        dd($response);
    }
}
