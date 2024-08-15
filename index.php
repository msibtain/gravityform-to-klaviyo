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

    function keepOnlyNumbers($input) 
    {
        return preg_replace('/\D/', '', $input);
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

            $body = [
                'data' => [
                    'type' => 'profile',
                        'attributes' => [
                            "first_name" => sanitize_text_field($first_name),
                            "last_name" => sanitize_text_field($last_name),
                            "email" => sanitize_text_field($email),
                            "phone_number" => "+1" . $this->keepOnlyNumbers( $phone )
                    ]
                ]
            ];

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
                //die( $exception );
            }
            
            # Add Profile to the List;
            if (isset($response['data']['id']))
            {
                $body = [
                    'data' => [
                        [
                            'type' => 'profile',
                            'id' => $response['data']['id']
                        ]
                    ]
                ];

                
                try 
                {
                    $response = $klaviyo->Lists->createListRelationships($this->list_id, $body);
                } 
                catch (Exception $exception) 
                {
                    //die( $exception );
                }
                
            }
        }
    }
}

new GravityFormsToKlaviyo();

if (!function_exists('p_r')){function p_r($s){echo "<pre>";print_r($s);echo "</pre>";}}
if (!function_exists('write_log')){ function write_log ( $log )  { if ( is_array( $log ) || is_object( $log ) ) { error_log( print_r( $log, true ) ); } else { error_log( $log ); }}}