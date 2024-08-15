<?php
/**
 * Plugin Name:       Gravity Forms to Klaviyo
 * Description:       Gravity forms integration into Klaviyo
 * Version:           1.0.0
 * Author: Sib
 * Author URI: https://innovisionlab.com
 * Text Domain:       ilab
 */

include('vendor/autoload.php');
use KlaviyoAPI\KlaviyoAPI;

class GravityFormsToKlaviyo
{
    private $list_id = "UbFymG";    # FB wealth leads
    private $klaviyo_api_key;

    function __construct() 
    {
        $this->klaviyo_api_key = get_option("klaviyo_api_key");

        add_action( 'gform_entry_post_save', [$this, 'ilab_entry_post_save_handler'], 10, 2 );   
    }

    function ilab_entry_post_save_handler($entry, $form)
    {
        if ($form['id'] === 1)
        {
            $vehicle_type       = $entry['3'];
            $llc_name           = $entry['1'];
            $first_name         = $entry['6.3'];
            $last_name          = $entry['6.6'];
            $email              = $entry['2'];
            $phone              = $entry['7'];
            $mailing_address    = $entry['8'];

            //   '{"data":{"type":"profile","attributes":{"properties":{"newKey":"New Value"}},"meta":{"patch_properties":{"append":{"newKey":"New Value"},"unappend":{"newKey":"New Value"}}}}}',
            $body = [
                'data' => [
                    'type' => 'profile',
                        'attributes' => [
                            "title" => "Regional Manager",
                            "first_name" => sanitize_text_field($first_name),
                            "last_name" => sanitize_text_field($last_name),
                            "email" => sanitize_text_field($email),
                            "phone_number" => "+1234567890"
                    ]
                ]
            ];            

            p_r($body);

            $klaviyo = new KlaviyoAPI(
                $this->klaviyo_api_key, 
                $num_retries = 3, 
                $wait_seconds = 3,
                $guzzle_options = [],
                $user_agent_suffix = "/1dollarmontana"
            );
                
            # Create / Update Profile;
            try 
            {
                $response = $klaviyo->Profiles->createOrUpdateProfile($body);
            } 
            catch (Exception $exception) 
            {
                echo $exception;
            }
            

            //$response = $klaviyo->Lists->createListRelationships($this->list_id, $data);
        
            /*
            //$data = json_encode($data);
        
            $curl = curl_init();
        
            curl_setopt_array($curl, [
              CURLOPT_URL => "https://a.klaviyo.com/api/v2/list/" . $this->list_id . "/members?api_key=" . $this->klaviyo_api_key,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => $data,
              CURLOPT_HTTPHEADER => [
                "Accept: application/json",
                "Content-Type: application/json"
              ],
            ]);
        
            $response = curl_exec($curl);
            $err = curl_error($curl);
            */

            p_r($response);

            exit;
        }
    }
}

new GravityFormsToKlaviyo();

if (!function_exists('p_r')){function p_r($s){echo "<pre>";print_r($s);echo "</pre>";}}
if (!function_exists('write_log')){ function write_log ( $log )  { if ( is_array( $log ) || is_object( $log ) ) { error_log( print_r( $log, true ) ); } else { error_log( $log ); }}}